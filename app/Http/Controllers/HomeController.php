<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\User;
use Auth;
use Image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showProfile()
    {
        return view('profile', array('user'=>Auth::user()));
    }
    public function update_avatar(Request $request)
    {
        //handels the user uploads the images.
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $img = Image::make($avatar);
            $img->resize(300, 300)->save( public_path('uploads/avatars/' . $filename ) );
            $img->resize(50, 50)->save( public_path('uploads/avatars/thumbs/' . $filename ), 50 );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );
    }
}
