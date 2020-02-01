<?php 

class User {

    protected $id;
    protected $username;
    protected $password;
    protected $name;


    /** 
     * User constructur
     * @param int $id
     * @param string $username
     * @param string $password
     * @param string $name
     */
    public function __construct(int $id, string $username, string $password, string $name) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    /**
     * Returns the username from a User object
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Returns the password from a User object
     * Should probably not be open like this
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Returns the full name from a User object
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}