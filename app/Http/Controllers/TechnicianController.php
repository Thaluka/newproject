<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

use App\User;

use App\Technician;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         $technicians = DB::table('technicians')
        ->join('users', 'technicians.email', '=', 'users.email')
        ->join('types', 'technicians.type_id', '=', 'types.type_id')
        ->select('technicians.*', 'users.*','types.type')
        ->orderBy('technicians.created_at','desc')
        ->paginate(4);

        return view('technician.index')->with('technicians',$technicians);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    // get the product types 
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();
        return view('technician.create')->with('types',$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // store technician details in the db also use validation.
    public function store(Request $request)
    {

         $data=$request->all();

         $this->validate($request,[
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nic' => 'required|string|max:10|unique:users',
            'mobile' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'birth'  => 'required|string|max:10',
            'type'  => 'required|string|max:6',
            'bank_act'  => 'required|string|max:30|unique:technicians'
        
         ]);
      
        // store data in the user table 
        $user = new user;
        $user->fname = $data['fname'];
        $user->lname = $data['lname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['nic']);
        $user->nic = $data['nic'];
        $user->mobile = $data['mobile'];
        $user->workplace = 'asparai';
        $user->address =  $data['address'];
        $user->role = 'technician';
        $user->save();

        // store data in the technician table
        $technician = new technician;
        $technician->email = $data['email'];
        $technician->birth = $data['birth'];
        $technician->type_id = $data['type'];
        $technician->bank_act = $data['bank_act'];
        $technician->save();
        
    
        return redirect('/technicians')->with ('flash_message_success','Submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        //      $technicians = DB::table('technicians')
        //      ->join('users', 'technicians.email', '=', 'users.email')
        //      ->join('types', 'technicians.type_id', '=', 'types.type_id')
        //      ->select('technicians.*', 'users.*','types.type')
        //      ->where('users.id','=',  $id)
        //      ->first();
             
        //  $types= Type::orderBy('created_at','type_id')->get();
        // return view('technician.show')->with('technician',$technicians)->with('types',$types);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


             $technicians = DB::table('technicians')
             ->join('users', 'technicians.email', '=', 'users.email')
             ->join('types', 'technicians.type_id', '=', 'types.type_id')
             ->select('technicians.*', 'users.*','types.type')
             ->where('users.id','=',  $id)
             ->first();


              

         $types= Type::orderBy('created_at','type_id')->get();
    
        return view('technician.edit')->with('technician',$technicians)->with('types',$types);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $techemail=$request->input('email');
        
        $userid=DB::table('users')
        ->select('users.id')
        ->where('users.email','=',$techemail)
        ->pluck('users.id')
        ->first();
        
        $user=user::find($userid);
        $user->fname=$request->input('fname');
        $user->lname=$request->input('lname');
        $user->mobile=$request->input('mobile');
        $user->address=$request->input('address');
        $user->save();

      
        $technician = technician :: find($id);
        $technician->bank_act = $request->input('bank_act');
        $technician->save();

        

        return redirect('/technicians')->with ('flash_message_success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
    }



}
