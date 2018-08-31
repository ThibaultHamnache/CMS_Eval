<?php
class Config {
    const DB_SERVER = 'localhost',
          DB_NAME      = 'cms',
          USER  = 'root',
          PASS  = '000000',
          SESSION_KEY = 'currentUser',
          LOGIN_URI = '/auth/login',
          CLASS_SUFFIX = 'Controller',
          TEMPLATE_DIRECTORY = 'views',
          HEADER = '/layout/header.html',
          FOOTER = '/layout/footer.html',
          LOGOUT_URL = '/view/home',
          LOGIN_URL = '/view/listing';
}
 ?>
