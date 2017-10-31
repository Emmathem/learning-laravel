<?php
/**
 * @Author
 * Falua Temitope Oyewole.
 * faluatemitopeo@gmail.com
 * Web Developer
 * Date: 10/30/2017
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{

    /**
     * Show the application welcome screen to user
    */

    public function index() {
        //return 'hello world';
        return view('welcome');
    }

    public function contact() {
        $name = 'Falua Tope';
        return view('pages.contact')->with($name);
    }
}