<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/404' , function(){
    return view('404');
});


Route::get('/about' , function(){
    return view('about');
});


Route::get('/contact' , function(){
    return view('contact');
});

Route::get('/faq' , function(){
    return view('faq');
});

Route::get('/index2' , function(){
    return view('index2');
});

Route::get('/index3' , function(){
    return view('index3');
});


Route::get('/index4' , function(){
    return view('index4');
});

Route::get('/index1page' , function(){
    return view('index1page');
});

Route::get('/index2page' , function(){
    return view('index2page');
});

Route::get('/index3page' , function(){
    return view('index3page');
});

Route::get('/index4page' , function(){
    return view('index4page');
});

Route::get('/index' , function(){
    return view('index');
});

Route::get('/news-details' , function(){
    return view('news-details');
});

Route::get('/news-standard' , function(){
    return view('news-standard');
});

Route::get('/news' , function(){
    return view('news');
});

Route::get('/pricing' , function(){
    return view('pricing');
});

Route::get('/project-carousel' , function(){
    return view('project-carousel');
});

Route::get('/project-details' , function(){
    return view('project-details');
});

Route::get('/project' , function(){
    return view('project');
});

Route::get('/service-carousel' , function(){
    return view('service-carousel');
});

Route::get('/service-details' , function(){
    return view('service-details');
});

Route::get('/service' , function(){
    return view('service');
});

Route::get('/team-carousel' , function(){
    return view('/team-carousel');
});

Route::get('/team-details' , function(){
    return view('/team-details');
});

Route::get('/team' , function(){
    return view('/team');
});
