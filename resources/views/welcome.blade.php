@extends('layouts.app')

@section('content')
<div id="hero" class="bg-orange-100 text-gray-800 py-20 text-center">
    <h1 class="text-5xl font-bold">Оранжевая ферма</h1>
    <p class="mt-4 text-lg">Лучший отдых на природе и продукция высшего качества</p>
</div>

<section id="rental" class="py-16 bg-white text-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-semibold text-center">Аренда домиков</h2>
        <p class="mt-4 text-center text-lg">
            Уютные домики A-frame в лесу. Идеально для отдыха всей семьёй.
        </p>
        <div class="grid md:grid-cols-3 gap-6 mt-10">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="/images/cabin1.jpg" alt="Домик 1" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Сосновый"</h3>
                <p>Комфортный отдых для семьи из 4 человек.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="/images/cabin2.jpg" alt="Домик 2" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Берёзовый"</h3>
                <p>Идеально для романтического уик-энда.</p>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="/images/cabin3.jpg" alt="Домик 3" class="rounded-lg mb-4">
                <h3 class="text-2xl font-bold">A-frame "Лесной"</h3>
                <p>Уединённый отдых для группы друзей.</p>
            </div>
        </div>
    </div>
</section>

<section id="products" class="py-16 bg-orange-50 text-gray-900">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-semibold text-center">Продукция</h2>
        <p class="mt-4 text-center text-lg">Сыры, молоко и декор для дома.</p>
        <div class="grid md:grid-cols-3 gap-6 mt-10">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold">Молоко</h3>
                <p>Всегда свежее козье молоко. Доступно от 1 литра.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold">Сыр</h3>
                <p>Широкий ассортимент сыров из молока англонубийских коз.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-bold">Декор</h3>
                <p>Ручные изделия для уюта и стиля вашего дома.</p>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-16 bg-white text-gray-900">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-semibold">Контакты</h2>
        <p class="mt-4">Свяжитесь с нами по email: <a href="mailto:info@orangefarm.com" class="text-orange-500">info@orangefarm.com</a></p>
    </div>
</section>
@endsection
