<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Notifications\NewcomplainNotification;

use session;

use App\Complain;

use App\Product;

use App\Type;

use App\Part;
use App\Technician;

use App\User;
class EstimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useremail= Auth::user()->email;
        $typeid = DB::table('complains')
       

        ->select('complains.type_id')
        ->where('status','=', 'assign')
        ->where('technician_email','=',$useremail)
        ->pluck('complains.type_id')
        ->first();
        return $typeid ;
        // return view('technician.estimationview')->with('complains',$complains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $useremail= Auth::user()->email;
        $typeid = DB::table('complains')

        // $types= Type::orderBy('created_at','type_id')
       

        ->select('complains.type_id')
        ->where('status','=', 'assign')
        ->where('technician_email','=',$useremail)
        ->pluck('complains.type_id')
        ->first();

        $parts = DB::table('parts')
        ->join('types', 'parts.type_id', '=', 'types.type_id')
        ->select('parts.*', 'types.type')
        ->where('parts.type_id', '=', $typeid)
        ->orderBy('updated_at','desc')
        ->get();

        return view('technician.estimationview')->with('parts',$parts);
        


        // return $parts;
       
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
        //
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
