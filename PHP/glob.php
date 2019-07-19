<?php

$photos = glob('img/gallery/*.jpg');

// var_dump($photos);

foreach ($photos as $photo) {
    echo '<div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img class ="photo" src="' . $photo . '" alt="photo d\'une chouette">
                    <span class="card-title">Chouette effraie</span>
                </div>
                <div class="card-content">
                    <p>Photo d\'une belle chouette</p>
                </div>
            </div>
        </div>';
}

?>
