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


class CustomerestimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_email = Auth::user()->id;
        //return $user_email;
		 
        $complains=DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('complains.status','!=','pending')
        ->where('user_id','=', $user_email)
        ->orderBy('complains.updated_at','desc')
        ->paginate(5);

        

        return view('estimations.customer.index')->with('complains',$complains);
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
        $complain=DB::table('complains')
        ->select('complains.id','complains.status')
        ->where('complains.id','=',$id)
        ->first();

        $estimations=DB::table('estimations')
        ->join('parts','estimations.type_id','=','parts.type_id')
        ->select('estimations.*','parts.product_quantity')
        ->where('estimations.complain_id','=',$id)
        ->get();

        //return $estimations;



        $total=0;
            foreach($estimations as $estimation){

                $total+= $estimation->part_price * $estimation->quantity;
            }

        return view('estimations.customer.edit')->with('estimations',$estimations)
         ->with('total',$total)->with('complain', $complain);
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
        $complain->status="Processing";
        $complain->save();

        return redirect('/customerestimationview')->with('flash_message_success','Submit successfully');
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
