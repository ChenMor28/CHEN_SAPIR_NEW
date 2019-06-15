
document.getElementById("button").addEventListener("click",moveSqure);
counter=0;
function moveSqure()
{
    if(counter==0) {
        document.getElementById("b").style.left = "62px";
        document.getElementById("b").style.top = "62px";
        counter++;
    }
    else if(counter==1) {
        document.getElementById("b").style.left = "62px";
        document.getElementById("b").style.top = "125px";
        counter++;
    }
    else if(counter==2) {
        document.getElementById("b").style.left = "62px";
        document.getElementById("b").style.top = "0px";
        counter=0;
    }
}