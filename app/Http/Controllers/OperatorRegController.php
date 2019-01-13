<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\staffuser;



use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class OperatorRegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.operator_reg');
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
         $data=$request->all();

         $this->validate($request,[
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'nic' => 'required|string|max:10|unique:users',
            'mobile' => 'required|string|max:10',
            'address' => 'required|string|max:255',
            'birth'  => 'required|string|max:10',
            // 'type'  => 'required|string|max:6',
            'bank_act'  => 'required|string|max:30|unique:technicians'
        
         ]);
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
        $user->workplace = 'asparai';
        $user->address =  $data['address'];
        $user->role = 'operator';
        $user->save();

        $technician = new staffuser;
        $technician->email = $data['email'];
        $technician->birth = $data['birth'];
        $technician->bank_act = $data['bank_act'];
        $technician->save();

        return redirect('/viewoperator')->with ('flash_message_success','Submit successfully');
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
