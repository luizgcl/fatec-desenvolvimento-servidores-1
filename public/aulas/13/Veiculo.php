<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Veiculo
 *
 * @author Aluno
 */
class Veiculo {
    public $nome;
    public $cor;
    private $ano;
    protected $botao;
    
    public function acelerar() {
     if($this->botao == true){
         echo "<p>O veículo está acelerando.....</p>";
     } else{
         echo "<p>O veículo está parado...</p>";
     }   
    }
    
    public function ligar(){
        $this->botao = true;
    }
    
    public function desligar() {
        $this->botao = false;
    }
}



?>