<?php

class Logout extends Controller{
    function __construct()
    {
        session_destroy();
        session_reset();
        header("Location:index");
    }
}