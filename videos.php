<!DOCYTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>tudo sobre The New GYM</title>
	<link rel="stylesheet"  href="_css/estilo.css"/>
	<link rel="stylesheet" href="_css/video.css"/>
	<script src="_js/jquery-3.2.1.min.js"></script>
	
	<!--<script>
		/*function loadVideo(){
			var videos=["http://www.youtube.com/embed/GOSf1cOp8KE?rel=0","http://www.youtube.com/embed/l0E6Jh6a_0Y?rel=0"];
			videos.forEach(function bla(item, index) {
				var divVideos = document.getElementById("video");
				
				divVideos.innerHTML += '<br/><p><iframe  width="460" height="215" src="'+item+'" frameborder="0" allowfullscreen></iframe></p>';
								
				
				var iframe = document.createElement("IFRAME");
				iframe.width = 460;
				iframe.height = 215;
				iframe.src = item;
				divVideos.appendChild(iframe);
				
				//using jquery
				var $iframe = $('<iframe  width="460" height="215" frameborder="0" allowfullscreen></iframe>');
				$iframe.attr('src', item);
				$(".videoclass").append($iframe);
				//console.log(item + index);
			});
		
		} */
	</script> -->
	
</head>
<body onload="loadVideo()">
<div id="interface">

	<header id="cabecalho">
		<hgroup>
			<h1>The New GYM</h1>
			<h2>Everything Made at Home</h2>
		</hgroup>
		
		
		
	<nav id="menu">
		<h1>Menu Principal</h1>
	<ul>
		<li><a href="index.html">Home</a></li>
		<li><a href="alonga.html">Alongamentos</a></li>
		<li><a href="exercicio.html">Exercícios</a></li>
		<li><a href="videos.php">Videos</a></li>
		<li><a href="contato.html">Contato</a></li>
	</ul>	
	
	</nav>
	</header>

	<div id="video" >
	
		<?php
			$videos=["http://www.youtube.com/embed/GOSf1cOp8KE?rel=0","http://www.youtube.com/embed/l0E6Jh6a_0Y?rel=0"];
			foreach($videos as $video ){
		?>
				<br/><p><iframe  width="460" height="215" src="<?=$video?>" frameborder="0" allowfullscreen></iframe></p>
		<?php		
			}			
		?>
		
		 
	
		<!--<br/><p><iframe id="filme" width="460" height="215" src="https://www.youtube.com/embed/GOSf1cOp8KE?rel=0" frameborder="0" allowfullscreen></iframe></p>
		<p><iframe id="filme" width="460" height="215" src="https://www.youtube.com/embed/l0E6Jh6a_0Y?rel=0" frameborder="0" allowfullscreen></iframe></p>	-->
	</div>
	
	<div class="videoclass">
	</div>
	
	
	
	
	
	
	
	
	
	
		<footer id="rodape">
<p>Copyright &copy; 2017 - by Raynan Miranda <br/>
<a href="http://facebook.com/" target="_blank">Facebook</a> | 
<a href="http://twitter.com" target="_blank">Twitter</a></p><br/>
</footer>
	
</div>
</body>
</html>