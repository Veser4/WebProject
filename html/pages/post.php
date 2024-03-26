<?php
  include('../modules/moduleSQL.php');
  $conn = createDBConnection();
  $sql = "SELECT * FROM post WHERE id = {$_GET['id']}";
  $result = $conn->query($sql);
  $post = ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : [];
  closeDBConnection($conn);
  if (!(array_key_exists('id', $_GET)) || !(is_numeric($_GET['id'])) || ($result->num_rows == 0)) {
    header("Location: http://localhost:8001/pages/errorPage?type=404");
    exit( );
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="http://localhost:8001/static/style/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header_content">
        <div class="menu_row">
          <div class="logo">
            <a href="http://localhost:8001/home" title="Escape"><img src="http://localhost:8001/static/images/logo_header.svg"  alt="Escape." width="92px" height="26px"></a>
          </div>
          <ul class="menu">
            <li><a href="http://localhost:8001/home" title="HOME">HOME</a></li>
            <li><a href="#" title="CATEGORIES">CATEGORIES</a></li>
            <li><a href="#" title="ABOUT">ABOUT</a></li>
            <li><a href="#" title="CONTACT">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main>
      <div class="main_container">
        <div class="main_container_content">
          <div class="article">
            <h1 class="article_title">#<?=$_GET['id']?> <?= $post[0]['title']?></h1>
            <div class="article_description">
              <?= $post[0]['subtitle']?>
            </div>
          </div>
          <div class="image">
            <img src="http://localhost:8001/static/images/<?= $post[0]['image_url']?>" alt="background" />
          </div>
          <div class="content_column">
            <div class="article_text">
              <p>
                <?= $post[0]['content']?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="footer_container">
        <div class="footer_content">
          <div class="menu_row">
            <div class="logo">
              <a href="http://localhost:8001/home"><img src="http://localhost:8001/static/images/logo_footer.svg"  alt="Escape." width="92px" height="26px"></a>
            </div>
            <ul class="menu">
              <li><a href="#" title="HOME">HOME</a></li>
              <li><a href="#" title="CATEGORIES">CATEGORIES</a></li>
              <li><a href="#" title="ABOUT">ABOUT</a></li>
              <li><a href="#" title="CONTACT">CONTACT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
