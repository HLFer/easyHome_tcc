<?php
namespace easyHome\Http\Controllers;

use Illuminate\Http\Request;

class FansController extends Controller
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
    public function index($convenient)
    {
        return view($convenient);
    }
    public function turnOnFans($convenient)
    {
        //Executa o script na pasta python - comando para ligar lâmpada
        $command = "cd ../scripts && python on.py  $convenient";
        pclose(popen($command, 'r'));
        //Redireciona a página para /cozinha após executar o comando
        return redirect($convenient);
    }
    public function turnOffFans($convenient)
    {
        //Executa o script na pasta python - comando para desligar lâmpada
        $command = "cd ../scripts && python off.py  $convenient";
        pclose(popen($command, 'r'));
        //Redireciona a página para /cozinha após executar o comando
        return redirect($convenient);
    }
}
