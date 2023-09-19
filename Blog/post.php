<?php 
include_once("templates/header.php"); 

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentId;

    foreach($posts as $post){
        if($post['id'] == $postId){

            $currentId = $post;
        }
    }
}

?>
<div class="container">

    <h1><?= $currentId['title']?></h1>

    <img style="width: 1280px;" src="<?= $BASE_URL ?>/img/<?= $currentId['img'] ?>" alt="<?= $currentId['title'] ?>">

    <h3><?= $currentId['description'] ?></h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quidem quae amet aut ad, beatae soluta veritatis quas sit. Doloribus quisquam corrupti ratione rerum dolor voluptas nisi harum ullam cupiditate!
    Explicabo perferendis exercitationem reprehenderit earum laboriosam dignissimos aspernatur architecto rerum cum, dolor dolorem odit culpa iste voluptates, accusamus obcaecati deserunt ut nobis. Perferendis id debitis quas alias magni rerum quisquam.
    Dolorum sint maxime natus, minima provident quibusdam animi ad, at inventore vel eaque enim aliquid et ratione necessitatibus autem voluptate eveniet laborum culpa velit praesentium ducimus maiores nisi! Hic, adipisci!
    Reiciendis possimus corporis cumque dolore qui. Accusamus dolore dolores nam iure excepturi debitis sunt? Atque accusamus sequi aperiam dignissimos harum. At ducimus nostrum quod similique nisi voluptatibus ab suscipit eum!
    Adipisci doloribus eaque illum consectetur inventore vero aliquam itaque. Enim expedita pariatur vel perspiciatis dolores nihil obcaecati nemo praesentium magnam? Reiciendis a neque aliquam nemo temporibus officiis perferendis? Aut, quas!</p>
    
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem quidem quae amet aut ad, beatae soluta veritatis quas sit. Doloribus quisquam corrupti ratione rerum dolor voluptas nisi harum ullam cupiditate!
    Explicabo perferendis exercitationem reprehenderit earum laboriosam dignissimos aspernatur architecto rerum cum, dolor dolorem odit culpa iste voluptates, accusamus obcaecati deserunt ut nobis. Perferendis id debitis quas alias magni rerum quisquam.
    Dolorum sint maxime natus, minima provident quibusdam animi ad, at inventore vel eaque enim aliquid et ratione necessitatibus autem voluptate eveniet laborum culpa velit praesentium ducimus maiores nisi! Hic, adipisci!
    Reiciendis possimus corporis cumque dolore qui. Accusamus dolore dolores nam iure excepturi debitis sunt? Atque accusamus sequi aperiam dignissimos harum. At ducimus nostrum quod similique nisi voluptatibus ab suscipit eum!
    Adipisci doloribus eaque illum consectetur inventore vero aliquam itaque. Enim expedita pariatur vel perspiciatis dolores nihil obcaecati nemo praesentium magnam? Reiciendis a neque aliquam nemo temporibus officiis perferendis? Aut, quas!</p>

    <aside>
        <h3>Tags</h3>
        <div>
          <?php foreach ($currentId['tags'] as $tag) { ?>
              <div class="btn btn-secondary me-3 mb-3">
                  <a class="text-light text-decoration-none" href="#"><?= $tag ?></a>
               </div>            
            <?php } ?>
        </div>
    </aside>
</div>


<?php include_once("templates/footer.php"); ?>