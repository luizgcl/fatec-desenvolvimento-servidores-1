<?php
class CartaoTravel {
    private $numero;
    private $tipo;
    private $usario;
    private $saldo;
    private $situacao;
    
    public function cadastrarCartao($t) {
        $this->setTipo($t);
        if ($t == "Compacto") {
            $this->setSituacao(True);
            $this->setSaldo(10);
        } elseif ($t == "Master") {
            $this->setSituacao(true);
            $this->setSaldo(50);
        } elseif ($t == "Black") {
            $this->setSituacao(true);
            $this->setSaldo(100);
        } else {
            echo "<p>Cartão travel inválido</p>";
        }
    }
    
    public function encerrarCartao() {
        if ($this->getSaldo() > 0) {
            echo "<p>O cartão travel ainda tem dinheiro, não pode encerrar.</p>";
        } else {
            $this->setSituacao(false);
            echo "<p>O cartão de " . $this->getUsuario() . " foi encerrado com sucesso!</p>";
        }
    }
    
    public function carregarCartao($valor) {
        if ($this->getSituacao() == true){
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ $valor realizado no cartão travel de" . $this->getUsuario() . "</p>";
        } else {
            echo "<p>Cartão travel encerrado. Não pode carregar.</p>";
        }
    }
    
    public function usarCartao($valor) {
        if ($this->getSituacao() == true) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Pagamento de R$ $valor autorizado no cartão travel de " . $this->getUsuario() . "</p>";
            } else {
                echo "<p>Saldo insuficiente para pagamento</p>";
            }
        }
    }
    
    public function tarifaCartao() {
        if($this->getTipo() == "Compacto"){
            $valor = 5;
        } elseif ($this->getTipo() == "Master") {
            $valor = 25;
        } elseif ($this->getTipo() == "Black") {
            $valor = 50;
        }
        
        if ($this->getSituacao() == true) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Tarifa de R$ $valor debitada do cartão travel de " . $this->getUsuario() . "</p>";
        } else {
            echo "<p>Saldo insuficiente. Carregue o cartão travel.</p>";
        }   
    }
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setSituacao(false);
        echo "<p>Conta do cartão Travel criada com sucesso!</p>";
    }
    
    public function getNumero() {
        return $this->numero;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function getUsuario() {
        return $this->usario;
    }
    
    public function getSituacao() {
        return $this->situacao;
    }
    
    public function getSaldo(){
        return $this->saldo;
    }
    
    public function setNumero($numero) {
        $this->numero = $numero;
    }
    
    public function  setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function setUsuario($usuario) {
        $this->usario = $usuario;
    }
    
    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }
    
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
}
