<?php
class func 
{
    public function checkLoginState($dbh) 
    {
        if(!isset($_SESSION['id']) || !isset($_COOKIE['PHPSESSID']))
        {
            session_start();
        }
        if(isset($_COOKIE['userID']) && isset($_COOKIE['token']))
        {
            $query = "SELECT * FROM student WHERE id= :userID AND remember_token= :token";
            $userID = $_COOKIE['userID'];
            $token = $_COOKIE['token'];

            $stmt = $dbh->prepare($query);
            $stmt->execute(array(':userID' => $userID,':token' => $token));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['id'] > 0) 
            {
                $row['id'] == $_COOKIE['userID'] && 
                $row['remember_token'] == $_COOKIE['token'];
            }
        }
    }
}
