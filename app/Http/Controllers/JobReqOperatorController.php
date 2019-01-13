<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Complain;

use App\Product;

use App\Type;

use App\Technician;

use App\User;

class JobReqOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $complains = DB::table('complains')
        
        ->select('complains.*')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('operator.complaintview')->with('complains',$complains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();

        return view('operator.jobreq_operator')->with('types',$types);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         $this->validate($request,[
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'region'  => 'required|string|max:255'
           ]);
       


        $complain = new Complain;
        $complain->type_id = $request->input('type');
        $complain->product_name = $request->input('name');
        //$complain->title= $request->input('title');
        $complain->message=$request->input('message');
        // $complain->image =$cover->getFilename().'.'.$extension;
        $complain->address = $request->input('address');
        $complain->region = $request->input('region');
        // $complain->user_email=Auth::user()->email;
        $complain->user_email = $request->input('email');
        $complain->user_id=Auth::user()->id;
        $complain->status='Pending';
        $complain->remember_token=$request->input('_token');
        $complain->save();


        return redirect('/jobreq_operator')->with ('flash_message_success','Submit successfully');
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
