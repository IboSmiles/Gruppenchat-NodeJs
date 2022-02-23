<?php
class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        include "view/header.php";
        $this->view->render("index");
        include "view/footer.php";
    }

    public function registerAsMember($name, $email, $userid, $pw)
    {
        if (!$name == "" || !$email == "" || !$userid == "" || !$pw == "") {

            $reg = new LoginRegister;

            $reg->registerAsMember("name,email,userid,pw", [$name, $email, $userid, sha1($pw . "" . sha1($userid))], "members");
        } else {
            echo "Missing input";
        }
    }

    public function loginMember($userid, $pw)
    {
        if (!$userid == "" || !$pw == "") {
            $log = new LoginRegister;
            $log->checkLoginData("userid,pw",[$userid,$pw],"members","WHERE userid = '".$userid."'");
            echo $pw;
        } else {
            echo "Missing input";
        }
    }
}
