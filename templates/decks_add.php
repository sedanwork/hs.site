<!DOCTYPE html>

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
                <a href="templates/decks.php">decks</a> 
                <a href="templates/videos.html">videos</a> 
                <a href="templates/about_me.html">about_me</a> 
            </div>
        </div>
    </header>
    <div id='content'>
        <h1>KattyFisher heartstone site</h1>
    </div>
        <div>
                <form method="post" action="index.php?action=add">
                    <label>
                        Название колоды:
                        <input type="text" name="title" value="<?=$deck['title']?>" class="form-item" autofocus required>
                    </label>
                    <br>
                     <label>
                        Ссылка на скрин:
                        <textarea class="form-item" name="img" required><?=$deck['img']?></textarea>
                    </label>
                    <br>
                    <label>
                        Тип колоды:
                        <input type="text" name="type" value="<?=$deck['type']?>" class="form-item" autofocus required>
                    </label>
                    <br>
                    <label>
                        Дата добавления:
                        <input type="date" name="date" value="<?=$deck['date']?>" class="form-item" required>
                    </label>
                    <br>
                    
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>    
    <footer>
        <p>KattyFisher hs <br> Copyright &copy; 2016</p>
    </footer>
    
</body>
</html>