<?php
namespace easyHome\Http\Controllers;

use easyHome\Operations;
use Redirect;

class OperationsController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index($convenient, $param, $state)
    {
        if($state == 'on'){
            (new Operations)->turnOn($convenient, $param, $state);
            return Redirect::back();
        }else{
            (new Operations)->turnOff($convenient, $param, $state);
            return Redirect::back();
        }
    }
}
