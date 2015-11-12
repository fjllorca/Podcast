<?php
class Request {
    private static function clean($valor,$filtrar){
        if($filtrar===true){
        return htmlspecialchars($valor);        
        }
        return trim($valor);
    }
    public static function get($nombre,$filtrar=true,$indice = null) {
        if (isset($_GET[$nombre])) {            
                return self::read($_GET[$nombre],$filtrar,$indice);
            }
        return null;
    }
    
    public static function post($nombre,$filtrar=true,$indice = null) {
        if (isset($_POST[$nombre])) {            
                return self::read($_POST[$nombre],$filtrar,$indice);
            }            
        return null;
        }
    private static function req($nombre,$indice = null) {
        $valor = self::post($nombre,$indice ) ;
            
       if ($valor!=NULL){
        return $valor;      
       }
       return self::get($nombre, $indice);
    }
    private static function read($param,$filtrar=true, $indice = null) {
    if(is_array($param)){
        if($indice==null){
            $array = array();
            foreach ($param as $valor) {
                $array[]=  self::clean($valor,$filtrar);
            }
            return $array;
        }  else {
             if(isset($param[$indice])){
            return self::clean($param[$indice],$filtrar);
            }    
        }        
    }
 else {
      return self::clean($param,$filtrar);  
    }
    }
    
}
