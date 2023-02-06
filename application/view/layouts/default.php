<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="navigation">
        <div class="wrapper">
            <div class="header">
                <ul>
                    <li class="<?php echo $main; ?>"><a href="index">Главная страница</a></li>

                    <li class="<?php echo $about; ?>"><a href="about"> О нас</a></li>

                    <li class="<?php echo $contact;?>"><a href="contact">Контакты</a></li>
                    
                    <li class="<?php echo $phpinfo; ?>"><a href="phpinfo">phpinfo()</a></li>
                </ul>
                <h1>MVC ФРЕЙМВОРК</h1>
                <p class="task">Задание 24.5. Итоговый проект</p>
            </div>

            <div class="content">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</body>
</html>

