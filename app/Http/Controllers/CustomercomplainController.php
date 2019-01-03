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

class CustomercomplainController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $user_id = Auth::user()->id;
        $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('user_id','=', $user_id)
        ->orderBy('complains.created_at','desc')
        ->paginate(5);
        return view('customercomplain.index')->with('complains',$complains);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();
        return view('customercomplain.create')->with('types',$types);
    }


      public function createop()
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
            'type'  => 'required|string|max:6',
            'region'  => 'required|string|max:255'
        
         ]);

        if( $request->hasFile('image'))
         { 
             $this->validate($request,[
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
             ]);
             $cover = $request->file('image');
             $extension =  rand(11111, 99999) . '.' .$cover->getClientOriginalExtension();
             Storage::disk('public')->put($cover->getFilename().'.'.$extension, File::get($cover));
         }
        $complain = new Complain;
        $complain->type_id = $request->input('type');
        $complain->product_name = $request->input('name');
        $complain->message=$request->input('message');
        // $complain->image =$cover->getFilename().'.'.$extension;
        $complain->address = $request->input('address');
        $complain->region = $request->input('region');
        $complain->user_email=Auth::user()->email;
        $complain->user_id=Auth::user()->id;
        $complain->status='pending';
        $complain->remember_token=$request->input('_token');
        $complain->save();

        
        $user = User::Where('role','=','supervisor')->get();

        if(\Notification::send($user, new NewcomplainNotification(Complain::latest('id')->first())))
        {
            return back();
        }

        return redirect('/customercomplain')->with ('flash_message_success','Submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user_id = Auth::user()->id;
        $complain = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type','types.type_id')
        ->where('complains.id','=',  $id)
        ->first();
        return view('customercomplain.show')->with('complain',$complain)->with($user_id);
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
