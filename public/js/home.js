$(window).scroll(function(){
    if($("#menu").offset().top>500)
    {
        
        $("#menu").removeClass("bg-transparent");
        $("#menu").removeClass("navbar-dark ");
        $("#menu").addClass("fondo1");

    }
    else 
    {
        $("#menu").removeClass("fondo1");
        $("#menu").addClass("navbar-dark");
        $("#menu").addClass("bg-transparent");

    }
})