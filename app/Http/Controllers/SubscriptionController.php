<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();

        $viewName = (auth()->user() && auth()->user()->isAdmin()) ? 'admin' : 'subs';

        if ($viewName === 'admin') {
            return view('admin', ['subscriptions' => $subscriptions]);
        } else {
            return view('subs', ['subscriptions' => $subscriptions]);
        }
    }

    // SubscriptionController.php
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric|min:0',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/images/sub-images', $imageName);
        } else {
            $imageName = null;
        }

        Subscription::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $imageName ? 'images/sub-images/' . $imageName : null,
            'price' => $data['price']
        ]);

        return redirect()->route('admin')->with('success', 'Subscription added successfully!');
    }

}
