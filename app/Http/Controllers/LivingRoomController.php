<?php
namespace easyHome\Http\Controllers;

use Illuminate\Http\Request;

class LivingRoomController extends Controller
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
        //retorna a view da sala para o usuario
        return view('living_room');
    }
}
