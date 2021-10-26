$(document).ready(main);


var contador_ad = 0;


function main(){
  
    $(".op2").hide();
            $(".op3").hide();
    $('.datos-personales').click(function(){
        contador_ad = 1;
        if(contador_ad  == 1){
        
            $(".op1").show();
            $(".op2").hide();
            $(".op3").hide();
           
        } 
    });
    $('.productos-clientes').click(function(){
        contador_ad = 2;
        if(contador_ad == 2){
        
            $(".op2").show();
            $(".op1").hide();
            $(".op3").hide();
           
        } 
    });
    $('.facturas-cientes').click(function(){
        contador_ad = 3;
        if(contador_ad == 3){
        
            $(".op3").show();
            $(".op1").hide();
            $(".op2").hide();
           
        } 
    });

};



