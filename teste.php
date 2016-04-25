<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<script src="js/Validacaoform.js"></script>
<body>
<form id="form" name="form" method="post">
<table width="288" border="0">
  <tr>
    <td width="46">Login </td>
    <td width="144"><span class="controls">
      <input name="login" type="text" id="login" title="Informe seu login"/>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<div class="control-group">
  <div class="controls">
   <input type="button" onclick="validar(document.form);" value="Entrar"/>
  </div>
</div>
<p>
  <input name="ok" type="hidden" id="ok"/>
</p>
</form>
</body>
</html>
