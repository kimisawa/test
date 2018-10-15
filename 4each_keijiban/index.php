<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
    <body>
        
        <div class="img1">
            <img src="./4eachblog_logo.jpg" width="300px">
        </div>
        <header>
            <div class="logo"></div>    
            <div class="nav">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
    <div class="main">
        <div class="left-contents">
            
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="35" name="handlename">
                    </div>

                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="35" name="title">
                    </div>

                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea rows="6" cols="60" name="comments"></textarea>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="送信する">
                    </div>
                </form>
            </div>

            <div class="title">
             <h2>タイトル</h2>
            　<div class='contents'>
                <P>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
                    </P>
                </div>
                    <div class='handlename'>posted by 通りすがり</div>
                
            </div>
            
            <?php
        
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
        $stmt=$pdo->query("select * from 4each_keijiban");
       
        echo"<div class='title'>";
            echo"<h2>タイトル</h2>";
            echo"<div class='contents'>";
            echo"記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。記事の内身。<br>";
            echo"<div class='handlename'>posted by 通りすがり</div>";
            echo"</div>";
        echo"</div>";
        
        while($row=$stmt->fetch()){
            
            echo "<div class='title'>";
            echo "<h2>".$row['title']."</h2>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
        
            
        </div>
        <div class="right">
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>handlename</li>
                <li>title</li>
                <li>comments</li>
            </ul>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </div>
        <footer>
            <div class="f">
                    <p>copyright internous | 4each blog is the one which provides A to Z about programming.</p>
            </div>
    </footer>
</body>
</html>