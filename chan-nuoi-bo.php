
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chăn nuôi bò - Công ty Cổ phần Nông nghiệp Hạnh Cường</title>

    <!-- Google Fonts & FontAwesome tương thích với hệ thống -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Fraunces:opsz,wght@9..144,700&family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/linh-vuc.css">

</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <section class="section first-sec">

        <div class="container" id="flexiable" >
        
            <div class="content-side">
                <h2>
                    Thông tin chi tiết - chăn nuôi bò
                </h2>

                <p>
                    Chăn nuôi bò là một trong những lĩnh vực trọng điểm của Công ty Cổ phần Nông nghiệp Hạnh Cường. Với định hướng phát triển bền vững và quy mô sản xuất tập trung, công ty đầu tư hệ thống chuồng trại hiện đại, tạo môi trường chăn nuôi an toàn và phù hợp với từng giai đoạn sinh trưởng của đàn bò.
                </p>
                <p>
                    Hạnh Cường tập trung phát triển cả bò giống và bò thịt thương phẩm, đồng thời áp dụng quy trình quản lý chặt chẽ từ khâu lựa chọn con giống, dinh dưỡng, chăm sóc đến phòng ngừa dịch bệnh. Việc ứng dụng khoa học kỹ thuật và các giải pháp chăn nuôi tiên tiến giúp nâng cao chất lượng đàn bò, đảm bảo nguồn cung ổn định và hướng đến phát triển lâu dài, hiệu quả.
                </p>
            </div>

            <div class="img-side">
                <div class="video-wrapper">
                    <iframe 
                        src="https://www.youtube.com/embed/ynY_55MjRK0"
                        title="YouTube video"
                        frameborder="0"
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
                    <img class="livestock-img" src="assets/images/bo-thit.png" alt="Bò thịt">

                    <div class="livestock-content">
                        <h3 >Bò thịt</h3>
                        <p>
                            Giống bò phát triển theo hướng tăng trọng nhanh, chất lượng thịt cao,
                            phù hợp nhu cầu thị trường nội địa và xuất khẩu.
                        </p>
                    </div>
                </div>

                <div class="livestock-item">
                    <img class="livestock-img" src="assets/images/bo-sua.png" alt="Bò sữa">

                    <div class="livestock-content">
                        <h3 >Bò sữa</h3>
                        <p>
                            Giống bò năng suất sữa cao, được quản lý theo quy trình hiện đại,
                            đảm bảo chất lượng ổn định và lâu dài.
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
