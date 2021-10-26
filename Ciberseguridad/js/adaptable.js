$(document).ready(main);

var contador =0;


function main(){

$("#acuerdo").hide();
$("#consul_acuerdo").hide();
$('#btncrear').click(function(){
//$('nav').toggle(); 
contador = 1;
if(contador == 1){
    
    $("#acuerdo").show();
    $("#consul_acuerdo").hide();
        
    contador = 0;
} 

});



$('#btnmodificar').click(function(){
    //$('nav').toggle(); 
    contador = 2;
    if(contador == 2){
       
     
        
        $("#acuerdo").hide();
        $("#consul_acuerdo").show();
            
        contador = 0;
        
    }
    
    });
    






}

