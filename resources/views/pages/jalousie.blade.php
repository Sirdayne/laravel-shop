@extends('layouts.main')

@section('content')

   <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav decor-active"><a href="jalousie">Жалюзи и роллшторы</a></div>
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
            	<option value="d-3">Обои</option>
            	<option value="d-4" selected>Жалюзи и роллшторы</option>
            	<option value="d-5">Напольные плиты</option>
            	<option value="d-6">Для бизнеса</option>
            	<option value="d-7">Для дилеров</option>
            </select>
        </div>
    </div>
            
    <section class="service-section">
        
            
            <div class="service-head">
                
                <div class="sh-left">
                    <h1>Изготовление жалюзи и ролл-штор в Астане</h1>
                    <p>Жалюзи стали важной частью современного интерьера в офисных и жилых помещениях. Они не только защищают помещение от прямых солнечных лучей, но и несут эстетическую нагрузку, создавая наряду с другими элементами интерьера, соответствующую обстановку. Одни жалюзи более уместны в офисных помещениях, другие настолько уютны, что прекрасно вписываются в интерьер квартиры или дома.</p>
                    <div class="btns-row btns-service">
                        <button class="btn-service-call jk">СДЕЛАТЬ ЗАКАЗ</button>
                        <a href="portfolio"><button class="btn-service-white">ПОРТФОЛИО</button></a>
                    </div>
                </div>
                
                <div class="sh-right">
                    <img src="/assets/img/header-jal2.png" alt="">
                </div>
                
            </div>
        
        <div class="wrap">
            
            <div class="jal-row">
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/jal0.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>РОЛЛ ШТОРЫ</h1>
                        <p>Ролл шторы – это классика интерьера современных помещений. Отлично сочетаясь с интерьером, эти шторы создадут теплую комфортную атмосферу в детской, гостиной, в рабочем кабинете и приятный полумрак в спальне. Удачно подойдут на застекленной лоджии или кухонном окне.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>жалюзи зебра</h1>
                        <p>Жалюзи зебра (комбо, «день-ночь) - это двойное рулонное полотно, в котором чередуются прозрачные и непрозрачные  полосы, поэтому они и получили свое название «Зебра». По сравнению с классическими рулонными жалюзи двойные шторы ЗЕБРА более функциональны. 
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/jal2-2.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/jal3.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>жалюзи силуэт</h1>
                        <p>Силуэт - это революция в декоре окна и оформлении интерьера. Жалюзи необыкновенно красивы, они представляют собой волнистые тканевые ламели, помещенные между двумя слоями прозрачной вуали. Такие жалюзи это высокоэффективное решение защиты от солнца, которое находит свое применение в роскошных жилых и офисных интерьерах.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>алюминиевые жалюзи</h1>
                        <p>Классические горизонтальные алюминиевые жалюзи идеально подходят для кухни, жилых комнат, спальни, офисов, офисных перегородок, производственных помещений, медицинских учреждений. Такие жалюзи легко моются, в т.ч. с использованием специальных моющих средств, а также подвергаются сухой чистке щеткой или пылесосом.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/jal4-4.png" alt="">
                    </div>
                    
                </div>
                
                <div class="jal-part">
                    <div class="jal-img">
                        <img src="/assets/img/jal5-5.png" alt="">
                    </div>
                    <div class="jal-text">
                        <h1>деревянные жалюзи</h1>
                        <p>Деревянные жалюзи сочетают стильную эстетичность с удобством управления, практичностью и долговечностью. Это удачное дизайнерское решение для загородных домов и коттеджей. Они дополнят неповторимый стиль, создаваемый изысканной кожаной мебелью. Вы можете также поместить деревянные жалюзи в офис, создав неповторимый стиль вашего рабочего пространства.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                </div>
                
                <div class="jal-part">
                    
                    <div class="jal-text">
                        <h1>плиссе</h1>
                        <p>Плиссе - это пожалуй самые интересное интерьерное решение для защиты от солнца. Шторы плиссе универсальны и подходят для декорирования любых видов оконных систем, и конструкций. Они сочетают в себе простоту рулонных штор, с неприхотливостью горизонтальных жалюзи. Шторы плиссе идеально подходят для жилых и коммерческих помещений.
                        </p>
                        <div class="btns-row btns-jal">
                            <button class="btn-service-white jk">ЗАКАЗАТЬ</button>
                        </div>
                    </div>
                    
                    <div class="jal-img">
                        <img src="/assets/img/jal6-6.png" alt="">
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