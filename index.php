<?php
/**
 * variables de string
 */
$name="tadeo";
$lastname='granados';
$age=20;
$size=1.70;
$booleantrue=true;
$booleanfalse=false;
/**
 * arrays(arreglos)
 */
$array=[];
$array2=array();
$arrayvalues=[10,'string',true,['otro valor']];
/**
 * Constantes
 */
const CONSTANTE_1='valor constante 1';
//siempre para declarar constantes es en mayuscula (CONSTANTE)
const constante_2=23;
/**
 * Objetos
 */
//no se usara pero es para darnos una idea
$object =new stdclass();
/**
 * Clases
 */
class Auto
{
var $color;
array $array;
//primera forma de especificar datos
bool $propiedadBoolean=false;
//segunda forma de especificar datos
$propiedadBoolean=[];
}
/**
 * Constructores(para crear instancias en nuestras clases)
 */
class auto1{
    int $numberOfDoors=null;
 //public function_constructor(int $doors){
    //manipular las instancias
      //primera forma java
      //this.numberOfDoors=$doors;
      //segunda forma visual
      //%this->numberOfDoors=$doors;
    //con este codigo se asume 
      public function_constructor(public int $numberOfDoors){
      }
      }
 
    /**
 * Funciones 
 */
public function getDetails(string $time){
   // System.out.print("hello world");
   //formas de imprimir 
   echo "time $time";
    echo "time:".$time;
    echo 'hello world';
}
 /**
 * Instancias
 */
class auto3(int $doors){

}
//primera forma de instancias 
$autoInstance =new auto(4);
//Segunda forma de instancias 
$autoInstance =auto(4);
 /**
 * ciclos
 */
for($si=0; $i<10; $i++){
    echo $i."\n";
}
?>