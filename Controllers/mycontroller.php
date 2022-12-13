<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    public function form()
    {
        return view('Form');
    }

    public function process(request $request)
    {
        $name = $request->input('txt1');
        $fileobject = $request->file('file123');

        echo "</br>Name is : ".$fileobject->getClientOriginalName();
        echo "</br>Message is : File Uploaded";
        // echo "</br>File Name is : ".$fileobject->getFilename();
        // echo "</br>File Path is : ".$fileobject->getRealPath();
        // echo "</br>File size in Bytes is : ".$fileobject->getSize();
        // echo "</br>File Mimetype is : ".$fileobject->getClientMimeType();
        // echo "</br>File Extention is : ".$fileobject->getClientOriginalExtension();

        //Upload File
        $fileobject->move("upload/",$fileobject->getClientOriginalName());

        //Passing data to view
        return view("Form",["mytxt1"=>$name,"mytxt2"=>"File Upload"],);
    }
}
