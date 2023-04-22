<?php
namespace Rating;

use Rating\Rating;
require_once "./Common/Config.php";
$config = new Config();
require_once "./Model/Rating.php";
$rating = new Rating();
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id
$userId = 5;

$apperance = $config::RATING_APPEARANCE;

$courseResult = $rating->getCourse();
if (! empty($courseResult)) {
    foreach ($courseResult as $row) {
        $userRating = $rating->getUserRating($userId, $row['id']);
        $totalRating = $rating->getTotalRating($row['id']);
        $date = date_create($row["last_date_to_register"]);
        ?>
 <div class="media text-muted pt-3">
 <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
 
<div class="row-item" style="width:100%">

    <div class="row-title"><?php echo $row['name']; ?></div>
    <ul class="list-inline" id="list-<?php echo $row['id']; ?>" style="margin-bottom: 3px;">
 <?php require $apperance . "-rating-view.php"; ?>

        <img src="img/loader.gif" class="loader-icon" id="loader-icon">
    </ul>
    <div class="response" id="response-<?php echo $row['id']; ?>"></div>


    <p class="review-note" style="margin-bottom: 10px;">Total Reseñas: <?php echo $totalRating; ?></p>
    <p class="text-address">
        <label class="course-detail">Periodo: <?php echo $row["period"]; ?></label><label
            class="course-detail">Vacantes disponibles: <?php echo $row["availabe_seats"]; ?></label><label
            class="course-detail">Última fecha para registrarse: <?php echo date_format($date, "d M Y"); ?></label>
    </p>
</div>
<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray"></p>
</div>
<?php
    }
}
?>
