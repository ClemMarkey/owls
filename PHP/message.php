<?php
echo 'Salut mon pote ! Tu es bien ' . htmlspecialchars($_POST["prenom"]) . ' ' . htmlspecialchars($_POST["nom"]) . ' ? <br>
Un email sera envoyé à cette adresse "'.htmlspecialchars($_POST["email"]).'" pour confirmer l\'envoi.<br>
Voici le message que tu m\'as envoyé:<br>'.
htmlspecialchars($_POST["message"]);


?>