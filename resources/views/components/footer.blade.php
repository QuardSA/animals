<x-alerts></x-alerts>
<x-links></x-links>
@guest
    <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
            <div class="col">
                <p class="text">Телефон "8 (800)123-45-67"</p>
                <p class="text">email: mail@newlife.ru</p>
            </div>
            <div class="col">
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Главная</a></li>
                    <li class="nav-item mb-2"><a href="/search" class="nav-link p-0 text-muted">Поиск</a></li>
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Найдено животное</a></li>
                </ul>
            </div>
            <div class="col"></div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/registration" class="nav-link p-0 text-muted">Регистрация</a></li>
                    <li class="nav-item mb-2"><a href="/authorization" class="nav-link p-0 text-muted">Авторизация</a></li>
                </ul>
            </div>
        </footer>
    </div>
@endguest
@auth
    <div class="container">
        <footer class="row row-cols-5 py-5 my-5 border-top">
            <div class="col">
                <p class="text">Телефон "8 (800)123-45-67"</p>
                <p class="text">email: mail@newlife.ru</p>
            </div>
            <div class="col">
            </div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Главная</a></li>
                    <li class="nav-item mb-2"><a href="/search" class="nav-link p-0 text-muted">Поиск</a></li>
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Найдено животное</a></li>
                </ul>
            </div>
            <div class="col"></div>
            <div class="col">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/personaldata" class="nav-link p-0 text-muted">Личный кабинет</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
@endauth
