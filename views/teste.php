<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .imgefeito {
  margin: 0;
  overflow: hidden;
  float: left;
  position: relative;
}
.imgefeito a {
  text-decoration: none;
  float: left;
}
.imgefeito a:hover {
  cursor: pointer;
}

.imgefeito a img {
    float: left;
    margin: 0;
    border: none;
    padding: 10px;
    background: #fff;
    border: 1px solid #ddd;
}
    </style>
  </head>
  <body>
    <img src="http://www.google.com.br/intl/pt-BR_br/images/logo.gif" onmouseover="Tip('Logotipo da famosa empresa Google')" onmouseout="UnTip()" />
    <script type="text/javascript" src="../js/wz_tooltip.js"></script>
  </body>
</html>
