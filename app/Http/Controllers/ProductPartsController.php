<?php

namespace App\Http\Controllers;

use App\Type;

use App\Product;

use App\Part;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ProductPartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $parts = DB::table('parts')
             ->join('types', 'parts.type_id', '=', 'types.type_id')
             ->select('parts.*', 'types.type')
             ->orderBy('updated_at','desc')
             ->paginate(4);
        return view('addproducts.product_parts.index')->with('parts',$parts);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types= Type::orderBy('created_at','type_id')->get();
        return view('addproducts.product_parts.create')->with('types',$types);
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
            'type' => 'required|unique:types'
        ]);
        
         $product_part = new part;
         $product_part->type_id=$request->input('type');
         $product_part->part_name=$request->input('part_name');
         $product_part->part_code=$request->input('part_code');
         $product_part->product_price=$request->input('product_price');
         $product_part->save();
         return redirect('/product_parts')->with ('flash_message_success','Submit successfully');
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
          $product = DB::table('parts')
            ->join('types', 'parts.type_id', '=', 'types.type_id')
            ->select('parts.*', 'types.type')
            ->where('parts.id','=',  $id)
            ->first();

         $types= Type::orderBy('created_at','type_id')->get();
    
        return view('addproducts.product_parts.edit')->with('parts',$product)->with('types',$types);
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
         // $this->validate($request,[
         //    'type' => 'required',
         //    'product_name' => 'required',
         //    'product_code' => 'required'
         // ]);

         $product =  product :: find($id);
         $product->type_id=$request->input('type');
         $product->part_name=$request->input('part_name');
         $product->part_code=$request->input('part_code');
         $product->part_price=$request->input('part_price');
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
        //
    }
}
