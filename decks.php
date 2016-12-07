<?php
    require_once("edit/database.php");
    require_once("edit/func.php");
    $link = db_connect();
    $decks = decks_all($link);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="styles/style.css" rel="stylesheet">
    <title>KattyFisher HS</title>
</head>
<body>
    <header>
        <div id='headerInside'>
            <div id='logo'></div>
            <div id='name'>
                <a href="index.html">KattyFisher</a>
            </div>
            <div id='navi'>
                <a href="decks.php">decks</a> 
                <a href="videos.html">videos</a> 
                <a href="about_me.html">about_me</a>
                <a href="admin/index.php">edit</a>
            </div>
        </div>
    </header>
    <div id='content'>
        <h1>KattyFisher decks</h1>
        <div>
            <div>
                <?php foreach ($decks as $deck): ?>
                    <div class="deckUnit">

                        <div class="deckUnitTitle">
                            Колода: <?php echo $deck['title']; ?>
                        </div>          

                        <div class="deckUnitTitle">
                            Тип колоды: <?php echo $deck['type']; ?>
                        </div>

                        <div class="deckUnitTitle">
                            Дата добавления: <?php echo $deck['date']; ?>
                        </div>

                         <img src="<?php echo $deck['img']; ?>"/>

                        <a href="<?php echo $deck['img']; ?>" class="deckUnitMore">
                         Подробнее
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
    
    <footer>
        <p class="foot">KattyFisher hs <br> Copyright &copy; 2016</p>
    </footer>
    
</body>
</html>