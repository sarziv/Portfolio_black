<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class DownloadController extends BaseController {

    public function download_CV() {

        $file = resource_path('download/cv_placeholder');

        return response()->download($file,'Sarunas_Zivila.pdf');

    }
}