<!Doctype html>
<html>
<head>
	<link rel="stylesheet"  href="./css/styleCSS1.css">
	<title>Web-сайт</title>
	<meta charset="UTF-8">
</head>
<body>
<?php require "document/header.php" ?>
<div class="header">
	<h2>CSS</h2>
	
		<p class="ttext">CSS (Каскадные листы стиля) — язык стилей, используемый для разработки веб-страницы, чтобы сделать ее привлекательной. Причина использования CSS заключается в упрощении процесса представления веб-страниц. CSS позволяет применять стили к веб-страницам. Что еще более важно, CSS позволяет делать это независимо от HTML, который составляет каждую веб-страницу.</p>
	<img id="img1" src="./img/CSSTutorial.png">
		<h4>Есть три типа CSS, которые приведены ниже:</h4>
	<ul>
		<li>Inline CSS</li>
		<li>Internal or Embedded CSS</li>
		<li>External CSS</li>
	</ul>
		<h3 id="h3">Почему мы учимся CSS?</h3>
			<p class="ttext1">Укладка была важным свойством для любого веб-сайта на протяжении многих десятилетий. Это увеличивает стандарты и общий внешний вид веб-сайта, что облегчает для пользователя взаимодействовать с ним. 
			Веб-сайт не может быть сделано без CSS, как стиль должен, поскольку ни один пользователь не хотел 
			бы взаимодействовать с скучной и потертый веб-сайт. Таким образом, для знания веб-разработки, обучение CSS необходимо.</p>
	<ul>
		<li>База для веб-разработки: HTML и CSS является основным навыком, что каждый веб-разработчик должен знать. Это основной навык, который необходим для создания веб-сайта.</li>
		<li>Делает ваш сайт привлекательным: Веб-сайт, который скучно и просто не будет привлекать пользователей, скорее всего, так что добавление некоторых стиль, несомненно, сделать ваш сайт представляется пользователю.</li>
		<li>Делает дизайн прийти жить: Веб-разработчик несет ответственность за создание дизайна, данного ему в качестве живого продукта. CSS используется для укладки для разработки дизайна веб-сайта.</li>
		<li>Увеличивает пользовательский опыт веб-сайта: Веб-сайт с простым, но красивым пользовательским интерфейсом поможет пользователям пройти через веб-сайт легко. CSS используется для улучшения пользовательского интерфейса.</li>
		<li>Больше возможностей для карьерного роста: Поскольку CSS является основным требованием при изучении веб-разработки, для этого существуют широкие возможности для карьерного роста. Как фрилансер тоже вы можете приземлиться до многих проектов.</li>
	</ul>
		<p class="ttext1">Базовый формат: Это основная структура HTML веб-страницы, и мы используем стиль CSS внутри веб-страницы. На веб-странице мы используем внутренний CSS (т.е. добавление кода CSS внутри тега HTML-кода).</p>
	<h3 id="h3">Принцип работы CSS</h3>
		<p class="ttext1">Принцип работы основывается на том, что CSS находит определенный элемент HTML (заголовок) и определяет для него конкретное свойство (цвет), чтобы присвоить ему значение (красный). Прописывается это так:</p>
	<img id="snimok" src="./img/33333.png">
		<p class="ttext1">CSS применяется для выполнения стилистических решений, а также для компоновки документов типа HTML: задачи высоты, колонок, размещения элементов и так далее.</p><br>
	<p id="black">CSS может быть прописан как атрибут непосредственно в HTML.</p>
		<img id="snimok" src="./img/777.png">
	<p id="black">Можно применять тег< style >в теге< head >документа HTML.</p>
		<img id="snimok" src="./img/768768768.png">
	<p id="black"> CSS также можно прописать отдельным файлом и присвоить ему расширение .css. После этого необходимо связать файл через тег< link > . И HTML</p>
		<img id="snimok" src="./img/314214.png">
	<h3 id="h3">Продвижение сайта с помощью CSS</h3>
		<p id="plav">Появление и развитие CSS позволило сделать разработку веб-ресурсов более эффективной и результативной. Теперь управлять дизайном, корректировать его намного легче и удобнее. Также с помощью CSS удалось сократить код страниц, их размер. Это положительно сказалось на скорости загрузки, индексирование тоже стало проходить быстрее. Применение адаптивного подхода позволило сделать рывок в сфере мобильных версий интернет-ресурсов.<br><br>

		Для улучшения продвижения сайта специалисты рекомендуют выносить таблицы стилей CSS в отдельный документ, чтобы не увеличивать объем кода. Можно составить один или несколько таких файлов.<br><br>

		Ранее поисковики не умели читать таблицы стилей, что открывало возможность использовать их в черном SEO, например, для создания невидимых текстов. Сейчас лучше отказаться от использования CSS не по назначению.<br><br>

		CSS обладает рядом преимуществ и позволяет улучшить сайт, сделать его более привлекательным для посетителей. Однако важно правильно прописать все элементы.</p>
		
	<h3 id="h3">Исходный пример</h3>
		<p class="ttext1">Вот разметка простейшей HTML-страницы:</p>
	<img src="./img/html12.png">
		<p class="ttext1">Вот как такая страница выглядит в браузере:</p>
	<img src="./img/qewqe.png">
	
	<p class="ttext1">В разных браузерах, страница может отображаться немного по-разному, но в целом она будет такой, как на картинке выше.</p>

	<p class="ttext1">Как-то изменить внешний вид страницы, средствами HTML мы не можем, а ведь хочется? Согласитесь, обычно сайты выглядят более презентабельно. И вот тут в дело вступает CSS.</p>
	
	<h3 id="h3">Подключение CSS-стилей</h3>
	
		<p class="ttext1">Таблицы стилей делятся на внешние и внутренние.</p>
		
		<p class="ttext1"><b>Внешние таблицы</b> располагаются в отдельных файлах с расширением .css (например style.css)</p>
		
		<p class="ttext1">1. CSS-файл может быть подключен на страницу при помощи тега < link > , который должен находиться в секции < head >  HTML-страницы – это самый часто используемый способ подключения CSS:</p>
	<img id="mm" src="./img/img-2.jpg">
	
		<p class="ttext1">2. Другой путь, это использование правила @import . Чтобы это правило работало оно должно находиться в таблице стилей (внутренней или внешней), в самом начале, перед остальными правилами.</p>

		<p class="ttext1">Обычно @import используется внутри CSS-файлов. Также эта директива используется для подключения шрифтов.</p>
	<img id="mm" src="./img/img-3.jpg">
	
		<p class="ttext1">3. <b>Внутренние таблицы</b> стилей встраиваются в HTML-страницу, в секцию < head > , и находятся они внутри тегов < style ></p>
	<img id="mm" src="./img/img-4.jpg">
	
		<p class="ttext1">4. И последний способ подключения CSS – это встроенные стили. Они пишутся непосредственно внутри HTML-тегов в атрибуте style. Такие стили, действуют только на тот тег, в котором написаны.</p>
	<img id="mm" src="./img/img-5.jpg">
	
	<h3 id="h3">Начинаем писать CSS</h3>
		
		<p class="ttext1">
		Давайте напишем несколько CSS-правил для нашей HTML-страницы (разметка страницы находится вначале статьи).<br><br>

		Я, как бы, говорю себе: «хочу чтобы:<br>
		— на серо-голубом фоне страницы, посередине, располагался блок с содержимым страницы,<br>
		— ширина этого блока должна быть не более 1000 пикселей,<br>
		— фон блока белый,<br>
		— размер шрифта 16 пикселей,<br>
		— шрифт Open Sans,<br>
		— отступы текста от границ блока 30 пикселей».<br><br>

		Далее я решаю, что основной заголовок < h1 > : «должен располагаться по центру и иметь размер шрифта в 3 раза больший, чем размер текста».<br><br>

		Ну и еще: «картинка должна находиться справа и обтекаться текстом по левой стороне»<br><br>

		Вот CSS-правила, которые выполняют то, что я задумал (поместите их в файл style.css, который разместите в той же папке, что и html страницу):<br></p>
	<img src="./img/412424.png">
		<p class="ttext1">Теперь страница выглядит вот так, согласитесь уже лучше:</p>
	<img id="mm"src="./img/img-6.png">
	
	<h3 id="h3">Псевдоклассы</h3>
	
		<p class="ttext1">Псевдоклассы в CSS – это определенный набор ключевых слов, которые добавляются к селекторам через двоеточие.<br><br>

			Их предназначение дать возможность применить стили к элементу, когда происходит определенное событие, например когда указатель мыши находится над элементом.</p>
	<img id="mm"src="./img/4214.png">
		<p class="ttext1">Правило выше означает, что, когда указатель мыши находится над ссылкой, цвет её текст становится красным.

			<i>hover</i>  – это, наверно, самый часто используемый псевдокласс.</p>
	
</div><br><br>



<?php require "document/footer.php" ?>
</body>
</html>