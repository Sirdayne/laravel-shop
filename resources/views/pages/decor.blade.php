@extends('layouts.main')

@section('content')

 <div class="decor-navigation">
        <div class="wrap">
            <div class="decor-nav"><a href="sew">Пошив штор</a></div>
            <div class="decor-nav"><a href="jalousie">Роллшторы</a></div>
            <div class="decor-nav"><a href="wallpapers">Обои</a></div>
            <div class="decor-nav decor-active"><a href="decor">Декоративные панели</a></div>
            <div class="decor-nav"><a href="floor">Напольные плиты</a></div>
            <div class="decor-nav"><a href="business">Для бизнеса</a></div>
            <div class="decor-nav"><a href="dealers">Для дилеров</a></div>
        </div>
    </div>
           
    <div class="decor-navigation-mob">
        <div class="wrap">
            <select id="decor-select">
           		<option value="d-1">Пошив штор</option>
            	<option value="d-2" selected>Декоративные панели</option>
            	<option value="d-3">Обои</option>
            	<option value="d-4">Жалюзи и роллшторы</option>
            	<option value="d-5">Напольные плиты</option>
            	<option value="d-6">Для бизнеса</option>
            	<option value="d-7">Для дилеров</option>
            </select>
        </div>
    </div> 
    
    <section class="decor-slider">
        <div class="decor-txt"><p>Декоративные светоотражающие панели.
Рекламные конструкции с блестками, пайетками, чешуйками, блестяшками, блестящие, мерцающие, бликующие, живые вывески,  сверкающая реклама, у этой технологии много интересных и характерных особенностей, все это - инновационная технология "SolaAiR"</p></div>
        <div class="decor-filters">
            <div class="decor-filter decor-active">МОНОХРОМ</div>
            <div class="decor-filter">ПОЛИХРОМ</div>
            <div class="decor-filter">СПЕЦЭФФЕКТЫ</div>
        </div>
        <div class="slick-slider-4 js-decor">
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/belii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Белый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">9016 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/biruzovii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Бирюзовый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">5018 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/chernii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Черный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">9005 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/fioletovii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Фиолетовый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">5020 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/goluboi.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Голубой</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">5015 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/jeltii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Желтый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">1021 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/korichnev.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Коричневый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">8016 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/krasnii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Красный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">3020 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/malinovii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Малиновый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">4006 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/oranjev-zerkalnii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Оранжево-зеркальный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">2011 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/oranjevii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Оранжевый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">2008 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/rozovii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Розовый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">4003 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/serebristii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Серебристый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">5020 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/sinii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Синий</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">5002 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/zelenii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Зеленый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">6037 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/zolotoi-jeltii.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Золото-желтый</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">Новая версия золотого цвета, на тон темнее чем стандартное золото.</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/mono/zolotoi.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Золотой</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">1036 (рекомендуемый)</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
        </div>
        
        <div class="slick-slider-4 js-decor">
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/individ.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Индивидуальный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">Витражная печать, высокого разрешения с исключительным зеркальным эффектом!</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/individ.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Индивидуальный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail">Витражная печать, высокого разрешения с исключительным зеркальным эффектом!</div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
        </div>
        
        <div class="slick-slider-4 js-decor">
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/led.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Лед</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/linzi.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Линзы</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/raduzh.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Радужный</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/rtut.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Ртуть R01</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/rtut-r02.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Ртуть R02</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/rtut-r01.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Ртуть R01/1</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
            
            <div class="slick-slide">

                <div class="decor-slide-img"><img src="/assets/img/decor/spec/rdut-r04.png" alt=""></div>
                <div class="decor-slide-options">
                    <div class="decor-slide-option">Цвет:</div>
                    <div class="decor-slide-color">Ртуть R02/1</div>
                    <div class="decor-slide-option">Форма дисков:</div>
                    <div class="decor-slide-form"><img src="/assets/img/form-discs.png" alt=""></div>
                    <div class="decor-slide-option">Цвет по Rail:</div>
                    <div class="decor-slide-rail"></div>
                </div>
                <div class="bds-wrap"><button class="btn-decor-slider jk">ЗАКАЗАТЬ</button></div>

            </div>
        </div>
        
        
    </section>
            

@endsection