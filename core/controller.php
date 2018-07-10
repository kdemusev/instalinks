<?php

include("data.lib.php");
include("view.lib.php");

class CController {
    private $db;
    private $view;

    function __construct() {
        $this->db = new CData();
        $this->view = new CView();

        date_default_timezone_set('Europe/Minsk');
        session_start();
    }

    function run() {
        $sections = array('content', 'users', 'admin');
        if(!isset($_GET['section']) || !in_array($_GET['section'], $sections)) {
            $_GET['section'] = 'content';
        }
        $section = $_GET['section'];
        include("$section.lib.php");
        $section = "C".$section;
        $pass = new $section($this->db, $this->view);
        $pass->run();
    }
}
