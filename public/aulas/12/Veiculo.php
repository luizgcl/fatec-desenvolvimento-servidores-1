<?php
class Veiculo {
    public $nome;
    public $cor;
    public $ano;
    
    public function acelerar() {
        if ($this->botao == true) {
            echo"<p>O Veículo está acelerando ....</p>";
        } else {
            echo"<p>O Veículo está parado ....</p>";
        }
    }

    public function ligar() {
        $this->botao = true;
    }

    public function desligar() {
        $this->botao = false;
    }
}
?>