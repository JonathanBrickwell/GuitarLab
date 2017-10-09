<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Dovršavanje unosa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type='text/css' rel='stylesheet' href='css.css' />
	<script type="text/javascript" src="ajaxObjekt.js"></script>
    <script type="text/javascript">
	function hintovi(unos){
        var xmlHttpObjekt=new ajaxObjekt();
        if (unos.length==0){
            document.getElementById("prijedlozi").innerHTML = "";
			return false;
        }
        xmlHttpObjekt.onreadystatechange=function(){
        if (xmlHttpObjekt.readyState==4 && xmlHttpObjekt.status==200 && xmlHttpObjekt.responseText!=null)
            {
                document.getElementById("prijedlozi").innerHTML=xmlHttpObjekt.responseText;
            }
        }
    xmlHttpObjekt.open("GET","zupanije.php?txt="+unos,true);
    xmlHttpObjekt.send();
	}
	function odaberi(vrijednost) {
		document.getElementById("zupanija").value = vrijednost;
		document.getElementById("prijedlozi").innerHTML = "";
	}
    </script>
    </head>
<body>
<form method="">
     <span>Županija: </span><input type="text"  id="zupanija" autocomplete="off" onkeyup="hintovi(this.value)"></input>
      <div id="prijedlozi" style="width:200px;"></div>
</form>

</body>
</html>

