<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/main.css">
        <title></title>
    </head>
    <body>
        <div id="contenedor">
        <div id="formulario">
             <h1>Categorías</h1> 
        <ul>
            <li><a href="index.php">Música</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="cite.php">Ciencia&tecnología</a></li>
            <li><a href="cine.php">Cine</a></li>
            <li><a href="humor.php">Humor</a></li>
            <li><a href="tertulia.php">Tertulia</a></li>
            <li><a href="otros.php">Otros</a></li>
            </ul>
            <form action="./clases/subir.php" method="post"
        enctype="multipart/form-data">           
                <h1>Podcast</h1>
                <label>CATEGORÍA: </label>
                <select name="categoria">                    
                    <option value="tertulia">Programa de tertulia</option>
                    <option value="musica">Programas de Música</option>
                    <option value="noticias">Noticias</option>
                    <option value="cint">Programas de Ciencia & Tecnología</option>
                    <option value="cine">Programas de Cine</option>
                    <option value="humor">Programas de humor</option>Ç
                    <option value="otros">Otros</option>                 
                </select>    <br>   
                
                <label>BUSCA TÚ PODCAST => </label>
                <input type="file" name="archivo"/></br>
                <label>BUSCA TÚ IMAGEN => </label>
                <input type="file" name="archivo2"/></br>
                <label>USUARIO: </label>
                 <input type="text" id="usuario" name="usuario"></br>
                <input type="submit" value="SUBIR"/>                
                
             
             </div>
            </form>
            </div>
        
        <!--TABLA USUARIO-->
            
        <div id="tablausuario">          
        </div>
        <!--TABLA CATEGORÍAS*/-->            
        <div id="tablacategorias">            
       
        <!--TERTULIA-->
         <div id="tertulia">
  <?php
require './clases/Archivo.php';             
echo "<h1>Tertulia</h1>";
echo "<table>";
$directoriotertulia = opendir("./podsubidos/tertulia");
while ($archivotertulia = readdir($directoriotertulia)){
   $nombreArch = ucwords($archivotertulia);  
  if(Archivo::getExtension($nombreArch)==="mp3"){
   echo "<tr><td>"; 
   echo " <audio controls>";  
   echo "<source src='./podsubidos/tertulia/$nombreArch'><b>&nbsp;$nombreArch</b></td>";
   echo "<td><b>&nbsp;$nombreArch</b></td>";
   echo "<audio></tr>";
   }
    elseif(Archivo::getExtension($nombreArch)==="jpg") {
   echo "<tr><td>";    
   echo "<img src='./podsubidos/tertulia/$nombreArch'></td>";
   echo "<td><b>&nbsp;$nombreArch</b></td>";
   echo "</tr>";
   } 
}
closedir($directoriotertulia); 
echo "</table>";
?>
         </div>
       </div>
     </body>
</html>

