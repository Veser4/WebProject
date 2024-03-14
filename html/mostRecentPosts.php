<div class="post">
    <a href="/post?id=<?= $post["id"] ?>" class="post__link"></a>
    <img src="<?= $post["background"] ?>" alt="background" class="post__background">
    <div class="post-info">
        <h2 class="post__article"><?= $post["title"] ?></h2>
        <p class="post__description"><?= $post["subtitle"] ?></p>
    </div>
    <hr class="post__line">
    <div class="post-bottom">
        <div class="post-author">
            <img src="<?= $post["author_image"] ?>" alt="<?= $post["author"] ?>" class="post__author-image">
            <p class="post__author-name"><?= $post["author"] ?></p>
        </div>
         <p class="post__date"><?= $post["date"] ?></p>
    </div>
</div>