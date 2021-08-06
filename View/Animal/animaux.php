<ul>

    <?php

    foreach ($listeAnimaux as $animal) {

    ?>
        <div class="carte">
            <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header"><?php echo $animal->getNom(); ?></div>
                <div class="card-body">
                    <p class="card-text"><?php echo $animal->getAge(); ?> ans</p>
                    <p class="card-text"><?php
                                            if ($animal->getMale() == 1) {
                                                echo "mâle";
                                            } else {
                                                echo "femelle";
                                            }
                                            ?></p>
                    <p class="card-text"><?php echo $animal->getIdCage(); ?></p>
                </div>
                <a type="button" class="btn btn-primary" href="<?php echo Config::$baseUrl ?>/animal/modifierAnimal/<?php echo $animal->getId(); ?>">Modifier </a>
                <a type="button" class="btn btn-primary" href="<?php echo Config::$baseUrl ?>/utilisateur/supprimerAnimal/<?php echo $animal->getId(); ?>">Supprimer </a>


            </div>
        </div>
    <?php
    }

    ?>

</ul>

<a href="<?php echo Config::$baseUrl ?>/animal/insertAnimal">
    <p>Insérer un animal</p>
</a>