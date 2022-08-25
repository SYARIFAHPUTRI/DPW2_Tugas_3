<?php

namespace App\Http\Controllers;

class Homecontroller extends Controller {


    function showDashboard(){
        return view('dashboard');
    }

    function showProduct(){
        return view('product');
    }

    function showDiskon(){
        return view('diskon');
    }

    function showCategories(){
        return view('categories');
    }

    function showLogin(){
        return view('login');
    }

    function showSupplier(){
        return view('supplier');
    }

    function showPelanggan(){
        return view('pelanggan');
    }

    



}