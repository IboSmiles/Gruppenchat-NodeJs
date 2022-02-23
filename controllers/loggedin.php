<?php



class Loggedin extends Controller
{
    public $showGroups = "";
    function __construct()
    {
        parent::__construct();
    }
    public function getAndShowGroups()
    {
        $obj = new LoginRegister();
        $groups = $obj->getGroups("nogroup");
        $result = "<input class='gorupsInside' type='hidden' value='$groups[1]' ><input class='useridLoggedin' type='hidden' value='" . $_SESSION['userid'] . "' >";
        $groups = explode(",", $groups[1]);
        $groups = array_unique($groups);
        $lastMessage = [];

        foreach ($groups as $key => $value) {
            if($key != 0){
                $values = $obj->getGroups(strtolower($value));
                if ($values[1] == "" ) {
                    $result .=  ' <li class="person" data-gotclicked="false" data-chat="' . $value . '">
                                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/thomas.jpg" alt="" />
                                    <span class="name">' . $value . '<br></span>
                                    <span class="time"></span>
                                    <span class="preview"></span>
                                  </li>';
                    
                } else if($value == ""){
                $result .= "";
                
                }else {
                    $result .=  ' <li class="person" data-gotclicked="false" data-chat="' . $value . '">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/382994/thomas.jpg" alt="" />
                    <span class="name">' . $value . '<br></span>
                    <span class="time">' . $values[2] . '</span>
                    <span class="preview">' . $values[0] . ': ' . $values[1] . '</span>
                  </li>';
                }
            }
           
        }
        return $result;
    }
    public function index()
    {
        include "view/header.php";

        $this->view->render("index");

        $this->view->render("loggedin");

        include "view/footer.php";
    }
}
