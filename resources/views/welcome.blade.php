@extends('layouts.app')

@section('content')

<style>
    .section-height {
        height: 100vh;
        min-height: 600px;
        max-height: 1080px;
        position: relative;
        overflow: hidden;
    }

    .section-transition {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 25vh;
        background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
        z-index: 2;
    }

    .section-transition-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 25vh;
        background: linear-gradient(to top, transparent, rgba(0, 0, 0, 0.8));
        z-index: 2;
    }

    .typing-cursor {
        display: inline-block;
        width: 3px;
        background-color: white;
        margin-left: 4px;
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }

    #typed-text {
        opacity: 0.3;
        transition: opacity 0.3s ease;
    }

    #typed-text:last-child {
        opacity: 1;
    }
</style>

<div id="about" class="bg-orange-100 text-gray-800 py-20 text-center relative flex items-center justify-center" style="height: 100vh;">
    <picture class="w-full h-full absolute top-0 left-0">
        <source srcset="{{ asset('storage/winter_main.webp') }}" type="image/webp">
        <img src="{{ asset('storage/winter_main.webp') }}" alt="Фон фермы" class="w-full h-full object-cover">
    </picture>
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-5xl font-bold">Оранжевая ферма</h1>
        <p class="mt-4 text-lg"><span id="typed-text"></span></p>
    </div>
    <div class="section-transition"></div>
    <div class="section-transition-top"></div>
</div>

<section id="rental" class="py-16 text-gray-900 relative">
    <picture class="w-full h-full absolute top-0 left-0">
        <source srcset="{{ asset('storage/summer_main.webp') }}" type="image/webp">
        <img src="{{ asset('storage/summer_main.webp') }}" alt="Летний фон фермы" class="w-full h-full object-cover">
    </picture>
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-4xl font-semibold text-center text-white">Аренда домиков</h2>
        <p class="mt-4 text-center text-lg text-white">
            Уютные домики A-frame в лесу. Идеально для отдыха всей семьёй.
        </p>
        <div class="grid md:grid-cols-3 gap-6 mt-10 ">
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/new_year.webp') }}" alt="Домик 1" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Сосновый"</h3>
                <p>Комфортный отдых для семьи из 4 человек.</p>
            </div>
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/new_year.webp') }}" alt="Домик 2" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Берёзовый"</h3>
                <p>Идеально для романтического уик-энда.</p>
            </div>
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/new_year.webp') }}" alt="Домик 3" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Лесной"</h3>
                <p>Уединённый отдых для группы друзей.</p>
            </div>
        </div>
        <div class="mt-16 bg-orange-50/95 p-8 rounded-lg max-w-4xl mx-auto">
            <div class="flex justify-center space-x-6 mb-8">
                <button onclick="showLikes()" id="likesBtn"
                    class="px-8 py-3 bg-orange-400 hover:bg-orange-500 text-white rounded-lg font-semibold transition duration-300 ease-in-out shadow-md">
                    Вам понравится
                </button>
                <button onclick="showDislikes()" id="dislikesBtn"
                    class="px-8 py-3 bg-gray-400 hover:bg-gray-500 text-white rounded-lg font-semibold transition duration-300 ease-in-out shadow-md">
                    Не понравится
                </button>
            </div>

            <div id="likesContent" class="space-y-4">
                <h3 class="text-2xl font-bold text-center mb-8 text-orange-800">Вам понравится у нас, если:</h3>
                <ul class="list-none space-y-4 max-w-2xl mx-auto text-center">
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Вы любите отдых на природе в тишине</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Цените экологически чистые продукты</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Хотите провести время с семьей вдали от города</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Интересуетесь фермерским хозяйством</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Любите животных и природу</span>
                    </li>
                </ul>
            </div>

            <div id="dislikesContent" class="space-y-4 hidden">
                <h3 class="text-2xl font-bold text-center mb-8 text-gray-800">Мы вам не подойдем, если:</h3>
                <ul class="list-none space-y-4 max-w-2xl mx-auto text-center">
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Вы предпочитаете городской комфорт</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Не любите природу и животных</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Ищете шумные развлечения</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Боитесь отсутствия городской инфраструктуры</span>
                    </li>
                    <li class="flex items-center justify-center">
                        <span class="text-lg text-gray-700">Не готовы к деревенскому быту</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-transition"></div>
    <div class="section-transition-top"></div>

</section>


<section id="products" class="py-16 text-gray-900 relative">
    <picture class="w-full h-full absolute top-0 left-0">
        <source srcset="{{ asset('storage/goats.webp') }}" type="image/webp">
        <img src="{{ asset('storage/products_main.webp') }}" alt="Продукты фон" class="w-full h-full object-cover">
    </picture>
    <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Затемнение фона -->
    <div class="container mx-auto px-6 relative z-10">
        <h2 class="text-4xl font-semibold text-center text-white">Продукция</h2>
        <p class="mt-4 text-center text-lg text-white">Сыры, молоко и декор для дома.</p>
        <div class="grid md:grid-cols-3 gap-6 mt-10">
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/cheese-1.webp') }}" alt="Домик 2" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">Молоко</h3>
                <p>Всегда свежее козье молоко. Доступно от 1 литра.</p>
            </div>
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/cheese-2.webp') }}" alt="Домик 2" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">Сыр</h3>
                <p>Широкий ассортимент сыров из молока англонубийских коз.</p>
            </div>
            <div class="bg-orange-50/95 p-6 rounded-lg shadow-md">
                <img src="{{ asset('storage/cheese-3.webp') }}" alt="Домик 2" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">Декор</h3>
                <p>Ручные изделия для уюта и стиля вашего дома.</p>
            </div>
        </div>
    </div>
    <div class="section-transition"></div>
    <div class="section-transition-top"></div>
</section>

<section id="map" class="py-16 text-gray-900 relative">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-semibold">Как до нас добраться?</h2>
        <p class="mt-4">Здесь будет купленный api яндекс карт: </p>
    </div>
    <div class="section-transition"></div>
    <div class="section-transition-top"></div>
</section>
<script>
    function showLikes() {
        document.getElementById('likesContent').classList.remove('hidden');
        document.getElementById('dislikesContent').classList.add('hidden');
        document.getElementById('likesBtn').classList.add('bg-orange-400');
        document.getElementById('dislikesBtn').classList.add('bg-gray-400');
        document.getElementById('likesBtn').classList.remove('bg-gray-400');
        document.getElementById('dislikesBtn').classList.remove('bg-orange-400');
    }

    function showDislikes() {
        document.getElementById('likesContent').classList.add('hidden');
        document.getElementById('dislikesContent').classList.remove('hidden');
        document.getElementById('likesBtn').classList.add('bg-gray-400');
        document.getElementById('dislikesBtn').classList.add('bg-orange-400');
        document.getElementById('likesBtn').classList.remove('bg-orange-400');
        document.getElementById('dislikesBtn').classList.remove('bg-gray-400');
    }

    let scrollTimeout;
    const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', function() {
        // Hide header while scrolling
        header.classList.add('header-hidden');

        // Clear the existing timeout
        clearTimeout(scrollTimeout);

        // Set new timeout to show header after scrolling stops
        scrollTimeout = setTimeout(function() {
            header.classList.remove('header-hidden');
        }, 500); // Adjust this value (in milliseconds) to change how long to wait after scrolling stops
    });

    document.addEventListener('DOMContentLoaded', function() {
        const text = "Идеальный вариант семейного отдыха на природе и собственная продукция высшего качества";
        const typedTextElement = document.getElementById('typed-text');
        let index = 0;

        function typeText() {
            if (index < text.length) {
                typedTextElement.textContent += text.charAt(index);
                index++;
                setTimeout(typeText, 35);
            } else {
                typedTextElement.innerHTML += '<span class="typing-cursor"></span>';
            }
        }

        typeText();
    });

    </script>

@endsection
