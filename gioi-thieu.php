<?php require_once 'includes/language.php'; ?>
<!DOCTYPE html>
<html lang="<?= $langCode ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page_title_about'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/gioi-thieu.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <section class="section first-sec">
        <div class="section-title">
            <h2><?= $lang['about_us_heading'] ?></h2>
        </div>
        <div class="container" id="flexiable">
            <div class="img-side">
                <img src="assets/images/tam-nhin-chien-luoc.jpg">
            </div>
            <div class="content-side">
                <small class="section-tag"><?= $lang['intro_tag'] ?></small>
                <h2><?= $lang['who_are_we'] ?></h2>
                <p><?= $lang['about_p1'] ?></p>
                <p><?= $lang['about_p2'] ?></p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="section-title">
            <h2><?= $lang['vision_mission_title'] ?></h2>
        </div>
        <div class="container" id="flexiable">
            <div class="content-side">
                <h2><?= $lang['vision_strategy'] ?></h2>
                <ul class="content-list">
                    <li><?= $lang['vision_1'] ?></li>
                    <li><?= $lang['vision_2'] ?></li>
                    <li><?= $lang['vision_3'] ?></li>
                </ul>
            </div>
            <div class="img-side">
                <img src="assets/images/tam-nhin-chien-luoc.jpg">
            </div>
        </div>

        <div class="container " id="flexiable" style="margin-top: 120px">
            <div class="img-side">
                <img src="assets/images/tam-nhin-chien-luoc.jpg">
            </div>
            <div class="content-side">
                <h2><?= $lang['mission_action'] ?></h2>
                <ul class="content-list">
                    <li><?= $lang['mission_1'] ?></li>
                    <li><?= $lang['mission_2'] ?></li>
                    <li><?= $lang['mission_3'] ?></li>
                </ul>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>