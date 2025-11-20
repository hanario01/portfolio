<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio works</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant:ital,wght@0,300..700;1,300..700&family=Great+Vibes&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Sawarabi+Mincho&family=Zen+Old+Mincho&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <?php include('../public/header.php'); ?>
    </header>
    <main class="work-main">
        <div class="hero sections" data-bg="#2D4B50">
            <div class="back-to-works">
                <a href="/works" class="back-to-works-btn">← Back to Works</a>
            </div>
            <div class="hero__container">  
                <div class="hero__title">
                    <span class="site-tag"><a href="">#website</a></span>
                    <h1>.Anew(架空)</h1>
                </div>
                <div class="hero__image">
                    <img src="../images/mockDrop_dpc.jpg" alt="">
                </div>
            </div>
        </div>
        <section class="sections" data-bg="">
            <div class="section__container">
                <div class="work__info">
                    <div class="work__info__items">
                        <div class="works-name">
                            <span class="tag h2-color"><a href="">#website</a></span>
                            <h1 class="works__title">.Anew (架空サイト)</h1>
                        </div>
                        <div class="siteview-btn">
                            <a href="" target="_blank" rel="noopener">
                                Live Site 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M6 2a1 1 0 0 1 1-1h5.5a.5.5 0 0 1 .5.5v5.5a1 1 0 0 1-1 1h-1v-1h.5V2H7v.5H6V2z"/>
                                <path d="M1 7v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-3h-1v3H2V8h3V7H2a1 1 0 0 0-1 1z"/>
                                </svg>
                        </div>
                    </div>
                    <div class="project__container">
                        <div class="project__overview">
                            <div class="project__overview_item ">
                                <h2 class="project__overview_dis h2-color">Project Overview</h2>
                                <p>本案件では、デザイナーが制作したWebサイトデザインをもとに、コーディングを担当しました。
レイアウトや余白、動きのニュアンスまで細部を正確に再現することを意識し、デザインの意図を損なわない実装を心がけています。
また、レスポンシブ対応や使いやすさにも配慮し、ユーザーにとってストレスのない閲覧体験を実現しました。</p>
                            </div>
                        
                            <div class="project__tools">
                                <h2 class="project__overview_dis h2-color">Tools</h2>
                                <div class="tool_items">
                                    <span>Figma</span>
                                    <span>Photoshop</span>
                                    <span>VsCode</span>
                                </div>
                            </div>
                        </div>
                        <div class="project__meta">
                            <ul>
                                <li>
                                    <span>Client</span>
                                    <p>架空クライアント</p>
                                </li>
                                <li>
                                    <span>Year</span>
                                    <p>2025/11/5</p>
                                </li>
                                <li>
                                    <span>Duration</span>
                                    <p>2週間</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="sections" data-bg="#2D4B50">
                <div class="section__container">
                    <div class="mockup-wrapper">
                        <ul class="mockup-container">
                            <li class="mockup-phone">
                                <div class="screen">
                                    <img src="../images/top-sp-anew.png" alt="スマホモック" />
                                </div>
                            </li>
                            <li class="mockup-phone">
                                <div class="screen">
                                    <img src="../images/mock_sp_concept.png" alt="スマホモック" />
                                </div>
                            </li>
                            <li class="mockup-phone">
                                <div class="screen">
                                    <img src="../images/mock_sp_hairstyle.png" alt="スマホモック" />
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="desktop-page">
                        <img src="../images/first-view.jpg" alt="">
                    </div>
                    <div class="sitebtn">
                            <a href="" target="_blank" rel="noopener">
                                Live Site 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M6 2a1 1 0 0 1 1-1h5.5a.5.5 0 0 1 .5.5v5.5a1 1 0 0 1-1 1h-1v-1h.5V2H7v.5H6V2z"/>
                                <path d="M1 7v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1v-3h-1v3H2V8h3V7H2a1 1 0 0 0-1 1z"/>
                                </svg>
                        </div>
                </div>
            </section>
            <section id="contact" class="sections" data-bg="#C8B496">
            <div class="section__container contact__inner text-center">

                <p class="contact__message">
                    
                    ご覧いただき、誠にありがとうございます。<br>
                    ご依頼やお問い合わせにつきましては、こちらよりお気軽にご連絡ください。
                </p>

                <div class="contact__btn">
                    <a href="#contact">CONTACT</a>
                </div>
                
            </div>
            </section>
        </div>

    </main>
    <footer class="footer">
    <div class="footer__container">
        <nav class="footer__nav">
            <ul>
                <li><a href="http://localhost/portfolio/">WORKS</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>

        <p class="footer__copy">© SHOMA KAI</p>
    </div>
    </footer>
    <script src="../JS/script.js"></script>
</body>

</html>