<?php require_once 'includes/language.php'; ?>
<!DOCTYPE html>
<html lang="<?= $langCode ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lang['page_title_index'] ?></title>

    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="banner">
        <div class="banner-content">
            <span class="welcome-label"><?= $lang['welcome_to'] ?></span>
            <h1><?=$lang['hanhcuong']?></h1>
            <div class="title-divider"></div>
            <p>
                <?= $lang['banner_desc'] ?>
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container" id="flexiable">
            <div class="img-side" data-aos="fade-up">
                <img src="assets/images/tam-nhin-chien-luoc.jpg">
            </div>

            <div class="content-side">

                <small class="section-tag"><?= $lang['intro_tag'] ?></small>

                <h2>
                    <?= $lang['intro_title_prefix'] ?> <span><?= $lang['hanhcuong'] ?></span> <?= $lang['intro_title_suffix'] ?>
                </h2>

                <p><?= $lang['intro_p1'] ?></p>

                <p><?= $lang['intro_p2'] ?></p>
            </div>
        </div>
    </section>

    <section class="section data">
        <div class="container cards">

            <div class="card feature-card">
                <h3>600 <?= $lang['unit_heads'] ?></h3>
                <h4><?= $lang['stat_cows_title'] ?></h4>
                <p><?= $lang['stat_cows_desc'] ?></p>
            </div>

            <div class="card feature-card">
                <h3>3.000 <?= $lang['unit_heads'] ?></h3>
                <h4><?= $lang['stat_goats_title'] ?></h4>
                <p><?= $lang['stat_goats_desc'] ?></p>
            </div>

            <div class="card feature-card">
                <h3>6.000 <?= $lang['unit_tons'] ?></h3>
                <h4><?= $lang['stat_fish_title'] ?></h4>
                <p><?= $lang['stat_fish_desc'] ?></p>
            </div>

        </div>
    </section>

    <section class="section">
        <div class="section-title">
            <span class="section-tag"><?= $lang['market_tag'] ?></span>
            <h2><?= $lang['market_title'] ?></h2>
        </div>

        <div class="container target-market">
            <div class="target-market-content">
                <h3><?= $lang['market_subtitle'] ?></h3>
                <span>
                    HẠNH CƯỜNG
                </span>
                <p><?= $lang['market_desc'] ?></p>

                <a href="#" class="explore-btn"><?= $lang['explore_btn'] ?></a>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <div class="section-title">
                <span class="section-tag"><?= $lang['gallery_tag'] ?></span>
                <h2><?= $lang['gallery_title'] ?></h2>
            </div>

            <div class="activity-cards">

                <div class="activity-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="activity-img">
                        <img src="assets/images/chan-nuoi-bo.jpg" alt="Xuất khẩu bò">
                    </div>
                    <h3><?= $lang['news_1'] ?></h3>
                </div>

                <div class="activity-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="activity-img">
                        <img src="assets/images/chan-nuoi-de.jpg" alt="Trang trại dê An Giang">
                    </div>
                    <h3><?= $lang['news_2'] ?></h3>
                </div>

                <div class="activity-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="activity-img">
                        <img src="assets/images/chan-nuoi-ca-tra.jpg" alt="Thu hoạch cá tra">
                    </div>
                    <h3><?= $lang['news_3'] ?></h3>
                </div>

                <div class="activity-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="activity-img">
                        <img src="assets/images/chan-nuoi-bo.jpg" alt="Đối tác Đông Nam Á">
                    </div>
                    <h3><?= $lang['news_4'] ?></h3>
                </div>

            </div>

        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>