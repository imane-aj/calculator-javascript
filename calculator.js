let screen    = document.getElementById("screen"),
    numbers   = document.getElementsByClassName("button"),
    equal     = document.getElementById("equal"),
    clear     = document.getElementById("clear"),
    fixscreen = document.getElementById("c"),
    i;


for(i=0; i<numbers.length; i++){
    numbers[i].onclick = function(){
        /**
         * Kant na9ssak ghir had l condition bach kat choufi wach f kayn ghir 0 f 
         * l'ecran, ila kant GHIR 0 donc kat ketbi dak ra9m fou9ha , ze3ma kat 
         * remplaciha
         */
        // =================================================
        if(screen.value == '0' && screen.value.length == 1 )
            screen.value = this.value;
        // =================================================
        else
            screen.value += this.value;
    }
}
   
equal.onclick = function (){
    screen.value = eval(screen.value);
}

clear.onclick = function (){
    screen.value = "";
}
 
fixscreen.onclick = function (){
    screen.value = "0";
}