<?php
class Produto{

    private $id;
    private $nome;
    private $descricao;
    private $categoria_id;
    private $preco;

    function __construct(

        $nome, 
        $descricao, 
        $categoria_id, 
        $preco,
        
    ){
        $this-> nome = $nome;
        $this-> descricao = $descricao;
        $this-> categoria_id = $categoria_id;
        $this-> preco = $preco;
        
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getDescricao(){
        return $this->descricao;
    }
    function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    function getCategoria_id(){
        return $this->categoria_id;
    }
    function setCategoria_id($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    function getPreco(){
        return $this->preco;
    }
    function setPreco($preco){
        $this->preco = $preco;
    }
    
    
}