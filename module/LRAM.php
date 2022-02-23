<?php
class LoginRegister extends Module
{
    function __construct()
    {
        parent::__construct(true);
    }

    public function registerAsMember($whichRow, $values, $table)
    {
        parent::insertInDatabase($whichRow, $values, $table);
    }

    public function checkLoginData($whichRow, $values, $table, $whereclause)
    {
        $db_data = parent::getFromDatabase($whichRow, $values[0], $table, $whereclause,["stmt" => '$stmt->bind_result($userid,$pw);',"return" => '$ret = [$userid,$pw];']);
        
        if ($values[0] == $db_data[0] && sha1(md5($values[1]) . "" . sha1($values[0])) == $db_data[1]) {
            $_SESSION["loggedin"] = true;
            $_SESSION["userid"] = $values[0];
            echo "success" . $values[0];
        }
    }
    public function getGroups($step)
    {
        if ($step == "nogroup") {
            $result = parent::getFromDatabase("userid,groups", $_SESSION["userid"], "members", "WHERE userid = '" . $_SESSION["userid"] . "'",["stmt" => '$stmt->bind_result($userid,$pw);',"return" => '$ret = [$userid,$pw];']);
            return $result;
        } else {            
            $result = parent::getFromDatabase("transmittor,message,time",$_SESSION["userid"],$step,"ORDER BY id DESC LIMIT 1",["stmt" => '$stmt->bind_result($userid,$pw,$time);',"return" => '$ret = [$userid,$pw,$time];']);
            return $result;
        }
    }
}
