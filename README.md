# Процессор строк

 Преобразование каждого слова строки к верхнему регистру
 
## Требования

- PHP не ниже 5.0.0

## Установка

~~~bash
$ composer require olehandrei/my-composer-lib
~~~

## Использование

~~~php
<?php
$new_app = new StringModify();
echo $new_app->convertString('наШа мАша громкО плаЧет');
~~~