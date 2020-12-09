<?php


namespace app\model\user_model;


use app\model\DBconnect;

class MemberModel extends DBconnect
{
    public function login($userName)
    {
        $sql = "SELECT userName,passWord FROM users where userName=:userName";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userName",$userName);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function adminLogin($admin){
        $sql = "SELECT userName,passWord FROM admin where userName=:userName";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(":userName",$admin);
        $stmt->execute();
        return $stmt->fetch();
    }
}