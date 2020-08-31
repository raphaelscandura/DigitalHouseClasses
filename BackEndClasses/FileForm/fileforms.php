<?php

//Defining which extensions of image will be allowed
$validExtensions = ['image/jpeg','image/png','image/jpg'];

//Checking if image was sucessfuly sent
if($_FILES['photo']['error'] == 0){
    //Checking if sent image has a valid extension
    if(array_search($_FILES['photo']['type'], $validExtensions) === FALSE){
        echo "A extensão do arquivo não é válida!";
        exit;
    }
    //Moving uploaded image to a local diretory
    if(move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$_FILES['photo']['name'])){
        echo "Arquivo salvo com sucesso!";
    } else{
        echo "Erro na hora de salvar seu arquivo!";
    }
} else {
    echo "Erro no envio do arquivo!";
}

?>