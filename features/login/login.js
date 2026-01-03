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

// Discord Remember Me
const discordCheckbox = document.getElementById("discord-link");
const cb = document.querySelector(".login-remember-box");

discordCheckbox.href = '/features/oauth/discord.php?remember=' + (cb.checked ? '1' : '0');