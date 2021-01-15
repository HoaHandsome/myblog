<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download() {
     $myFile = public_path("a.png");
        $headers = ['Content-Type: image\png'];
         $newName ='mycv.png';
        /*  header("Refresh: 1; URL=http://www.stackoverflow.com/"); */
        return Response()->download($myFile, $newName , $headers);
  }
}
