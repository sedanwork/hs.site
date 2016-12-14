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
                <a href="../decks.php">decks</a> 
                <a href="../videos.html">videos</a> 
                <a href="../about_me.html">about_me</a>
                <a href="../admin/index.php">edit</a>
            </div>
        </div>
    </header>
    <div id='content'>
        <h1>KattyFisher heartstone site</h1>
                    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" enctype="multipart/form-data">
                        <label>Название колоды:
                            <div>
                                <input type="text" name="title" value="<?=$deck['title']?>" class="form-item" autofocus required>
                            </div>
                        </label>
                            <script type="text/javascript">
                                function getName (str){
                                if (str.lastIndexOf('\\')){
                                    var i = str.lastIndexOf('\\')+1;
                                }
                                else{
                                    var i = str.lastIndexOf('/')+1;
                                }						
                                var filename = str.slice(i);			
                                var uploaded = document.getElementById("fileformlabel");
                                uploaded.innerHTML = str;
                                }
                            </script>
                        <label>Ссылка на скрин:
                             <div class="form-item">
                             <div id="fileformlabel"></div>
                             <div class="selectbutton">Обзор</div>
                             <input type="file" name="img" value="C:/xampp/htdocs/hs.site/".<?=$deck['img']?> id="upload"/>
                             </div>
                        </label>
                  
                        <label>Тип колоды:
                            <div>
                                <input type="text" name="type" value="<?=$deck['type']?>" class="form-item" required>
                            </div>
                        </label>
                    
                        <label>Дата добавления:
                            <div>
                                <input type="date" name="date" value="<?=$deck['date']?>" class="form-item" required>
                            </div>
                        </label>
                    
                    
                    <input type="submit" value="Сохранить" class="btn">
                </form>
            </div>    
    <footer>
        <p>KattyFisher hs &copy; 2016</p>
    </footer>
    
</body>
</html>