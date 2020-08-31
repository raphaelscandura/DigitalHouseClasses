<?php

class produtos {
    public $nome;
    public float $preco;
    public int $quantidade;
    public $categoria;

    function mostrarProduto () {
        echo "Produto: ", $this -> nome, "<br><br>";
        echo "Preço: ", $this -> preco, "<br><br>";
        echo "Quantidade: ", $this -> quantidade, "<br><br>";
        echo "Categoria: ", $this -> categoria, "<br><br>";
        echo "<br><br>";
    }

    
        function valor ($nome, $preco, $quantidade, $categoria) {
            $this -> nome = $nome;
            $this -> preco = $preco;
            $this -> quantidade = $quantidade;
            $this -> categoria = $categoria;
        }

}

$banana = new produtos ();
$banana -> valor ("Banana", 4.20, 3, "Fruta");
$banana-> mostrarProduto();

$pera = new produtos ();
$pera -> valor ("Pêra", 6, 9, "Fruta");
$pera-> mostrarProduto();


?>