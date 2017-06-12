@extends('layouts.main')

@section('content')

 <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav"><a href="jalousie">Жалюзи и роллшторы</a></div>
            <div class="decor-nav decor-active"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav"><a href="floor">Напольные плиты</a></div>
            <div class="decor-nav"><a href="business">Для бизнеса</a></div>
            <div class="decor-nav"><a href="dealers">Для дилеров</a></div>
        </div>
    </div>
           
    <div class="decor-navigation-mob">
        <div class="wrap">
            <select id="decor-select">
           		<option value="d-1">Пошив штор</option>
            	<option value="d-2">Декоративные панели</option>
            	<option value="d-3" selected>Обои</option>
            	<option value="d-4">Жалюзи и роллшторы</option>
            	<option value="d-5">Напольные плиты</option>
            	<option value="d-6">Для бизнеса</option>
            	<option value="d-7">Для дилеров</option>
            </select>
        </div>
    </div>
            
    <section class="service-section">
        
            
            <div class="service-head">
                
                <div class="sh-left sh-left-wall">
                    <h1>ДИЗАЙНЕРСКИЕ ОБОИ</h1>
                    <p>Хотите, чтобы Ваш дом не был похож на тысячи других? Эксклюзивные дизайнерские обои помогут Вам решить этот вопрос. Выбрав их в свой дом, можете быть уверены в том, что Вы стали счастливым обладателем элитной отделки. Ведь такие полотна индивидуальны создаются художниками и дизайнерами и выпускаются ограниченными партиями. Полотна от дизайнеров – могут стать достопримечательностью Вашего дома. Стены получат новое «лицо», благодаря многообразию фактур, имитирующих различные материалы, а так же выбору расцветок и орнаментов. При этом спектр используемых натуральных материалов для верхнего слоя практически не ограничен. Удивительные эффекты создают бамбук, стеклярус, сизаль, золотые и серебряные нити, кожу, и шелк.</p>
                    <div class="btns-row btns-service">
                        <a href="portfolio"><button class="btn-service-white">ЗАКАЗАТЬ</button></a>
                    </div>
                </div>
                
                <div class="wallpapers-right">
                    <img src="/assets/img/design-wallpapers.png" alt="">
                </div>
                
            </div>
        
        <div class="wrap">
            
            <div class="jal-row">
                
                <div class="deal-title">НАШИ ПАРТНЕРЫ</div>
                
                <div class="deal-logos">
                    <div class="deal-logo"><img src="/assets/img/logo7.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo2.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo3.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo6.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo4.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo5.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo1.png" alt=""></div>
                </div>
                
                <div class="deal-form">
                    <div class="deal-form-title">Заполните поля ниже и мы свяжемся с Вами в ближайшее время</div>

                    <form method="POST" action="/feedback/send_mail">
                        {{ csrf_field() }}
                        <div class="btns-row">
                            <input type="text" name="name" placeholder="Имя" required>
                            <input type="tel" id="client-tel-for-consult-3" name="telephone" placeholder="Телефон" required>
                            <button class="send-btn btn-pur">Отправить</button>
                        </div>
                    </form>
                </div> 
                
            </div>
            
            
        </div>
    </section>

@endsection