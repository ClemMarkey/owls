<?php include 'inc/header.php' ?>

<div class="row container" style="padding-top:5vh;">

    <form action="PHP/message.php" method="post" class="col s12 offset-m3 m10">
        <div class="row">
            <div class="input-field col s6 m3">
                <input id="first_name" type="text" class="validate" name="prenom">
                <label for="first_name">Prénom</label>
            </div>
            <div class="input-field col s6 m3">
                <input id="last_name" type="text" class="validate" name="nom"">
                <label for="last_name">Nom</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m6">
                <div class="input-field col s12 m10">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Pour que nous puissions vous répondre.</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                <label for="textarea1">Votre message</label>
            </div>
        </div>

        <button class="btn waves-effect waves-light orange" type="submit" name="action">Envoyer
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>

<?php include 'inc/footer.php'?>