$("#1").click(function(e){
    e.preventDefault();
    window.location="./formulario.php?tipo=normal";

});
$("#2").click(function(e){
    e.preventDefault();
    window.location="./formulario.php?tipo=anonimo";

});
