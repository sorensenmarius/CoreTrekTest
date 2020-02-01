<?php
    session_start();
    // Not really sure if this is safe enough.
    if(!$_SESSION["User"]) {
        header("Location: /CoreTrekTest/html/");
        exit(0);   
    }
    require_once('../classes/Article.php');
    require_once('../classes/DBConnection.php');
    $db = new DBConnection('mySettings.ini');  
    $response = $db->doQuery('SELECT * FROM articles');
    $articles = [];
    foreach($response as $article) {
        $articles[$article['id']] = new Article(
            $article['id'],
            $article['title'],
            $article['content'],
            $article['authorId'],
        );
    }
?>

<html>
<body>
<pre>
<?php 
    foreach($articles as $article) {
        echo('<p>
                <a href="edit.php?id=' . $article->getId() .'"><b>' . $article->getTitle() . '</b></a>
                <i>' . $article->getAuthorName() . '</i>
            </p>');
    }
?>
</pre>
</body>
</html>

<style>
a {
    text-decoration: none;
    color: #000;
}
</style>
