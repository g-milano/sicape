
<!--
Below goes all the head import definitions before
start rendering de content view.
-->
<?php if(isset($_REQUEST['view'])) { ?>

  <title>CAPERL</title>

  <?php if($_REQUEST['view']==$GLOBALS["LOGIN_VIEW"] || $_REQUEST['view']==$GLOBALS["SIGNUP_VIEW"] || $_REQUEST['view']==$GLOBALS["CHANGE_PASSWORD_VIEW"]){ ?>
  	<script type="text/javascript" src="js/sha1.js"></script>
  <?php } ?>
 	<link rel="stylesheet" href="<?php echo $GLOBALS['baseURL'];?>css/default.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $GLOBALS['baseURL'];?>css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $GLOBALS['baseURL'];?>css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/cufon-replace.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/Myriad_Pro_300.font.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/Myriad_Pro_400.font.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/script.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/validations.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/sha1.js"></script>
	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/jquery.accordion.js"></script>
   	<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/jquery.easing.1.3.js"></script>
	<?php if($_REQUEST['view']=="add-participante"){?>
		<script type="text/javascript" src="<?php echo $GLOBALS['baseURL'];?>js/_user/signup.js"></script>
	<?php } ?>
	
<?php } ?>