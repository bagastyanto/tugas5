<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <!-- Form inputan yang akan ditampilkan di file lain --> 
    <form method="POST" action=hasilkirim.php>
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <td width="130">Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
        <!-- Button untuk submit maupun reset inputan-->
          <td colspan="2" align="center">
            <input type="submit" name="btnLogin" value="Login">
            <input type="reset" name="reset" value="Reset">
          </td>
        </tr>
</table></form></body></html>