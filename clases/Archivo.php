<?php

class Archivo {
   static function getNombre($nombrecompleto){
       return pathinfo($nombrecompleto, PATHINFO_FILENAME);       
   }
   static function getExtension($nombrecompleto){
       return pathinfo($nombrecompleto,PATHINFO_EXTENSION);
   }
  
}
