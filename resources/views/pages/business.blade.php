@extends('layouts.main')

@section('content')

   <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav decor-active"><a href="business">Для бизнеса</a></div>
            <div class="decor-nav"><a href="jalousie">Жалюзи и роллшторы</a></div>
            <div class="decor-nav"><a href="floor">Напольные плиты</a></div>
            <div class="decor-nav"><a href="dealers">Для дилеров</a></div>
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
            	<option value="d-6" selected>Для бизнеса</option>
            	<option value="d-7">Для дилеров</option>
            </select>
        </div>
    </div>
            
    <section class="service-section">
        
            
            <div class="service-head">
                
                <div class="sh-left">
                    <h1>Шторы и жалюзи для офиса и бизнеса</h1>
                    <p>Студия PURPUR предоставляет услуги по пошиву и изготовления штор и ролл-штор для офисов, государственных учреждений и любых других общественных и развлекательных заведений.</p>
                    <div class="btns-row btns-service">
                        <button class="btn-service-call jk">СДЕЛАТЬ ЗАКАЗ</button>
                        <a href="portfolio"><button class="btn-service-white">ПОРТФОЛИО</button></a>
                    </div>
                </div>
                
                <div class="sh-right">
                    <img src="/assets/img/business.png" alt="">
                </div>
                
            </div>
        
        <div class="wrap">
            
            <div class="jal-row">
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/bus1.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>ШКОЛЫ, САДЫ, УНИВЕРСИТЕТЫ</h1>
                        <p>Офисы частных компаний и государственных учреждений - представительство крупной компании должно не просто иметь свое лицо, оно должно сразу создавать у посетителя ощущение успешности, делового духа и надежности, а шторы в кабинете директора, руководителя - один из важных элементов дизайна, создающий вместе с другими деталями этот дух.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>РЕСТОРАНЫ И КАФЕ</h1>
                        <p>Вкусная еда, приятная атмосфера и конечно же уютный интерьер – вот то, что заставит Ваших клиентов возвращаться к Вам снова и снова. Мы не можем научить Ваших поваров готовить, но мы можем подобрать идеальные шторы, которые и создадут ту  самую атмосферу, способную стать магнитом для посетителей.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/bus2.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/bus3.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>ТОРГОВЫЕ ЦЕНТРЫ</h1>
                        <p>Конкуренция среди торговых центров растет с каждым днем, задача маркетологов привлекать новых посетителей, а задача центра – их удержать. И мы можем Вам в этом помочь, ведь шторы и жалюзи это маленькая, но неотъемлемая часть интерьера, которая и задает настроение всему помещению.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>ГОСТИНИЦЫ</h1>
                        <p>Невозможно представить уютный номер в гостинице без штор. Вы хотите подобрать шторы для целой гостиницы? Что ж мы можем Вам помочь.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/bus4.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/bus5.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>ОБЩЕСТВЕННЫЕ МЕСТА</h1>
                        <p>Мы готовы взяться за проект любой сложности, ведь в нашей команде только профессионалы. От самых простых задач до оформления аэропортов и ж/д вокзалов – нам под силу все.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </section>
            
            
    <section class="pre-footer">
        <div class="wrap">
            <h1>ЗАДАЙТЕ ВАШ ВОПРОС</h1>

            <p>Студия PURPUR занимается изготовлением жалюзи и ролл штор более 10 лет. За эти годы наша компания выполнила огромное количество заказов для различных клиентов – от крупных офисных помещений до маленьких уютных квартир. Мы являемся профессионалами своего дела, которые с любовью относятся к своему делу, и всегда готовы Вам помочь. Если у Вас возникли вопросы по изготовлению жалюзи и ролл штор Вы можете задать их сейчас, и наши сотрудники с удовольствием проконсультируют Вас.</p>

            <div class="btns-row btns-service">
                <button class="btn-service-call jk">ЗАДАТЬ ВОПРОС</button>
            </div>
        </div>
    </section>
            
            

@endsection