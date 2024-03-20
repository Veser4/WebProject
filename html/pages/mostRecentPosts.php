<div class="post">
    <a href="/pages/post?id=<?= $post["id"] ?>" class="post__link"></a>
    <img src="<?= $post["image_url"] ?>" alt="background" class="post__background">
    <div class="post-info">
        <h2 class="post__article"><?= $post["title"] ?></h2>
        <p class="post__description"><?= $post["subtitle"] ?></p>
    </div>
    <hr class="post__line">
    <div class="post-bottom">
        <div class="post-author">
            <img src="<?= $post["author_url"] ?>" alt="<?= $post["author"] ?>" class="post__author-image">
            <p class="post__author-name"><?= $post["author"] ?></p>
        </div>
         <p class="post__date"><?= date('F d, Y', $post["publish_date"]) ?></p>
    </div>
</div>