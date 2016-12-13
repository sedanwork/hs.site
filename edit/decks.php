<?php
    require_once("database.php");
    require_once("func.php");
    $link = db_connect();
    $decks = decks_all($link);
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
                <a href="../decks.php">decks</a> 
                <a href="../videos.html">videos</a> 
                <a href="../about_me.html">about_me</a>
                <a href="../admin/index.php">edit</a>
            </div>
        </div>
    </header>
    <div id='content'>
        <h1>KattyFisher decks</h1>
        
        <div class="deckEdit"> 
            
            <a href="../admin/index.php?action=add" style="padding: 20;">Create deck</a>
            
            <div>
                        <table class="admin-table">
                            <tr style="color: grey;">
                                <th>Title</th>
                                <th>Img</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th></th>
                                <th></th>
                            </tr>
                <?php foreach ($decks as $deck): ?>                            
                            <tr class="deckEditTable">
                                <th><?php echo $deck['title']?></th>
                                <th><?php echo $deck['img']?></th>
                                <th><?php echo $deck['type']?></th>
                                <th><?php echo $deck['date']?></th>
                                <td>
                                    <a href="../admin/index.php?action=edit&id=<?=$deck['id']?>">edit</a>
                                </td>
                                <td>
                                    <a href="../admin/index.php?action=delete&id=<?=$deck['id']?>">delete</a>
                                </td>
                            </tr>
                <?php endforeach; ?>
                        </table>
            </div>

        </div>

    </div>
    
    <footer>
        <p class="foot">KattyFisher hs <br> Copyright &copy; 2016</p>
    </footer>
    
</body>
</html>