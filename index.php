<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Checklist</title>
  <meta name="description" content="Checklist">
  <meta name="Agustín Jurado" content="SitePoint">

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link rel="manifest" href="manifest.json">

<script>

</script>
</head>
<body>
<div class="container">

<div class="jumbotron">
<h1 class="display-3">Our nightly checklist:</h1>
<div id="wrapper">
<form id="miCL" method="POST">
<ul id="cotejo">
<li>Remojar Avena<input type="checkbox" name="remojar"></li>
<li>Cambiarle pañal a hija<input type="checkbox" name="remojar"></li>
<li>Lechita hija<input type="checkbox" name="remojar"></li>
<li>Lavar trastes para mañana<input type="checkbox" name="lavar"></li>
<li>Preparar ropa para mañana<input type="checkbox" name="preparar"></li>
<li>Desmaquillarse<input type="checkbox" name="preparar"></li>
</ul>
<input type="hidden" id="value">

</form>
<div id="results">..</div>



</div>

</div></div>
<div style="position:fixed; bottom:0px;width: 100%;padding:10px;">
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div></div>


<div id="bg"></div>


<script src="scripts/jquery-3.2.1.js"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/scripts.js"></script>
<script src="scripts/bg.js"></script>
</body>
</html>