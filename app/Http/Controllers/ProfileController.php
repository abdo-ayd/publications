<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();
        if ($user->profile == null) {
            $profile = Profile::create([
                'age' => 1,
                'user_id' => $id,
                'city' => 'input_city',
                'gender' => 'input_gender',
                'job' => 'input_job',
                'bio' => 'input_bio_haer'

            ]);
            return view('users.profile')->with('user',$user);
        }else{
        return view('users.profile')->with('user',$user);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $profile = Profile::find($user_id);
        $user = User::all();
        ;

        return view('users.showProfile')->with('profile',$profile)->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $id)
    {
        $profile = Profile::find($id);
        $user = Auth::user();
        return view('users.editProfile')->with('profile',$profile)->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);

        $this->validate($request,[
            'age' => 'required',
            'city' =>  'required',
            'gender' => 'required',
            'job' => 'required',
            'bio' => 'required'
        ]);
        $user = Auth::user();
        $user->name;
        $user->profile->id;
        $user->profile->age = $request->age;
        $user->profile->city = $request->city;
        $user->profile->gender = $request->gender;
        $user->profile->job = $request->job;
        $user->profile->bio = $request->bio;
        $user->profile->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
