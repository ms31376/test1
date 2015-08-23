<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of exampleClass
 *
 * @author mehrdad
 */
//disable wsdl cache  
ini_set("soap.wsdl_cache_enabled", "0");  
   
   
//define the response class for boom()  
class boomResponse{  
    public $return; //string  
 }  
   
   
    
//define the response class for getDate()     
class getDateResponse{  
 public $return;  
}   
   
   
//define our class and method signatures  
class exampleClass{  
    
    
 public function boom($parameters){  
    
//instantiate the response class  
 $response = new boomResponse();  
   
 //return the first and last name   
  $response->return = $parameters->first ." ".$parameters->last;  
     
  return $response;  
 }  
    
 public function getDate(){  
     
//instantiate the response class  
  $response = new getDateResponse();   
   
  //return the server date  
  $response->return = date("Y-m-d H:i:s");  
     
  return $response;  
  }   
 }  
   
//create a new soap server in WSDL mode  
$server = new SoapServer("ExampleClassWS.wsdl");  
   
//set the class for the soap server  
$server->setClass("exampleClass");   
   //test mikonim
//handles soap operations  
$server->handle();  
?>