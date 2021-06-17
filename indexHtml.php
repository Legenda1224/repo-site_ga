<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,Структура HTML-документа,
    Структура веб-страницы,Таблица html,Формы html,Особенности HTML" />
    <meta name="description" content="Что такое HTML структура веб-страницы" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleHtml.css">
    <title>HTML</title>
</head>
<body>
<?php require "document.php/header.php"?>
<div class="container">
    <div class="html">
        <h3>
            HTML
        </h3>
        <p>
            <strong>HTML</strong>
            -Стандартизированный 
		    язык разметки веб-страниц во Всемирной паутине. Код HTML
		    интерпретируется браузерами; полученная в результате 
		    интерпретации страница отображается на экране монитора
		    компьютера или мобильного устройства.
        </p>
        <h3>
            Структура HTML-документа
        </h3>
		<p>
            <strong>HTML — теговый язык разметки документов.</strong> 
            Любой документ на языке HTML представляет собой набор 
            элементов, причём начало и конец каждого элемента 
            обозначается специальными пометками — тегами. Элементы 
            могут быть пустыми, то есть не содержащими никакого текста 
            и других данных. В этом случае обычно не указывается закрывающий 
            тег (например, тег переноса строки < br > — одиночный и закрывать его не нужно) 
            . Кроме того, элементы могут иметь атрибуты, определяющие какие-либо их свойства
            (например, атрибут href=" у ссылки). Атрибуты указываются в открывающем теге.
            Вот примеры фрагментов HTML-документа:
        </p>
		<ul>
		    <li>
                < strong >Текст между двумя тегами — открывающим и закрывающим.< /strong >
            </li>
		    <li>
                < a href="http://www.example.com">< /a>
                Здесь элемент содержит атрибут href, то есть гиперссылку.
            </li>
		    <li>
                А вот пример пустого элемента: < br/ >
            </li>
		</ul>
        <p>
            Регистр, в котором набрано имя элемента и имена атрибутов, 
			в HTML значения не имеет (в отличие от XHTML). Элементы могут быть
			вложенными. Например, следующий код:
        </p>
		<img id="snimok" src="./img/123232323213213.png" alt="">
		<h3>
            Структура веб-страницы
        </h3>	
		<p>
            <strong>Для указания на структуру используются теги:</strong>
        </p>
		<ul >
			<li>< header > — шапка документа</li>
			<li>< nav> — навигация по сайту</li>
			<li>< article > — статья</li>
			<li>< aside > — боковая панель</li>
			<li>< footer > — подвал</li>
		</ul>
        <p>
            Эти теги позволяют поисковым системам более точно определять семантику сайта.
        </p>
        <img id="snimok2" src="./img/123123123123123123213.png" alt="">

        <h3>
            Таблицы
        </h3>
		<p>
            <strong>Таблица задается тегами:</strong>
        </p>
		<ul>
			<li>
                < table > — общий контейнер
            </li>
			<li>
                < tr > — строка
            </li>
			<li>
                < td > — ячейка
            </li>
			<li>
                < th > — заголовок столбца
            </li>
			<li>
                < caption>  — название таблицы
            </li>
		</ul>
		<img  class= "snimok3" src="./img/831.png">
		<p>
            Простая таблица выглядит так:
        </p>
			
		<p>
            < table > — начало таблицы<br><br>

		    < tr > — начало первой строки<br><br>

		    < td >Ячейка 1< /td><br><br>

		    < td >Ячейка 2< /td><br><br>

		    < td >Ячейка 3< /td><br><br>

		    < /tr > — конец первой строки<br><br>

		    < tr > — начало второй строки<br><br>

		    < td >Ячейка 4< /td><br><br>

		    < td >Ячейка 5< /td><br><br>

		    < td >Ячейка 6< /td><br><br>

		    < /tr > — конец второй строки<br><br>

		    < /table > — конец таблицы<br><br>
        </p>
		<h2>
            <strong>Текст без комментариев выглядит так:</strong>
        </h2>
		<img class="snimok4"  src="./img/001.png">
		<p>
            Сама таблица будет выглядеть так:
        </p>
		<img class="snimok4" src="./img/tt.png">
		<h3>
           Формы
        </h3>
		<p>
            Формы используются для получения данных от пользователя. 
            Тег form является контейнером для управляющих элементов.
        </p>
		<p>
            Пример простой формы:
        </p>
		<img class="snimok4" src="./img/pp.png">
		<p>
            Простая форма
        </p>
		<img class="snimok4" src="./img/form.png">
		<p>
            Для получения данных используется тег < input >:
        </p>
		<ul>
			<li>
                флажки < input type=»checkbox» >
            </li><br>
			<li>
                радиокнопки — < input type=»radio» >
            </li><br>
			<li>
                ввод текста — < input type=»text» >
            </li><br>
			<li>
                пароль — < input type=»password» >
            </li><br>
			<li>
                отправить форму — < input type=»submit» >
            </li><br>
		</ul>


		<h3>
            Особенности HTML:
        </h3>
		<ul>
			<li>
                Это легко узнать и простой в использовании.
            </li>
			<li>
                Она независима от платформы.
            </li>
			<li>
                Изображения, видео и аудио могут быть добавлены на веб-страницу.
            </li>
			<li>
                Гипертекст можно добавить в текст.
            </li>
			<li>
                Это язык разметки.
            </li>
		</ul>
    </div>
</div>
<div class="footer">
    <div class="header">
         <h4>Информационный <br>портал</h4>
         <nav>
      <ul class=nav_link>
              <li><a href="index.php">Главная</a></li><br>
              <li><a href="indexHtml.php">HTML</a></li><br>
              <li><a href="indexCSS.php">CSS</a></li><br>
              <li><a href="indexJava.php">Java</a></li><br>
          </ul>
      </nav>
      <nav>
          <ul class=nav_link>
              <li><a href="indexJavaScript.php">JavaScript</a></li><br>
              <li><a href="indexPhp.php">PHP</a></li><br>
              <li><a href="indexPython.php">Python</a></li><br>
              <li><a href="indexMysql.php">Mysql</a></li><br>
          </ul>
      </nav>
      <form action="contact.php" method="POST">
            <input type="email" name="email" placeholder="Введите ваш email"><br>
            <input class="knopka" type="submit" submit="отправить">
      </form>
  </div>
</div>
<?php require "document.php/footer.php"?>
</body>
</html>