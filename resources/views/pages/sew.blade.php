@extends('layouts.main')

@section('content')

    <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="jalousie">Ролл шторы</a></div>
            <div class="decor-nav"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav decor-active"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="floor">Напольные плиты</a></div>
            <div class="decor-nav"><a href="business">Для бизнеса</a></div>
            <div class="decor-nav"><a href="dealers">Для дилеров</a></div>
        </div>
    </div>
           
    <div class="decor-navigation-mob">
        <div class="wrap">
            <select id="decor-select">
           		<option value="d-1" selected>Пошив штор</option>
            	<option value="d-2">Декоративные панели</option>
            	<option value="d-3">Обои</option>
            	<option value="d-4">Жалюзи и роллшторы</option>
            	<option value="d-5">Напольные плиты</option>
            	<option value="d-6">Для бизнеса</option>
            	<option value="d-7">Для дилеров</option>
            </select>
        </div>
    </div>
            
    <section class="service-section">
        
            
            <div class="service-head">
                
                <div class="sh-left jh-left">
                    <h1>Индивидуальный дизайн и пошив штор в Астане</h1>
                    <p>Окно является одной из самых важных частей нашей комнаты, и естественно, что оно нуждается в самом лучшем украшении. У нас Вы можете подобрать идеальные шторы для дома или офиса, которые великолепно впишутся в Ваш интерьер.</p>
                    <div class="btns-row btns-service">
                        <button class="btn-service-call jk">СДЕЛАТЬ ЗАКАЗ</button>
                        <a href="portfolio"><button class="btn-service-white">ПОРТФОЛИО</button></a>
                    </div>
                </div>
                
                <div class="sh-right jh-right">
                    <img src="/assets/img/sew-header.png" alt="">
                </div>
                
            </div>
        
        <div class="wrap">
            
            <div class="jal-row">
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/sew1.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>портьеры</h1>
                        <p>Портьеры – это один из видов штор, представляющий собой вертикальные полотна. Они сшиты из тяжелой ткани. Это непременный элемент классического оформления – в стиле античности, барокко, рококо, ампир, и частый «гость» других концепций – модерн, арт-деко и даже хай-тек, хотя и в несколько непривычном виде.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>шторы с ламбрекеном</h1>
                        <p>Ламбрекен – верхняя горизонтальная часть оформления. Ламбрекены выполняются из ткани и дерева – сегодня из пластика и фанеры, имеют разнообразную форму, украшаются рюшами, тесьмой, бахромой, бусами и лентами
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/sew2.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/sew3.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>римские шторы</h1>
                        <p>Римские шторы завоевали одну из лидирующих позиций среди всех возможных типов штор благодаря своей простоте, изящности и функциональности. Они мягко рассеивают дневной свет, поступающий в комнату: проходя сквозь ткань он приобретает оттенок того или иного цвета. Этими шторами можно украсить любую комнату — спальню, детскую комнату, кухню и другие помещения с окнами в доме.

                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>японские шторы</h1>
                        <p>Японские шторы и японские панели представляют собой экран или ширму, которые загораживают собой окно. Данный декор подходит лаконичным и сдержанным личностям, сторонникам минимализма. Японские панели можно использовать не только на окнах, многие используют их в качестве перегородок в комнате.

                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/sew4.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/sew5.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>австрийские</h1>
                        <p>Австрийские шторы – это сочетание двух популярных видов штор в одной форме, а именно: французских и римских. От французких штор австрийские взяли пышность складок, а от римских — лаконичный механизм и подъем в горизонтальной плоскости. Эти шторы используются в крупных комнатах, как правило, это гостиная, столовая и спальня.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>французские</h1>
                        <p>Французские шторы идеально подходят для того, чтобы расставить акценты, защитить комнату от яркого света, сделав ее более уютной и комфортной. Такие занавески позволят оформить оконные проемы с шиком и роскошью, ведь складки ткани распределены по всей высоте полотен.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/sew6.png" alt="">
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>
    </section>
            
            
            <section class="pre-footer sew-footer">
                <div class="wrap">
                    <h1>ЗАДАЙТЕ ВАШ ВОПРОС</h1>

                    <p>Студия PURPUR занимается изготовлением жалюзи и ролл штор более 10 лет. За эти годы наша компания выполнила огромное количество заказов для различных клиентов – от крупных офисных помещений до маленьких уютных квартир. Мы являемся профессионалами своего дела, которые с любовью относятся к своему делу, и всегда готовы Вам помочь. Если у Вас возникли вопросы по изготовлению жалюзи и ролл штор Вы можете задать их сейчас, и наши сотрудники с удовольствием проконсультируют Вас.</p>

                    <div class="btns-row btns-service">
                        <button class="btn-service-call jk">ЗАДАТЬ ВОПРОС</button>
                    </div>
                </div>
            </section>
            
  
@endsection