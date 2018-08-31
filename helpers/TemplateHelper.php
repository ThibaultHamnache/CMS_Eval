<?php
/**
 *
 */
class TemplateHelper
{

  public static function createTemplate($templateName, stdClass $values)
  {
    $header = file_get_contents(config::TEMPLATE_DIRECTORY . config::HEADER);
    $emptyTemplate = file_get_contents(config::TEMPLATE_DIRECTORY . '/' . $templateName . '.html');
    $footer = file_get_contents(config::TEMPLATE_DIRECTORY . config::FOOTER);
    $result = $header . $emptyTemplate . $footer;
    foreach ($values as $key => $value) {
      //if the key is found inside the template, we replace it
      //If not, we do nothing to allow for greater flexibility
      if (strpos($result, '%%' . strtoupper($key) . '%%'))
      {
        $result = str_replace('%%' . strtoupper($key) . '%%', $value, $result);
      }
    }
    return $result;
  }
  // public static function showPages($templateName){
  //   $header = file_get_contents(config::TEMPLATE_DIRECTORY . config::HEADER);
  //   $emptyTemplate = file_get_contents(config::TEMPLATE_DIRECTORY . '/' . $templateName . '.html');
  //   $footer = file_get_contents(config::TEMPLATE_DIRECTORY . config::FOOTER);
  //   $result = $header . $emptyTemplate . $footer;
  // }
}

 ?>
