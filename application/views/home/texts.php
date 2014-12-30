<?php foreach($text as $t => $v):?>
<?php echo $v->text;?><br>
<?php endforeach;?>
<form action="create_text" id="frm" method="post">
Text:<br>
<textarea name="text" rows="5" cols="50"></textarea><br>
</form>
<table class="button">
        <tr><td onclick="document.getElementById('frm').submit();">
        
  <div class="b1 b11"></div>
  <div class="b1 b12">Erstellen</div>
  <div class="b1 b13"></div>
        </td>
        </tr></table>