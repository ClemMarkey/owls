<?php
$Phrase = ["Wow, quel bel oiseau !", "Cette chouette a un regard perçant", "La chouette est toujours détendue", "Voyez la chouette effraie dans son milieu naturel", "Son vol est silencieux pour pouvoir fondre sur ses proies"];
$Max = sizeof($Phrase);
echo $Phrase[rand(0, $Max)];
?>