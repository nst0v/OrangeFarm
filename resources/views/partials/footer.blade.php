<footer class="py-4 relative backdrop-blur-sm"><!-- уменьшил py-6 до py-4 -->
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-3 gap-6"><!-- уменьшил gap-8 до gap-6 -->
            <!-- Contact Info -->
            <div class="text-center md:text-left">
                <h3 class="footer-heading px-3 py-1.5 rounded-full inline-block mb-3 text-sm">Контакты</h3>
                <ul class="space-y-1.5"><!-- уменьшил space-y-2 до space-y-1.5 -->
                    <li class="footer-link px-3 py-1.5 rounded-full text-sm">Email: info@orangefarm.com</li>
                    <li class="footer-link px-3 py-1.5 rounded-full text-sm">Тел: +7 (XXX) XXX-XX-XX</li>
                    <li class="footer-link px-3 py-1.5 rounded-full text-sm">Адрес: Ваш адрес</li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div class="text-center">
                <h3 class="footer-heading px-3 py-1.5 rounded-full inline-block mb-3 text-sm">Навигация</h3>
                <ul class="space-y-1.5">
                    <li><a href="#about" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">О нас</a></li>
                    <li><a href="#rental" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">Аренда</a></li>
                    <li><a href="#products" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">Продукция</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="text-center md:text-right">
                <h3 class="footer-heading px-3 py-1.5 rounded-full inline-block mb-3 text-sm">Соцсети</h3>
                <ul class="space-y-1.5">
                    <li><a href="#" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">Instagram</a></li>
                    <li><a href="#" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">VKontakte</a></li>
                    <li><a href="#" class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">Telegram</a></li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-6"><!-- уменьшил mt-8 до mt-6 -->
            <p class="footer-link px-3 py-1.5 rounded-full inline-block text-sm">© 2024 Оранжевая ферма. Все права защищены.</p>
        </div>
    </div>
</footer>


<style>
    .footer-heading {
        background-color: rgba(0, 0, 0, 0.4);
        color: white;
        backdrop-filter: blur(4px);
    }

    .footer-link {
        background-color: rgba(0, 0, 0, 0.2);
        color: white;
        backdrop-filter: blur(4px);
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-link:hover {
        background-color: rgba(0, 0, 0, 0.4);
        transform: translateY(-1px);
    }
</style>
