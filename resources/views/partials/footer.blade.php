<!-- resources/views/partials/footer.blade.php -->
<footer class="bg-black text-white py-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h2 class="text-2xl font-bold mb-6 text-gold">Contact</h2>
                <div class="flex items-center mb-6">
                    <i class="fas fa-envelope fa-2x text-gold mr-4"></i>
                    <p><a href="mailto:senaccessoiremoto@gmail.com" class="text-gray-300 hover:text-gold">senaccessoiremoto@gmail.com</a></p>
                </div>
                <div class="flex items-center mb-6">
                    <i class="fas fa-phone fa-2x text-gold mr-4"></i>
                    <p><span class="text-gray-300">778239831 705068706 777252566</span></p>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt fa-2x text-gold mr-4"></i>
                    <p><span class="text-gray-300">Scat Urban Coté Brioche Dorée Grand Yoff</span></p>
                </div>
            </div>
                     

            <!-- Navigation Links -->
            <div>
                <h2 class="text-2xl font-bold mb-6 text-gold">Liens</h2>
                <ul class="space-y-4">
                    <li class="flex items-center">
                        <i class="fas fa-home fa-lg text-gold mr-3"></i>
                        <a href="{{ url('/') }}" class="text-gray-300 hover:text-gold transition-colors duration-300">Accueil</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-box fa-lg text-gold mr-3"></i>
                        <a href="{{ url('/products') }}" class="text-gray-300 hover:text-gold transition-colors duration-300">Produits</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-user fa-lg text-gold mr-3"></i>
                        <a href="{{ url('/about') }}" class="text-gray-300 hover:text-gold transition-colors duration-300">À-propos</a>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-envelope fa-lg text-gold mr-3"></i>
                        <a href="{{ url('/contact') }}" class="text-gray-300 hover:text-gold transition-colors duration-300">Contact</a>
                    </li>
                </ul>
            </div>
            

            <!-- Social Media Links -->
            <div>
                <h2 class="text-2xl font-bold mb-4 text-gold">Suivez-nous</h2>
                <p class="mb-6">Ne manquez rien sur Sen Accessoire Moto et suivez-nous sur nos différentes plateformes de communication.</p>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/profile.php?id=100066927575189&mibextid=LQQJ4d" target="_blank" class="text-gray-400 hover:text-gold text-3xl transition-colors duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gold text-3xl transition-colors duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/sen_accessoire_moto_officiel?igsh=MXUzenJlOWNxcTkwcQ%3D%3D&utm_source=qr" target="_blank" class="text-gray-400 hover:text-gold text-3xl transition-colors duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.tiktok.com/@fatimakane31?_t=8oNNyfbOHeY&_r=1" target="_blank" class="text-gray-400 hover:text-gold text-3xl transition-colors duration-300">
                        <i class="fab fa-tiktok"></i>
                    </a>    
                </div>
            </div>
            
        </div>
        <div class="text-center mt-8">
            <p class="text-gray-400">&copy; {{ date('Y') }} Sen Accessoire Moto. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<style>
    .text-gold {
        color: #d4af37; /* Gold color for an elegant touch */
    }
    .hover\:text-gold:hover {
        color: #d4af37;
    }

</style>
