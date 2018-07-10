<!DOCTYPE html>
<html>
  <head>
    <title>BioLinks администрирование</title>
    <meta charset="UTF-8">
    <meta name="description" content="Организуйте свою педагогическую деятельность эффективно. Гомельский областной педагогический форум.">
    <meta name="keywords" content="Ежедневник учителя, информационные технологии, образование, школа, педагогический форум">
    <meta name="viewport" content="width=device-width, maximum-scale=2, minimum-scale=1" />

    <link rel="stylesheet" href="<?=$__basepath?>style/base.css" type="text/css"
          media="screen and (orientation:landscape) and (min-width: 601px)" />

    <link rel="stylesheet" href="<?=$__basepath?>style/base_vertical.css" type="text/css"
          media="screen and (orientation:portrait), screen and (max-width: 600px)" />

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>

  </head>
  <body>
    <div class="top">
      <a href="<?=$__basepath?>" class="mainlogo">
        <img src="<?=$__basepath?>style/logo.png" />
      </a>
      <div class="topmenu">
        <a href="<?=$__basepath?>content/pricing2">Уведомления</a>
        <a href="signup">Помощь</a>
        <a href="<?=$__basepath?>/signup"><?=$_SESSION['usname']?></a>
        <a href="<?=$__basepath?>/signup" class="button">Выйти</a>
      </div>
    </div>
    <div class="top">
      <div class="usermenu">
        <a href="<?=$__basepath?>content/pricing2">Ссылки</a>
        <a href="signup">Настройки</a>
      </div>
      <div class="topmenu">
        <img src="<?=$_SESSION['uspicture']?>" style="vertical-align: middle; width: 50px; border-radius: 25px; margin-right: 20px;" />
        <a href="<?=$__basepath?>" class="mainlogo">
          http<?=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : ''?>://<?=getenv('HTTP_HOST')?><?=$__basepath?><?=$_SESSION['usname']?>
        </a>
      </div>
    </div>


    <?php include $this->folder.'/'.$__page.'.php'; ?>

    <div class="footer">
      <h6>Компания: ООО «ЭЛБИ-трейд»</h6>
      <a href="/">Помощь</a>
      <a href="/">Правила использования и ограниченная ответственность</a>
      <a href="/">Сообщить о нарушении</a>
    </div>
  </body>
</html>
