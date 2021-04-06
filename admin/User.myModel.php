<?php
class User 
{
    private static $tablename = 'Users';
    public static function findAll(){
        return "select * from ".self::$tablename;
    }
}
$userId = $_GET['userId'];
echo 'select * from user where id='.$userId;
// echo htmlspecialchars(trim($query));
// $user = User::findAll();
// echo $user;
?>