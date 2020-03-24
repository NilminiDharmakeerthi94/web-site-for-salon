<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class functionController extends Controller
{
    //
    public function getHome(){
        return view('function.home');
    }
    public function getContacts(){
        return view('function.contacts');
    }
    public function getGallery(){
        return view('function.gallery');
    }
    public function getService(){
        return view('function.service');
    }
    public function getAboutUs(){
        return view('function.aboutus');
    }
}
