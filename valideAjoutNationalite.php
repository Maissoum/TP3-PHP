<?php include "header.php";
include "connexionPDO.php"; 
$libelle=$_POST['libelle']; // je récupère le libellé du fomulaire
$req=$monPdo->prepare("insert into nationalite(libelle) values(:libelle)");
$req->bindParam(':libelle', $libelle );
$nb=$req->execute();

echo '<div class="container mt-5">';     

if($nb == 1) 
{
    echo '<div class="alert alert-dismissible alert-success">
    La nationalité a bien été ajoutée 
    
  </div>';
}else 
{
    echo '<div class="alert alert-dismissible alert-danger">
    La nationalité n\'a bien été ajoutée ! 
    
    </div>';

}
?>
<a href="listeNationalite.php" class="btn btn-primary">Revenir à la liste des nationalités</a>

</div>
   


<?php include "footer.php" ?>