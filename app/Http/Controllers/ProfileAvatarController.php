<?php

namespace App\Http\Controllers;
use App\User;
use File;
use Image;
use Illuminate\Http\Request;
use Auth;

class ProfileAvatarController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        if ($request->hasFile('avatar')) {//if avatar
            $image = $request->file('avatar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('avatars/' . $filename);
            Image::make($image)->resize(300,300)->save($location);

            User::where('id', Auth::id())->first()->update(['avatar', $filename]);
        }
    }

    //if avatar

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
