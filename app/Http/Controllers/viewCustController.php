<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

use App\Product;

use App\User;
use Illuminate\Support\Facades\Auth;

use App\PurchaseProduct;

use Illuminate\Support\Facades\DB;

class viewCustController extends Controller
{

   public function custcomplaintview()
   {

    // $PurchaseProduct=DB::table('purchase_products')
    // ->join('types', 'purchase_products.type_id', '=', 'types.type_id')
    // ->select('purchase_products.*','types.type')
    // ->orderBy('updated_at','desc')
    // ->get();
         //>paginate(5);
         //return $purchase_products;



     $user_id = Auth::user()->email;
        // $complains = DB::table('complains')
        $PurchaseProduct=DB::table('purchase_products')
        ->join('types', 'purchase_products.type_id', '=', 'types.type_id')
        ->select('purchase_products.*', 'types.type')
        ->where('email','=', $user_id)
        
        // ->orderBy('complains.created_at','desc')
        ->paginate(5);
        //->get();
        //return $complains;
        // return view('customercomplain.index')->with('complains',$complains);
         return view('customer.viewproducts')->with('PurchaseProducts',$PurchaseProduct);
    }

}
