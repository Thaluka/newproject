<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\complains;
use App\user;

class ManagerViewController extends Controller
{
	  public function complaintview()
    {
        $complains = DB::table('complains')
        
        ->select('complains.*')
        // ->where ('role', '=','technician')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('manager.complaint_details')->with('complains',$complains);
    }





     public function customerview()
    {
        $users = DB::table('users')
        
        ->select('users.*')
        ->where ('role', '=','customer')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
        //return $customers;
        return view('manager.customer_details')->with('users',$users);
    }

    public function operatorview()
    {
        $users = DB::table('users')
        
        ->select('users.*')
        ->where ('role', '=','operator')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('manager.operator_details')->with('users',$users);
    }



     public function productsview()
    {
        $products = DB::table('products')
        
        ->select('products.*')

        ->orderBy('products.created_at','desc')
        ->paginate(10);
        
        return view('manager.product_details')->with('products',$products);
    }

     public function supervisorview()
    {
         $users = DB::table('users')
        
        ->select('users.*')
        ->where ('role', '=','supervisor')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
    
        return view('manager.supervisor_details')->with('users',$users);
    }


     public function technicianview()
    {
        $users = DB::table('users')
        
        ->select('users.*')
        ->where ('role', '=','technician')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('manager.techniciansdetails')->with('users',$users);
    }


     public function userview()
    {

     $users = DB::table('users')
        
        ->select('users.*')
        ->where ('role', '=','technician')
        ->orderBy('users.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('manager.manager')->with('users',$users);
    }

    


}
