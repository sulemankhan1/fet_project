
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
  </head>
  <body>
    <table width="100%">
      <tr>
        <td align="left">
          <img src="<?=base_url('uploads/'.$setting_data->logo)?>" alt="" style="width:150px;height:150px;">
        </td>
      </tr>
      <tr>
        <td align="left">
          <h3>(<?=$setting_data->name?>)</h3>
        </td>
      </tr>
      <tr>
        <td align="left">
          <p style="white-space: pre-wrap!important;"><?=$msg?></p>
        </td>
      </tr>
    </table>
    <br>
    <table width="100%">
      <tr>
        <td align="center">
          <h5><?=$setting_data->terms?></h5>
        </td>
      </tr>
    </table>
  </body>
</html>

<!-- leatitia   pwd: l123@ -->
