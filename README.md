# JavaScript модуль для Битрикс CMS для интеграции видео Дзен

## Описание
Модуль обрабатывает ссылки на странице где он подключен и при клике открывает всплывающее окно в котором проигрывается видео. Модуль может работать с композитным режимом.

## Установка

Разместите данные файлы в каталоге /local/js/ вашего сайта. Таким образом, что бы был следующий путь /local/js/vasoft/dzen

## Подключение

Для подключения модуля в некешируемой области разместите код 
```php
\Bitrix\Main\UI\Extension::load(['vasoft.dzen']);
```

Сформируйте ссылки следующим образом:
```html
<a class="dzen-v" href="https://dzen.ru/video/watch/63bdca6abf5d6c2d570b7985" target="_blank" data-dzenid="v22-JKt9r4R0">Просмотр видео</a>
```
Это должен быть любой HTML тег, обязательно заполнен атрибут data-dzenId значение которого, можно узнать на Дзене в кое предлагаемом для вставки на сайте

Для активизации модуля на странице необходимо разместить следующий код
```html
<script type="text/javascript">
    if (typeof dzenLinks === 'undefined' || dzenLinks === null) {
        const dzenLinks = new BX.Vasoft.DzenLinks;
        dzenLinks.init('.dzen-v');
    }
</script>
```
В качестве параметра методу init передается селектор для отбора ссылок

## Сборка

Если требуется пересобрать модуль. Для этого необходимо использовать [@bitrix/cli](https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=12435&LESSON_PATH=3913.3516.4776.3635.12435)

Сборка во время разработки (наблюдение за изменениями) из каталога /local/js/vasoft/dzen
```bash
bitrix build -w 
```

Сборка для боевого сайта 
```bash
bitrix build --prod 
```
