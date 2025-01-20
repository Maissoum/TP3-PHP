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
        <div class="col-3"> <a href="" class='btn-success'> <i class="fas fa-plus-circle"></i> Créer une nationalité </a></div>
    </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Numéro</th>
                    <th scope="col">Libellé</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($lesNationalites as $nationalite){

                echo "<tr>";
                echo "<td>$nationalite->num</td>";
                echo "<td>$nationalite->libelle</td>";
                echo  "<td></td>";
                echo "</tr>";
            }
            
            ?>
            </tbody>
                
        </table>

    </div>
</main>

<?php include "footer.php" ?>