@extends('layouts.app')

@section('title', 'Contactez-Nous')

@section('content')

<div class="container mx-auto px-4 py-8">
    <!-- Hero Section -->
    <section class="bg-gray-900 text-white text-center py-16 mb-8">
        <h1 class="text-4xl font-bold mb-4">Contactez-Nous</h1>
        <p class="text-xl">Nous sommes à votre écoute pour toutes vos questions et demandes.</p>
    </section>
    <div class="flex flex-wrap -mx-4">
        <!-- Location and Contact Information -->
        <div class="w-full md:w-1/2 px-4" data-aos="fade-right" data-aos-delay="100">
            <h2 class="text-3xl font-semibold mb-4 text-gold">Nous Contacter</h2>
            <p class="mb-4 text-gray-800">Vous avez des questions, des préoccupations ou vous souhaitez en savoir plus sur nos produits et services ? Notre équipe est à votre disposition pour vous apporter les réponses et l'assistance dont vous avez besoin. N'hésitez pas à nous écrire via le formulaire ci-dessous ou à nous contacter directement par téléphone ou email. Nous serons ravis de vous aider et de répondre à vos demandes dans les plus brefs délais.</p>


            <h2 class="text-3xl font-semibold mb-4 text-gold">Notre Emplacement</h2>
            <p class="mb-4 text-gray-800">Visitez-nous à :</p>
            <p class="mb-4 text-gray-800">Scat Urban, Côté de la Brioche Dorée, Grand Yoff</p>

            <h2 class="text-3xl font-semibold mb-4 text-gold">Informations de Contact</h2>
            <p class="mb-4 text-gray-800"><strong>Email :</strong> <a href="mailto:senaccessoiremoto@gmail.com" class="text-gray-900 underline">senaccessoiremoto@gmail.com</a></p>
            <p class="mb-4 text-gray-800"><strong>Téléphone :</strong> 778239831, 777252566, 705068706</p>
        </div>

        <!-- Contact Form -->
        <div class="w-full md:w-1/2 px-4 mb-8">
            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 bg-white p-8 rounded-xl shadow-lg border border-gray-200 max-w-lg mx-auto">
                @csrf
            
                <div class="form-group">
                    <label for="fullname" class="block text-sm font-semibold text-gray-800 mb-2">Nom</label>
                    <input type="text" id="fullname" name="fullname" class="w-full p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:ring-gold focus:border-gold transition duration-200 ease-in-out placeholder-gray-500" placeholder="Entrez votre nom" required>
                </div>
            
                <div class="form-group">
                    <label for="email" class="block text-sm font-semibold text-gray-800 mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" class="w-full p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:ring-gold focus:border-gold transition duration-200 ease-in-out placeholder-gray-500" placeholder="Entrez votre email" required>
                </div>
            
                <div class="form-group">
                    <label for="message" class="block text-sm font-semibold text-gray-800 mb-2">Message</label>
                    <textarea id="message" name="message" rows="6" class="w-full p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm focus:ring-gold focus:border-gold transition duration-200 ease-in-out placeholder-gray-500" placeholder="Votre message ici..." required></textarea>
                </div>
            
                <button type="submit" class="w-full bg-gold text-white font-semibold py-3 rounded-lg shadow-md hover:bg-yellow-600 transition duration-150 ease-in-out">Envoyer</button>
            </form>
            
        </div>
    </div>
    <!-- Full-width Map -->
    <div class="mb-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.583696195817!2d-17.457950226155425!3d14.736113073747077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d3623ca86b7%3A0x4133091e072d5a4d!2sLa%20Brioche%20Dor%C3%A9e%20Grand%20Yoff!5e0!3m2!1sfr!2ssn!4v1722175378142!5m2!1sfr!2ssn" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

<style>
    .text-gold {
        color: #d4af37; /* Gold color for an elegant touch */
    }
    .focus\:ring-gold:focus {
        ring-color: #d4af37;
    }
    .focus\:border-gold:focus {
        border-color: #d4af37;
    }
</style>
@endsection