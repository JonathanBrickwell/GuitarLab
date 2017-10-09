<?php 
$direktorij= "slike";
$h=opendir ($direktorij);
$slike=array();
while($slika= readdir($h)) {
	if (preg_match("/(.*)\.jpg$|(.*)\.jpeg$|(.*)\.gif$|(.*)\.png$/", $slika)) $slike[]="$slika";
	}
closedir($h);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <title>Galerija slika</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
     <script type="text/javascript">
	var slike= [
	 <?php 
	   for ($i=0; $i<sizeof($slike); $i++) {
		   echo ('"'. $slike[$i] . '"');
		  if ($i<sizeof($slike)-1) echo (',');
		  }
	  ?>
     ];
	var direktorij= "<?php  echo $direktorij; ?>";
	
	
	var trenutnaSlika=0;
	
	function promjeniSliku (broj) {
		clearTimeout(t);
		var slika= direktorij + "/" + slike[broj];
		var objektSlike= document.getElementById("odabranaSlika");
		objektSlike.src=slika;	
		trenutnaSlika=broj;
		t=window.setTimeout("sljedecaSlika()", 5000);
		}
		
	t=window.setTimeout("sljedecaSlika()", 5000);
	
	function sljedecaSlika () {
		trenutnaSlika++;
		if (trenutnaSlika>=slike.length) trenutnaSlika=0;
		promjeniSliku (trenutnaSlika);
		}
	


    </script>
    </head>
<body>
<center />
<div id="tumbs">
<?php 
$broj=0;
foreach ($slike as $slika) {
	echo "<img src='". $direktorij . "/" . $slika . "' onclick='promjeniSliku(" . $broj . ")' height='50'/>";
	$broj++;
	}
?>
</div>

<div id="slike">
<img height="300" id="odabranaSlika" src="<?php echo  $direktorij . "/" . $slike[0] ?>"/>
</div>

</body>
</html>

