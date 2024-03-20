<?php
    include('modules/moduleSQL.php');
    $conn = createDBConnection();
    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);
    $posts = ($result->num_rows > 0) ? $posts = $result->fetch_all(MYSQLI_ASSOC) : [];
    closeDBConnection($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost:8001/static/style/mainPageStyle.css">
    <title>MainPage</title>
</head>
<body>
    <header class="header">
        <img src="http://localhost:8001/static/images/HeaderBackground.jpg" alt="Header Background" class="header__background-image">
        <div class="menu">
            <div class="menu-row">
                <a href="http://localhost:8001/home" title="Escape"><img src="http://localhost:8001/static/images/logo_footer.svg" alt="Escape." class="main-menu__logotype"></a>
                <nav class="navigation">
                    <ul class="navigation-list">
                        <li class="navigation-list__item"><a href="http://localhost:8001/home" class="navigation-list__link" title="HOME">HOME</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="CATEGORIES">CATEGORIES</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="ABOUT">ABOUT</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="CONTACT">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="article">
            <h1 class="article__title">Let's do it together.</h1>
            <p class="article__description">We travel the world in search of stories. Come along for the ride</p>
            <a class="article__button" href="#MostRecentPosts" title="View Latest Posts">View Latest Posts</a>
        </div>
    </header>
    <main class="main">
        <div class="menu">
            <div class="menu-row">
                <nav class="navigation">
                    <ul class="navigation-list">
                        <li><a href="#" title="Nature" class='navigation-list__link'>Nature</a></li>
                        <li><a href="#" title="Photography" class='navigation-list__link'>Photography</a></li>
                        <li><a href="#" title="Relaxation" class='navigation-list__link'>Relaxation</a></li>
                        <li><a href="#" title="Vacation" class='navigation-list__link'>Vacation</a></li>
                        <li><a href="#" title="Travel" class='navigation-list__link'>Travel</a></li>
                        <li><a href="#" title="Adventure" class='navigation-list__link'>Adventure</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section featured-posts">
            <h2 class="section__title">Featured Posts</h2>
            <hr class="section__line">
            <div class="post-list">
                <?php foreach ($posts as $post) {
                    if ($post['featured'] > 0) {
                        include("pages/featuredPosts.php");
                    }
                }?>
            </div>
        </div>
        <div class="most-recent section" id='MostRecentPosts'>
            <h2 class="section__title">Most Recent</h2>
            <hr class="section__line">
            <div class="post-list">
                <?php foreach ($posts as $post) {
                    if ($post['featured'] === '0') {
                        include("pages/mostRecentPosts.php");
                    }
                }?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <img src="http://localhost:8001/static/images/image_footer.png" alt="Footer Background" class="footer__background-image">
        <div class="menu">
            <div class="menu-row">
                <a href="#" title="Escape"><img src="http://localhost:8001/static/images/logo_footer.svg" alt="Escape." class="main-menu__logotype"></a>
                <nav class="navigation">
                    <ul class="navigation-list">
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="HOME">HOME</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="CATEGORIES">CATEGORIES</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="ABOUT">ABOUT</a></li>
                        <li class="navigation-list__item"><a href="#" class="navigation-list__link" title="CONTACT">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
</body>
</html>