<?php


namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function hello()
    {
        return view('welcome');
    }
}