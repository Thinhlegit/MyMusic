<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function mv()
    {
        return view('listings.videolist', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(50),
        ]);
    }
    // Show all mv

    public function index()
    {

        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(50),
        ]);
    }
    // topic

    // Show all mv

    public function topic()
    {

        return view('listings.topic', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(50),
        ]);
    }
    public function userlist(Listing $listing)
    {
        $listings = Listing::all()->toArray();

        return view('listings.user', compact('listings'));

    }
    // audio
    public function audio(Listing $listing)
    {
        $listings = Listing::all()->toArray();
        return view('listings.audio', compact('listings'));

    }
    //Show single listing
    public function show(Listing $listing)
    {
        return view('listings.audio', [
            'listing' => $listing,
        ]);
    }
//single list
    public function showmv(Listing $listing)
    {
        return view('mvs.mv', [
            'listing' => $listing,
        ]);
    }
    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('song')) {
            $formFields['song'] = $request->file('song')->store('playlist', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');

    }

    // Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update Listing Data
    public function update(Request $request, Listing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        if ($request->hasFile('song')) {
            $formFields['song'] = $request->file('song')->store('playlist', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete Listing
    public function destroy(Listing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage Listings
    public function manage()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
