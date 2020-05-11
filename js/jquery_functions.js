$(document).ready(function(){

    $(".button").click() (function() {
        alert("This button doesn't do anything! :)");
        $("*").hide();
    });
    
    function openNav() {
        document.getElementById("nav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
      
    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("nav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
  
});
