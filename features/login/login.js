// Rotating background images
const bgs = ["bg-1", "bg-2", "bg-3", "bg-4", "bg-5", "bg-6"];
let i = 0;
const layer = document.getElementById("bg");

setInterval(() => {
    layer.classList.add("opacity-0");

    setTimeout(() => {
        layer.classList.remove(bgs[i]);
        i = (i + 1) % bgs.length;
        layer.classList.add(bgs[i]);
        layer.classList.remove("opacity-0");
        layer.classList.add("opacity-100");
    }, 3000);
}, 3000);

(function () {
    const box = document.getElementById("remember-link");
    const googleLink = document.getElementById("google-link");
    const discordLink = document.getElementById("discord-link");

    function updateRememberState() {
        const ischecked = box.checked ? '1' : '0';
        sessionStorage.setItem('remember_me', ischecked);

        updateOathLinks(ischecked);
    }

    function updateOathLinks(State) {
        const baseGoogle = googleLink.href.split('?')[0];
        const baseDiscord = discordLink.href.split('?')[0];

        googleLink.href = baseGoogle + '?remember=' + State;
        discordLink.href = baseDiscord + '?remember=' + State;
    }

    box.addEventListener('change', updateRememberState);
    
    googleLink.addEventListener('mouseenter', () => {
        updateOathLinks(sessionStorage.getItem('remember_me') || '0');
    });

    discordLink.addEventListener('mouseenter', () => {
        updateOathLinks(sessionStorage.getItem('remember_me') || '0');
    });

    updateRememberState();
})();