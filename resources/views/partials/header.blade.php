<!-- resources/views/partials/header.blade.php -->
<nav class="bg-white w-full shadow-md transition-shadow duration-300 ease-in-out" id="header">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a class="text-lg font-bold text-gold" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="SEN ACCESSOIRE MOTO" class="h-16 rounded-full">
        </a>
        <button id="menu-btn" class="block lg:hidden text-gold focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div id="menu" class="hidden lg:flex lg:items-center lg:space-x-6">
            <a class="{{ request()->is('/') ? 'text-gold' : '' }} text-black hover:text-gold py-2 transition-colors duration-300" href="{{ url('/') }}">Accueil</a>
            <div class="relative group">
                <a class="{{ request()->is('products') || request()->is('products/*') ? 'text-gold' : '' }} text-black hover:text-gold py-2 transition-colors duration-300 cursor-pointer">Produits</a>
                <div class="absolute left-0 mt-2 w-48 bg-white text-black shadow-lg hidden group-hover:block">
                    <a class="{{ request()->is('products/accessories') ? 'bg-white' : '' }} block px-4 py-2 hover:bg-gold" href="{{ url('/products/accessories') }}">Accessoires</a>
                    <a class="{{ request()->is('products/motos') ? 'bg-white' : '' }} block px-4 py-2 hover:bg-gold" href="{{ url('/products/motos') }}">Motos</a>
                </div>
            </div>
            <a class="{{ request()->is('about') ? 'text-gold' : '' }} text-black hover:text-gold py-2 transition-colors duration-300" href="{{ url('/about') }}">À-propos</a>
            <a class="{{ request()->is('contact') ? 'text-gold' : '' }} text-black hover:text-gold py-2 transition-colors duration-300" href="{{ url('/contact') }}">Contactez-Nous</a>
        </div>
    </div>
</nav>
<a href="https://wa.me/c/221705068706" target="_blank" id="whatsapp-link">
    <img src="{{ asset('images/WhatsApp_icon.png.webp') }}" alt="WhatsApp" class="whatsapp-logo">
</a>

<script>
    document.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
    });

    document.getElementById('menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });

    // Gestion du sous-menu "Produits"
    const produitsLink = document.querySelector('.group > a');
    const subMenu = document.querySelector('.group .absolute');

    produitsLink.addEventListener('mouseenter', () => {
        subMenu.classList.remove('hidden');
    });

    produitsLink.addEventListener('mouseleave', () => {
        setTimeout(() => {
            if (!subMenu.matches(':hover')) {
                subMenu.classList.add('hidden');
            }
        }, 200);
    });

    subMenu.addEventListener('mouseenter', () => {
        subMenu.classList.remove('hidden');
    });

    subMenu.addEventListener('mouseleave', () => {
        subMenu.classList.add('hidden');
    });
</script>

<style>
    .text-gold {
        color: #d4af37; /* Gold color for an elegant touch */
    }
    .hover\:text-gold:hover {
        color: #d4af37;
    }

    .bg-gold {
    background-color: #d4af37; /* Gold background color */
    }
    .bg-gray-200 {
    background-color: #e2e8f0; /* Gray background color for submenu */
    }
    .whatsapp-logo {
        height: 48px; /* Adjust the height as needed */
        width: 48px;  /* Adjust the width as needed */
    }

    #whatsapp-link {
        position: fixed;
        bottom: 20px; /* Distance from the bottom of the screen */
        right: 20px;  /* Distance from the right of the screen */
        z-index: 1000; /* Ensure it appears above other elements */
        background-color: white; /* Optional: Add background color */
        border-radius: 50%; /* Optional: Make it a circle */
        padding: 10px; /* Optional: Add some padding */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Add a shadow */
        transition: transform 0.3s;
    }

    #whatsapp-link:hover {
        transform: scale(1.1); /* Slightly enlarge the logo on hover */
    }
</style>




{{-- <nav class="bg-black w-full shadow-md transition-shadow duration-300 ease-in-out" id="header">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a class="text-lg font-bold text-gold" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="SEN ACCESSOIRE MOTO" class="h-16 rounded-full"> <!-- Remplacez 'images/logo.png' par le chemin réel vers votre logo -->
        </a>
        <button id="menu-btn" class="block lg:hidden text-gold focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div id="menu" class="hidden lg:flex lg:items-center lg:space-x-6">
            <a class="text-white hover:text-gold py-2 transition-colors duration-300" href="{{ url('/') }}">Accueil</a>
            <div class="relative group">
                <a class="text-white hover:text-gold py-2 transition-colors duration-300 cursor-pointer">Produits</a>
                <div class="absolute left-0 hidden mt-2 w-48 bg-white text-black shadow-lg group-hover:block">
                    <a class="block px-4 py-2 hover:bg-gray-200" href="{{ url('/products/accessories') }}">Accessoires</a>
                    <a class="block px-4 py-2 hover:bg-gray-200" href="{{ url('/products/motos') }}">Motos</a>
                </div>
            </div>
            <a class="text-white hover:text-gold py-2 transition-colors duration-300" href="{{ url('/testimonials') }}">Témoignages</a>
            <a class="text-white hover:text-gold py-2 transition-colors duration-300" href="{{ url('/about') }}">À-propos</a>
            <a class="text-white hover:text-gold py-2 transition-colors duration-300" href="{{ url('/contact') }}">Contactez-Nous</a>
        </div>
    </div>
</nav>



<script>
    document.addEventListener('scroll', function() {
        const header = document.getElementById('header');
        if (window.scrollY > 50) {
            header.classList.add('shadow-lg');
        } else {
            header.classList.remove('shadow-lg');
        }
    });

    document.getElementById('menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>

<style>
    .text-gold {
        color: #d4af37; /* Gold color for an elegant touch */
    }
    .hover\:text-gold:hover {
        color: #d4af37;
    }
</style> --}}
