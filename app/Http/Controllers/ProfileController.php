<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile.index');
    }
   
    public function edit(Request $request)
        {
            return view('profile.edit', [
            'user' => $request->user()
            ]);
        }

    public function update(UpdateProfileRequest $request)
	   {
             $request->user()->update(
              $request->all()
             );

            return redirect()->route('profile.edit');
	   }

}




