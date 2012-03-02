<!DOCTYPE html>
<html lang="en">
<head>
<title>INICIO - PAGINA PRINCIPAL| CAPERL</title>
<meta charset="utf-8">
<meta name="description" content="Place your description here">
<meta name="keywords" content="put, your, keyword, here">
<meta name="author" content="Templates.com - website templates provider">

<!--[if lt IE 7]>
     <link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="screen">
     <script type="text/javascript" src="js/ie_png.js"></script>
     <script type="text/javascript">
        ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');
     </script>
<![endif]-->
<!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->
</head>
<body id="page1">
<div class="wrap">
   <!-- header -->
   <header>
      <div class="container">
         <h1><a href="<?php echo $GLOBALS['baseURL']?>">CAPERL</a></h1>
         <nav>
            <ul>
               <li class="current"><a href="<?php echo $GLOBALS['baseURL']?>home" class="m1">INICIO</a></li>
               
               <li><a href="<?php echo $GLOBALS['baseURL']?>contact-us" class="m4">CONTACTANOS</a></li>
               <li class="last"><a href="<?php echo $GLOBALS['baseURL']?>ubicanos" class="m4" class="m5">UBICANOS</a></li>
            </ul>
         </nav>
         <form action="" id="search-form">
            
            <div class="rowElem">
               <?php if ($_SESSION['user']->roleName == 'invalid'){ ?>
            	<a href="<?php echo $GLOBALS['baseURL']; ?>login">Iniciar Sesion</a>
            	<a href="<?php echo $GLOBALS['baseURL']; ?>signup">Registrarse</a>
            <?php }else{ ?>
            	<a href="<?php echo $GLOBALS['baseURL']; ?>crud.php?close_session=hidden">Cerrar Sesion</a>
            <?php } ?></div>
            
         </form>
      </div>
   </header>
   <div class="container">
      <!-- aside -->
      <aside>
         <h3></h3>
         <ul class="categories">
         	<?php if ($_SESSION['user']->roleName == 'invalid'){?>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>about">Acerca de Nosotros</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>cursos">Cursos</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>servicios">Servicios Adicionales</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>asesorias">Asesorias</a></span></li>
              	<li class="last"><span><a href="<?php echo $GLOBALS['baseURL']; ?>descargas">Descargas</a></span></li>
            	
           <?php } ?>
           
            <?php if ($_SESSION['user']->roleName == 'participante'){?> 
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>about">Acerca de Nosotros</a></span></li>
                <!--<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>cursos">Cursos</a></span></li> -->
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>servicios">Servicios Adicionales</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>asesorias">Asesorias</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarPagos">Gestionar Pagos</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarCursos1">Gestionar Cursos</a></span></li>
	            <li><span><a href="<?php echo $GLOBALS['baseURL']; ?>certificados">Mis Certificados</a></span></li>
            	<li class="last"><span><a href="<?php echo $GLOBALS['baseURL']; ?>descargas">Descargas</a></span></li>
            <?php } ?> 
            
            <?php if ($_SESSION['user']->roleName == 'instructor'){?> 
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>about">Acerca de Nosotros</a></span></li>
               	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>servicios">Servicios Adicionales</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>asesorias">Asesorias</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>cursos">Consultar Cursos</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>participantes">Consultar Participantes</a></span></li>
               	<li class="last"><span><a href="<?php echo $GLOBALS['baseURL']; ?>descargas">Descargas</a></span></li>
            <?php } ?> 
            
             <?php if ($_SESSION['user']->roleName == 'coordinador'){?> 
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>about">Acerca de Nosotros</a></span></li>
               	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>servicios">Servicios Adicionales</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>asesorias">Asesorias</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>configurar">Configurar Sistema</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>participantes">Consultar Participantes</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarCursos2">Gestionar Cursos</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarPagos2">Gestionar Pagos</a></span></li>
               	<li class="last"><span><a href="<?php echo $GLOBALS['baseURL']; ?>descargas">Descargas</a></span></li>
            <?php } ?> 
            
             <?php if ($_SESSION['user']->roleName == 'admin'){?> 
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>about">Acerca de Nosotros</a></span></li>
               	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>servicios">Servicios Adicionales</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>asesorias">Asesorias</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>configurar2">Configurar Sistema</a></span></li>
               	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>list-participante">Consultar Participantes</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarCursos3">Gestionar Cursos</a></span></li>            		
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>list-certificado">Consultar Certificados</a></span></li>
            	<li><span><a href="<?php echo $GLOBALS['baseURL']; ?>gestionarPagos3">Gestionar Pagos</a></span></li>
               	<li class="last"><span><a href="<?php echo $GLOBALS['baseURL']; ?>descargas">Descargas</a></span></li>
            <?php } ?> 
        
         </ul>
         
         
        
         
         <h2>Últimas <span>Noticias</span></h2>
         
         <script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '@caperl',
  interval: 30000,
  title: 'CAPERL',
  subject: 'El espacio para la construccion del conocimiento.',
  width: 200,
  height: 300,
  theme: {
    shell: {
      background: '#00923a',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
         
      </aside>