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

use App\Estimation;

use App\Part;

use App\Technician;

use App\User;

class EstimationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useremail= Auth::user()->email;

        $complain_id = DB::table('complains')
        ->select('complains.id')
        ->where('status','=', 'Assigned')
        ->where('technician_email','=',$useremail)
        ->pluck('complains.id')
        ->first();

        //return $complain_id;

        
       
        $estimations = DB::table('estimations')
        ->select('estimations.*')
        ->where('estimations.complain_id','=',$complain_id)
        ->get();

        // return $estimations;

       return view('estimations.technician.estimation')->with('estimations',$estimations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $useremail= Auth::user()->email;

        $complain = DB::table('complains')
        ->select('complains.*')
        ->where('status','=', 'Assigned')
        ->where('technician_email','=',$useremail)
        ->first();

        $typeid = DB::table('complains')
        ->select('complains.type_id')
        ->where('status','=', 'Assigned')
        ->where('technician_email','=',$useremail)
        ->pluck('complains.type_id')
        ->first();

        $parts = DB::table('parts')
        ->join('types', 'parts.type_id', '=', 'types.type_id')
        ->select('parts.*', 'types.type')
        ->where('parts.type_id', '=', $typeid)
        ->orderBy('updated_at','desc')
        ->get();
      //return $parts;
        return view('estimations.technician.estimationview')->with('parts',$parts)->with('complain',$complain);
        


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
        // $id= $request->('id_complain');

        // $complain = estimation::find($id);
        // $complain->status = 'sending';
        // $complain->save();
        
         for ( $i=0; $i<sizeof($request->quantity); $i++) {
            if ($request->quantity[$i]) {
                $estimation = new estimation;
                $estimation->type_id = $request->typeid[$i];
                $estimation->part_id =  $request->partcode[$i];
                $estimation->part_name =  $request->partname[$i];
                $estimation->part_price =  $request->productprice[$i];
                $estimation->quantity =  $request->quantity[$i];
                $estimation->complain_id =  $request->complainid[$i];
                $estimation->technician_email =  $request->technicianemail[$i];
                $estimation->save();
            }
         }

         return redirect('/estimationview')->with('flash_message_success','Submit successfully');
        
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
        $estimation = estimation :: find($id)->first();
        return view('estimations.technician.estimationedit')->with('estimation',$estimation);
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
        $estimation = estimation :: find($id);
        $estimation->delete();
        return redirect('/estimationview')->with ('flash_message_success','Delete successfully');
    }
}
