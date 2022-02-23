<?php


class Show extends Module{
    function __construct()
    {
        echo $_SESSION["userid"];
    }
    public function index()
    {
        
    }
}