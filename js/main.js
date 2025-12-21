console.log('JSファイル読み込まれた！');
// 店舗一覧ボタン切り替え

const button1 = document.querySelector('#button1');
const button2 = document.querySelector('#button2');
const button3 = document.querySelector('#button3');
const screen1 = document.querySelector('#screen1');
const screen2 = document.querySelector('#screen2');
const screen3 = document.querySelector('#screen3');

function showScreen(target) {
    [screen1, screen2, screen3].forEach(screen => screen.classList.remove('show'));
    target.classList.add('show');
}

button1.addEventListener('click', function () {
    button1.classList.add('active');
    button2.classList.remove('active');
    button3.classList.remove('active');
    showScreen(screen1);
});

button2.addEventListener('click', function () {
    button2.classList.add('active');
    button1.classList.remove('active');
    button3.classList.remove('active');
    showScreen(screen2);
});

button3.addEventListener('click', function () {
    button3.classList.add('active');
    button2.classList.remove('active');
    button1.classList.remove('active');
    showScreen(screen3);
});

//店舗紹介背景アニメーション
const section = document.querySelector('.introduction');
console.log(section);
const motifs = document.querySelectorAll('.motif');
console.log('motifs:', motifs);
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        console.log('監視中:', entry.target);
        console.log('交差してる？:', entry.isIntersecting);
        if (entry.isIntersecting) {
            motifs.forEach(motif => motif.classList.add('action'));
        }
    });
}, {
    root: null,
    rootMargin: '-30% 0px',
    threshold: 0.2
});
console.log('Observer開始');
observer.observe(section);

//メインビジュアルスライドショー

const slides = document.querySelectorAll('.pic__item');
const dots = document.querySelectorAll('.dot');
let index = 0;
let timer;

function showSlide(i) {
    slides.forEach(slide => slide.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    slides[i].classList.add('active');
    dots[i].classList.add('active');
    index = i;
}

function startAutoPlay() {
    timer = setInterval(() => {
        let next = (index + 1) % slides.length;
        showSlide(next);
    }, 6000);
}

dots.forEach(dot => {
    dot.addEventListener('click', () => {
        clearInterval(timer);
        showSlide(Number(dot.dataset.index));
        startAutoPlay();
    });
});

startAutoPlay();

//背景

const washi = document.querySelector('.washi-bg');

window.addEventListener('scroll', () => {
    const y = window.scrollY * 0.15;
    washi.style.backgroundPosition = `center ${y}px`;
});

//要素が出るやつ

document.addEventListener("DOMContentLoaded", () => {
    const targets = document.querySelectorAll(".fade-in");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target); // 1回だけ発火
            }
        });
    }, {
        threshold: 0.2
    });

    targets.forEach(target => observer.observe(target));
});

//ナビ

document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();

        const target = document.querySelector(link.getAttribute('href'));
        if (!target) return;

        const targetPos = target.getBoundingClientRect().top + window.pageYOffset;
        const duration = 1600;
        const startPos = window.pageYOffset;
        const startTime = performance.now();

        function easeOutQuint(t) {
            return 1 - Math.pow(1 - t, 5);
        }

        function animation(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = easeOutQuint(progress);

            window.scrollTo(0, startPos + (targetPos - startPos) * eased);

            if (elapsed < duration) requestAnimationFrame(animation);
        }

        requestAnimationFrame(animation);
    });
});

//ヘッダー
document.addEventListener("DOMContentLoaded", () => {
    const navi = document.querySelector(".navi");
    const naviTop = navi.getBoundingClientRect().top + window.pageYOffset;

    window.addEventListener("scroll", () => {
        if (window.pageYOffset >= naviTop) {
            navi.classList.add("is-fixed");
        } else {
            navi.classList.remove("is-fixed");
        }
    });
});