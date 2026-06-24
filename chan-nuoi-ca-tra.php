<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chăn nuôi bò - Công ty Cổ phần Nông nghiệp Hạnh Cường</title>

    <!-- Google Fonts & FontAwesome tương thích với hệ thống -->
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/linh-vuc.css">

</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <section class="section first-sec">

        <div class="container" id="flexiable">

            <div class="content-side">
                <h2>
                    Thông tin chi tiết - cá tra xuất khẩu
                </h2>

                <p>
                    Nuôi cá tra là lĩnh vực sản xuất quan trọng, đóng góp đáng kể vào sự phát triển chung của Công ty Cổ
                    phần Nông nghiệp Hạnh Cường. Tận dụng lợi thế tự nhiên của vùng Đồng bằng sông Cửu Long nói chung và
                    tỉnh An Giang nói riêng, công ty đầu tư hệ thống ao nuôi và quy trình quản lý hiện đại nhằm đảm bảo
                    sản lượng và chất lượng sản phẩm.

                </p>
                <p>
                    Quá trình nuôi được thực hiện theo các tiêu chuẩn kỹ thuật nghiêm ngặt, từ khâu quản lý nguồn nước,
                    thức ăn, mật độ nuôi đến kiểm soát dịch bệnh. Công ty luôn chú trọng ứng dụng khoa học kỹ thuật và
                    các giải pháp quản lý tiên tiến nhằm nâng cao hiệu quả sản xuất, giảm thiểu tác động đến môi trường
                    và hướng đến sự phát triển bền vững.
                    
                </p>
                <p>
                    Với sản lượng ổn định và quy trình sản xuất được kiểm soát chặt chẽ, Hạnh Cường từng bước khẳng định
                    vị thế trong lĩnh vực nuôi trồng thủy sản, góp phần cung cấp nguồn nguyên liệu chất lượng cao phục
                    vụ nhu cầu trong nước và xuất khẩu. 
                </p>
            </div>

            <div class="img-side">
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/ynY_55MjRK0" title="YouTube video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>


            </div>

        </div>


    </section>

    <section class="section">
        <div class="container">
            <div class="content-side">
                <h2>
                    Các giống bò hiện tại của trang trại
                </h2>
            </div>

            <div class="content-grid">
                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/ca-tra.png" alt="Bò thịt">

                    <div class="livestock-content">
                        <h3>Cá tra</h3>
                        <p>
                            Đang cập nhật 
                        </p>
                    </div>
                </div>

                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/ca-tra-2.png" alt="Bò sữa">

                    <div class="livestock-content">
                        <h3>Cá tra xuất khẩu</h3>
                        <p>
                            Đang cập nhật
                        </p>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section class="section video-section">

        <div class="container">

            <div class="content-side">
                <h2>Xem thêm tại kênh Youtube chính thức của chúng tôi</h2>
            </div>

            <div class="video-wrapper-scroll">

                <!-- NÚT TRÁI -->
                <button class="scroll-btn left" data-dir="-1"><</button>

                <!-- LIST VIDEO -->
                <div class="video-scroll" id="videoScroll">

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/ynY_55MjRK0" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/ScMzIvxBSi4" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
                    </div>

                    <div class="video-item">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" allowfullscreen></iframe>
                    </div>

                </div>

                <!-- NÚT PHẢI -->
                <button class="scroll-btn right" data-dir="1">></button>

            </div>

        </div>

    </section>


    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/video-scroll.js"></script>
</body>

</html>