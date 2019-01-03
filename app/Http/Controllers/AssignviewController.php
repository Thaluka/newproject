<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Complain;

class AssignviewController extends Controller
{
    public function viewassign()
    {
    	 $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','assign')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewassign')->with('complains',$complains);


}

 public function viewcompleted()
    {
    	 $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','completed')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewcompleted')->with('complains',$complains);


}
 public function viewhold()
    {
    	 $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','hold')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewhold')->with('complains',$complains);


}
 public function viewrejected()
    {
    	 $complains = DB::table('complains')
        ->join('types', 'complains.type_id', '=', 'types.type_id')
        ->select('complains.*', 'types.type')
        ->where('status','=','rejected')
        ->orderBy('complains.created_at','desc')
        ->paginate(10);
        return view('supervisor.viewrejected')->with('complains',$complains);


}




    
}
