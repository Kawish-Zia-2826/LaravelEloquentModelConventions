<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Flight;

use Illuminate\Http\Request;


class ContactController extends Controller
{
    public $timestamps = false;


// public function show(){
//     return Contact::with('data')->get();
// }

public function show(){
    //  $data =  Contact::withWhereHas('data',function($q){
    //     $q->where('name', 'Like',"%a");
    //  })->get();
$data  = Flight::where('name','Ali Khan')->get();
$post = Contact::whereBelongsTo($data)->get();

return $data;
    
    // foreach ($data as $key) {
    //     echo $key->data->name . "<br>";
       
    // }


}



}
