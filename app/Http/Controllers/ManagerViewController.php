<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\complains;
use App\user;
use App\Type;
class ManagerViewController extends Controller
{
	  public function complaintview()
    {
        $types= Type::orderBy('created_at','type_id')->get();
        $complains = DB::table('complains')
        
        ->join('types','complains.type_id','=','types.type_id')
        ->select('complains.*','types.type')
        // ->where ('role', '=','technician')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        //return view('complains.index')->with('complains',$complains);
        //return $users;
        return view('manager.complaint_details')->with('complains',$complains)->with('types',$types);
    }

    public function typecomplaintview(Request $request){
        $types= Type::orderBy('created_at','type_id')->get();

        $typeid=$request->input('typeid');

         $types= Type::orderBy('created_at','type_id')->get();
        $complains = DB::table('complains')
        
        ->join('types','complains.type_id','=','types.type_id')
        ->select('complains.*','types.type')
        ->where('complains.type_id','=',$typeid)
        // ->where ('role', '=','technician')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);

        return view('manager.complaint_details')->with('complains',$complains)->with('types',$types);

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
        $types= Type::orderBy('created_at','type_id')->get();
        $products = DB::table('products')

        ->join('types','products.type_id','=','types.type_id')
        ->select('products.*','types.type')

        ->orderBy('products.created_at','desc')
        ->paginate(10);
        //return $products;
        
        return view('manager.product_details')->with('products',$products)->with('types',$types);
    }

    public function typeproductview(Request $request){

        $types= Type::orderBy('created_at','type_id')->get();

        $typeid=$request->input('typeid');

        //dd($typeid);

        $products = DB::table('products')
        ->join('types','products.type_id','=','types.type_id')
        ->select('products.*','types.type')
        ->where('products.type_id','=',$typeid)
        ->orderBy('products.created_at','desc')
        ->paginate(10);
        //dd($products);

        return view('manager.product_details')->with('products',$products)->with('types',$types);
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
