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
    <div id="content_deck">
        <h1>KattyFisher decks</h1>
        <div>
            <div>
                <?php foreach ($decks as $deck): ?>
                    <div class="deckUnit">
                            <div class="decUnitImg">
                                <img src="images/war.png"/>
                            </div>
                        <div class="deckUnitTitle">
                            
                            <?php echo $deck['title'];?> <?php echo $deck['date']; ?>
                        </div> 
                        
                        
                        <a href="<?php echo $deck['img']; ?>" class="deckUnitMore">
                         Подробнее
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
    
    <footer>
        <p>KattyFisher hs &copy; 2016</p>
    </footer>
    
</body>
</html>