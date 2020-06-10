<?php
class Cms_F{
private $db;

public function __construct($db)
{
    $this->db = $db;        
}

public function mailtoall($content)
{
    $sql= 'SELECT user_email FROM USER';
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    while($return = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        mail($return['user_email'], 'wiadomosc ze strony', $content);
    }
}



}
?>


