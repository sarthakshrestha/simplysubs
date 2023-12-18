<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class AdminController extends Controller
{

    public function editSubscription($id)
    {
        $subscription = Subscription::findOrFail($id);

        return view('update', ['subscription' => $subscription]);
    }

    public function updateSubscription(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $subscription = Subscription::findOrFail($id);

        if ($request->hasFile('image')) {
            // Handle file upload and update the image field
            // Example: $path = $request->file('image')->store('images', 'public');
            // $subscription->image = $path;
        }

        $subscription->title = $request->input('title');
        $subscription->description = $request->input('description');
        $subscription->save();

        return redirect()->back()->with('success', 'Subscription updated successfully.');
    }
}