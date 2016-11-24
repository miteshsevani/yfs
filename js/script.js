$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip(); 

    // Enable Carousel Indicators
    $(".item").click(function(){
        $("#carousel").carousel(1);
    });

    // Enable Carousel Controls
    $(".left").click(function(){
        $("#carousel").carousel("prev");
    });

    // ##########  Pause on mouseover ########## 
    $('.carousel').carousel({
        pause: "false"        
    });

    // ##########  Navbar ########## //
    $(".nav.navbar-nav li").on("click", function(){
        $(this).addClass("active"); 
    });    

});