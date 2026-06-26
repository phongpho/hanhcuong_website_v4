<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang web đang cập nhật</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <section class="updating-section">
        <style>
            .updating-section {
                min-height: 100vh;
                background: linear-gradient(rgba(22, 35, 24, .88), rgba(22, 35, 24, .92)),
                    url('assets/images/background_banner.jpg') center/cover no-repeat;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 180px 20px 100px;
            }

            .updating-box {
                max-width: 700px;
                text-align: center;
                color: #fff;
            }

            .updating-icon {
                width: 100px;
                height: 100px;
                margin: 0 auto 30px;
                border: 2px solid rgba(255, 255, 255, .15);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                background: rgba(255, 255, 255, .05);
            }

            .updating-icon i {
                font-size: 2.8rem;
                color: var(--secondary-color);
            }

            .updating-subtitle {
                font-size: .9rem;
                text-transform: uppercase;
                letter-spacing: 3px;
                color: rgba(255, 255, 255, .6);
            }

            .updating-box h1 {
                font-family: 'Fraunces', serif;
                font-size: 3.5rem;
                margin: 15px 0;
                color: #fff;
            }

            .updating-divider {
                width: 70px;
                height: 2px;
                background: var(--secondary-color);
                margin: 0 auto 25px;
            }

            .updating-box p {
                max-width: 550px;
                margin: auto;
                line-height: 1.8;
                color: rgba(255, 255, 255, .75);
                text-align: center;
            }

            .updating-btn {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                margin-top: 40px;
                padding: 14px 32px;
                background: var(--primary-color);
                color: #fff;
                border-radius: 50px;
                transition: .3s;
            }

            .updating-btn:hover {
                background: var(--primary-hover);
                transform: translateY(-3px);
            }

            @media (max-width:768px) {

                .updating-box h1 {
                    font-size: 2.3rem;
                }

                .updating-icon {
                    width: 80px;
                    height: 80px;
                }

                .updating-icon i {
                    font-size: 2rem;
                }

                .updating-box p {
                    font-size: .9rem;
                }
            }
        </style>

        <div class="updating-box">
            

            <span class="updating-subtitle">Website Hạnh Cường</span>

            <h1>ĐANG CẬP NHẬT</h1>

            <div class="updating-divider"></div>

            <p>
                Chúng tôi đang hoàn thiện nội dung để mang đến những thông tin đầy đủ và trải nghiệm tốt nhất.
                Vui lòng quay lại trong thời gian tới. Xin cảm ơn sự quan tâm và đồng hành của Quý khách.
            </p>

            <a href="index.php" class="updating-btn">
                <i class="fa-solid fa-house"></i>
                Về trang chủ
            </a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>


    <script src="assets/js/script.js"></script>
</body>

</html>