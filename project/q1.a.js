

function run()
{
    first=document.getElementById("maindiv").firstChild;
    while(first!=="undefined")
    {
        if(first.nodeType==1)
        {
            first.style.background=getRandomColor();
        }
        first=first.nextSibling;
    }
}
