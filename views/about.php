<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
    <main>
        <section id="about" class="sections " data-bg="#2D4B50">
            <div class="section__container">
                <!-- <h2 class="section__title ">About</h2> -->
                <div class="about__items about__page">
                    <div class="about__items__disc">
                        <span class="name__disc">Kai Shoma</span>
                        <div class="name__title">甲斐　省真</div>
                        <div class="text__box">
                            <p>前職では1年間システムエンジニアとして開発案件に携わり、その経験を活かしてWebデザインの道へ進むことを決意しました。</p>
                            <p>シンプルで洗練されたデザインを大切にし、ユーザーに寄り添った心地よい体験を提供できるクリエイターを目指しています。</p>
                             
                        </div>
                    </div>
                    <div class="about__image">
                        <img src="../images/about.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="skills line-to-contact" class="sections" data-bg="	#303030ff">
            <div class="section__container skill-text-color">
                <h2 class="section__title">Skills</h2>
                <div class="skill__items">
                    <div class="skill__item">
                        <div class="skill__image">
                            <img src="../images/webdesign.jpeg" alt="">
                        </div>
                        <div class="skill__text">
                            <h2 class="skill__title">Web Design</h2>
                            <p>FigmaやPhotoshopを使ったWebデザイン制作ができます。
                                ワイヤーフレーム作成、レイアウト設計、UIデザインまで一貫して対応可能です。
                                見やすさ・使いやすさを意識した、整理されたデザインを心がけています。</p>
                        </div>
                    </div>
                    <div class="readmore-box">
                        <div class="readmore-btn-wrap">
                            <button>
                                <span class="icon"></span>
                                <a href=""><span class="label">Read More</span></a>
                            </button>
                        </div>
                        <div class="readmore-content">
                            <ul>
                                <li>
                                    <h3>Photshop</h3>
                                    <p>主にバナーや簡単なデザイン素材の作成、写真のトーン補正、切り抜き、レタッチなど基本的な編集が可能です。Webサイトで使用する画像の最適化や、目的に合わせたカラー調整など、Web制作に必要な基礎的な作業を実務に沿って行えます。</p>
                                </li>
                                <li>
                                    <h3>Figma</h3>
                                    <p>ワイヤーフレームの作成から、WebサイトのUIデザインまで一通り作成できます。コンポーネントやオートレイアウトを用いた効率的なデザイン制作が可能で、実装を意識したレイアウト設計を行うことができます。また、デザイナーと開発者間の連携を前提に、共有やプロトタイプ作成も行えます。</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="skill__item">
                        <div class="skill__text">
                            <h2 class="skill__title">Web Development</h2>
                            <p>HTML/CSS・JavaScriptを使ったフロントエンド実装ができます。
レスポンシブ対応やアニメーションなど、デザインを忠実に再現するコーディングが可能です。
PHPを用いた簡単なフォーム処理や動的ページの制作にも対応できます。</p>
                        </div>
                        <div class="skill__image">
                            <img src="../images/webdeveloper.jpeg" alt="">
                        </div>  
                    </div>
                    <div class="readmore-box">
                        <div class="readmore-btn-wrap">
                            <button>
                                <span class="icon"></span>
                                <span class="label">Read More</span>
                            </button>
                        </div>
                        <div class="readmore-content">
                            <ul>
                                <li>
                                    <h3>HTML / CSS</h3>
                                    <p>セマンティックなHTMLを意識したコーディングができ、FlexboxやGridを用いたレスポンシブ対応のレイアウト構築が可能です。アニメーション、ホバー演出、コンポーネント化を意識したCSSの組み立ても行えます。Figmaのデザインを元に、意図に近いデザインを忠実に再現できます。</p>
                                </li>
                                <li>
                                    <h3>JavaScript</h3>
                                    <p>画面の動きやインタラクションを加える基本的な実装が可能です。スライダーの制作、スクロールアニメーション、ハンバーガーメニューなど、Webサイトでよく使われるUIの実装ができます。また、DOM操作やイベント処理など、基礎となるロジックを理解しています。</p>
                                </li>
                                <li>
                                    <h3>PHP</h3>
                                    <p>フォームの送信処理、データのGET・POST処理、簡単なCRUD（作成・読み込み・更新・削除）のような基礎的なバックエンド処理が可能です。セッション管理やデータベースとの簡単な接続処理など、Webアプリケーションの基本の流れを理解しています。</p>
                                </li>
                                <li>
                                    <h3>WordPress</h3>
                                    <p>WordPressの環境構築、テーマのカスタマイズ、テンプレートタグを用いた動的表示が可能です。固定ページやカスタム投稿タイプの設定、管理画面の操作、基本的なテーマ編集によるサイト構築ができます。既存テーマを元にした制作も、オリジナルテーマの簡易的な作成も行えます。</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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