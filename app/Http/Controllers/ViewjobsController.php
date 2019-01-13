<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Notifications\NewcomplainNotification;

use session;

use App\Complain;

use App\Product;

use App\Type;

use App\Technician;

use App\User;

class ViewjobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $user_email = Auth::user()->email;
            $complain = DB::table('complains')
       // ->join('technicians','complains.technician_email', '=','technicians.email')
            ->join('types', 'complains.type_id', '=', 'types.type_id')
            ->select('complains.*', 'types.type')
           ->where('status','=','Processing')
           ->where('technician_email','=',$user_email)
           ->first();
       // return $complains;
       
       return view('technicianjobs.viewprocessingjobs')->with('complain',$complain);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user_email = Auth::user()->email;
         $complains = DB::table('complains')
       // ->join('technicians','complains.technician_email', '=','technicians.email')
        ->select('complains.*')
        ->where('status','=','Hold')
        ->where('technician_email','=',$user_email)
        ->get();
      // return $complains;
       
       return view('technicianjobs.viewholdjobs')->with('complains',$complains);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $complain = complain::find($id);
        $complain->status="Completed";
        $complain->save();

        $technicianemail = DB::table('complains')
        ->join('technicians','complains.technician_email','=','technicians.email')
        ->select('technicians.email')
        ->pluck('technicians.email')
        ->first();

        $technician = technician::find($technicianemail);
        $technician->tstatus="available";
        $technician->save();

        return view('technicianjobs.index');
        
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
