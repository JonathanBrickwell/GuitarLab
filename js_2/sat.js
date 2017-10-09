/* Satina! */

var d,h,m,s,animate;

function init(){
    d=new Date();
    h=d.getHours();
    m=d.getMinutes();
    s=d.getSeconds();
    clock();
};

function clock(){
    s++;
    if(s==60){
        s=0;
        m++;
        if(m==60){
            m=0;
            h++;
            if(h==24){
                h=0;
            }
        }
    }
    $('sec',s);
    $('min',m);
    $('hr',h);
    animate=setTimeout(clock,1000);
};

function $(id,val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;
};

window.onload=init;

/* KALKULATOR - katastrofalan nacin pisanja funkcija...sramota...place mi se. */

function brisi()
{
    document.formica.display.value = '';
}

function oduzimanje() 
{
    document.formica.display.value += "-"
}

function zbrajanje()
{
    document.formica.display.value += "+"
}

function devet()
{
    document.formica.display.value += "9";
}

function osam()
{
    document.formica.display.value += "8";
}

function sedam()
{
    document.formica.display.value += "7";
}

function sest()
{
    document.formica.display.value += "6";
}

function pet()
{
    document.formica.display.value += "5";
}

function cetiri()
{
    document.formica.display.value += "4";
}

function tri()
{
    document.formica.display.value += "3";
}

function dva()
{
    document.formica.display.value += "2";
}

function jedan()
{
    document.formica.display.value += "1";
}

function nula()
{
    document.formica.display.value += "0";
}

function tocka()
{
    document.formica.display.value += ".";
}

function answer()
{
    var sve = eval(document.formica.display.value);

    document.formica.display.value = sve;
}