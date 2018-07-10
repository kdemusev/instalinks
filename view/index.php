<!DOCTYPE html>
<html>
  <head>
    <title>BioLinks</title>
    <meta charset="UTF-8">
    <meta name="description" content="Организуйте свою педагогическую деятельность эффективно. Гомельский областной педагогический форум.">
    <meta name="keywords" content="Ежедневник учителя, информационные технологии, образование, школа, педагогический форум">
    <meta name="viewport" content="width=device-width, maximum-scale=2, minimum-scale=1" />

    <link rel="stylesheet" href="<?=$__basepath?>style/base.css" type="text/css"
          media="screen and (orientation:landscape) and (min-width: 601px)" />

    <link rel="stylesheet" href="<?=$__basepath?>style/base_vertical.css" type="text/css"
          media="screen and (orientation:portrait), screen and (max-width: 600px)" />
  </head>
  <body>
    <div class="top">
      <a href="<?=$__basepath?>" class="mainlogo">
        <img src="<?=$__basepath?>style/logo.png" />
      </a>
      <div class="topmenu">
        <a href="<?=$__basepath?>content/pricing2">Стоимость</a>
        <a href="signup">Помощь</a>
        <a href="<?=$__basepath?>/signup">Войти</a>
        <a href="<?=$__basepath?>/signup" class="button">РЕГИСТРАЦИЯ</a>
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
