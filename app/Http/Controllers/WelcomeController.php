<?php
/**
 * Created by PhpStorm.
 * User: dell1
 * Date: 2015/6/15
 * Time: 14:54
 */
namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    public function index() {
        //return 'hello world.';
        return view('welcome');
    }

    public function contact () {
        return view ('pages.contact');
    }

}