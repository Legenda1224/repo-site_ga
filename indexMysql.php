<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
    <meta charset="UTF-8">
	<meta name="keywords" content="MySQL,Создание базы данных MySQL,MySQL сервер,Как работает MySQL " />
	<meta name="description" content="Что такое MySQL,Создание базы данных MySQL" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styleMysql.css">
    <title>Python</title>
</head>
<body>
<?php require "document.php/header.php"?>
<div class="container">
    <div class=" mysql">
        <h3>
            Mysql
        </h3>
        <p>
            <strong>MySQL</strong>-
            cвободная реляционная система 
            управления базами данных. Разработку и п
            оддержку MySQL осуществляет корпорация Oracle, 
            получившая права на торговую марку вместе с поглощённой
            Sun Microsystems, которая ранее приобрела шведскую компанию
            MySQL AB. Продукт распространяется как под GNU General Public 
            License, так и под собственной коммерческой лицензией. 
            Помимо этого, разработчики создают функциональность по 
            заказу лицензионных пользователей. Именно благодаря такому 
            заказу почти в самых ранних версиях появился механизм репликации.
        </p>
	<h3>
        Что такое база данных?
    </h3>
		<p>
            В нашем случае данные — это файлы, а база — место, где они хранятся. Данные могут принимать любой облик.<br> <br>
		    Представьте, что вы сделали плейлист в Spotify и добавили туда новый трек. Плейлист будет базой, а добавленная песня — данными. Каждая композиция, появившаяся в уже готовом плейлисте, станет частью существующей базы данных. Так она будет пополняться.<br><br>
		    Таких баз может быть много. Например, интернет-магазин, продающий гитары, тоже оперирует базами данных. В них хранятся инструменты из каталога, отсортированные по заранее продуманным критериям (производитель, количество струн и т.п.). <br><br>
		    Получается, что базы могут быть многоуровневыми и делиться на различные категории (разделы каталога в случае с магазином). Так формируются взаимосвязи между разными элементами базы данных, появляется структура. Отсюда и термин «реляционная» – он намекает на зависимость элементов друг от друга.<br><br>
		    Так что база данных — это набор структурированных данных с выстроенными между ними «взаимоотношениями» (делением на категории, к примеру). <br><br>
		    Визуально она представляет собой таблицу с тысячами элементов (ссылками, файлами, отрывками текста и т.п.). Чтобы этим добром управлять, необходимо как-то обозначить таблицы и научиться ими управлять. Тут и пригодится SQL.
        </p>
	<h3>
       Создание базы данных MySQL
    </h3>
		<p>
            Основной логической и структурной единицей деления данных в любой
			реляционной модели представления информации является база. Выше нее 
			идет лишь сервер. Любая база данных состоит из таблиц, каждая из которых 
			делится на столбцы. Рассмотрим все способы, как создать в MySQL базу данных.</p>
						
		<p>
            Среда PHPMyAdmin является одной из самых популярных оболочек для работы с MySQL.
			Ее интерфейс во многом облегчает администрирование баз данных.
        </p>
		<ul>
			<li>
                Заходим в оболочку;
            </li><br>
			<li>
                Переходим на вкладку «Базы данных»;
            </li><br>
			<li>
                В первое поле вводим название создаваемой базы данных,
                 а из выпадающего списка выбираем нужную кодировку.
                  В нашем случае это utf8_genegal_ci.
            </li><br>
	    </ul>
	<p>
    Длина имени базы данных не должна превышать 64 символа.
    </p>
	    <ul>
		    <li>
                Затем нажимаем на кнопку «Создать»:
            </li><br>
		<img src="./img/5325325.png" alt="">
		    <li>
                После этого имя созданной БД MySQL должно появиться в списках слева и внизу:
            </li><br>
		<img src="./img/4555555.png" alt="">
		    <li>
                В следующем окне вводим название таблицы и задаем количество столбцов;
            </li>
		    <li>
                Затем нажимаем на кнопку «Ok».	
            </li>	
	    </ul>
	<p>
        То же самое можно сделать, нажав на ссылку «Создать таблицу»
	    сразу под списком баз данных слева, но тогда в следующем окне 
        выведется заготовка без имени и с четырьмя столбцами.
    </p>
	
		<ul>
		    <li>
                Следующим шагом задаем структуру нашей таблицы. 
                Прописываем имена и типы данных, которые будут храниться в столбцах таблицы;
            </li><br>
		    <li>
                После этого нажимаем на кнопку «Сохранить»:
            </li><br>
		<img src="./img/rr.png" alt="">
		    <li>
                Таблица нашей БД MySQL создана и готова для заполнения данными:
            </li>
		<img src="./img/ttttt.png" alt="">
		</ul>
	
	<h3>
        <strong>Как работает MySQL </strong>
    </h3>
		<p>
            Structured Query Language появился в 1970 году
             и быстро заменил собой аналогичные, но устаревшие 
             VISAM и ISAM. Они были нужны для управления данными.
        </p><br>
		<p>
            В их «обязанности» входило:
        </p>
	<ul>
		<li>
            Извлечение запрашиваемой информации из ячеек базы данных по запросу клиента.
        </li><br>
		
		<li>
            Разного рода манипуляции с данными, включая добавление новых элементов
             в таблицу, удаление, изменение существующей в базе информации и ее 
             сортировку. Сюда же относят и некоторые другие редко используемые операции.
        </li><br>
		
		<li>
            Идентификация данных из базы. Я уже упомянул это выше. Речь идет об определении
             отдельных компонентов. К примеру, идентификации чисел в тексте как целых
             чисел для соответствующей их обработки. Также процесс идентификации необходим 
             реляционной сущности MySQL для определения взаимоотношений между разными слоями 
             таблиц в базе данных.
        </li><br>
		
		<li>
            Управление данными. 
        </li><br>
		
		<li>
            Защита и шифрования информации в таблицах.
        </li><br>
	</ul>
	<h3>
        <strong>MySQL сервер</strong>
    </h3>
		<p>
            Он такой же, как в любых клиент-серверных моделях. 
            Одно устройство делает запрос, а второе отвечает. 
            Запрашивающих может быть больше одного, все зависит от 
            сервера, сети и поставленных задач. 
        </p><br>
		<p>
            Технически немного иные, но по своей сути идентичные процессы 
            происходят в среде MySQL:
        </p>
	<ul>
		<li>
            Система создает базу данных для хранения информации (ее сортировки, идентификации и т.п.).
        </li>
		<li>
            Клиенты (другие компьютеры в сети) подают запросы к базе с помощью специфичных для SQL команд.
        </li>
		<li>
            Серверное приложение обрабатывает запрос и выдает ответ клиенту (выдает запрашиваемые данные).
        </li>
	</ul>
	
		<p> 
            Для взаимодействия с MySQL-сервером используются соответствующие
            утилиты. Некоторые работают только в командной строке. Некоторые 
            награждены графическим интерфейсом. Популярные решения – WorkBench,
            SequelPro, SQL Studio, TablePlus. Правда, большинство вебмастеров 
            предпочитает phpMyAdmin, так как та входит в LAMP и работает в браузере.
        </p>
		
	<h3>
        <strong>Почему MySQL так популярна?</strong>
    </h3>
		<p>
            Если взглянуть на статистику, то по частоте использования и
            упоминания в сети MySQL проигрывает только решению от компании 
            Oracle. Из-за чего так происходит? Конечно же, из-за ее преимуществ
            над существующими конкурентами.  
        </p><br>
		
		<p>
            На швейцарскую систему полагаются IT-корпорации ранга Facebook, потому что она:
        </p>
		<ul>
		    <li>Гибкая и несложная в использовании. На создание и поддержку БД уходит меньше времени. Требуется меньший уровень компетенции для того, чтобы полноценно работать с MySQL и реализовывать весь ее потенциал.</li><br>
		
		    <li>Имеет открытый исходный код, поэтому легко поддается модификации, и за это не нужно кому-то платить.</li><br>
		
		    <li>Поддерживается компанией Oracle и сообществом разработчиков, выступающих за развитие opensource-приложений.</li><br>
		
		    <li>Работает шустрее конкурентов. Внутренняя структура MySQL позволяет ей разгребать завалы из таблиц и строк за секунды. Независимо от специфичности связей между данными и их количества, сервер обрабатывает запросы любой сложности быстрее других БД. </li><br>
		
		    <li>Стала именем нарицательным и вместе с этим неким стандартом в индустрии. Компании ищут сотрудников, умеющих работать с MySQL, интернет пестрит инструкциями по работе как раз с MySQL-серверами.</li><br>
		
		    <li>Может похвастаться высоким уровнем защиты данных благодаря системе выдачи прав и продвинутой системе управления пользователями. А еще тут есть верификация на базе хостинга и шифрование.</li><br>
	    </ul>
	
	<h3>
        <strong>Недостатки MySQL</strong>
    </h3>
		<p>
            Не обошлось без как минимум 4 увесистых ложек дегтя в бочку обсуждаемой СУБД.
        </p><br>
	
		<ol>
		    <li>
                Гибкая и несложная в использовании. На создание и поддержку БД 
                уходит меньше времени. Требуется меньший уровень компетенции для того, чтобы 
                полноценно работать с MySQL и реализовывать весь ее потенциал.
            </li><br>
		
		    <li>
                Имеет открытый исходный код, поэтому легко
                 поддается модификации, и за это не нужно кому-то платить.
            </li><br>
		
		    <li>
                Поддерживается компанией Oracle и сообществом разработчиков, 
                выступающих за развитие opensource-приложений.
            </li><br>
		
		    <li>
                Работает шустрее конкурентов. Внутренняя структура MySQL позволяет
                 ей разгребать завалы из таблиц и строк за секунды. Независимо от 
                 специфичности связей между данными и их количества, сервер
                  обрабатывает запросы любой сложности быстрее других БД. 
            </li><br>
		
		    <li>
                Стала именем нарицательным и вместе с этим неким стандартом в индустрии.
                 Компании ищут сотрудников, умеющих работать с MySQL, 
                 интернет пестрит инструкциями по работе как раз с MySQL-серверами.
            </li><br>
		
		    <li>
                Может похвастаться высоким уровнем защиты данных благодаря системе выдачи 
                прав и продвинутой системе управления пользователями. А еще 
                тут есть верификация на базе хостинга и шифрование.
            </li><br>
	    </ol>
    </div>
</div>
        <div class="footer">
    <div class="header">
         Информационный <br>портал
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
<!-- <script src=./js/script.js></script> -->
<?php require "document.php/footer.php"?>
</body>
</html>