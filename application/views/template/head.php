<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <br />
 <div style="margin:0px auto;"  align="center">
 <h1>Welcome</h1>
 </div>
 <?php if(!$_SESSION['logged_in']):?>
<form action="login" id="frm" method="post">
Username:<br>
<input type="text" name="username"></input><br>
Password:<br>
<input type="password" name="password"></input><br>
</form>
<table class="button">
        <tr><td onclick="document.getElementById('frm').submit();">
        
  <div class="b1 b11"></div>
  <div class="b1 b12">Einloggen</div>
  <div class="b1 b13"></div>
        </td>
        </tr></table>
        <?php else:?>
        <form action="logout" id="frm" method="post">
</form>
<table class="button">
        <tr><td onclick="document.getElementById('frm').submit();">
        
  <div class="b1 b11"></div>
  <div class="b1 b12">Ausloggen</div>
  <div class="b1 b13"></div>
        </td>
        </tr></table>
        <?php endif;?>