<!doctype>
<html>
<head>
	<? 
	require_once "functions/functions.php";
	$news = getNews(1, $_GET["id"]);
	$title=$news ["title"];
	 require_once "blocks/head.php";
	?>
	
</head>

<body>
	<?php require_once "blocks/header.php" ?>
	<div id ="wrapper">
		<div id= "leftCol">
<!--
	<?php
			 echo'<div id="bigArticle"><img src="img/articles/'.$news["id"].'jpg" alt="Статья '.$news["id"].'" title="Статья '.$news["id"].'"
				 <h2>'.$news["title"].'</h2>
			<p>'.$news["full_text"].'</p>
				</div>';
			?>
-->
		

				</div>
		        <div class ="article">
					<div id ="bigArticle">
				<img src="img/article/3.jpg" alt="Статья1" title="Статья1"
				 <h2>Статья 1</h2>
			   <p>
				  Просто манекен текста печати и верстки промышленности. Lorem Ipsum был стандартным фиктивным текстом в отрасли еще с 1500-х годов, когда неизвестный принтер взял камбуз типа и скремблировал его, чтобы сделать книгу образцов типа. Он пережил не только пять веков, но и перескок в электронный набор, оставаясь практически неизменным.</p>
			   <a href="/article.php">
		                         <div class= "more">Далее</div>
		       </a>
		    </div>
	       </div>
    <?php require_once "blocks/rightCol.php"?>
     </div>
	<?php require_once "blocks/footer.php"?>																		 
</body>
</html>

	
