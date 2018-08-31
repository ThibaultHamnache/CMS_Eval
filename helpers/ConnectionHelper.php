<?php
/**
 *
 */
class ConnectionHelper
{
    public static function checkConnectedUser()
    {
        if(isset($_SESSION[config::SESSION_KEY])) {
            $user = new UserModel();
            $user->checkConnection($_SESSION[config::SESSION_KEY]);
        } else {
            header('Location: ' . config::LOGIN_URI);die;
        }
    }
    
}
