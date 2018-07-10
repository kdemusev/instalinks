<?php

include ('base.lib.php');

class CAdmin extends CBase {

  function __construct($db, $view) {
      parent::__construct($db, $view);

      $this->actions = array();
  }

  function entry() {


    $this->view->show('links', 'admin.php');
  }

}

?>
