<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home (){
        return view('home');
    } 

    public function saran (){
        return view('post.create');
    } 

    public function service (){
        return view('service');
    } 

    public function testimoni (){
        return view('testimoni');
    } 
    public function form_post (){
        return view('form_post');
    } 
   
}