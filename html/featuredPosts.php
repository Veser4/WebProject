<div class="post">
    <a href="/post?id=<?= $post["id"] ?>" class="post__link"></a>
    <?php if ($post["category"] != "") {?>
        <div class="post__category <?=strtolower($post["category"]) ?>"><?= $post["category"] ?></div>
    <?php }?>
    <img src="<?= $post["background"] ?>" alt="background" class="post__background">
    <h2 class="post__article"><?= $post["title"] ?></h2>
    <p class="post__description"><?= $post["subtitle"] ?></p>
    <div class="post-bottom">
        <div class="post-author">
            <img src="<?= $post["author_image"] ?>" alt="<?= $post["author"] ?>" class="post__author-image">
            <p class="post__author-name"><?= $post["author"] ?></p>
        </div>
        <p class="post__date"><?= $post["date"] ?></p>
    </div>
</div>