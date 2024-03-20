<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost:8001/static/style/errorPageStyle.css">
    <title>Something Wrong</title>
</head>
<body>
    <main class="main">
        <h1 class="main__message">Hmm, something goes wrong</h1>
        <?php if ($_GET['type'] == 404) {?>
            <h2 class="main__description">Page not found</h2>
        <?php }?>
        <a href="/home" class="main__link-home">Back Home Page</a>
    </main>
</body>
</html>