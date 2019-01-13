<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Complain;

use App\Estimation;

use App\Part;

use App\User;

use App\Type;


class EstimationapproveController extends Controller
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
         $estimations = DB::table('estimations')
         ->join('complains', 'estimations.complain_id' , '=', 'complains.id' )
         ->join('users','estimations.technician_email' , '=', 'users.email')
         ->select('estimations.complain_id', 'complains.product_name','users.fname','users.lname')
		 ->distinct()
		 ->orderBy('estimations.created_at','desc')
         ->paginate(5);
        
         

         return view('estimations.supervisor.index')->with('estimations',$estimations);
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
          $estimations=DB::table('estimations')
         ->join('parts','estimations.part_id','=','parts.id')
         ->select('estimations.*','parts.product_quantity')
         ->where('estimations.complain_id','=',$id)
         ->get();

         $complain=DB::table('complains')
         ->select('complains.id','complains.status')
         ->where('complains.id','=',  $id)
         ->first();

         $total=0;
         foreach($estimations as $estimation){

            $total+= $estimation->part_price * $estimation->quantity;
         }

         return view('estimations.supervisor.show')->with('estimations',$estimations)
            ->with('complain',$complain)->with('total',$total);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $estimations=DB::table('estimations')
        ->join('parts','estimations.part_id','=','parts.id')
        ->select('estimations.*','parts.product_quantity')
        ->where('estimations.complain_id','=',$id)
         ->get();
        
         $complain=DB::table('complains')
         ->select('complains.id','complains.status')
         ->where('complains.id','=',  $id)
         ->first();

//          return $complain;
         return view('estimations.supervisor.edit')->with('estimations',$estimations)->with('complain',$complain);

        //  return view('supervisor.edit')->with('estimations',$estimations)->with('complains',$complains);
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
        $complain->status="Sending";
        $complain->save();

        for ($i=0; $i<count($request->partid); ++$i){
            $part = Part::find($request->partid[$i]);
            $part->product_quantity -= $request->quantity[$i];
            $part->save();
        }
		
		return redirect('/estimationapprove')->with('flash_message_success','Submit successfully');
        
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
