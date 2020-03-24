<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
class imageuploadController extends Controller
{
    //
    public function store(request $request){
        if($request->hasFile('image')){
            $request->file('image');
         //   return Storage:: putFile('public/new',$requset->file('image'));
return $request->image->storeAs('public','im.jpg');
        } else {
            return 'Nofile';
        }

    }
    public function show(){
        $url= Storage::url('im.jpg');
        return "<img scr='".$url."'/>";
    }

public function displayImage($filename)

{

  

    $path = storage_public('images/' . $filename);

   

    if (!File::exists($path)) {

        abort(404);

    }

  

    $file = File::get($path);

    $type = File::mimeType($path);

  

    $response = Response::make($file, 200);

    $response->header("Content-Type", $type);

 

    return $response;

}}