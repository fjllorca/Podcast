<?php

//texto y archivo
require '../clases/Request.php';
require '../clases/Archivo.php';

if (isset($_FILES["archivo"])) {
    $nombreusuario = $_POST['usuario'];
    $nombrecancion = $_FILES["archivo"]["name"];
    $nombreimagen = $_FILES["archivo2"]["name"];
    $categoria = $_POST['categoria'];

    echo $categoria;
    echo Archivo::getNombre($nombrecancion);
    echo Archivo::getExtension($nombrecancion);
    echo Archivo::getNombre($nombreimagen);
    echo Archivo::getExtension($nombreimagen);

     $rutamusicacancion = '../podsubidos/musica/' . $nombreusuario . ' ' . $nombrecancion;
     $rutamusicaimagen = '../podsubidos/musica/' . $nombreusuario . ' ' . $nombreimagen;

    if ($_POST['categoria'] == 'musica') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], $rutamusicacancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], $rutamusicaimagen);
        header('Location: ../index.php');
    }
    if ($_POST['categoria'] == 'noticias') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"],'../podsubidos/noticias/' . $nombreusuario . ' ' . $nombrecancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/noticias/'  . $nombreusuario . ' ' . $nombreimagen);
        header('Location: ../noticias.php');
    }
    if ($_POST['categoria'] == 'cint') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], '../podsubidos/cite/'. $nombreusuario . ' ' . $nombrecancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/cite/' . $nombreusuario . ' ' . $nombreimagen);
        header('Location: ../cite.php');
    }
    if ($_POST['categoria'] == 'cine') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], '../podsubidos/cine/'.$nombreusuario.' '.$nombrecancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/cine/'.$nombreusuario.' '.$nombreimagen);
        header('Location: ../cine.php');
    }
    if ($_POST['categoria'] == 'humor') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], '../podsubidos/humor/'.$nombreusuario.' '.$nombrecancion);
         move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/humor/'.$nombreusuario.' '.$nombreimagen);
         header('Location: ../humor.php');
    }
    if ($_POST['categoria'] == 'tertulia') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], '../podsubidos/tertulia/'.$nombreusuario.' '.$nombrecancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/tertulia/'.$nombreusuario.' '.$nombreimagen);
        header('Location: ../tertulia.php');
    }
    if ($_POST['categoria'] == 'otros') {
        move_uploaded_file($_FILES["archivo"]["tmp_name"], '../podsubidos/otros/'.$nombreusuario.' '.$nombrecancion);
        move_uploaded_file($_FILES["archivo2"]["tmp_name"], '../podsubidos/otros/'.$nombreusuario.' '.$nombreimagen);
        header('Location: ../otros.php');
    }
    
} else {
    echo "<h1>" . 'Formato de archivo incorrecto' . "<h1>" . "<br>";
}
$nombreusuario = $_POST['usuario'];
echo $nombreusuario;
$usuarios[] = $nombreusuario;
print_r($usuarios);
echo "<br>";
echo "<br>";
foreach ($_FILES["archivo"] as $key => $value) {
    echo $key . ' = ' . $value . "<br/>";
}
foreach ($_FILES["archivo2"] as $key => $value){  
   echo $key.' = ' . $value."<br/>";  
}




//
