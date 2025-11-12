//works script----------------
//----------------------------


//スクロールで訪れたときに写真にアニメーション
document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('.reveal-image');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target); // 一度だけ発火
            }
        });
    }, {
        threshold: 0.5 // 50%表示されたら発火
    });

    targets.forEach(target => observer.observe(target));
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
document.querySelectorAll('.thumbnail').forEach(item => {
    item.addEventListener('click', () => {
        const id = item.getAttribute('data-id');
        const project = projects[id];

        const mainImage = document.getElementById('main-image');
        const mainDescription = document.getElementById('main-description');
        const figure = document.querySelector('.works_main__view .reveal-image');

        // 覆いを戻す
        figure.classList.remove('revealed');

        // 画像と説明を更新
        mainImage.src = project.image;
        mainDescription.innerHTML = project.description;

        // 強制リフローで状態をリセット
        void figure.offsetWidth;

        // アニメーション発火
        figure.classList.add('revealed');
    });
});


