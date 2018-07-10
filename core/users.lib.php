<?php

include ('base.lib.php');

class CUsers extends CBase {

  function __construct($db, $view) {
      parent::__construct($db, $view);

      $this->actions = array('signup', 'code', 'logout');
  }

  function signup() {
    // TODO DELETE FOR REAL SIGNUP
    $this->localsignup();
    return;
    // TODO DELETE FOR REAL signup

    $uri = urlencode('http://webnastaunik.by/instalinks/index.php?section=users&action=code');
    header("Location: https://api.instagram.com/oauth/authorize/?client_id=5a11bd44b2d34009a7b01c2af46592f1&redirect_uri={$uri}&response_type=code");
  }

  function localsignup() {
    $_POST['access_token'] = '5956800710.5a11bd4.3d6c86961f2249569a939a62e4f708d7';
    $_POST['user']['username'] = 'kiril.by';
    $_POST['user']['full_name'] = 'Kiril';
    $_POST['user']['id'] = '5956800710';
    $_POST['user']['profile_picture'] = 'https://scontent.cdninstagram.com/vp/d144acd682e56d381c1639b3fc8631a4/5BCD4609/t51.2885-19/s150x150/25009578_145335836118692_989145910460022784_n.jpg';
    $this->token();
  }

  function code() {
    if(count($_POST)>0) {
      $this->token();
      return;
    }
    // TODO if wrong oass or dont want to login
    $data = array('client_id' => '5a11bd44b2d34009a7b01c2af46592f1',
                  'client_secret' => '6ab6e1f24dfe44d4b131172ace69bb30',
                  'grant_type' => 'authorization_code',
                  'redirect_uri' => 'http://webnastaunik.by/instalinks/index.php?section=users&action=code',
                  'code' => $_GET['code']);
    $curl = curl_init('https://api.instagram.com/oauth/access_token');
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($curl);
    curl_close($curl);
  }

  function token() {
    $ustoken = $this->safepost('access_token');
    $usname = $this->db->safe($_POST['user']['username']);
    $usfullname = $this->db->safe($_POST['user']['full_name']);
    $usid = $this->db->safe($_POST['user']['id']);
    $uspicture = $this->db->safe($_POST['user']['profile_picture']);

    $cnt = $this->db->scalar("SELECT COUNT(*) FROM users WHERE userid = '$userid'");
    if($cnt == 0) {
      $this->db->query("INSERT INTO users(usid, usname, usfullname, uspicture, ustoken)
                               VALUES('$usid', '$usname', '$usfullname', '$uspicture', '$ustoken')");
    } else {
      $this->db->query("UPDATE users SET usname = '$usname', usfullname = '$usfullname',
                        'uspicture = '$picture', ustoken = '$ustoken' WHERE usid = '$usid'");
    }

    $_SESSION['usid'] = $usid;
    $_SESSION['usname'] = $usname;
    $_SESSION['uspicture'] = $uspicture;
    include('settings/path.set.php');
    header("Location: {$__basepath}admin");
  }

  function logout() {
    include('settings/path.set.php');

    unset($_SESSION['usid']);
    unset($_SESSION['usname']);
    unset($_SESSION['uspicture']);

    $curl = curl_init('http://instagram.com/accounts/logout/');
    curl_setopt($curl, CURLOPT_POST, true);
    $response = curl_exec($curl);
    curl_close($curl);
    header('Location: '.$__basepath);
  }

}

?>
