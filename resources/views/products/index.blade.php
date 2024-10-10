@extends('layouts.app')

@section('title', 'Nos Produits')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8 text-gold">Nos Produits</h1>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-gray-100 p-4 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Catégories</h2>
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('products.index', ['category' => $category->id]) }}" class="block py-2 px-4 rounded hover:bg-gray-200 text-gray-700">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 ml-8">
            <!-- Search Form -->
            <form action="{{ route('products.index') }}" method="GET" class="mb-8">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Rechercher un produit..." class="flex-grow p-3 border border-gray-300 rounded-l-md shadow-sm focus:ring-gold focus:border-gold transition duration-150 ease-in-out">
                    <button type="submit" class="bg-black text-white px-6 py-3 rounded-r-md shadow-md hover:bg-gray-800 transition duration-150 ease-in-out">Rechercher</button>
                </div>
            </form>

            @if (isset($category))
                <h2 class="text-2xl font-semibold mb-4 text-gray-800">Catégorie: {{ $category->name }}</h2>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($products as $product)
                    <div class="product bg-white p-6 rounded-lg shadow-lg border border-gray-300 transition-transform transform hover:scale-105">
                        <div class="w-full h-64 overflow-hidden rounded-lg mb-4">
                            <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold text-black">{{ $product->name }}</h3>
                        <p class="text-gray-900 font-bold mt-4">{{ $product->price }} CFA</p>
                        <p class="text-sm font-medium mt-2 {{ $product->availability ? 'text-green-500' : 'text-red-500' }}">
                            {{ $product->availability ? 'Disponible' : 'En rupture' }}
                        </p>
                        <button onclick="openModal('{{ $product->id }}')" class="mt-4 inline-block bg-black text-white py-2 px-4 rounded-lg hover:bg-gray-800 transition duration-150 ease-in-out">Voir le produit</button>
                    </div>
                @endforeach
            </div>
            
            

            <div class="mt-8">
                {{ $products->links() }}
            </div>

            <!-- Modal -->
            <div id="product-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center">
                <div class="bg-white p-8 rounded-lg max-w-4xl mx-auto">
                    <div class="flex justify-end">
                        <button onclick="closeModal()" class="text-gray-600 hover:text-gray-900 text-2xl">&times;</button>
                    </div>
                    <div id="modal-content" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Contenu du produit sera chargé ici -->
                    </div>
                </div>
            </div>            
        </main>
    </div>
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

    function openModal(productId) {
    fetch(`{{ url('/products') }}/${productId}`)
        .then(response => response.json())
        .then(data => {
            const modalContent = document.getElementById('modal-content');
            modalContent.innerHTML = `
                <div class="col-span-1">
                    <img src="${data.image_url}" alt="${data.name}" class="w-full h-full object-cover rounded-lg" loading="lazy">
                </div>
                <div class="col-span-1 flex flex-col justify-center">
                    <h2 class="text-2xl font-bold mb-4 text-black">Modèle: ${data.name}</h2>
                    <p class="text-gray-600 mb-4">${data.description}</p>
                    <p class="text-gray-900 font-bold">Prix: ${data.price} CFA</p>
                </div>
            `;
            document.getElementById('product-modal').classList.remove('hidden');
            document.getElementById('product-modal').classList.add('flex');
        })
        .catch(error => console.error('Error fetching product data:', error));
}

function closeModal() {
    document.getElementById('product-modal').classList.remove('flex');
    document.getElementById('product-modal').classList.add('hidden');
}

const preloadedProducts = @json($products);
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
    .hover\:text-gold:hover {
        color: #d4af37;
    }
    .bg-black {
        background-color: #000000;
    }
    .bg-gray-800 {
        background-color: #4a4a4a;
    }
    .sidebar a:hover {
        background-color: #f0f0f0;
    }
    #product-modal {
    background-color: rgba(0, 0, 0, 0.3); /* Ajustez l'opacité ici (0.3 pour 30%) */
    }
    #product-modal .bg-white {
        width: 50%; /* Adjust width as needed */
        height: 70%; /* Adjust height as needed */
        max-width: 50%; /* Adjust max-width as needed */
        max-height: 70%; /* Adjust max-height as needed */
    }

</style>
@endsection
