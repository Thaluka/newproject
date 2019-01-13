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

     $user_id = Auth::user()->email;
        
        $PurchaseProduct=DB::table('purchase_products')
        ->join('types', 'purchase_products.type_id', '=', 'types.type_id')
        ->select('purchase_products.*', 'types.type')
        ->where('email','=', $user_id)
        ->paginate(5);
        //->get();
    
         return view('customer.viewproducts')->with('PurchaseProducts',$PurchaseProduct);
    }

}
