<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadResume() {
        $pathToResume = 'docs/WEB_RESUME_A4_96PPI_compressed.pdf';
        return response()->download($pathToResume);
    }
}
