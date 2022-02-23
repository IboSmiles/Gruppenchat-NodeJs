<?php
session_start();
include "libs/controller.php";
include "libs/module.php";
require "module/LRAM.php";
include "libs/boot.php";
include "libs/view.php";

include "config/database.php";
$host="/Projects/";
$server="http://localhost:5500/";
$boot = new Boot();
