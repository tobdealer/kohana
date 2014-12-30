<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo URL::base();?>assets/css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

 <?= View::factory('template/head'); ?> 

 <div id="content">
        
        <?= $content; ?>
        
</div>



</body>
  

</html>
        