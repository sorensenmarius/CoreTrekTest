<?php 

class Article {

    protected $id;
    protected $title;
    protected $content;
    protected $authorId;


    /** 
     * User constructur
     * @param int $id
     * @param string $title
     * @param string $content
     * @param int $authorId
     */
    public function __construct(int $id, string $title, string $content, int $authorId) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->authorId = $authorId;
    }

    /**
     * Returns the id for the article
     * @return int
     */

    public function getId() {
        return $this->id;
    }

    /**
     * Returns the title of an article
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Returns the content of the article
     * @return string
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Returns the id for the user that wrote the article
     * @return int
     */
    public function getAuthorId() {
        return $this->authorId;
    }

    /**
     * Returns the name of the author
     * @return string
     */
    public function getAuthorName() {
        require_once('DBConnection.php');
        $db = new DBConnection('mySettings.ini');
        $res = $db->doQuery('SELECT name FROM users WHERE id=' . $this->authorId);
        return $res[0]['name'];
    }

}