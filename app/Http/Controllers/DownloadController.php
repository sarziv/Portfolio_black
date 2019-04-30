<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;


class DownloadController extends BaseController {

    public function download_cv_eng() {

        $file = resource_path('download/cv_eng.pdf');

        return response()->download($file,'Sarunas_Zivila_ENG.pdf');

    }
    public function download_cv_lt() {

        $file = resource_path('download/cv_lt.pdf');

        return response()->download($file,'SZ_lt_OLD.pdf');

    }
    public function download_Credits() {

        $file = resource_path('download/credits.txt');

        return response()->download($file,'credits.txt');

    }
}