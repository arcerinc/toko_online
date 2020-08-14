<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');

        echo "hello word";
    }

    public function about()
    {

        echo "saya $this->nama";
    }



    //--------------------------------------------------------------------

}
