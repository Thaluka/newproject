<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Complain;
use App\Type;

class PDFController extends Controller
{

  //allcomplaint details

     function getPDF(Request $request){
    
    $complains = complain::all();

        $pdf = PDF::loadView('report', ['complains'=>$complains]);
        return $pdf -> stream('report.pdf');


        // $types= Type::orderBy('created_at','type_id')->get();

        // $typeid=$request->input('typeid');

        //  $types= Type::orderBy('created_at','type_id')->get();

        // $complains = DB::table('complains')
        
        // ->join('types','complains.type_id','=','types.type_id')
        // ->select('complains.*','types.type')
        // ->where('complains.type_id','=',$typeid)
        // // ->where ('role', '=','technician')
        // ->orderBy('complains.created_at','desc')
        // ->paginate(10);

        //  $pdf = PDF::loadView('report', ['complains'=>$complains]);
        // return $pdf -> stream('report.pdf');




      }






    //type = kitchen equipment
    public function getPDFK(){

        $id='2';
        $complains = complain::where('type_id',$id)->get();

        $pdf = PDF::loadView('report', ['complains'=>$complains]);
        return $pdf -> stream('report.pdf');
    }
  }


//      }
  
//      //month by month generate report
//      public function month(Request $req){
//          $month=$req->input('month');
//          $year=$req->input('year');
//          //january
//          if($month==1){
//             $idm=$year.'-01-01';
//             $idm2=$year.'-01-31';
//             $boatsjanuary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
//             $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjanuary]);
//             return $pdf -> stream('boattrip.pdf');
//          }
// }
