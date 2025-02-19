// resources/js/app.js
import './bootstrap';

// DateTime updater
const updateDateTime = () => {
    const currentDateTime = document.getElementById('currentDateTime');
    if (currentDateTime) {
        const now = new Date();
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit'
        };
        currentDateTime.textContent = now.toLocaleDateString('en-US', options);
    }
};

setInterval(updateDateTime, 1000);
updateDateTime();

// Mobile menu
const initMobileMenu = () => {
    const menuButton = document.getElementById('menuButton');
    if (menuButton) {
        menuButton.addEventListener('click', () => {
            const navMenu = document.querySelector('nav ul');
            navMenu.classList.toggle('hidden');
        });
    }
};

// Image slider
const initImageSlider = () => {
    const slider = document.getElementById('slider');
    const prev = document.getElementById('prev');
    const next = document.getElementById('next');

    if (!slider || !prev || !next) return;

    let index = 0;
    const slideCount = slider.children.length;

    const updateSlider = () => {
        slider.style.transform = `translateX(-${index * 100}%)`;
    };

    next?.addEventListener('click', () => {
        index = (index + 1) % slideCount;
        updateSlider();
    });

    prev?.addEventListener('click', () => {
        index = (index - 1 + slideCount) % slideCount;
        updateSlider();
    });

    // Auto slide
    setInterval(() => {
        index = (index + 1) % slideCount;
        updateSlider();
    }, 5000);
};

// Dropdown functionality
const initDropdowns = () => {
    document.querySelectorAll('nav .group').forEach(group => {
        const button = group.querySelector('button');
        const dropdown = group.querySelector('ul');

        if (button && dropdown) {
            button.addEventListener('click', () => {
                dropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (event) => {
                if (!group.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        }
    });
};

// Initialize all functionality
document.addEventListener('DOMContentLoaded', () => {
    initMobileMenu();
    initImageSlider();
    initDropdowns();
});
