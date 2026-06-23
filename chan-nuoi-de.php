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
                    Thông tin chi tiết - chăn nuôi dê
                </h2>

                <p>
                    Song song với chăn nuôi bò, Công ty Cổ phần Nông nghiệp Hạnh Cường phát triển mô hình chăn nuôi dê
                    giống và dê thịt thương phẩm nhằm đa dạng hóa cơ cấu sản xuất và đáp ứng nhu cầu ngày càng cao của
                    thị trường.
                </p>
                <p>
                    Hoạt động chăn nuôi dê được triển khai theo quy trình khoa học, chú trọng lựa chọn giống có chất
                    lượng tốt, kết hợp chế độ dinh dưỡng phù hợp và các biện pháp kiểm soát dịch bệnh hiệu quả. Hệ thống
                    chuồng nuôi được thiết kế đáp ứng các tiêu chuẩn về vệ sinh, an toàn và tạo điều kiện thuận lợi cho
                    sự phát triển của đàn dê.
                </p>
                <p>
                    Với định hướng nâng cao năng suất và chất lượng sản phẩm, Hạnh Cường từng bước xây dựng mô hình chăn
                    nuôi dê hiện đại, góp phần gia tăng giá trị kinh tế và phát triển ngành chăn nuôi theo hướng ổn
                    định, lâu dài.
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
                    Các giống dê hiện tại của trang trại
                </h2>
            </div>

            <div class="content-grid">
                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/de-thit.png" alt="Bò thịt">

                    <div class="livestock-content">
                        <h3>dê thịt</h3>
                        <p>
                            Đang cập nhật
                        </p>
                    </div>
                </div>

                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/de-thit.png" alt="Bò sữa">

                    <div class="livestock-content">
                        <h3>dê</h3>
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
                <h2>Hình ảnh hoạt động thực tế tại trang trại</h2>
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
    <script src="assets/js/video-scroll.js"></script>
</body>

</html>