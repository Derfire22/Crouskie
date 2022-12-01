<?php
//  En tête de page
require_once(PATH_VIEWS . 'head.php');
require_once(PATH_VIEWS . 'header.php');
?>
<!--  Début de la page -->
<div class="hero">
    <!-- alt dynamique à faire -->
    <img src="<?= $lastCollection->getPathPicture() ?>" alt="background">
    <div class='flex column'>
        <p><?=COLLECTION_DISCOVER?></p>
        <p>Crousk-hiver</p>
        <button class='rounded'><?=DISCOVER?></button>
    </div>


</div>
<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS . 'footer.php') ?>