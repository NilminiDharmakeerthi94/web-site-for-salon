<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    //
    public function getservice_dressing(){
        return view('services.service_dressing');
    }
public function getservice_facial(){
    return view('services.service_facial');
}
public function getservice_haircolors(){
    return view('services.service_haircolors');
}
public function getservice_haircut(){
return view('services.service_haircut'); 
}
public function getservice_hairstyling(){
    return view('services.service_hairstyling');
}
public function getservice_hairthreatment(){
    return view('services.service_hairthreatment');
}
public function getservice_treading(){
    return view('services.service_treading');
}
public function getservice_waxing(){
    return view('services.service_waxing');
}
}



  
  
  