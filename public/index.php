
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Great+Vibes&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Sawarabi+Mincho&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">


</head>

<body>
    <?php include('header.php'); ?>

    <main>
        <div class="first__view"></div>
        <section id="works" class="sections " data-bg="#1b1b1b">
            <div class=" section__container works__conatiner">
                <h2 class="section__title white-shadow">WORKS</h2>
                <div class="works__tabs">
                    <button class="tab-btn">Website</button>
                    <button class="tab-btn">Banner</button>
                </div>

                <div class="works__contents">
                    <!-- メイン表示 -->
                    <div class="works_main__view">
                        <figure class="work-01 reveal-image">
                            <a href="#works">
                                <img id="main-image" class="main-image" src="../images/work-01.jpg" alt="案件画像">
                            </a>
                            <figcaption id="main-description">
                                <h3 class="main-description-title">案件1：教育アプリ</h3>
                                <p>ユーザーが間違えた問題を復習できる機能を実装しました</p>
                            </figcaption>
                        </figure>
                    </div>

                    <!-- サムネイル一覧 -->
                    <div class="mSCL__container">
                        <ul>
                            <li class="thumbnail click-animesion" data-id="1">
                                <img src="../images/work-01.jpg" alt="案件1">
                            </li>
                            <li class="thumbnail" data-id="2">
                                <img src="../images/work-02.jpg" alt="案件2">
                            </li>
                            <li class="thumbnail" data-id="3">
                                <img src="../images/work-03.jpg" alt="案件3">
                            </li>
                            <li class="thumbnail" data-id="4">
                                <img src="../images/work-04.jpg" alt="案件4">
                            </li>
                            <li class="thumbnail" data-id="5">
                                <img src="../images/work-05.jpg" alt="案件5">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="about line-to-contact" class="sections" data-bg="#2D4B50">
            <div class="section__container">
                <span></span> <!-- 縦線用 -->
                <h2 class="section__title section-title__margin-bottom">
                    ABOUT ME
                    <svg class="title-border" width="160" height="50" viewBox="0 0 160 50">
                        <rect x="0" y="0" width="160" height="50" fill="none" stroke="#fff" stroke-width="2"
                            stroke-dasharray="420" stroke-dashoffset="420" />
                    </svg>
                </h2>
                <div class="about__items">
                    <div class="about__items__disc">
                        <span class="name__disc">Kai Shoma</span>
                        <div class="name__title">甲斐　省真</div>
                        <div class="text__box">
                            <p>前職では1年間システムエンジニアとして開発案件に携わり、
その経験を活かしてWebデザインの道へ進むことを決意しました。
シンプルで洗練されたデザインを大切にし、
ユーザーに寄り添った心地よい体験を提供できるクリエイターを目指しています。</p>
                            
                        </div>
                    </div>
                    <div class="about__image">
                        <img src="../images/about.jpg" alt="">
                    </div>
                </div>
                <div class="btn text-center">
                    <a href="../views/about.php" class="learn-more">
                        <span class="circle">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read More</span>
                    </a>
                </div>

            </div>

        </section>
        
        <div class="fall-line-wrapper">
            <div class="falling-line"></div>
        </div>

        
        <section id="contact" class="sections" data-bg="#C8B496">
            <div class="section__container">
                <div class="contact__btn text-center">
                    <a href="#contact">CONTACT</a>
                </div>
                
            </div>
        </section>

    </main>
     
    <script src="../JS/script.js"></script>
</body>

</html>