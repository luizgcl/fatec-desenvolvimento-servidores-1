<?php
class Veiculo {
    private $nome;
    private $cor;
    private $ano;
    protected $botao;
    
    public function acelerar() {
     if($this->botao == true){
         echo "<p>O veiculo está acelerando.....</p>";
     } else{
         echo "<p>O veiculo está parado...</p>";
     }   
    }
    
    public function ligar(){
        $this->botao = true;
    }
    
    public function desligar() {
        $this->botao = false;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getBotao() {
        return $this->botao;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setBotao($botao): void {
        $this->botao = $botao;
    }

    public function __construct($n, $a, $b) {
        $this->nome = $n;
        $this->cor = "Amarelo";
        $this->ano = $a;
        $this->botao = $b;
        $this->desligar();
    }
}
?>