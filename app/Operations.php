<?php

namespace easyHome;

use Illuminate\Database\Eloquent\Model;

class Operations extends Model
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Executa a chamada ao script em python para acionamento dos aparelhos
     */
    public function turnOn($convenient, $param, $state)
    {
        //Executa o script na pasta python - comando para ligar o aparelho selecionado
        $command = "cd ../script && python commands.py $convenient $param $state";
        pclose(popen($command, 'r'));
        return true;
    }
    public function turnOff($convenient, $param, $state)
    {
        //Executa o script na pasta python - comando para desligar o aparelho selecionado
        $command = "cd ../script && python commands.py $convenient $param $state";
        pclose(popen($command, 'r'));
        return true;
    }

}
