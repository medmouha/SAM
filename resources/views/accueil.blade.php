@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
@if(session('success'))
<div id="success-message" class="bg-green-500 text-white p-4 rounded-lg mb-4">
    {{ session('success') }}
</div>
@endif

<!-- Hero Section -->
<section class="relative min-h-screen py-32 overflow-hidden">
    <!-- Overlay avec fond noir léger -->
    <div class="absolute inset-0 bg-black bg-opacity-80 z-10"></div>

    <!-- Conteneur des images avec effet zoom-in -->
    <div class="absolute inset-0 z-0 flex items-center justify-center">
        <div class="relative flex items-center justify-center w-full h-full">
            <!-- Image 1 -->
            <img src="{{ asset('images/gs.png') }}" alt="gs" class="image-slide max-w-full max-h-full object-contain absolute opacity-0 transition-opacity duration-1000 ease-in-out transform scale-100">
            <!-- Image 2 -->
            <img src="{{ asset('images/shark.png') }}" alt="Shark" class="image-slide max-w-full max-h-full object-contain absolute opacity-0 transition-opacity duration-1000 ease-in-out transform scale-100">
            <!-- Image 3 -->
            <img src="{{ asset('images/valiant2.png') }}" alt="Valiant" class="image-slide max-w-full max-h-full object-contain absolute opacity-0 transition-opacity duration-1000 ease-in-out transform scale-100">
            <!-- Image 4 -->
            <img src="{{ asset('images/xadv.png') }}" alt="XADV" class="image-slide max-w-full max-h-full object-contain absolute opacity-0 transition-opacity duration-1000 ease-in-out transform scale-100">
        </div>
    </div>

    <!-- Contenu de la section -->
    <div class="relative text-center z-20">
        <div class="max-w-2xl mx-auto"> <!-- Limite la largeur -->
            <h1 class="text-4xl font-bold mb-4 text-white" data-aos="fade-down">
                Bienvenue chez Sen Accessoires Moto
            </h1>
            <p class="text-l mb-6 text-white" data-aos="fade-up">
                Découvrez notre large sélection d'accessoires moto conçus pour offrir une protection optimale, un style unique, et un confort incomparable. 
                Que vous soyez un amateur passionné ou un professionnel exigeant, nous vous proposons des produits de qualité supérieure aux meilleurs prix. 
                Explorez nos collections et équipez-vous pour la route en toute confiance avec Sen Accessoires Moto.
            </p>
        </div>
        
        <a href="{{ route('products.index') }}" class="inline-block bg-gold text-black py-3 px-6 rounded-lg shadow-lg hover:bg-gold-300 transition duration-150 ease-in-out" data-aos="zoom-in">Découvrez nos produits</a>
    </div>
</section>

<!-- About Section -->
<section class="about-section py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl mb-8 underline-part">À Propos de Nous</h2>
        <p class="text-lg leading-relaxed mb-8">Sen Accessoires Moto est une entreprise dynamique spécialisée dans la vente d'accessoires moto de qualité. Nous offrons également une large gamme de motos, scooters, et tricycles pour répondre à tous vos besoins en matière de mobilité. Notre mission est de vous fournir des produits de haute qualité pour améliorer votre expérience de conduite et vous assurer une satisfaction totale.</p>
        <a href="{{ route('about') }}" class="inline-block bg-gold text-white py-3 px-6 rounded-lg shadow-lg hover:bg-gold-100 transition duration-150 ease-in-out">En savoir plus</a>
    </div>
</section>

<!-- Ligne de séparation -->
<hr class="border-gray-300 my-8 mx-auto w-11/12">

<!-- Services Offerts Section -->
<section class="services-section py-20 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl mb-8 underline-part">Services Offerts</h2>
        <div class="flex flex-wrap -mx-4">
            <!-- Service 1 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-right" data-aos-delay="100" data-aos-duration="3000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-tools fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Installation d'Accessoires</h3>
                    <p class="text-gray-600">Service professionnel d'installation d'accessoires pour motos, réalisé avec soin et précision.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-user-cog fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Conseils Personnalisés</h3>
                    <p class="text-gray-600">Conseils personnalisés pour choisir les meilleurs produits pour votre moto, adaptés à vos besoins et à votre budget.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-wrench fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Entretien et Réparation</h3>
                    <p class="text-gray-600">Service complet d'entretien et de réparation pour toutes les marques et modèles de motos, garantissant un service rapide et efficace.</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-motorcycle fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Vente de Motos, Scooters, et Tricycles</h3>
                    <p class="text-gray-600">Large gamme de motos, scooters, et tricycles de qualité, avec des véhicules fiables adaptés à tous vos besoins.</p>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-phone fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Assistance 24/7</h3>
                    <p class="text-gray-600">Assistance d'urgence 24/7 pour toutes les pannes ou incidents liés à votre moto, garantissant votre sécurité.</p>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <i class="fas fa-school fa-2x mb-4 text-gold icon-bounce"></i>
                    <h3 class="text-xl font-semibold mb-2">Formation et Ateliers</h3>
                    <p class="text-gray-600">Formations et ateliers réguliers pour apprendre à entretenir votre moto et améliorer vos compétences de conduite.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ligne de séparation -->
<hr class="border-gray-300 my-8 mx-auto w-11/12">

<!-- Nouveautés Section -->
<section class="new-arrivals-section py-20 bg-white" data-aos="fade-up">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl mb-8 underline-part">Nouveautés</h2>
        <div class="flex overflow-x-auto space-x-4">
            @forelse($latestPosts as $product)
                <div class="flex-shrink-0 w-64 bg-white p-6" data-aos="fade-up">
                    <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold mb-2 text-black">{{ $product->name }}</h3>
                    <p class="text-gray-600 mb-2">{{ Str::limit($product->description, 100) }}</p>
                    <p class="text-lg font-bold mb-2">{{ ($product->price) }} CFA</p>
                    <a href="{{ route('products.show', $product->id) }}" class="block w-full bg-gold text-white py-2 px-4 hover:bg-yellow-600 transition duration-150 ease-in-out mt-4">Voir Détails</a>
                </div>
            @empty
                <p class="text-gray-600">Aucun produit nouveau pour le moment.</p>
            @endforelse
        </div>        
    </div>
</section>

<!-- Ligne de séparation -->
<hr class="border-gray-300 my-8 mx-auto w-11/12">

<!-- Partners Section -->
<section class="partners-section min-h-screen py-20 bg-white flex items-center" data-aos="fade-up">
    <div class="container mx-auto text-center flex flex-col justify-center h-full">
        <p>ILS NOUS ONT FAIT CONFIANCE</p>
        <h2 class="text-4xl mb-8 underline-part">Nos Partenaires</h2>
        <div class="flex flex-wrap justify-center items-center flex-grow">
            <!-- Partenaire 1 -->
            <div class="flex-grow flex items-center justify-center p-6 m-6 max-w-md max-h-md" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <img src="{{ asset('images/helmet-logo.png') }}" alt="Helmet" class="h-32">
            </div>
            <!-- Partenaire 2 -->
            <div class="flex-grow flex items-center justify-center p-6 m-6 max-w-md max-h-md" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                <img src="{{ asset('images/smk-logo.png') }}" alt="SMK" class="h-32">
            </div>
            <!-- Partenaire 3 -->
            <div class="flex-grow flex items-center justify-center p-6 m-6 max-w-md max-h-md" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                <img src="{{ asset('images/dkmotos.png') }}" alt="Lifan" class="h-32">
            </div>
            <!-- Partenaire 4 -->
            <div class="flex-grow flex items-center justify-center p-6 m-6 max-w-md max-h-md" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                <img src="{{ asset('images/dfz-logo.png') }}" alt="DFZ" class="h-32">
            </div>
        </div>
    </div>
</section>

<!-- Ligne de séparation -->
<hr class="border-gray-300 my-8 mx-auto w-11/12">

<!-- Call to Action Section -->
<section class="cta-section py-20 bg-white text-black text-center" data-aos="fade-up">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold mb-8">Prêt à Améliorer Votre Expérience Moto ?</h2><br>
        <a href="{{ route('contact.submit') }}" class="inline-block bg-gold text-black py-3 px-6 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-150 ease-in-out">Contactez-nous dès maintenant</a>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section py-20 bg-gray-900 text-white text-center" data-aos="fade-up">
    <div class="container mx-auto">
        <h2 class="text-4xl mb-4">Abonnez-vous à notre Newsletter</h2>
        <p class="text-lg mb-6">Recevez les dernières nouvelles, offres spéciales et mises à jour directement dans votre boîte mail.</p>
        <form action="{{ route('newsletter.signup') }}" method="POST" class="flex flex-col items-center">
            @csrf
            <input type="email" name="email" placeholder="Votre email" required class="w-full md:w-1/3 p-3 rounded-lg mb-4 text-black">
            <button type="submit" class="inline-block bg-gold text-black py-3 px-6 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-150 ease-in-out">S'abonner</button>
        </form>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-20 bg-white" data-aos="fade-left">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl mb-8 underline-part">Témoignages</h2>
        <!-- Swiper Container -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Testimonial Item 1 -->
                <div class="swiper-slide testimonial-item">
                    <p class="text-3xl leading-relaxed mb-4">Excellent service et produits de qualité. Je recommande vivement ce magasin pour ses accessoires de moto variés et ses conseils experts.</p>
                    <p class="text-gold font-bold">- Libasse NDIAYE</p>
                </div>
                <!-- Testimonial Item 2 -->
                <div class="swiper-slide testimonial-item">
                    <p class="text-3xl leading-relaxed mb-4">Une expérience d'achat agréable et un service client au top ! J'ai trouvé tout ce dont j'avais besoin pour équiper ma moto avec des accessoires de qualité.</p>
                    <p class="text-gold font-bold">- Mansour DIOP</p>
                </div>
                <!-- Testimonial Item 3 -->
                <div class="swiper-slide testimonial-item">
                    <p class="text-3xl leading-relaxed mb-4">Livraison rapide et des accessoires de moto de grande qualité ! Je suis très satisfait de mes achats et je reviendrai certainement pour d'autres produits.</p>
                    <p class="text-gold font-bold">- Seydou SY</p>
                </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<button id="scrollToTopBtn" class="scrollToTopBtn">
    &#8679;
</button>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true, // Boucle infinie pour l'alternance
        autoplay: {
            delay: 5000, // Temps entre chaque image (5 secondes)
            disableOnInteraction: false, // Autoplay continue même après interaction
        },
        effect: 'fade', // Effet de fondu pour l'alternance
        fadeEffect: {
            crossFade: true, // Transition plus fluide
        },
    });
</script>


<script>
    // Récupère le bouton
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    // Ajoute un écouteur d'événement pour le défilement
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) { // Affiche le bouton après avoir défilé de 300px
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });

    // Ajoute un écouteur d'événement pour le clic sur le bouton
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Défilement fluide vers le haut
        });
    });

    // Script pour faire disparaître le message après 5 secondes (5000 ms)
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.transition = "opacity 1s ease";
            successMessage.style.opacity = "0"; // Ajout d'une transition pour un effet de fondu

            // Supprimer complètement l'élément après la transition
            setTimeout(function() {
                successMessage.remove();
            }, 1000); // Délai d'1 seconde pour la transition de fondu
        }
    }, 5000); // 5000 ms = 5 secondes
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.image-slide');
        let currentIndex = 0;

        function showNextSlide() {
            slides.forEach((slide, index) => {
                slide.style.opacity = '0'; // Masquer toutes les images
            });

            slides[currentIndex].style.opacity = '1'; // Afficher l'image actuelle
            slides[currentIndex].style.transform = 'scale(1.1)'; // Zoom sur l'image actuelle

            setTimeout(() => {
                slides[currentIndex].style.transform = 'scale(1)'; // Réinitialiser le zoom après une transition
            }, 1000); // Temps de transition du zoom

            currentIndex = (currentIndex + 1) % slides.length; // Passer à l'image suivante
        }

        showNextSlide(); // Afficher la première image
        setInterval(showNextSlide, 5000); // Passer à l'image suivante toutes les 5 secondes
    });
</script>


<style>
    .scrollToTopBtn {
        position: fixed;
        bottom: 100px;
        right: 40px;
        display: none; /* Cache le bouton par défaut */
        width: 50px;
        height: 50px;
        background-color: #000000; /* Couleur de fond */
        color: white;
        border: none;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s ease-in-out;
    }

    .scrollToTopBtn:hover {
        background-color: #4a4a4a; /* Couleur de fond au survol */
    }

    .text-gold {
        color: #d4af37; /* Gold color for an elegant touch */
    }
    .hero {
        position: relative;
        background-blend-mode: multiply;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .animate-fadeIn {
        animation: fadeIn 2s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

.text-gold {
    color: #DAA520; /* Or */
}
.testimonial-item {
    padding: 20px;
    margin: 0 auto; /* Centrer le commentaire */
    font-size: 1.125rem; /* Ajuster la taille de la police (18px) */
    line-height: 1.8; /* Espacement des lignes plus large */
}

@keyframes bounce-twice {
  0%, 100% {
    transform: translateY(0);
  }
  25%, 75% {
    transform: translateY(-10px);
  }
  50% {
    transform: translateY(-20px);
  }
}

.icon-bounce {
  display: inline-block;
  transition: transform 0.3s ease-in-out;
}

.icon-bounce:hover {
  animation: bounce-twice 0.7s ease-in-out;
}

/* Ajouter un trait de couleur or au milieu du texte */
h2 {
    position: relative;
    display: inline-block; /* Pour que le trait soit centré sous le titre */
}

.underline-part {
    position: relative;
    display: inline-block;
    padding-bottom: 10px; /* Ajuste cette valeur pour positionner le trait sous le texte */
}

.underline-part::after {
    content: "";
    position: absolute;
    bottom: 0; /* Place le trait juste en dessous du texte */
    left: 50%; /* Centre le trait */
    transform: translateX(-50%); /* Ajuste le positionnement pour le centrer */
    width: 80px; /* Largeur du trait */
    height: 3px; /* Épaisseur du trait */
    background-color: gold; /* Couleur du trait */
}

.image-container {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .image-slide {
        animation: zoomInOut 20s infinite; /* L'animation dure 20s et se répète indéfiniment */
        opacity: 0;
    }

    @keyframes zoomInOut {
        0% {
            opacity: 0;
            transform: scale(1);
        }
        10% {
            opacity: 1;
            transform: scale(1.1); /* Zoom in */
        }
        40% {
            opacity: 1;
            transform: scale(1.1);
        }
        50% {
            opacity: 0;
            transform: scale(1.2); /* Zoom out */
        }
        100% {
            opacity: 0;
            transform: scale(1); /* Retour à l'état initial */
        }
    }

    /* Applique l'animation avec des décalages pour chaque image */
    .image-slide:nth-child(1) {
        animation-delay: 0s;
    }
    .image-slide:nth-child(2) {
        animation-delay: 5s;
    }
    .image-slide:nth-child(3) {
        animation-delay: 10s;
    }
    .image-slide:nth-child(4) {
        animation-delay: 15s;
    }
</style>
@endsection