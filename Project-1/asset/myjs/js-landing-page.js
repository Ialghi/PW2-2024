let nav = document.querySelector('nav');

nav.style.position = 'fixed';
nav.style.width = '100%';
nav.style.top = '0';
nav.style.zIndex = '1000';

// Fungsi untuk mengaktifkan smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.onclick = e => {
        e.preventDefault();
        document.querySelector(anchor.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    };
});


