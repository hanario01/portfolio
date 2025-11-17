
const header = document.querySelector('.site-header');
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.top__nav');

// スクロールでハンバーガー切り替え
window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// ハンバーガー開閉
hamburger.addEventListener('click', () => {
    nav.classList.toggle('open');        // ナビ表示切替
    hamburger.classList.toggle('active'); // ハンバーガーアニメーション
});




document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll(".sections");
    const body = document.body;

    // body背景色のスムーズ切替
    body.style.transition = "background-color 0.5s ease";

    const updateBg = () => {
        const middle = window.innerHeight / 2;

        let closestSection = null;
        let closestDistance = Infinity;

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const sectionMiddle = rect.top + rect.height / 2;
            const distance = Math.abs(sectionMiddle - middle);

            if (distance < closestDistance) {
                closestDistance = distance;
                closestSection = section;
            }
        });

        if (closestSection) {
            const bgColor = closestSection.getAttribute("data-bg");
            if (body.style.backgroundColor !== bgColor) {
                body.style.backgroundColor = bgColor;
            }
        }
    };

    // 初期表示
    updateBg();

    // スクロール・リサイズで常に更新
    window.addEventListener("scroll", updateBg);
    window.addEventListener("resize", updateBg);
});



//works script----------------
//----------------------------


//スクロールで訪れたときに写真にアニメーション
document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('.reveal-image');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // 初回スクロール時に revealed を付ける
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.3
    });

    targets.forEach(target => observer.observe(target));

    // サムネイルクリック処理
    document.querySelectorAll('.thumbnail').forEach(item => {
        item.addEventListener('click', () => {
            const id = item.getAttribute('data-id');
            const project = projects[id];

            const mainImage = document.getElementById('main-image');
            const mainDescription = document.getElementById('main-description');
            const figure = document.querySelector('.works_main__view .reveal-image');

            // サムネイルにクリックアニメーション
            item.classList.add('clicked');
            setTimeout(() => {
                item.classList.remove('clicked');
            }, 400);

            // メイン表示を更新
            figure.classList.add('revealed');
            mainImage.src = project.image;
            mainDescription.innerHTML = project.description;

        });
    });
});


const projects = {
    1: {
        image: '../images/work-01.jpg',
        description: `
      <h3>案件1：教育アプリ</h3>
      <p>ユーザーが間違えた問題を復習できる機能を実装しました。</p>
    `
    },
    2: {
        image: '../images/work-02.jpg',
        description: `
      <h3>案件2：ポートフォリオサイト</h3>
      <p>HTML/CSS/JavaScriptで動的な作品表示を構築しました。</p>
    `
    },
    3: {
        image: '../images/work-03.jpg',
        description: `
      <h3>案件3：LPデザイン</h3>
      <p>日本語ローカライズとUIの一貫性に配慮した設計です。</p>
    `
    },
    4: {
        image: '../images/work-04.jpg',
        description: `
      <h3>案件4：バナー制作</h3>
      <p>視認性とクリック率を意識したデザインを採用しました。</p>
    `
    },
    5: {
        image: '../images/work-05.jpg',
        description: `
      <h3>案件5：管理画面UI</h3>
      <p>セッション管理とMVC構造を活かした設計です。</p>
    `
    }
};


// ReadMore ボタン処理
document.querySelectorAll('.readmore-box').forEach(box => {
    const button = box.querySelector('button');
    const content = box.querySelector('.readmore-content');

    button.addEventListener('click', () => {
        box.classList.toggle('open');
    });
});

//コンタクトの線のアニメーション位置を取得して配置
document.addEventListener("DOMContentLoaded", () => {
    const skills = document.querySelector("#line-to-contact");
    const line = document.querySelector(".falling-line");

    const adjustLineStart = () => {
        const rect = skills.getBoundingClientRect();
        const skillsBottom = rect.bottom + window.scrollY;

        line.style.top = skillsBottom + "px";
    };

    adjustLineStart();
    window.addEventListener("resize", adjustLineStart);
    window.addEventListener("scroll", adjustLineStart);
});









