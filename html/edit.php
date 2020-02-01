<?php 
    require_once('../classes/Article.php');
    require_once('../classes/User.php');
    require_once('../classes/DBConnection.php');
    $db = new DBConnection('mySettings.ini');
    if($_POST) {
        $db->doQuery('UPDATE articles SET title="' . $_POST["title"] . '", content="' . $_POST["content"] . '" WHERE id=' . $_POST["id"]);
        echo("The article was updated");
        $id = $_POST['id'];
    } else {
        $id = $_GET['id'];
    }
    $response = $db->doQuery('SELECT * FROM articles WHERE id = ' . $id);
    $article = new Article(
        $response[0]['id'],
        $response[0]['title'],
        $response[0]['content'],
        $response[0]['authorId'],
    );


    session_start();
    // Not really sure if this is safe enough.
    if(!$_SESSION["User"]) {
        header("Location: /CoreTrekTest/html/");
        exit(0);   
    }

?>

<html>
<body>
<pre>
<?php
    if ($_SESSION["User"]->getId() == $article->getAuthorId()) {
        echo(
            '<form action="/CoreTrekTest/html/edit.php" method="POST">
                <input type="text" name="title" value="' . $article->getTitle() .'"/>
                <textarea rows="10" cols="100" name="content">' . $article->getContent() . '</textarea>
                <input type="hidden" name="id" value="' . $article->getId() . '" />
                <input type="submit" value="Edit"/>
            </form>'
        );
    } else {
        echo(
            '<h2>' . $article->getTitle() . '</h2>
            <p>' . $article->getContent() . '</p>'
        );
    }
    ?>
</pre>
</body>
</html>