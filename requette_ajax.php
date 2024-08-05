<?php
require_once 'model_db.php';
// CREATION D'UNE INSTANCE DE LA BASE DE DONNEE
$db = new Database();
// Création des factures

if (isset($_POST['action']) && $_POST['action'] == 'create'){
    extract($_POST);
    //CALCUL DU MONTANT QU'ON REMBOURSSE A L'UTULISATEUR
    $returned = (int)$received - (int)$amount;

    // INSERTION DE MON ELEMENT DANS LA BASE DE DONNEE
    $db->create($customer, $cashier, (int)$amount, (int)$received, (int)$returned, $state);
    echo 'prefect';

}

// Récuperer une facture
if (isset($_POST['action']) && $_POST['action'] == 'fetch'){
    $output = '';
    if ($db->countFacture() > 0){
      $factureLists = $db->read();
        // $output += '
         $output .= '
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Client</th>
              <th scope="col">Caissier</th>
              <th scope="col">Montant</th>
              <th scope="col">Perçu</th>
              <th scope="col">Retourné</th>
              <th scope="col">Etat</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
        ';
        foreach ($factureLists as $factureList) {
            // $output += '
             $output .= '
            <tr>
              <th scope="row">' . $factureList->id . '</th>
              <td>' . $factureList->customer . '</td>
              <td>' . $factureList->cashier . '</td>
              <td>' . $factureList->amount . '</td>
              <td>' . $factureList->received . '</td>
              <td>' . $factureList->returned . '</td>
              <td>' . $factureList->state . '</td>
              <td>
                <a href="#" class="text-info me-2 infoBtn" title="voir details"><i class="fas fa-info-circle"></i></a>
                <a href="#" class="text-primary me-2 editoBtn" title="Modifier"><i class="fas fa-edit"></i></a>
                <a href="#" class="text-danger me-2 deleteBtn" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            ';
        }
         $output .= '</tbody></table>';
        // $output += '</tbody></table>';
        echo $output;
    }
    else{
        echo "<h2>Aucune facture pour ce montant</h2>";
    }
}