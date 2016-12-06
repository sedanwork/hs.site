<?php
    require_once("database.php");
    require_once("func.php");
    $link = db_connect();
    $decs = decs_all($link);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="../styles/style.css" rel="stylesheet">
    <title>KattyFisher HS</title>
</head>
<body>
    <header>
        <div id='headerInside'>
            <div id='logo'></div>
            <div id='name'>
                <a href="../index.html">KattyFisher</a>
            </div>
            <div id='navi'>
                <a href="decs.php">decs</a> 
                <a href="videos.html">videos</a> 
                <a href="about_me.html">about_me</a> 
            </div>
        </div>
    </header>
    <div id='content'>
        <h1>KattyFisher decs</h1>
        <div>
            <div>
    <?php foreach ($decs as $dec): ?>
        <div class="decUnit">

            <div class="decUnitTitle">
                Колода: <?php echo $dec['title']; ?>
            </div>          
           
            <div class="decUnitTitle">
                Тип колоды: <?php echo $dec['type']; ?>
            </div>
            
            <div class="decUnitTitle">
                Дата добавления: <?php echo $dec['date']; ?>
            </div>
            
             <img src="<?php echo $dec['img']; ?>"/>
            
            <a href="<?php echo $dec['img']; ?>" class="decUnitMore">
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