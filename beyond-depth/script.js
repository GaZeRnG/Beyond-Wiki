import anime from 'animejs';

document.addEventListener('DOMContentLoaded', dropfunction);
function dropfunction() {
    document.querySelectorAll(".drop").forEach(b => 
    b.onclick = () => b.nextElementSibling.classList.toggle("active")
    );
}

const animation = anime({
    targets: '.lucide-chevron-down',
    rotate: '1turn',
    duration: 200,
    easing: 'easeInOutSine',
    loop: true
});