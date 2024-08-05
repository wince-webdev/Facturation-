<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Facturation</title>
  <link rel="stylesheet" href="styles\css\bootstrap.min.css">
  <link rel="stylesheet" href="styles/assets/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-2.0.5/datatables.min.css"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <i class="fas fa-user-secret"></i>Coding City</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        <li class="nav-item">
          <!-- <a class="nav-link disabled">Disabled</a> -->
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
  </header>
  <section class="container py-5">
    <div class="row">
      <div class="col-lg-8 col-sm mb-5 mx-auto">
        <h1 class="fs-4 text-center lead text-primary">CRUD PHP, MYSQL ET AJAX</h1>
      </div>
    </div>
    <div class="dropdown-divider border-warning"></div>
    <!-- style="margin: 0%; padding: 0%; border-bottom:0.5px solid #000; border-top:0.5px solid #aa5728; position: fixed; top: 50px; width: 100%;" -->
    <!-- <div class="row" style="border-bottom:0.5px solid #000; border-top:0.5px solid #aa5728; "> -->
    <div class="row">
      <div class="col-md-6">
        <h5 class="fw-bold mb-0">Liste des factures</h5>           
      </div>
      <div class="col-md-12">
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fas fa-folder-plus"></i> Nouveau</button>
        <a href="" class="btn btn-success btn-sm" id="export"><i class="fas fa-table"></i> Exporter en excel</a>
        </div>
      </div>
    </div>
    <br>
    <div class="dropdown-divider border-warning"></div>
    <div class="row">
      <div class="table-responsive" id="orderTable">
        <!-- <table class="table table-striped">
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
          <?php for($i = 0; $i < 100; $i++) {    ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              
              <td>
                <a href="#" class="text-info me-2 infoBtn" title="voir details"><i class="fas fa-info-circle"></i></a>
                <a href="#" class="text-primary me-2 editoBtn" title="Modifier"><i class="fas fa-edit"></i></a>
                <a href="#" class="text-danger me-2 deleteBtn" title="Supprimer"><i class="fas fa-trash-alt"></i></a>
              
              </td>
            </tr> -->
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createModalLabel">Nouvelle facture</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" id="formOrder">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="customer" name="customer">
            <label for="customer">Nom du client</label>
          </div>

          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="cashier" name="cashier">
            <label for="cashier">Nom du Caissier</label>
          </div>
          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="amount" name="amount">
                <label for="amount">Montant</label>
              </div>
            </div>
          
            <div class="col-md">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="received" name="received">
                <label for="received">Montant perçu</label>
              </div>
            </div>

          <!-- <div class="row-g-2">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="returned" name="returned">
              <label for="returned">Montant retourné</label>
            </div>
          </div> -->

            <div class="col-md">
              <div class="form-floating mb-3">
                <select name="state" class="form-select" id="state" aria-label="state">
                  <option value="Effectuée">Effectuée</option>
                  <option value="Payée">Payée</option>
                  <option value="Annulée">Annulée</option>
                </select>
                <!-- <input type="text" class="form-control" id="state" name="state"> -->
                <label for="state">Etat de la facture</label>
              </div>
            </div>

          </div>

     
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler </button>
        <button type="button" class="btn btn-primary" name="create" id="create">Ajouter <i class="fas fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
integrity="sha512-qFOQ9YFAeGj1gDOuUD61g3D+tLDv3u1ECYWqT82WQoaWrOhAY+5mRMTTVsQdWutbA5FORCnkEPEgU0OF8IzGvA=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="styles\js\bootstrap.bundle.min.js"></script>
<script src="styles/assets/js/bootstrap.bundle.min.js"></script

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-2.0.5/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="script.js"></script>

  <!-- <script src="/js/jquery-3.6.0.min.js"></script>
  <script src="/js/datatables.min.js"></script>
  <script src="/js/sweetalert2.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js"></script> -->
  
  <script>
      $(document).ready(function() {
        $('table').DataTable();
      });
    </script>
</body>

</html>