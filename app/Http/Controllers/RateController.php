<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Technician;
use App\Rateable;
use App\Rating;
use App\Type;
use App\Complain;


class RateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View
     */
    public function index()
    {
        // Retrieve all the technicians 
        $users = User::where('role','technician')->orderBy('fname', 'asc')->get();
        return view ('Rating.show')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $id = $request->input('id');
         $rate = $request->input('rate');
         $user = User::find($id);
 
         // Check whether the logged user already rated for the technician.
         $check_already_rated = DB::table('ratings')->where('rateable_id', $id)->where('user_id',\Auth::id())->exists();
         
         // If logged user has already rated for the technician, then return the previous view with a message.
         if ( $check_already_rated ) {
             return redirect()->back()->with('flash_message_error','You have already rated.');
         } else {
             $rating = new Rating;
             $rating->rating = $rate;
             $rating->user_id = \Auth::id();
             $user->ratings()->save($rating);

             return redirect()->back();   
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Retrieve the selected technican to rate
        $user = User::find($id);
        return view ('Rating.create')->with('user', $user);
    }

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
        
    }

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
