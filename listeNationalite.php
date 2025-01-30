<?php include "header.php";
include "connexionPDO.php"; 
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchmode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchALL();
?>

<main role="main">
    <div class="container mt-5">
    <div class="row pt-3">    
        <div class="col-9"><h2>  Listes des nationalités</h2></div>
        <div class="col-3"> <a href="FormNationalite.php?action=ajouter" class='btn-success'> <i class="fas fa-plus-circle"></i> Créer une nationalité </a></div>
    </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr class="d-flex">
                    <th scope="col" class="col-md-2">Numéro</th>
                    <th scope="col" class="col-md-8">Libellé</th>
                    <th scope="col" class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($lesNationalites as $nationalite){

                echo "<tr class='d-flex'>";
                echo "<td class='col-md-2' >$nationalite->num</td>";
                echo "<td class='col-md-8'>$nationalite->libelle</td>";
                echo  "<td class='col-md-2'>
                    <a href='FormNationalite.php?action=Modifier&num=$nationalite->num' class='btn btn-primary'> <i class='fas fa-pen'></i>  </a>
                    <a href='#modalSuppression' data-toggle='modal' data-suppression='SupprimerNationalite.php?num=$nationalite->num' class='btn btn-danger'> <i class='far fa-trash-alt'></i>  </a>
                </td>";
                echo "</tr>";
            }

            // 
           
            ?>
            </tbody>
                
        </table>

    </div>
    
<div id="modalSuppression" class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation de suppression</h5>
      </div>
      <div class="modal-body">
        <p>Voulez vous vraiment supprimer cette nationalite </p>
      </div>
      <div class="modal-footer">
        <a href=""  class="btn btn-primary" id="btnSuppr">Supprimer</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ne pas supprimer</button>
      </div>
    </div>
  </div>
</div>



</main>

<?php include "footer.php" ?>