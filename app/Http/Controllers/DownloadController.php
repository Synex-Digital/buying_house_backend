<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadProfile(){
        $file = public_path('profileDownload/LNAssociateLimited.pdf');
        return response()->download($file, "LNAssociateLimited.pdf");
    }
}
