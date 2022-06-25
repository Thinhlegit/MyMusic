<?php

namespace App\Http\Controllers;

use App\Models\Mv;
use Illuminate\Http\Request;

class MvController extends Controller
{

    // Show all mv
    public function mv()
    {
        return view('mvs.mv', [
            'mvs' => Mv::latest()->filter(request(['tag', 'search']))->paginate(5),
        ]);
    }
    public function index()
    {
        return view('mv.index', [
            'mvs' => Mv::latest()->filter(request(['tag', 'search']))->paginate(5),
        ]);
    }
    public function userlist(Mv $mv)
    {
        $mvs = Mv::all()->toArray();

        return view('mvs.user', compact('mvs'));

    }
    // audio
    public function audio(Mv $mv)
    {
        $mvs = Mv::all()->toArray();
        return view('mvs.audio', compact('mvs'));

    }
    //Show single
    public function show(Mv $mv)
    {
        return view('mvs.audio', [
            'mv' => $mv,
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('mvs.create');
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
        if ($request->hasFile('video')) {
            $formFields['video'] = $request->file('song')->store('videos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Mv::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully!');

    }

    // Show Edit Form
    public function edit(Mv $mv)
    {
        return view('mv.edit', ['mv' => $mv]);
    }

    // Update Listing Data
    public function update(Request $request, Mv $mv)
    {
        // Make sure logged in user is owner
        if ($mv->user_id != auth()->id()) {
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
        if ($request->hasFile('video')) {
            $formFields['video'] = $request->file('video')->store('videos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    // Delete Listing
    public function destroy(Mv $mv)
    {
        // Make sure logged in user is owner
        if ($mv->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $mv->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    // Manage Listings
    public function manage()
    {
        return view('mvs.manage', ['mvs' => auth()->user()->mvs()->get()]);
    }
}
