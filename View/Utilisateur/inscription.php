<form class="form" action="" method="post">
    <div class="form-group">
        <label class="col-form-label" for="inputDefault">Pseudo</label>
        <input style="max-width:300px" type="text" class="form-control" name="pseudo" value="<?php echo $pseudo ?>" id="inputDefault">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input style="max-width:300px" type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="entreprise" value="<?php if ($entreprise) echo "checked"; ?>" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Entreprise ? Cochez, si oui.
        </label>
    </div>
    <input style="margin-top:20px;" type="submit" class="btn btn-success" value="Inscription" />
</form>