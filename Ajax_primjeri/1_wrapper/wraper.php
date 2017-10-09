<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <title>Wraper- POST primjer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   	<script type="text/javascript" src="ajaxObjekt.js"></script>
    <script type="text/javascript">
	function ucitajStranicu() {
		parametri="url=http://www.mev.hr/";
		target=document.getElementById('wraper');
		var xmlHttpObjekt=new ajaxObjekt();
		xmlHttpObjekt.onreadystatechange=function(){
			if (xmlHttpObjekt.readyState==4 && xmlHttpObjekt.status==200 && xmlHttpObjekt.responseText!=null){
               target.innerHTML=xmlHttpObjekt.responseText;
			   }
			}
		xmlHttpObjekt.open ("POST", "ucitaj.php", true);
		xmlHttpObjekt.setRequestHeader ("Content-type", "application/x-www-form-urlencoded");
		xmlHttpObjekt.setRequestHeader ("Content-length", parametri.length);
		xmlHttpObjekt.setRequestHeader ("Connection", "close");
		xmlHttpObjekt.send(parametri);	
		}
    </script>
    </head>
<body>
 <center />
 <h2> Ubacivanje stranice između div tagova </h2>
 <div id="wraper" onClick="ucitajStranicu()"> Sadržaj stranice će se staviti ovdje kad kliknete na tekst... </div>
 
</body>
</html>

