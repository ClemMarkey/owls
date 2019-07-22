<?php

$photos = glob('img/gallery/*.jpg');
$Phrase = ["Wow, quel bel oiseau !", "Cette chouette a un regard perçant.", "La chouette effraie est toujours détendue.", "Voyez la chouette effraie dans son milieu naturel.", "Son vol est silencieux pour pouvoir fondre sur ses proies.", "Is it a bird ? No, it's an OWL !", "Ces chouettes vivent dans les granges et clohers de nos campagnes", "Coucou toi !", "Elle peut gober des souris d'un seul coup !"];

// var_dump($photos);

foreach ($photos as $photo) {
    echo '<div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class ="photo" src="' . $photo . '" alt="photo d\'une chouette">
                    <span class="card-title">Chouette effraie</span>
                </div>
                <div class="card-content">
                    <p>' . $Phrase[rand(1, sizeof($Phrase)-1)] .'</p>
                </div>
            </div>
        </div>';
}

?>
