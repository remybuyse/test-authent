<main id="account" class="container">
    <h2>Mon compte</h2>
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Mes informations</h3>
                </div>
                <div class="panel-body">

                  <a class="btn btn-default pull-right" href="edit-profil.php">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  </a>
                    <ul>
                        <li><?= $clientData["first_name"] ?></li>
                        <li><?= $clientData["last_name"] ?></li>
                        <li><?= (!empty($clientData["address"])) ? $clientData["address"] : "adresse non renseignée" ?></li>
                        <li><?= ($clientData["zipcode"] != "")? $clientData["zipcode"] : "zipcode non renseigné" ?></li>
                        <li><?= ($clientData["city"] != "")? $clientData["city"] : "ville non renseignée" ?></li>
                        <li><?= ($clientData["phone"] != "")? $clientData["phone"] : "tel non renseigné" ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
