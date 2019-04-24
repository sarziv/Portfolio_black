<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RouteController extends BaseController
{

    protected $info;

    //Redirect for No path URL
    public function homeRedirect()
    {
        return redirect('/home');

    }

    //Home page route

    public function home()
    {

        //landing page info
        $this->info = [
            'title' => 'Welcome!',
            'quate' => 'Nice to meet you.',
            'background' => '../images/joanna-kosinska-129039-unsplash.jpg'
        ];

        return view('layouts.home')->with('info', $this->info);

    }

    //About page route
    public function about()
    {

        $this->info = [
            'title' => 'About me',
            'quate' => 'A little bit more',
            'background' => '../images/steve-halama-698056-unsplash.jpg'
        ];


        return view('layouts.about')->with('info', $this->info);

    }

    //Projects page route
    public function projects()
    {


        $this->info = [
            'title' => 'Projects',
            'quate' => 'Fun fun fun',
            'background' => '../images/bethany-legg-9248-unsplash.jpg'
        ];

        return view('layouts.projects')->with('info', $this->info);

    }

    //Contacts page route
    public function contacts()
    {

        $this->info = [
            'title' => 'Contacts',
            'quate' => 'Get in touch',
            'background' => '../images/minh-pham-1511848-unsplash.jpg'
        ];

        return view('layouts.contacts')->with('info', $this->info);
    }

}
