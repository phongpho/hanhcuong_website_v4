<?php
require_once __DIR__ . '/language.php';
?>

<header class="header">

    <div class="top-bar">
        <div class="top-bar-inner">
            <div class="top-bar-left">
                <span>
                    <svg width="12" height="12" fill="none" stroke="rgba(255,255,255,0.75)" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                        <circle cx="12" cy="9" r="2.5" />
                    </svg>
                    <strong>An Giang</strong>, Việt Nam
                </span>
                <span>
                    <svg width="12" height="12" fill="none" stroke="rgba(255,255,255,0.75)" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path
                            d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 012 2.18 2 2 0 014 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16z" />
                    </svg>
                    0939 660 004
                </span>
                <span>
                    <svg width="12" height="12" fill="none" stroke="rgba(255,255,255,0.75)" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                    phoquocduyvn@gmail.com
                </span>
            </div>


            <div class="top-bar-right">
                <!-- nút chuyển đổi ngôn ngữ -->
                <div class="language-switch">
                    <a href="?lang=vi" class="<?= $langCode === 'vi' ? 'active' : '' ?>">
                        <img src="assets/images/flag-vn.svg" alt="VI">
                        <span>VI</span>
                    </a>

                    <span class="divider">|</span>

                    <a href="?lang=en" class="<?= $langCode === 'en' ? 'active' : '' ?>">
                        <img src="assets/images/flag-us.svg" alt="EN">
                        <span>EN</span>
                    </a>
                </div>

                <span class="follow-label"><?= $lang['follow-us'] ?>:</span>
                <a href="#" class="top-social">
                    <svg viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                    </svg>
                </a>
                <a href="#" class="top-social">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="container-nav">
        <nav class="navbar">
            <a href="index.php" class="logo">
                <img src="assets/images/logo.png" alt="Logo Hạnh Cường">
                <div class="logo-name">
                    <strong><?= $lang['hanhcuong'] ?></strong>
                </div>
            </a>

            <button class="menu-toggle" aria-label="Mở menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            <ul class="nav-menu">
                
                <li class="mobile-menu-header">
                    <img src="assets/images/logo.png" alt="Logo Hạnh Cường"> 
                    <h2><?= $lang['hanhcuong'] ?></h2>
                </li>

                <li><a href="index.php"><?= $lang['home'] ?></a></li>
                <li><a href="gioi-thieu.php"><?= $lang['about'] ?></a></li>
                <li class="nav-item dropdown">
                    <div class="nav-link-group">
                        <a href="linh-vuc.php"><?= $lang['fields'] ?></a>
                        <span class="dropdown-toggle-icon"><i class="fa-solid fa-angle-down"></i></span>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a href="chan-nuoi-bo.php"><?= $lang['cow_farming'] ?></a></li>
                        <li><a href="chan-nuoi-de.php"><?= $lang['goat_farming'] ?></a></li>
                        <li><a href="chan-nuoi-ca-tra.php"><?= $lang['pangasius_farming'] ?></a></li>
                    </ul>
                </li>
                <li><a href="lien-he.php"><?= $lang['contact'] ?></a></li>
                <li><a href="dang-cap-nhat.php"><?= $lang['achievements'] ?></a></li>
                <li><a href="dang-cap-nhat.php"><?= $lang['recruitment'] ?></a></li>

                <li class="mobile-menu-footer">
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i> 
                        <span><?= $lang['address_content'] ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-phone"></i> 
                        <span>0939 66 00 04</span>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-envelope"></i> 
                        <span>phoquocduyvn@gmail.com</span>
                    </div>
                </li>

            </ul>

            

            <a href="tel:0939660004" class="btn-contact btn-contact-mobile">
                <?= $lang['contact-us-btn'] ?>
            </a>
            <a href="https://zalo.me/0939660004" target="_blank" rel="noopener noreferrer" class="btn-contact btn-contact-desktop">
                <?= $lang['contact-us-btn'] ?>
            </a>
        </nav>
    </div>

</header>