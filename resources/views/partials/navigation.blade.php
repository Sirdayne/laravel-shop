<div class="wrap">
        <div class="burger">
            <div class="brg-1"></div>
            <div class="brg-2"></div>
            <div class="brg-3"></div>
        </div>

        <a href="/"><div class="nav-logo"><img src="/assets/img/wf-logo.svg" alt=""></div></a>

        <div class="nav-center">
            <div class="nav"><a href="/">ГЛАВНАЯ</a><span class="nav-line"></span></div>
            <div class="nav nav-modal">
                УСЛУГИ<span class="nav-line"></span>
                <div class="nav-services">
                    <div class="nav-s"><a href="/jalousie">ИЗГОТОВЛЕНИЕ РОЛЛШТОР</a></div>
                    <div class="nav-s"><a href="/sew">ИНДИВИДУАЛЬНЫЙ ПОШИВ ШТОР</a></div>
                    <div class="nav-s"><a href="/decor">ПРОДАЖА ДЕКОРАТИВНЫХ ПАНЕЛЕЙ</a></div>
                    <div class="nav-s"><a href="/wallpapers">ДИЗАЙНЕРСКИЕ ОБОИ</a></div>
                    <div class="nav-s"><a href="/floor">НАПОЛЬНЫЕ ПЛИТЫ</a></div>
                    <div class="nav-s"><a href="/business">ДЛЯ БИЗНЕСА</a></div>
                    <div class="nav-s"><a href="/dealers">ДЛЯ ДИЛЕРОВ</a></div>
                </div>
            </div>
            <div class="nav"><a href="/about">О НАС</a><span class="nav-line"></span></div>
            <div class="nav"><a href="/types">ВИДЫ ШТОР</a><span class="nav-line"></span></div>
            <div class="nav"><a href="/portfolio">ПОРТФОЛИО</a><span class="nav-line"></span></div>
            <div class="nav"><a href="/posts">НОВОСТИ</a><span class="nav-line"></span></div>
            <div class="nav"><a href="/reviews">ОТЗЫВЫ</a><span class="nav-line"></span></div>
            <div class="nav"><a href="/contacts">КОНТАКТЫ</a><span class="nav-line"></span></div>
        </div>

        <div class="nav-tel">
            <a href="tel:+77774740414">+7(777)474-04-14</a>
        </div>

        @if(auth()->user())
            <div class="lara-panel">
                <div class="lara-panel-row lara-panel-user">Профиль: {{ auth()->user()->name }}</div>
                <a href="/admin"><div class="lara-panel-row">В админ. панель</div></a>
                <a href="/posts/create"><div class="lara-panel-row">Добавить новость</div></a>
                <a href="/portfolio/create"><div class="lara-panel-row">Добавить картинку</div></a>
                <a href="/reviews/create"><div class="lara-panel-row">Добавить отзыв</div></a>
                <a href="/logout"><div class="lara-panel-row">Выйти</div></a>
                <div class="lara-burger">
                    <div class="lara-b-1"></div>
                    <div class="lara-b-2"></div>
                    <div class="lara-b-3"></div>
                </div>
            </div>
        @endif
</div>
