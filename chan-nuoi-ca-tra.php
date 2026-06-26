<?php require_once 'includes/language.php'; ?>
<!DOCTYPE html>
<html lang="<?= $langCode ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page_title_fish'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/linh-vuc.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <section class="section first-sec">
        <div class="container" id="flexiable">
            <div class="content-side">
                <h2><?= $lang['fish_detail_title'] ?></h2>
                <p><?= $lang['fish_detail_p1'] ?></p>
                <p><?= $lang['fish_detail_p2'] ?></p>
                <p><?= $lang['fish_detail_p3'] ?></p>
            </div>
            <div class="img-side">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/ynY_55MjRK0" title="YouTube video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="content-side">
                <h2><?= $lang['fish_breeds_title'] ?></h2>
            </div>
            <div class="content-grid">
                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/ca-tra.png" alt="<?= $lang['fish_type_1'] ?>">
                    <div class="livestock-content">
                        <h3><?= $lang['fish_type_1'] ?></h3>
                        <p><?= $lang['updating'] ?></p>
                    </div>
                </div>
                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/ca-tra-2.png" alt="<?= $lang['fish_type_2'] ?>">
                    <div class="livestock-content">
                        <h3><?= $lang['fish_type_2'] ?></h3>
                        <p><?= $lang['updating'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section video-section">
        <div class="container">
            <div class="content-side">
                <h2><?= $lang['youtube_more'] ?></h2>
            </div>
            <div class="video-wrapper-scroll">
                <button class="scroll-btn left" data-dir="-1"><</button>
                <div class="video-scroll" id="videoScroll">
                    <div class="video-item"><iframe src="https://www.youtube.com/embed/ynY_55MjRK0" allowfullscreen></iframe></div>
                    <div class="video-item"><iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" allowfullscreen></iframe></div>
                    <div class="video-item"><iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe></div>
                    <div class="video-item"><iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe></div>
                </div>
                <button class="scroll-btn right" data-dir="1">></button>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/video-scroll.js"></script>
</body>
</html>