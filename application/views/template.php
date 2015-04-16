<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=URL::base()?>media/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?=URL::base()?>media/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=URL::base()?>media/script.js"></script>
</head>
<body>
<?php
if(Auth::instance()->logged_in())
{echo '<style>.lgt {visibility: hidden;}</style>';$name = Auth::instance()->get_user()->username;} else {echo '<style>.lgn {visibility: hidden;}</style>'; $name = 'Гость';}
?>

<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="<?=URL::base()?>">Сайтсофт</a>
        <ul class="nav">
            <li><a href="<?php echo URL::site(); ?>">Главная</a></li>
            <li class="lgt"><a href="<?php echo URL::site('login'); ?>">Авторизация</a></li>
            <li class="lgt"><a href="<?php echo URL::site('reg'); ?>">Регистрация</a></li>
        </ul>

        <ul class="nav pull-right">
            <li class="lgn"><a><?php echo $name; ?></a></li>
            <li class="lgn"><a href="<?php echo URL::site('login/logout'); ?>">Выход</a></li>
        </ul>
    </div>
</div>

<div class="row-fluid">
    <?php echo $content ?>
</div>


</body>
</html>