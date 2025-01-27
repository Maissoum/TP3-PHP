<?php include "header.php";
include "connexionPDO.php"; 
$num=$_POST['num']; // je récupère le libellé du fomulaire
$libelle=$_POST['libelle']; // je récupère le libellé du fomulaire

$req=$monPdo->prepare("update nationalite set libelle = :libelle where num = :num");
$req->bindParam(':num', $num );
$req->bindParam(':libelle', $libelle );
$nb=$req->execute();


echo '<div class="container mt-5">';     
echo '<div class="row">';     
    '<div class="col mt-5">';

if($nb == 1) 
{
    echo '<div class="alert alert-dismissible alert-success">
    La nationalité a bien été modifié 
    </div>';
}else 
{
    echo '<div class="alert alert-dismissible alert-danger">
    La nationalité n\'a bien été modifiée ! 
    </div>';
}
?>
    </div>
</div>

<a href="listeNationalite.php" class="btn btn-primary">Revenir à la liste des nationalités</a>

</div>
   


<?php include "footer.php" ?>