<?php
include_once("templates/header.php");
?>    

<main>
    <div class="d-flex justify-content-center">
        <?php foreach ($posts as $post) { ?>
            
            <div class="card col-md-12" style="width: 18rem;">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" class="card-img-top" alt="<?= $post['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $post['title']; ?></h5>
                    <p class="card-text"><?= $post['description'] ?></p>

                    <div>
                        <?php foreach ($post['tags'] as $tag) { ?>
                            <div class="btn btn-secondary me-3 mb-3">
                                <a class="text-light text-decoration-none" href="#"><?= $tag ?></a>
                            </div>
                            
                        <?php } ?>
                    </div>
                    <hr>
                    <a class="btn btn-primary" href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">Acessar</a>
                </div>
                
            </div>
        <?php } ?>
    </div>
</main>

<?php include_once("templates/footer.php");?>
