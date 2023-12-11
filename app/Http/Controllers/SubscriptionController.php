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

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload image and get the path
        $imagePath = $request->file('image')->store('images', 'public');

        // Create a new subscription record
        Subscription::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('admin')->with('success', 'Subscription added successfully!');
    }

}

