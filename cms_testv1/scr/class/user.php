<?php

class User{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;        
    }

    public function login($name, $pass)
    {
        $sql = 'SELECT * FROM USER WHERE user_name = ? AND user_pass = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name, $pass]);
        $return = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowcount() == 1)
        {
            $_SESSION['name'] = $return['user_name'];
            $_SESSION['login'] = 2;
            $_SESSION['admincms'] = 15;
            echo $_SESSION['name'];
            header("Refresh:0");
        }
        else
        {
            echo "błędne dane logowania !";
        }
    }


    public function logout()
    {
        session_destroy();
        header("Refresh:0");
    }
}