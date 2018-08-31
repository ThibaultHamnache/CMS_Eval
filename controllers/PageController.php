<?php
/**
 *
 */
class PageController
{
  protected $dbconnect;
  function __construct()
  {
    $this->dbconnect = new PDO('mysql:host=localhost;dbname=' . config::DB_NAME, config::USER, config::PASS);
  }
  function updatePage()
  {
    $request = $this->dbconnect->prepare('UPDATE pages SET `title` = '. $_POST['title'] .', `content` = '. $_POST['content'] .' WHERE `title` = '. $result->title .' ');
  }
}

 ?>
