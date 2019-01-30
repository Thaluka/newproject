<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Complain;

use App\Technician;

use App\User;


class HoldComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','Hold')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewhold')->with('complains',$complains);

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
       // return $id;
             $complain = DB::table('complains')
             ->select('complains.*')
             ->where('complains.id','=',  $id)
             ->first (); 
             

             $myquery = DB::table('complains')
             ->select('technician_email')
             ->where('complains.id','=',  $id)
             ->pluck('complains.technician_email')
             ->first();

             $user = DB::table('users') 
             ->join('technicians','users.email','=','technicians.email')
             ->select('users.*','technicians.*')
             ->where('users.email','=', $myquery)
             ->first();
            return  $user;

              $technician = DB::table('technicians')
             ->join('users', 'technicians.email', '=', 'users.email')
             ->select('technicians.*', 'users.*')
             ->where('technicians.type_id','=', $myquery)
             ->first();


          return view('supervisor.assignhold')->with('complain',$complain)->with('user',$user);

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
        $userEmail=$request->input('technician_email');
       // return Session::get('mycomplain');
        $complain = complain :: find($id);
        $complain->technician_email=$request->input('technician_email');
        $complain->status="Assigned";
        $complain->save();

        $technician = technician :: find($userEmail);
        $technician->tstatus = "Assigned";
        $technician->save();

         $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','Assigned')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewassign')->with('complains',$complains);
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
