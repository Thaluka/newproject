<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Complain;
use App\Type;

class PDFController extends Controller
{

  //allcomplaint details retrieve

     function getPDF(Request $request){
    
    $complains = complain::all();

        $pdf = PDF::loadView('report', ['complains'=>$complains]);
        return $pdf -> stream('report.pdf');
      }



    //type = kitchen equipment
    // public function getPDFK(){

    //     $id='1';
    //     $complains = complain::where('type_id',$id)->get();

    //     $pdf = PDF::loadView('report', ['complains'=>$complains]);
    //     return $pdf -> stream('report.pdf');
    // }
  }


