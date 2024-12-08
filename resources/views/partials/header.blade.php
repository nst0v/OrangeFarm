<header class="fixed w-full z-50 transition-all duration-300" id="mainHeader">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Логотип -->
        <div class="logo">
            <img src="{{ asset('storage/logo.webp') }}" alt="Оранжевая ферма" class="h-24 hover:opacity-80 transition-opacity">
        </div>
        <!-- Навигация -->
        <nav>
            <ul class="flex space-x-8">
                <li><a href="#about" class="nav-link px-4 py-2 rounded-full transition-all duration-300">О нас</a></li>
                <li><a href="#rental" class="nav-link px-4 py-2 rounded-full transition-all duration-300">Аренда</a></li>
                <li><a href="#products" class="nav-link px-4 py-2 rounded-full transition-all duration-300">Продукция</a></li>
                <li><a href="#map" class="nav-link px-4 py-2 rounded-full transition-all duration-300">Как добраться?</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
    .nav-link {
        background-color: rgba(0, 0, 0, 0.3);
        color: white;
        backdrop-filter: blur(4px);
    }

    .nav-link:hover {
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        transform: translateY(-1px);
    }

    #mainHeader {
        transform: translateY(0);
        transition: transform 0.3s ease;
    }

    #mainHeader.header-hidden {
        transform: translateY(-100%);
    }
</style>
