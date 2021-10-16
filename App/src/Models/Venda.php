<?php 

namespace App\Model;

class Venda {
    
    private $id, $cliente, $produto, $quantProd,$valorTotal;

    public function __construct($quantProd, $valorTotal) {
        $this->quantProd = $quantProd;
        $this->valorTotal = $valorTotal;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function getProduto() {
        return $this->produto;
    }

    public function setProduto(Produto $produto) {
        $this->produto = $produto;
    }

    public function getQuantProd() {
        return $this->quantProd;
    }

    public function setQuantProd($quantProd) {
        $this->quantProd = $quantProd;
    }


    public function getValorTotal() {
        return $this->valorTotal;
    }

    public function setValorTotal($valorTotal) {
        $this->valorTotal = $valorTotal;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getFormaPag() {
        return $this->formaPag;
    }

    public function setFormaPag($formaPag) {
        $this->formaPag = $formaPag;
    }
}