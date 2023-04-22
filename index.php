<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Star Rating Script in PHP</title>
<link href="./assets/css/rating-style.css" type="text/css"
	rel="stylesheet" />
<link href="./assets/css/star-rating-style.css" type="text/css"
	rel="stylesheet" />
<script src="./vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link href="./assets/css/offcanvas.css" rel="stylesheet">
</head>

<body>
<main role="main" class="container">

  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
    <img class="mr-3" src="./img/menu.svg" alt="" width="48" height="48">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Cursos programados</h6>
      <small>Periodo 2022</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recientes actualizaciones</h6>
    <?php require_once "getRatingData.php"; ?>
  </div>

 
</main>

	</div>
	<script src="./assets/js/rating.js"></script>
</body>
</html>