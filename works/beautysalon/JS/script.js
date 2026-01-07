document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector("nav");
    const body = document.body;

    hamburger.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        nav.classList.toggle("active");
        body.classList.toggle("no-scroll"); // スクロール固定（スマホ時など）
    });

    // メニューリンクをクリックしたら閉じる
    document.querySelectorAll("nav a").forEach(link => {
        link.addEventListener("click", () => {
            hamburger.classList.remove("active");
            nav.classList.remove("active");
            body.classList.remove("no-scroll");
        });
    });
});

//reason slide--------------------------
//--------------------------------------

const slides = document.querySelectorAll('.reason-card');
const prevBtn = document.querySelector('.reason-btn.prev');
const nextBtn = document.querySelector('.reason-btn.next');
let index = 0;
let autoSlide;

function showSlide(n) {
    slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === n) {
            slide.classList.add('active');
        }
    });
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

function startAutoSlide() {
    autoSlide = setInterval(nextSlide, 5000); // 5秒で切り替え
}

function stopAutoSlide() {
    clearInterval(autoSlide);
}

nextBtn.addEventListener('click', () => {
    stopAutoSlide();
    nextSlide();
    startAutoSlide();
});

prevBtn.addEventListener('click', () => {
    stopAutoSlide();
    prevSlide();
    startAutoSlide();
});

// 最初のスライド表示
showSlide(index);
startAutoSlide();

//menuのタブ切り替え---------------------------
// ------------------------------------------

const tabBtns = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // ボタンのアクティブ切り替え
        tabBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // コンテンツ切り替え
        const tabId = btn.dataset.tab;
        tabContents.forEach(content => {
            content.classList.toggle('active', content.id === tabId);
        });
    });
});
