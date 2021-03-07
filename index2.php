<!Doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/styleHTML1.css">
	<title>Web-сайт</title>
	<meta charset="UTF-8">
</head>
<body>
<?php require "document/header.php" ?>

<div class="cont2">
	<h2>HTML</h2>
		<p id="text">HTML-Стандартизированный язык разметки веб-страниц во Всемирной паутине. Код HTML интерпретируется браузерами; полученная в результате интерпретации страница отображается на экране монитора компьютера или мобильного устройства.</p>
		<img id="img3" src="./img/HTML-Tutorials.png"><br>
		<h3>Зачем использовать HTML?</h3>
		<p id="text1">HTML помогает структурировать наш сайт хорошо. То, как скелетная система придает структуру человеческому телу аналогичным образом HTML, действует как скелет для веб-сайта, без него веб-сайт не может быть сделан. Если вы хотите работать в качестве разработчика программного обеспечения, особенно в области веб-разработки, то изучение HTML является обязательным, потому что без знания об этом вы не можете создать веб-сайт.</p>
			<ul class="mask">
		<li><p id="baza">База для создания веб-сайтов:</p> HTML является основной необходимостью разработчик должен знать при создании веб-сайта с нуля.</li>
		<li><p id="baza">Изучите веб-разработку:</p> HTML является первым шагом на пути к обучению веб-разработке. Как только вы узнаете HTML, вы можете создавать простые, статические веб-сайты очень легко.</li>
		<li><p id="baza">Может стать фрилансером:</p> Поскольку веб-разработка имеет наилучшие возможности в фрилансе, поэтому изучение HTML, безусловно, поможет вам получить лучшие предложения по развитию веб-сайта на рынке.</li>
		
		</ul>
		<h3>Структура HTML-документа</h3>
		<p id="text1">HTML — теговый язык разметки документов. Любой документ на языке HTML представляет собой набор элементов, причём начало и конец каждого элемента обозначается специальными пометками — тегами. Элементы могут быть пустыми, то есть не содержащими никакого текста и других данных. В этом случае обычно не указывается закрывающий тег (например, тег переноса строки < br > — одиночный и закрывать его не нужно) . Кроме того, элементы могут иметь атрибуты, определяющие какие-либо их свойства (например, атрибут href=" у ссылки). Атрибуты указываются в открывающем теге. Вот примеры фрагментов HTML-документа:</p>
		<ul class="mask2">
		<li>< strong >Текст между двумя тегами — открывающим и закрывающим.< /strong ></li>
		<li>< a href="http://www.example.com">Здесь элемент содержит атрибут href, то есть гиперссылку.</a></li>
		<li>А вот пример пустого элемента: < br/ ></li>
		
		</ul>
		<p id="text1">Регистр, в котором набрано имя элемента и имена атрибутов, в HTML значения не имеет (в отличие от XHTML). Элементы могут быть вложенными. Например, следующий код:</p>
		<img id="img2" src="./img/123232323213213.png"><br><br>

		<h3>Структура веб-страницы</h3>	
			<p id="text1">Для указания на структуру используются теги:</p>

		<ul id="text1">
			<li>< header > — шапка документа</li>
			<li>< nav> — навигация по сайту</li>
			<li>< article > — статья</li>
			<li>< aside > — боковая панель</li>
			<li>< footer > — подвал</li>

		</ul>

			<p id="text1">Эти теги позволяют поисковым системам более точно определять семантику сайта.</p>
		<img class="imggg" src="./img/123123123123123123213.png">
		
		<h3>Таблицы</h3>
			<p id="text1">Таблица задается тегами:</p>
		<ul id="text1">
			<li>< table > — общий контейнер</li>
			<li>< tr > — строка</li>
			<li>< td > — ячейка</li>
			<li>< th > — заголовок столбца</li>
			<li>< caption>  — название таблицы</li>

		</ul><br>
		
		<img  src="./img/831.png">
		
			<p id="text1">Простая таблица выглядит так:</p><br><br>
			
		<p id="tt">< table > — начало таблицы<br><br>

		< tr > — начало первой строки<br><br>

		< td >Ячейка 1</td><br><br>

		< td >Ячейка 2</td><br><br>

		< td >Ячейка 3</td><br><br>

		< /tr > — конец первой строки<br><br>

		< tr > — начало второй строки<br><br>

		< td >Ячейка 4</td><br><br>

		< td >Ячейка 5</td><br><br>

		< td >Ячейка 6</td><br><br>

		< /tr > — конец второй строки<br><br>

		< /table > — конец таблицы<br><br></p>
			
			<h3>Текст без комментариев выглядит так:</h3>
		<img src="./img/001.png">
			<p id="text1">Сама таблица будет выглядеть так:</p>
		<img src="./img/tt.png">
		
		<h3>Формы</h3>
			<P id="text1">Формы используются для получения данных от пользователя. Тег form является контейнером для управляющих элементов.</P>
			<P id="text1">Пример простой формы:</p>
		<img src="./img/pp.png">
			<P id="text11">Простая форма</P>
		<img src="./img/form.png">
		
		
		<p id="text1">Для получения данных используется тег < input >:</p>
			<ul>
				<li>флажки < input type=»checkbox» ></i><br><br>
				<li>радиокнопки — < input type=»radio» ></li><br>
				<li>ввод текста — < input type=»text» ></li><br>
				<li>пароль — < input type=»password» ></li><br>
				<li>отправить форму — < input type=»submit» ></li><br>
			</ul>









		<h4>Особенности HTML: </h4>
		<ul>
			<li>Это легко узнать и простой в использовании.</li>
			<li>Она независима от платформы.</li>
			<li>Изображения, видео и аудио могут быть добавлены на веб-страницу.</li>
			<li>Гипертекст можно добавить в текст.</li>
			<li>Это язык разметки.</li>
		</ul>

		<h4>Зачем изучать HTML?  </h4>
		<ul>
			<li>Это простой язык разметки. Его реализация проста.</li>
			<li>Он используется для создания веб-сайта.</li>
			<li>Помогает в разработке основ веб-программирования.</li>
			<li>Повысить профессиональную карьеру.</li>
</ul>

		<h4>Преимущества:  </h4>
		<ul>
			<li>HTML используется для создания веб-сайтов.</li>
			<li>Он поддерживается всеми браузерами.</li>
			<li>Он может быть интегрирован с другими языками, такими как CSS, JavaScript и т.д.</li>
</ul>

		<h4>Недостатки:  </h4>
		<ul>
			<li>HTML может создавать только статические веб-страницы. Для динамических веб-страниц необходимо использовать другие языки.</li>
			<li>Для создания простой веб-страницы необходимо написать большое количество кода.</li>
			<li>Функция безопасности не очень хороша.</li>
</ul>


	

</div><br><br>





<?php require "document/footer.php" ?>
</body>
</html>