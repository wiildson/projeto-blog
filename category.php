<?php
    include "navbar.php";

?>
<?php
include_once('config/connection.php');

$cat = $_GET['cat'];

$stmt = $conectar->prepare('SELECT id, title, image, description, data FROM posts WHERE category = :cat');


$stmt->execute(array("cat" => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

if($stmt->rowCount() == 0){
    
    echo "
    
    <div class=\"container mt-5 mb-5\">
        <h3> Não foram encotrados posts para esta categorias </h3>
        <h5> Retorne ao menu ou clique em outra categoria...</h5>
    </div>
    
    
    ";
}
?>
<style>

.img-card{
    max-height: 180px;
    height: 100%;
}
</style>
<div class="container mb-5 mt-5">
<div class="container" id="cards">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($results as $post): ?>
          <div class="col gy-5">
            <div class="card">
              <img src="<?=$post["image"] ?>" class="img-card" alt="...">
              <div class="card-body">
                <h5 class="card-title">
<?= $post["title"] ?>
        </h5>
        <p class="card-text">
            <?= $post["data"] ?>
         </p>
                <p class="card-text">
<?= $post["description"] ?>
         </p>
         
                <a href="post.php?id=<?= $post["id"] ?>"><i class="fas fa-eye check-icon">Ver</i></a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
    </div>
</div>
</div>
<?php
    include "footer.php";

?>