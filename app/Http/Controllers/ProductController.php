<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;

use App\Product;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
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
         $products = DB::table('products')
             ->join('types', 'products.type_id', '=', 'types.type_id')
             ->select('products.*', 'types.type')
             ->orderBy('updated_at','desc')
             ->paginate(4);
         return view('addproducts.products.index')->with('products',$products);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();
        return view('addproducts.products.create')->with('types',$types);
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
            'type' => 'required',
            'product_name' => 'required|unique:products',
            'product_code' => 'required|unique:products'
         ]);

         $product = new product;
         $product->type_id=$request->input('type');
         $product->product_name=$request->input('product_name');
         $product->product_code=$request->input('product_code');
         $product->save();
         return redirect('/products')->with ('flash_message_success','Submit successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')
            ->join('types', 'products.type_id', '=', 'types.type_id')
            ->select('products.*', 'types.type')
            ->where('products.id','=',  $id)
            ->first();

         $types= Type::orderBy('created_at','type_id')->get();
    
        return view('addproducts.products.show')->with('product',$product)->with('types',$types);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $product = DB::table('products')
            ->join('types', 'products.type_id', '=', 'types.type_id')
            ->select('products.*', 'types.type')
            ->where('products.id','=',  $id)
            ->first();

         $types= Type::orderBy('created_at','type_id')->get();
    
        return view('addproducts.products.edit')->with('product',$product)->with('types',$types);
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
        $this->validate($request,[
            'type' => 'required',
            'product_name' => 'required',
            'product_code' => 'required'
         ]);

         $product =  product :: find($id);
         $product->type_id=$request->input('type');
         $product->product_name=$request->input('product_name');
         $product->product_code=$request->input('product_code');
         $product->save();
         return redirect('/products')->with ('flash_message_success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product :: find($id);
        $product->delete();
        return redirect('/products')->with ('flash_message_success','Delete successfully');
    }
}
