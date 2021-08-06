<form class="form" action="<?php echo Config::$baseUrl ?>/utilisateur/<?php echo $modification ? "modifierAnimal" . $id :  "/animal/insertAnimal" ?>" method="post">
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Nom</label>
        <input style="max-width:300px" type="text" class="form-control" name="nom" value="<?php echo $modification ? $animal->getNom() : "" ?>" id="inputDefault">
    </div>

    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Age</label>
        <input style="max-width:300px" type="number" class="form-control" name="age" value="<?php echo $modification ? $animal->getAge() : "" ?>" id="inputDefault">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="sexe" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Mâle ou femelle ? Cochez si mâle.
        </label>
    </div>
    <?php if ($modification) { ?>
        <ul>
            <?php
            foreach ($listeCages as $cage) { ?>
                <option value="<?= $cage->getId(); ?>"><?php echo $cage->getSurface(); ?> mètres carrés</option>


            <?php } ?>
        </ul>
    <?php } ?>
    <div class="form-group select">
        <select style="max-width:300px;" name="cage" class="form-select" id="exampleSelect1">
            <option value="">Sélectionnez une cage pour l'animal</option>
            <?php

            foreach ($listeCages as $cage) { ?>
                <option value="<?= $cage->getId(); ?>"><?php echo $cage->getSurface(); ?> mètres carrés</option>
            <?php
            }
            ?>
        </select>

        <input style="margin-top:20px;" type="submit" class="btn btn-success" value="Insérez un animal" />
    </div>
</form>