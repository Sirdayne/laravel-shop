@extends('layouts.main')

@section('content')

   <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="jalousie">Ролл шторы</a></div>
            <div class="decor-nav"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav decor-active"><a href="dealers">Для дилеров</a></div>
            <div class="decor-nav"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav"><a href="floor">Напольные плиты</a></div>
            <div class="decor-nav"><a href="business">Для бизнеса</a></div>
            
        </div>
    </div>
            
    <div class="decor-navigation-mob">
        <div class="wrap">
            <select id="decor-select">
           		<option value="d-1">Пошив штор</option>
            	<option value="d-2">Декоративные панели</option>
            	<option value="d-3">Обои</option>
            	<option value="d-4">Жалюзи и роллшторы</option>
            	<option value="d-5">Напольные плиты</option>
            	<option value="d-6">Для бизнеса</option>
            	<option value="d-7" selected>Для дилеров</option>
            </select>
        </div>
    </div>
            
    <section class="service-section">
        
            
            <div class="service-head">
                
                <div class="sh-left sh-left-dealers">
                    <h1>ИНФОРМАЦИЯ ДЛЯ ДИЛЕРОВ</h1>
                    <p>Вас интересует вопрос оптовой покупки тканей? В таком случае компания PURPUR с радостью поможет Вам в этом. Если Вы ищете надежного поставщика качественного текстиля в Казахстане, то Вы обратились по адресу. Ведь мы являемся эксклюзивным представителем компании Degrape. А это значит, что у нас Вы можете найти особые предложения и большие скидки на всю продукцию этой компании. Помимо этого мы сотрудничаем с огромным множеством ведущих брендов Европы. Чтобы связаться с нами, позвоните нам по телефону, который Вы видите в правой верхней части сайта, или заполните форму ниже и мы сами Вам перезвоним.</p>
                    <div class="btns-row btns-service">
                        <a href="portfolio"><button class="btn-service-white">ЗАКАЗАТЬ</button></a>
                    </div>
                </div>
                
                <div class="dealers-right">
                    <img src="/assets/img/dealers2.png" alt="">
                </div>
                
            </div>
        
        <div class="wrap">
            
            <div class="jal-row">
                
                <div class="deal-title">НАШИ ПАРТНЕРЫ</div>
                <!--
                <div class="deal-logos">
                    <div class="deal-logo"><img src="/assets/img/logo7.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo2.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo3.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo6.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo4.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo5.png" alt=""></div>
                    <div class="deal-logo"><img src="/assets/img/logo1.png" alt=""></div>
                </div>
                -->
                
                <div id="slick-slider">
               
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo.png" alt=""></div>
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo.jpg" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo1.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo10.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo11.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo12.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo13.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo14.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo15.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo2.jpg" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo9.png" alt=""></div>
                    
                    
                </div>
                
                <div class="slick-slide">
                    
                    <div class="slick-img"><img src="/assets/img/part/logo-ashley-wilde.svg" alt=""></div>
                    
                    
                </div>
                
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
            
            
        </div>
    </section>
            

@endsection