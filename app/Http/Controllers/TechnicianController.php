<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

use App\User;

use App\Technician;

use Illuminate\Support\Facades\Hash;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $technicians = DB::table('technicians')
        ->join('users', 'technicians.email', '=', 'users.email')
        ->select('technicians.*', 'users.*')
        ->orderBy('updated_at','desc')
        ->paginate(4);
        return view('technician.index')->with('types',$types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
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
        //$useremail = $request->input('email');
        $password = $request->input('nid');// password is form field
        $hashed = Hash::make($password);
        $user = new user;
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = $hashed;
        $user->nic = $request->input('nic');
        $user->mobile = $request->input('mobile');
        $user->workplace = 'asparai';
        $user->address =  $request->input('address');
        $user->role = 'technician';
        $user->save();

        $technician = new technician;
        $technician->email = $request->input('email');
        $technician->birth = $request->input('birth');
        $technician->type_id = $request->input('type');
        $technician->bank_act = $request->input('bank_act');
        $technician->save();
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
