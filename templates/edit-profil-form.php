<!-- formulaire de modif d'un utilisateur -->
<main id="edit-account" class="container">
  <h2>Modifier mon compte</h2>
  <div class="col-lg-12 col-md-12 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Modifier mes informations</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal col-sm-12" action="" method="post">
          <div class="form-group">
          <label class="control-label" for="first_name">Prénom : </label>
            <div class="">
              <input
                class="form-control"
                id="first_name"
                type="text"
                name="first_name"
                value="<?= $clientData["first_name"] ?>"
              />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="last_name">Nom :</label>
            <div class="">
              <input
                class="form-control"
                id="last_name"
                type="text"
                name="last_name"
                value="<?= $clientData["last_name"] ?>"
              />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label pull-left" for="address">Adresse : </label>
            <div class="">
              <input
                class="form-control"
                id="address"
                type="text"
                name="address"
                value="<?= (!empty($clientData["address"])) ? $clientData["address"] : "" ?>"
              />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="zipcode">Code postale : </label>
            <div class="">
              <input
                class="form-control"
                id="zipcode"
                type="text"
                name="zipcode"
                value="<?= ($clientData["zipcode"] != "")? $clientData["zipcode"] : "" ?>"
              />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="city">Ville : </label>
            <div class="">
              <input
                class="form-control"
                id="city"
                type="text"
                name="city"
                value="<?= ($clientData["city"] != "")? $clientData["city"] : "" ?>"
              />
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="phone">Téléphone : </label>
            <div class="">
              <input
                class="form-control"
                id="phone"
                type="text"
                name="phone"
                value="<?= ($clientData["phone"] != "")? $clientData["phone"] : "" ?>"
              />
            </div>
          </div>
          <div class="">
            <button class="btn btn-primary" type="submit" name="edit-profile">Enregistrer les modifications</button>
            <a href="account.php" class="btn btn-default" role="button">Retour à mon profil</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
