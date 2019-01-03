<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Type;



use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;



class CustRegOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
        ->select('users.*')
        ->where ('role', '=','customer')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
        return view('operator.customerview')->with('users',$users);
    
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();

        return view('operator.custreg_operator')->with('types',$types);


       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


          $data=$request->all();

         // $this->validate($request,[
         //    'fname' => 'required|string|max:255',
         //    'lname' => 'required|string|max:255',
         //    'email' => 'required|string|email|max:255|unique:users',
         //    'nic' => 'required|string|max:10|unique:users',
         //    'mobile' => 'required|string|max:10',
         //    'workplace'=>'required|string|max:255',
         //    'address' => 'required|string|max:255',
           
        
         // ]);
        //$useremail = $request->input('email');
        //$password = $request->input('nid');// password is form field
       // $hashed = Hash::make($password);
        $user = new user;
        $user->fname = $data['fname'];
        $user->lname = $data['lname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['nic']);
        $user->nic = $data['nic'];
        $user->mobile = $data['mobile'];
        $user->workplace =$data['company'];
        $user->address =  $data['address'];
        $user->role = 'customer';
        $user->save();

        
        return redirect('/custreg_operator')->with ('flash_message_success','Submit successfully');
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
