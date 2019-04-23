<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RouteController extends BaseController
{
    //Redirect for No path URL
    public function homeRedirect(){
        return redirect('/home');
    }
    //Home page redirect
    public function home (){
        return view('layouts.home');
    }
    //About page redirect
    public function about (){
        return view('layouts.about');
    }
    //Projects page redirect
    public function projects (){
        return view('layouts.projects');
    }
    //Contacts page redirect
    public function contacts (){
        return view('layouts.contacts');
    }

}
