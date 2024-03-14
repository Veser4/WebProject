<?php
    $featuredPostBlock = [
        [
            "id" => 1,
            "category" => "PHOTOGRAPHY",
            "title" => "The Road Ahead",
            "subtitle" => "The road ahead might be paved - it might not be.",
            "author_image" => "images/logoMat.jpg",
            "author" => "Mat Vogels",
            "date" => "September 25, 2015",
            "background" => "images/background1.png",
            "link" => "index.html",
        ],
        [
            "id" => 2,
            "category" => "ADVENTURE",
            "title" => "From Top Down",
            "subtitle" => "Once a year, go someplace you’ve never been before.",
            "author_image" => "images/logoWilliam.jpg",
            "author" => "William Wong",
            "date" => "September 25, 2015",
            "background" => "/images/background2.png",
            "link" => "https://www.ispring.ru/",
        ],
    ];
    $mostRecentPostBlock = [
        [
            "id" => 1,
            "background" => "images/background3.jpg",
            "title" => "Still Standing Tall",
            "subtitle" => "Life begins at the end of your comfort zone.",
            "author_image" => "images/logoWilliam.jpg",
            "author" => "William Wong",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
        [
            "id" => 2,
            "background" => "images/background4.png",
            "title" => "Sunny Side Up",
            "subtitle" => "No place is ever as bad as they tell you it’s going to be.",
            "author_image" => "images/logoMat.jpg",
            "author" => "Mat Vogels",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
        [
            "id" => 3,
            "background" => "images/background5.png",
            "title" => "Water Falls",
            "subtitle" => "We travel not to escape life, but for life not to escape us.",
            "author_image" => "images/logoMat.jpg",
            "author" => "Mat Vogels",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
        [
            "id" => 4,
            "background" => "images/background6.png",
            "title" => "Through the Mist",
            "subtitle" => "Travel makes you see what a tiny place you occupy in the world.",
            "author_image" => "images/logoWilliam.jpg",
            "author" => "William Wong",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
        [
            "id" => 5,
            "background" => "images/background7.png",
            "title" => "Awaken Early",
            "subtitle" => "Not all those who wander are lost.",
            "author_image" => "images/logoMat.jpg",
            "author" => "Mat Vogels",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
        [
            "id" => 6,
            "background" => "images/background8.png",
            "title" => "Try it Always",
            "subtitle" => "The world is a book, and those who do not travel read only one page.",
            "author_image" => "images/logoMat.jpg",
            "author" => "Mat Vogels",
            "date" => "9/25/2015",
            "link" => "https://www.ispring.ru/",
        ],
    ];
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
    <link rel="stylesheet" href="style/mainPageStyle.css">
    <title>MainPage</title>
</head>
<body>
    <header class="header">
        <img src="images/HeaderBackground.jpg" alt="Header Background" class="header__background-image">
        <div class="menu">
            <div class="menu-row">
                <a href="#" title="Escape"><img src="images/logo_footer.svg" alt="Escape." class="main-menu__logotype"></a>
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
        <div class="article">
            <h1 class="article__title">Let's do it together.</h1>
            <p class="article__description">We travel the world in search of stories. Come along for the ride</p>
            <a class="article__button" href="#mostRecent" title="View Latest Posts">View Latest Posts</a>
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
                <?php foreach ($featuredPostBlock as $post) { 
                    include("featuredPosts.php");
                }?>
            </div>
        </div>
        <div class="most-recent section">
            <h2 class="section__title">Most Recent</h2>
            <hr class="section__line">
            <div class="post-list">
                <?php foreach ($mostRecentPostBlock as $post) { 
                    include("mostRecentPosts.php");
                }?>
            </div>
        </div>
    </main>
    <footer class="footer">
        <img src="images/image_footer.png" alt="Footer Background" class="footer__background-image">
        <div class="menu">
            <div class="menu-row">
                <a href="#" title="Escape"><img src="images/logo_footer.svg" alt="Escape." class="main-menu__logotype"></a>
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