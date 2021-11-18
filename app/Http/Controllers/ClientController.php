<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   function index()
   {
    return view('NewClient');

   }
   function addClient(Request $req)
   {  //return $req ->input();
    $client=new Clients;
    $client->name=$req->clname;
    $client->gender=$req->gender;
    $client->email=$req->email;
    $client->contact=$req->contact;
    $client->address=$req->address;
    $client ->updated_at= date('Y-m-d H:i:s');
    $client ->created_at= date('Y-m-d H:i:s');
    $client->save();
    echo "Your Data has been submitted";
   }
   function getDetail()
   {
      $client= Clients::all();
      return view('ClientDetails',[	'client' =>$client ]); //access
   }
}
