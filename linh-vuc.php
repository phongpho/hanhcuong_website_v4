<?php require_once 'includes/language.php'; ?>
<!DOCTYPE html>
<html lang="<?= $langCode ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page_title_fields'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/linh-vuc.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="section first-sec">
        <div class="container">
            <div class="content-side">
                <h2><?= $lang['overview_title'] ?></h2>
                <p><?= $lang['overview_p1'] ?></p>
                <p><?= $lang['overview_p2'] ?></p>
            </div>

            <div class="content-side" id="flexiable" >
                <div class="content-side">
                    <h2><?= $lang['field_cow_title'] ?></h2>
                    <p><?= $lang['field_cow_desc'] ?></p>
                    <ul class="content-list">
                        <li><?= $lang['field_cow_li1'] ?></li>
                        <li><?= $lang['tech_app'] ?></li>
                        <li><?= $lang['disease_control'] ?></li>
                    </ul>
                    <a href="chan-nuoi-bo.php" class="explore-btn"><?= $lang['view_detail'] ?></a>
                </div>
                <div class="img-side">
                    <img src="assets/images/chan-nuoi-bo.jpg">
                </div>
            </div>

            <div class="content-side" id="flexiable">
                <div class="content-side">
                    <h2><?= $lang['field_goat_title'] ?></h2>
                    <p><?= $lang['field_goat_desc'] ?></p>
                    <ul class="content-list">
                        <li><?= $lang['field_goat_li1'] ?></li>
                        <li><?= $lang['tech_app'] ?></li>
                        <li><?= $lang['disease_control'] ?></li>
                    </ul>
                    <a href="chan-nuoi-de.php" class="explore-btn"><?= $lang['view_detail'] ?></a>
                </div>
                <div class="img-side">
                    <img src="assets/images/chan-nuoi-de.jpg">
                </div>
            </div>

            <div class="content-side" id="flexiable">
                <div class="content-side">
                    <h2><?= $lang['field_fish_title'] ?></h2>
                    <p><?= $lang['field_fish_desc'] ?></p>
                    <ul class="content-list">
                        <li><?= $lang['field_fish_li1'] ?></li>
                        <li><?= $lang['field_fish_li2'] ?></li>
                        <li><?= $lang['disease_control'] ?></li>
                    </ul>
                    <a href="chan-nuoi-ca-tra.php" class="explore-btn"><?= $lang['view_detail'] ?></a>
                </div>
                <div class="img-side">
                    <img src="assets/images/chan-nuoi-ca-tra.jpg">
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>