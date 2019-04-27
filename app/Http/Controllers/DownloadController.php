<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DownloadController extends BaseController {

    public function download_CV() {
        $file = public_path('/icons/css3.png');
        return response()->download($file);
    }
}