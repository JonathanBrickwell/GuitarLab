<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <title>Dovršavanje unosa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   	<script type="text/javascript" src="ajaxObjekt.js"></script>
     <script type="text/javascript">
        function baza(odabir){
         var xmlHttpObjekt=new ajaxObjekt();
        if (odabir==0){
            document.getElementById("clanak").innerHTML="";
            return false;
        }
       xmlHttpObjekt.onreadystatechange=function(){
        if (xmlHttpObjekt.readyState==4 && xmlHttpObjekt.status==200 && xmlHttpObjekt.responseText!=null)
            {
                document.getElementById("clanak").innerHTML=xmlHttpObjekt.responseText;
            }
        }
    
    xmlHttpObjekt.open("GET","citanje_baze.php?id="+odabir,true);
    xmlHttpObjekt.send();
}

    </script>
    </head>
<body>
  <form method="">
  <select name="Članci" onchange="baza(this.value)">
    <option value="0">Odaberite Članak</option>
   <?php
   require_once('konekcija.php');
   $query="SELECT naslov, id FROM clanci ORDER BY id";
$rezultat=$mysqli->query($query, MYSQLI_STORE_RESULT);
  if ($rezultat) {
     while (list($naslov, $id)=$rezultat->fetch_row()) {
      echo "<option value='$id'>$naslov</option>";
     }
  } else {
   $poruka= "Nije bilo moguće pročitati bazu";
  }
?>
</select>
</form>
<br />
<div id="clanak">Članak će se ovdje prikazati...</div>

<h1>Ovo su elementi koji ostaju na stranici</h1>
</body>
</html>

