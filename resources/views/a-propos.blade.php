@extends('layouts.app')

@section('title', 'À Propos')

@section('content')
<div class="w-full px-4 py-8 overflow-hidden">
    <!-- Hero Section -->
    <section class="bg-black text-white text-center py-16 mb-8" data-aos="fade-up">
        <h1 class="text-4xl font-bold mb-4">À Propos de Nous</h1>
        <p class="text-xl">Découvrez qui nous sommes et ce qui nous motive.</p>
    </section>

    <!-- Our Story -->
    <section class="mb-12" data-aos="fade-right">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8">
                <h2 class="text-3xl font-semibold mb-4 text-gold">Notre Histoire</h2>
                <p class="text-lg text-gray-800">
                    Sen Accessoire Moto a été fondée avec une passion pour les motos et un engagement à offrir les meilleurs accessoires pour les passionnés de deux-roues. Depuis nos débuts, nous avons élargi notre offre pour inclure non seulement des accessoires de moto, mais aussi des motos, scooters, et tricycles. Notre mission est de fournir des produits de haute qualité qui améliorent l'expérience de conduite et répondent aux besoins de nos clients.
                </p>
            </div>
            <div class="w-full md:w-1/2 px-4 mb-8" data-aos="fade-left">
                <img src="/images/our-story.jpg" alt="Notre Histoire" class="rounded-lg shadow-lg w-full max-w-full h-auto grayscale">
            </div>
        </div>
    </section>

    <!-- Ligne de séparation -->
<hr class="border-gray-300 my-8 mx-auto w-11/12">

    <!-- Our Mission -->
    <section class="bg-white py-20 mb-12" data-aos="fade-up">
        <div class="text-center max-w-7xl mx-auto px-4">
            <h2 class="text-4xl mb-8">Notre Mission</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                        <i class="fas fa-star fa-3x text-gold mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-black">Qualité</h3>
                        <p class="text-gray-800">Chez Sen Accessoire Moto, notre mission est de révolutionner l'expérience de conduite à moto en offrant des produits de la plus haute qualité, conçus pour allier confort, sécurité et style.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left" data-aos-delay="200" data-aos-duration="2000">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                        <i class="fas fa-handshake fa-3x text-gold mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-black">Partenariats</h3>
                        <p class="text-gray-800">Nous collaborons étroitement avec des fabricants réputés et des marques de confiance telles que Helmet, SMK, Lifan et DFZ pour garantir que chaque produit que nous proposons est à la hauteur de nos exigences.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left" data-aos-delay="300" data-aos-duration="3000">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                        <i class="fas fa-user-tie fa-3x text-gold mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2 text-black">Service Client</h3>
                        <p class="text-gray-800">Nous nous efforçons de bâtir des relations durables avec nos clients en offrant un service après-vente exceptionnel, des conseils d'experts et un soutien personnalisé.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ligne de séparation -->
    <hr class="border-gray-300 my-8 mx-auto w-11/12">

    <!-- Products and Services -->
    <section class="mb-12" data-aos="fade-up">
        <h2 class="text-4xl mb-4 text-center">Produits et Services</h2>
        <div class="flex flex-wrap -mx-4">
            <!-- Casques -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-right">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-helmet-safety fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Casques</h3>
                    <p class="text-gray-800 text-center">Nous proposons une variété de casques de haute qualité, conçus pour le confort et la sécurité.</p>
                </div>
            </div>
            <!-- Gants -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-up">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-hand-paper fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Gants</h3>
                    <p class="text-gray-800 text-center">Des gants protecteurs et élégants pour tous les pilotes, conçus pour une adhérence et un confort optimal.</p>
                </div>
            </div>
            <!-- Malettes -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-left">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-briefcase fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Malettes</h3>
                    <p class="text-gray-800 text-center">Une large gamme de mallettes pour moto, idéales pour transporter vos effets personnels en toute sécurité.</p>
                </div>
            </div>
            <!-- Scooters -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-right">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-motorcycle fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Scooters & Motos</h3>
                    <p class="text-gray-800 text-center">Vente de motos, scooters, et tricycles de qualité, fiables et adaptés à tous vos besoins.</p>
                </div>
            </div>
            <!-- Entretien et Réparation -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-up">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-wrench fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Entretien & Réparation</h3>
                    <p class="text-gray-800 text-center">Service complet d'entretien et de réparation pour toutes marques et modèles de motos.</p>
                </div>
            </div>
            <!-- Assistance 24/7 -->
            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8" data-aos="fade-left">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center">
                    <i class="fas fa-phone fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Assistance 24/7</h3>
                    <p class="text-gray-800 text-center">Assistance d'urgence 24/7 pour toutes les pannes ou incidents liés à votre moto.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Ligne de séparation -->
    <hr class="border-gray-300 my-8 mx-auto w-11/12">

    <!-- Our Team -->
    <section class="bg-white py-20 mb-12" data-aos="fade-up">
        <h2 class="text-4xl mb-4 text-center">Notre Équipe</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8" data-aos="fade-right">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 text-center">
                    <img src="/images/team-member1.jpg" alt="Membre de l'équipe" class="h-32 w-32 rounded-full mx-auto mb-4 max-w-full grayscale">
                    <h3 class="text-xl font-semibold mb-2 text-black">Ramata DJIGO</h3>
                    <p class="text-gray-800">CO-FONDATRICE</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 px-4 mb-8" data-aos="fade-left">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 text-center">
                    <img src="/images/team-member2.jpg" alt="Membre de l'équipe" class="h-32 w-32 rounded-full mx-auto mb-4 max-w-full grayscale">
                    <h3 class="text-xl font-semibold mb-2 text-black">Fatima KANE</h3>
                    <p class="text-gray-800">CO-FONDATRICE</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ligne de séparation -->
    <hr class="border-gray-300 my-8 mx-auto w-11/12">

    <!-- Quality Commitment -->
    <section class="bg-white py-20 mb-12" data-aos="fade-up">
        <h2 class="text-4xl mb-8 text-center">Engagement envers la Qualité</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-right">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                    <i class="fas fa-clipboard-check fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Standards Élevés</h3>
                    <p class="text-gray-800">Nous adhérons à des normes élevées de qualité pour tous nos produits, garantissant durabilité et fiabilité.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                    <i class="fas fa-check-circle fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Contrôles Rigoureux</h3>
                    <p class="text-gray-800">Chaque produit est soumis à des contrôles rigoureux pour assurer sa conformité aux exigences de sécurité et de performance.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-left">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg border border-gray-200 flex flex-col items-center text-center">
                    <i class="fas fa-thumbs-up fa-3x text-gold mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2 text-black">Satisfaction Client</h3>
                    <p class="text-gray-800">Nous nous engageons à assurer la satisfaction de nos clients avec des produits qui répondent à leurs attentes les plus élevées.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="bg-black text-white py-20" data-aos="fade-up">
        <div class="w-full text-center max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-semibold mb-4">Contactez-Nous</h2>
            <p class="mb-4">Pour toute demande, veuillez nous contacter à <a href="mailto:senaccessoiremoto@gmail.com" class="text-gold-500 underline">senaccessoiremoto@gmail.com</a> ou appelez-nous au <span class="text-gold-500">778239831  777252566  705068706</span>.</p>
        </div>
    </section>
</div>

<button id="scrollToTopBtn" class="scrollToTopBtn">
    &#8679;
</button>

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

    .text-gold-500 {
        color: gold;
    }
</style>
@endsection
