<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function choix(){
        return view("client.choix");
    }

    public function register(){
        return view("client.register");
    }

    public function end(){
        return view("client.endbar");
    }
}
