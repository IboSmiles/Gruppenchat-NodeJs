<?php
class View{
    public function render($tplName){
        include("view/$tplName.php");
    }
}