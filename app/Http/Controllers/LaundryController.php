<?php
namespace easyHome\Http\Controllers;

use Illuminate\Http\Request;

class LaundryController extends Controller
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
        //retorna a view da área de serviço para o usuario
        return view('laundry');
    }
}
