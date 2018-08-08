
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contato | Escola de Artes Cênicas Wilson Geraldo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Escola de Artes Cênicas de Santos Wilson Geraldo" />
	<meta name="keywords" content="endereco eac, contato eac santos, telefone eac wilson geraldo, escola de artes cenicas, curso de teatro em santos, teatro santista, endereco teatro guarany, curso de teatro" />
    <meta name="theme-color" content="#e55b2b"/>

	<meta property="og:title" content="Contato | Escola de Artes Cênicas Wilson Geraldo"/>
	<meta property="og:image" content="images/logoeacwg.png"/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content="Escola de Artes Cênicas Wilson Geraldo"/>
	<meta property="og:description" content="Um pouco sobre a Escola de Artes Cênicas de Santos Wilson Geraldo"/>

	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
        <?php
        if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	$mensagem = $_POST['mensagem'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "contato@eacsantos.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "lfelipevasconcellos@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "Contato pelo site"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $nome \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $telefone \n"; 
	$email_conteudo .= "Mensagem = $mensagem \n"; 
	//====================================================
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "</b>E-Mail enviado com sucesso!</b>"; 
					} 
			else{ 
					echo "</b>Falha no envio do E-Mail!</b>"; } 
	//====================================================
} 
?>

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-99642333-1', 'auto');
    ga('send', 'pageview');

    </script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
    
	<body>
		
	<div class="eac-loader"></div>
	
	<div id="page">
	<nav class="eac-nav">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-md-12 col-offset-0 text-center">
						 <div id="eac-logo"><img id="logoeac" src="images/logoeacwg.png" alt="Logo Escola de Artes Cênicas Wilson Geraldo"></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<li><a href="index.html">Início</a></li>
							<li><a href="galeria/index.html">Galeria</a></li>
							<li><a href="noticias.html">Notícias</a></li>						
							<li><a href="eventos.html">Eventos</a></li>
                            <li><a href="porqueeac.html">Por que EAC?</a></li>
                             <li><a href="sobre.html">A escola</a></li>
                            <!--<li class="has-dropdown">
								<a>A escola</a>
								<ul class="dropdown">
                                    <li><a href="#">História</a></li>
									<li><a href="sobre.html">Sobre a escola</a></li>
								</ul>
							</li>-->
							<li class="active"><a href="contato.php">Contato</a></li>  
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
            <button id="maior" class="botaoacess">+A</button>
			<button id="menor" class="botaoacess">-A</button>
         <div class="mapasitecontato">
                <p> Você está em: <a href="index.html"> Início</a> > Contato </p>
            </div>
		
		<div id="eac-contact">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center eac-heading">
					<h2>Dúvidas? Fale conosco!</h2>
					<p>Nos mande uma mensagem preenchendo corretamente os campos abaixo.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-8 animate-box">
					<h3>Nosso endereço</h3>
					<ul class="contact-info">
						<li><i class="icon-location4"></i>Praça dos Andradas, 100 - Centro - Santos -SP</li>
						<li><i class="icon-phone3" href="tel:+551332193827"></i>(13) 3219-3827</li>
						<li><i class="icon-location3"></i><a href="#">contato@eacsantos.com.br</a></li>
						<li><i class="icon-globe2"></i><a href="http://www.eacsantos.com.br">www.eacsantos.com.br</a></li>
					</ul>
				</div>
				<div class="col-md-7 col-md-pull-2 animate-box">
                    
                    
                    
                    <form action="<? $PHP_SELF; ?>" method="POST"> 
                        
                        
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" name="nome" placeholder="Nome" required>
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<input type="tel" class="form-control" name="telefone" placeholder="Telefone" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
                                <p>
								<textarea class="form-control" cols="30" rows="7" name="mensagem" placeholder="Mensagem" required ></textarea>
							</p></div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Enviar Mensagem" name="BTEnvia" class="btn btn-primary btn-modify">
							</div>
						</div>
					</div>
                        
                        
                    </form>
                    
                    
                    
                    
				</div>
			</div>
		</div>
	
	</div>
        
          <div class="container-wrap">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.7200213781093!2d-46.33403648554961!3d-23.93496638449861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0482fca7d195%3A0xad8f22bd0b6fa77d!2sPra%C3%A7a+dos+Andradas%2C+100+-+Centro%2C+Santos+-+SP%2C+11010-100!5e0!3m2!1spt-BR!2sbr!4v1492919294170" width="1060" height="250" style="border:0"></iframe>
        </div> 

<div class="container-wrap-footer">
            
		<footer id="eac-footer">
			<div class="col-md-4 text-center">
					<ul class="eac-footer-links adr">
				        <li class="street-address">Praça dos Andradas, 100</li>
                        <li class="postal-code">11010-100</li>
                        <li><span class="locality">Santos</span> - <span class="p-region">SP</span></li>
						<li><a class="tel" href="tel:+551332193827">(13) 3219-3827</a></li>
                        <li><a class="mail" href="mailto:contato@eacsantos.com.br">contato@eacsantos.com.br</a></li>
					</ul>
			</div>
            
			<div class="col-md-4 text-center">
				<h2><a href="index.html"><img id="logoeacfooter" src="images/logoeacwg.png" alt="Logo Escola de Artes Cênicas Wilson Geraldo"></a></h2>
            </div>
            
            <div class="col-md-4 text-center">
				 <iframe id="facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Feacsantos&tabs=timeline&width=280&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="130" style="border:none;overflow:hidden" ></iframe>
			</div>
            
            <div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block"> Escola de Artes Cênicas Wilson Geraldo &copy; Todos os direitos reservados.</small> 
                        <small class="block">Desenvolvido por <a href="https://www.facebook.com/vasconcellosluis" target="_blank">Luis Felipe Vasconcellos</a> e <a href="https://www.facebook.com/littlequeenofpeace" target="_blank">Camila Camargo.</a></small>
					</p>
				</div>
			</div>
		</footer>
	</div>
	</div>

	<div class="ancora ancoratopo">
		<a href="#" class="topo"><i class="icon-arrow-up2"></i></a>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>
    <script>
		$('button#maior').click(function(){
			$('div').animate({
				'fontSize' : '+=10'
			});
		});
		
			$('button#menor').click(function(){
			$('div').animate({
				'fontSize' : '-=5'
			});
		});
	</script>
	</body>
</html>

