<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type;
use Illuminate\Support\Facades\DB;


class AddproductController extends Controller
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
        $types= Type::orderBy('created_at','type_id')->paginate(5);
        return view('addproducts.index')->with('types',$types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addproducts.create');
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

        $type = new type;
        $type->type = $request->input('type');
        $type->save();
        return redirect('/addproducts')->with ('flash_message_success','Submit successfully');
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
        //   $product = DB::table('products')
        //     ->join('types', 'products.type_id', '=', 'types.type_id')
        //     ->select('products.*', 'types.type')
        //     ->where('products.id','=',  $id)
        //     ->first();

        //  $types= Type::orderBy('created_at','type_id')->get();
    
        // return view('addproducts.edit')->with('product',$product)->with('types',$types);
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
