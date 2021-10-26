$(document).ready(main);


var contador52 = 0;
var contador_c = 0;

function main(){
    $(".moda0123").hide();
    $(".moda01234").hide();


    $('.next').click(function(){
        //$('nav').toggle(); 
        contador52 = contador52+1;
        
    
        if(contador52 == 1){
        
            $(".moda012").show();
            $(".moda0123").hide();
            $(".moda01234").hide();
           
        } else if (contador52 == 2){
    
            $(".moda012").hide();
            $(".moda0123").show();
            $(".moda01234").hide();

        } 
        else if (contador52 == 3){
    
            $(".moda012").hide();
            $(".moda0123").hide();
            $(".moda01234").show();
      

        } 


    });
    $('.atras').click(function(){
        //$('nav').toggle(); 
        contador52 = contador52-1;

        if(contador52 == 1){
        
            $(".moda012").show();
            $(".moda0123").hide();
            $(".moda01234").hide();
           
        } else if (contador52 == 2){
    
        
            $(".moda0123").show();
            $(".moda012").hide();
            $(".moda01234").hide();
        } 
        else if (contador52 == 3){
    
            $(".moda012").hide();
            $(".moda01234").show();
            $(".moda0123").hide();
       
        }
        
       


    });
    $(".conte-gestion1").hide();
    $(".conte-gestion2").hide();
    $(".conte-gestion3").hide();
    $(".conte-gestion4").hide();
    $(".conte-gestion5").hide();
    $('#gestion1').click(function(){
        //$('nav').toggle(); 
        contador_c = 1;
        
    
        if(contador_c == 1){
     
            $(".conte-gestion1").show();
           
            $(".conte-gestion2").hide();
            $(".conte-gestion3").hide();
            $(".conte-gestion4").hide();
            $(".conte-gestion5").hide();

        } 
    });
    $('#gestion2').click(function(){
        //$('nav').toggle(); 
        contador_c = 2;
        
    
        if(contador_c == 2){
     
            $(".conte-gestion2").show();
           
            $(".conte-gestion1").hide();
            $(".conte-gestion3").hide();
            $(".conte-gestion4").hide();
            $(".conte-gestion5").hide();

        } 
    });


    $('#gestion3').click(function(){
        //$('nav').toggle(); 
        contador_c = 3;
        
    
        if(contador_c == 3){
     
            $(".conte-gestion3").show();
           
            $(".conte-gestion2").hide();
            $(".conte-gestion1").hide();
            $(".conte-gestion4").hide();
            $(".conte-gestion5").hide();

        } 
    });
    $('#gestion4').click(function(){
        //$('nav').toggle(); 
        contador_c = 4;
        
    
        if(contador_c == 4){
     
            $(".conte-gestion4").show();
           
            $(".conte-gestion2").hide();
            $(".conte-gestion1").hide();
            $(".conte-gestion3").hide();
            $(".conte-gestion5").hide();

        } 
    });

    $('#gestion5').click(function(){
        //$('nav').toggle(); 
        contador_c = 4;
        
    
        if(contador_c == 4){
     
            $(".conte-gestion5").show();
           
            $(".conte-gestion2").hide();
            $(".conte-gestion1").hide();
            $(".conte-gestion3").hide();
            $(".conte-gestion4").hide();

        } 
    });


};



