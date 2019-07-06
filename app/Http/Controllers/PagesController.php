<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
      public function index(){
          $title = 'welcome to laravel';
          return view("pages.index",['data'=>$title]);
      }
      
      public function about(){
        return view("pages.about");
      }
        
      public function services(){
          $title='Services';
          $services=['programming','webdesign','seo'];
          return view("pages.services",['title'=>$title,'services'=>$services]);
          
      }  
    
}