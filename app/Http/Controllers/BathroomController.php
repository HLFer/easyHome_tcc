<?php
namespace easyHome\Http\Controllers;

use Illuminate\Http\Request;

class BathroomController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //retorna a view do banheiro para o usuario
        return view('bathroom');
    }
}
