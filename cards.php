<?php
include "config/connection.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>


<div class="container" id="cards">
<div class="row row-cols-1 row-cols-md-4 g-4">
  <?php foreach ($results as $post): ?>
                <div class="col gy-5">
                    <div class="card">
                        <a href="post.php?id=<?= $post["id"] ?>">
                        <img src="<?= $post["image"] ?>" class="card-img-top" alt="#">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $post["title"] ?></h5>
                            <p class="card-text"><?= $post["description"] ?></p>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
</div>
</div>




