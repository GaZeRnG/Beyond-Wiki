const user = document.getElementById('icon');
const dropdown = document.getElementById('dropdown');

user.addEventListener('click', () => {
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});

document.addEventListener('click', (event) => {
    if (!user.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = 'none';
    }
});