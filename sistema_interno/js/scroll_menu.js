 window.onscroll = function(){
    var menu_secundario = document.getElementById("menu_secundario");
    var top = window.pageYOffset || document.documentElement.scrollTop;
    if( top > 250 ) {
        menu_secundario.style.display = "block";

        //console.log('Maior que 300');
    }else if(top < 300){
        menu_secundario.style.display = "none";

        //console.log('Menor que 300');
    }
}