<?php
class Server {   
    
    
    static function getServerName(){
       return $_SERVER('SEVER_NAME');               
    }
    static function getSRootPath(){
       return $_SERVER('CONTEXT_DOCUMENT_ROOT');               
    }
    static function getPort(){
       return $_SERVER('SEVER_ROOT');               
    }
    static function getClientAdrr(){
       return $_SERVER('REMOTE_ADRR'); 
    }
    
    static function getUserAgent(){
       return $_SERVER('HTTP_USER_AGENT');               
    }
    static function getQueryString(){
       return $_SERVER('QUERY_STRING');               
    }
    static function getFilename(){
       return $_SERVER('SCRIPT_FILENAME');               
    }
    static function getMethod(){
       return $_SERVER('REQUEST_METHOD');        
    }
    static function isGet(){
        return self::getMethod()=="GET";
    }    
    static function isPost(){
        return self::getMethod()=="POST";         
    }
    static function getRequestDate($Campo=NULL){
        switch ($Campo){
             case "Y":
            return intval(date("Y",$_SERVER["REQUEST_TIME"]));               
            case "M":
           return intval(date("m",$_SERVER["REQUEST_TIME"]));   
                    
            case "D":
            return intval(date("d",$_SERVER["REQUEST_TIME"]));   
                       
            case "h":
            return intval(date("H",$_SERVER["REQUEST_TIME"]));   
                           
            case "m":
           return intval(date("i",$_SERVER["REQUEST_TIME"]));   
                               
            case "s":
           return intval(date("s",$_SERVER["REQUEST_TIME"])); 
            
        }        
    }
    
    private static function timmeStampToDate($f){        
            $fecha = new DateTime();
echo $fecha->format('U = Y-m-d H:i:s') . "\n";   
        }
    static function getClientLanguage(){
       return $_SERVER('HTTP_ACEPT_LENGUAGE'); 
    }
    
}