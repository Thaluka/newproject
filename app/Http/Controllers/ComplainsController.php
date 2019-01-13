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

use App\Technician;

use App\User;

class ComplainsController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->product = new Product();
    }

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
        ->where('status','=','Pending')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('complains.index')->with('complains',$complains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();

        
        return view('complains.create')->with('types',$types);
       
    }


    // public function createop()
    // {

    //     $types= Type::orderBy('created_at','type_id')->get();
    //     return view('operator.jobreq_operator')->with('types',$types);
       
    // }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$this->validate($request,[
           
        ]);*/

        if( $request->hasFile('image'))
        { 
        $cover = $request->file('image');
        $extension =  rand(11111, 99999) . '.' .$cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension, File::get($cover));
        }
        $complain = new Complain;
        $complain->type_id = $request->input('type');
        $complain->product_name = $request->input('name');
        //$complain->title= $request->input('title');
        $complain->message=$request->input('message');
        $complain->image =$cover->getFilename().'.'.$extension;
        $complain->address = $request->input('address');
        $complain->region = $request->input('region');
        $complain->user_email=Auth::user()->email;
        $complain->user_id=Auth::user()->id;
        $complain->status='Pending';
        $complain->remember_token=$request->input('_token');
        $complain->save();

        $user = User::Where('role','=','supervisor')->get();

        // $types= Type::orderBy('created_at','type_id')->get();

        if(\Notification::send($user, new NewcomplainNotification(Complain::latest('id')->first())))
        {
            return back();
        }
        return redirect('/complains')->with ('flash_message_success','Submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


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
             ->select('users.*')
             ->where('users.email','=', $myquery)
             ->first();


             return view('complains.show')->with('complain',$complain)->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $complain = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type','types.type_id')
        ->where('complains.id','=',  $id)
        ->first();

        $myquery = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('types.type_id')
        ->where('complains.id','=',  $id)
        ->pluck('types.type_id')
        ->first();

        $technicians = DB::table('technicians')
        ->join('users', 'technicians.email', '=', 'users.email')
        ->select('technicians.*', 'users.*')
         ->where('technicians.tstatus','=','available')
        ->where('technicians.type_id','=', $myquery)
        ->get();

        return view('complains.edit')->with('complain',$complain)->with('technicians',$technicians);
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
        ->orderBy('complains.created_at','desc')
        ->paginate(4);
        return view('complains.index')->with('complains',$complains);
        
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
