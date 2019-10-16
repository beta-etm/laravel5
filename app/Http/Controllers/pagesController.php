<?php

namespace App\Http\Controllers;

class pagesController extends  Controller{

    public function myfunction(){

        $firstname = 'Betiel';
        $lastname = 'Samuel';

        $fullname = $firstname . $lastname;

        return view('page') -> with("full", $fullname);
    }
}
