<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        echo "Selamat Datang";
    }
    
    public function about() {
        echo "Amelia Marshanda Syahputri <br>
            2041720041";
    }
    
    public function article($id) {
        return "Ini adalah halaman artikel dengan id ".$id;
    }
    
}
