<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller

{
    public function download() {
        $file_path = public_path('files/'.'file.css');
        return response()->download($file_path);
    }
}
