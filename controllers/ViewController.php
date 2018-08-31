<?php
/**
 *
 */
class ViewController
{
  static public function listing()
  {
    $page = new PageModel;
    $page->getAll();
  }

  static public function home()
  {
    ConnectionHelper::checkConnectedUser();
    $page = new PageModel;
    echo TemplateHelper::createTemplate('home', $page->getOne('title', 'Home'));
  }
  static public function try()
  {
    $page = new PageModel;
    echo TemplateHelper::createTemplate('try', $page->getOne('title', 'Try'));
  }
  static public function page()
  {
    $page = new PageModel;
    echo TemplateHelper::createTemplate('page', $page->getOne('title', 'Page'));
  }
  static public function edit()
  {
    $page = new PageModel;
    echo TemplateHelper::createTemplate('edit', $page->getOne('title', 'Edit'));
  }
}


?>
