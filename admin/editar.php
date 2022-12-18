<?php

include_once('../config/connection.php');

include_once('session.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


include_once('header.php');


?>
<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Post</h1>
        <form action="editar_fim.php" method="post" enctype="multipart/form-data">
            <?php foreach ($results as $post) : ?>
                <p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
                <label for="basic-url" class="form-label">Título</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="title" id="title" value="<?=$post['title']?>" aria-describedby="basic-addon3" placeholder="Digite o título" required>
                </div>
                <label for="myTextarea" class="form-label">Texto descritivo</label>
                <div class=" mb-3">
                    <textarea id="myTextarea" name="description" aria-label="With textarea" placeholder="Digite a descrição da imagem..."><?= $post['description'] ?></textarea>
                </div>
            <?php endforeach; ?>
            <input type="submit" class="btn btn-primary" value="EDITAR">
        </form>
    </div>
</main>
<?php
include "footer.php";
?>