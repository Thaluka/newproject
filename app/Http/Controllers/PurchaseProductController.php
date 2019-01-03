<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

use App\Product;

use App\PurchaseProduct;

use Illuminate\Support\Facades\DB;


class PurchaseProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $parts = DB::table('purchase_products')
         //     ->join('types', 'purchase_products.type_id', '=', 'types.type_id')
         //     ->select('purchase_products.*', 'types.type')
         //     ->orderBy('updated_at','desc')
         //     ->paginate(4);
            $types= Type::orderBy('created_at','type_id')->get();
            return view('operator.buydetails_products')->with('types',$types);
        // return view('addproducts.product_parts.index')->with('purchase_products',$parts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();
    
        return view('operator.buydetails_products')->with('types',$types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $product = new PurchaseProduct;
         $product->nic=$request->input('nic');

         $product->type_id=$request->input('type');
         $product->product_name=$request->input('product_name');
         $product->purchase_date=$request->input('purchase_date');
         $product->price=$request->input('price');
         $product->warranty=$request->input('warranty');
         $product->save();
         return redirect('/buydetails_products')->with ('flash_message_success','Submit successfully');
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
