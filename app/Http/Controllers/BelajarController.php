<?php 

namespace App\Http\Controllers;
class BelajarController extends Controller
{
    function hii ($nama) {
        return view("hii")
        ->with("nama",$nama)
        ->with("mk","web lanjut")
        ->with("jam", date("l, d-m-y"))
        ->with("asal","Magetan")
        ->with("um","19 th");
    }

    function beranda ($nama) {
        return view("beranda");
    }

    function about($nama) {
        return view("about");
    }
}

