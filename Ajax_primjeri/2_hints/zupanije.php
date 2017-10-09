<?php
$poljeZupanija= array("Bjelovarsko-bilogorska županija", "Brodsko-posavska županija", "Dubrovačko-neretvanska županija", "Istarska županija", "Karlovačka županija", "Koprivničko-križevačka županija", "Krapinsko-zagorska županija","Ličko-senjska županija", "Međimurska županija", "Osječko-baranjska županija", "Požeško-slavonska županija", "Primorsko-goranska županija", "Sisačko-moslavačka županija", "Splitsko-dalmatinska županija",
"Varaždinska županija", "Virovitičko-podravska županija", "Vukovarsko-srijemska županija",  "Zadarska županija", "Zagrebačka županija", "Šibensko-kninska županija", "Grad Zagreb");
$txt=$_GET["txt"];

if (strlen($txt) > 0)
  {
  $hint="";
  for($i=0; $i<count($poljeZupanija); $i++)
    {if (strtolower($txt)==strtolower(substr($poljeZupanija[$i],0,strlen($txt))))
      {$hint.="<div class='prozori' onclick='odaberi(this.innerHTML)'>".$poljeZupanija[$i]."</div>";
      }
    }
  }
echo $hint;
?>