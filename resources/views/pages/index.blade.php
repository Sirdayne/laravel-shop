@extends('layouts.main')

@section('content')

    @if (Session::has('message'))
        <div class="lara-success">{{ Session::get('message') }}</div>
    @endif

    <header class="header">
        <div class="header-slide hs-5">

            <div class="wrap">

                <div class="header-slider-title js-title-1 animated fadeInLeft">Изготовление и монтаж<br> ролл-штор и жалюзи для<br> Вашего офиса </div>
                <div class="header-slider-title js-title-2 animated fadeInLeft">Индивидуальный пошив<br> штор в Астане</div>

                <button class="btn-pur-slider jk">ВЫЗВАТЬ ДИЗАЙНЕРА</button>
                <a href="portfolio"><button class="btn-white-slider">КАТАЛОГ ШТОР</button></a>

            </div>

        </div>

    </header>

    <section class="main-section main-filters">

        <div class="wrap padding-add">

            <div class="option-row">

                <div class="option-title">ВЫБЕРИТЕ СВОИ</div>

                <div class="option-mob-filters">
                    <div class="btn-filter-big filter-active">ШТОРЫ</div>
                    <div class="btn-filter-big">РОЛЛ-ШТОРЫ</div>
                </div>

            </div>

            <div class="option-row js-row filter-active">

                <div class="filter-text filter-active">Портьеры<span class="filter-line"></span></div>
                <div class="filter-text">С ламбрекеном<span class="filter-line"></span></div>
                <div class="filter-text">Римские<span class="filter-line"></span></div>
                <div class="filter-text">Японские<span class="filter-line"></span></div>
                <div class="filter-text">Австрийские<span class="filter-line"></span></div>
                <div class="filter-text">Французские<span class="filter-line"></span></div>

            </div>

            <div class="option-row js-row">

                <div class="filter-text-roll filter-active">Роллшторы<span class="filter-line"></span></div>
                <div class="filter-text-roll">Зебра<span class="filter-line"></span></div>
                <div class="filter-text-roll">Силуэт<span class="filter-line"></span></div>
                <div class="filter-text-roll">Алюминиевые<span class="filter-line"></span></div>
                <div class="filter-text-roll">Деревянные<span class="filter-line"></span></div>
                <div class="filter-text-roll">Плиссе<span class="filter-line"></span></div>

            </div>
            <!-- MOBILE FILTERS -->
            <select class="filter-select filter-active" id="filter-select-1">
                <option value="f-1" selected>Портьеры</option>
                <option value="f-2">С ламбрекеном</option>
                <option value="f-3">Римские</option>
                <option value="f-4">Японские</option>
                <option value="f-5">Австрийские</option>
                <option value="f-6">Французские</option>
            </select>

            <select class="filter-select" id="filter-select-2">
                <option value="r-1" selected>Роллшторы</option>
                <option value="r-2">Зебра</option>
                <option value="r-3">Силуэт</option>
                <option value="r-4">Алюминиевые</option>
                <option value="r-5">Деревянные</option>
                <option value="r-6">Плиссе</option>
            </select>
            <!-- END OF MOBILE FILTERS-->

            <div class="blinds-main">


                <div class="blinds-choose">

                    <div class="size-width">

                        <div class="lsw-1">
                            <img src="/assets/img/filter-arrow-left.png" alt="">
                        </div>

                        <div class="lsw-num">
                            <input id="js-width" type="text" value="1">
                            <div class="lsw-metr">м.</div>
                        </div>
                        <div class="lsw-2">
                            <img src="/assets/img/filter-arrow-right.png" alt="">
                        </div>

                    </div>

                    <div class="size-height">

                        <div class="lsw-1">
                            <img src="/assets/img/filter-arrow-up.png" alt="">
                        </div>
                        <div class="lsw-num">
                            <input id="js-height" type="text" value="1.38">
                            <div class="lsw-metr">м.</div>
                        </div>
                        <div class="lsw-2">
                            <img src="/assets/img/filter-arrow-down.png" alt="">
                        </div>

                    </div>

                    <div class="blinds js-shtori-main filter-active">
                        <div class="blinds-img js-shtori filter-active"><img src="/assets/img/porteri.png" alt=""></div>
                        <div class="blinds-img js-shtori"><img src="/assets/img/s-lambrekenom.png" alt=""></div>
                        <div class="blinds-img js-shtori"><img src="/assets/img/rimskie.png" alt=""></div>
                        <div class="blinds-img js-shtori"><img src="/assets/img/yaponskie.png" alt=""></div>
                        <div class="blinds-img js-shtori"><img src="/assets/img/avstriiskie.png" alt=""></div>
                        <div class="blinds-img js-shtori"><img src="/assets/img/francuzskie.png" alt=""></div>

                    </div>

                    <div class="blinds js-shtori-main">
                        <div class="blinds-img js-roll filter-active"><img src="/assets/img/roll-roll.png" alt=""></div>
                        <div class="blinds-img js-roll"><img src="/assets/img/roll-zebra.png" alt=""></div>
                        <div class="blinds-img js-roll"><img src="/assets/img/roll-siluet.png" alt=""></div>
                        <div class="blinds-img js-roll"><img src="/assets/img/roll-aluminievie.png" alt=""></div>
                        <div class="blinds-img js-roll"><img src="/assets/img/roll-derevenyannie.png" alt=""></div>
                        <div class="blinds-img js-roll"><img src="/assets/img/roll-plisse.png" alt=""></div>
                    </div>

                </div>

                <div class="blinds-option">
                    <div class="blinds-mob-left">
                        <div class="option-title">ВЫ ВЫБРАЛИ:</div>

                        <div class="option-type">Модель:</div>
                        <div class="option-result js-model">Портьеры</div>

                        <div class="option-type">Размер:</div>
                        <div class="option-result" id="js-size">1x1.38 м.</div>

                        <div class="option-type">Количество:</div>
                        <div class="option-result"><input id="js-quantity" type="number" value="1"></div>
                    </div>
                    <div class="blinds-mob-right">
                        <div class="option-type">Цена:</div>
                        <div class="option-price" id="option-price">от 32 000 тг.</div>

                        <button class="btn-pur btn-option jk-calc">ЗАКАЗАТЬ ШТОРЫ</button>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="main-section js-numbers">

        <div class="wrap">

            <div class="mn-title">PURPUR - ЭТО БОЛЕЕ</div>

            <div class="mn-row">

                <div class="mn-box mn-1">
                    <div class="mn-number" id="val-1">10</div>
                    <div class="mn-text">лет на рынке</div>
                </div>

                <div class="mn-box mn-2">
                    <div class="mn-number" id="val-2">2000</div>
                    <div class="mn-text">штор пошито</div>
                </div>

                <div class="mn-box mn-3">
                    <div class="mn-number" id="val-3">10000</div>
                    <div class="mn-text">образцов тканей</div>
                </div>

                <div class="mn-box mn-4">
                    <div class="mn-number" id="val-4">3</div>
                    <div class="mn-text">года гарантии</div>
                </div>

            </div>

        </div>

    </section>

    <section class="main-section partners-slider">

        <div class="wrap">

            <div class="mn-title">НАШИ КЛИЕНТЫ</div>

            <div id="slick-slider">

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client1.png" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client2.png" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client3.png" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client4.png" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client5.jpeg" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client6.png" alt=""></div>

                </div>

                <div class="slick-slide">

                    <div class="slick-img"><img src="/assets/img/client7.png" alt=""></div>

                </div>


            </div>

        </div>
    </section>

    <section class="main-section">

        <div class="wrap">

            <div class="mn-title">НАШИ РАБОТЫ</div>

            <div class="mn-gallery">

                <div class="mng-col-small">
                    <a href="/assets/img/portfolio/p1.JPG" data-lightbox="portfolio-set-main" data-title=""><div class="mng-small js-modal-gallery" style="background: url(/assets/img/portfolio/p1.JPG) center center no-repeat; background-size: cover"></div></a>
                    <a href="/assets/img/portfolio/p2.JPG" data-lightbox="portfolio-set-main" data-title=""><div class="mng-small js-modal-gallery" style="background: url(/assets/img/portfolio/p2.JPG) center center no-repeat; background-size: cover"></div></a>
                </div>
                <div class="mng-col-big">
                    <a href="/assets/img/portfolio/p3.JPG" data-lightbox="portfolio-set-main" data-title=""><div class="mng-big js-modal-gallery" style="background: url(/assets/img/portfolio/p3.JPG) center center no-repeat; background-size: cover"></div></a>
                    <a href="/portfolio"><button class="btn-green">ПЕРЕЙТИ В ПОРТФОЛИО</button></a>
                </div>
                <div class="mng-col-small">
                    <a href="/assets/img/portfolio/p4.JPG" data-lightbox="portfolio-set-main" data-title=""><div class="mng-small js-modal-gallery" style="background: url(/assets/img/portfolio/p4.JPG) center center no-repeat; background-size: cover"></div></a>
                    <a href="/assets/img/portfolio/p5.JPG" data-lightbox="portfolio-set-main" data-title=""><div class="mng-small js-modal-gallery" style="background: url(/assets/img/portfolio/p5.JPG) center center no-repeat; background-size: cover"></div></a>
                </div>

            </div>

        </div>

    </section>

    <section class="main-section">

        <div class="wrap">

            <div class="mn-title">КЛИЕНТЫ О НАС</div>

            <div id="slick-slider-2">

                @foreach($reviews as $review)

                    <div class="slick-slide">

                        <div class="review">{{ $review->body }}</div>

                        <div class="rev-wrapper">
                            <div class="rev-img" style="background: url(/images/{{ $review->image }}) center center no-repeat;background-size: cover"></div>
                        </div>

                        <div class="rev-wrapper"><div class="rev-name">{{ $review->title }}</div></div>
                    </div>

                @endforeach

            </div>

        </div>

    </section>


            <section class="main-fix">

                <div class="wrap">

                    <div class="mn-title">КАК МЫ РАБОТАЕМ</div>

                    <div class="main-work">

                        <div class="mw-steps">
                            <div class="mw-step">
                                <div class="mw-circle mw-1 js-mw-1">1</div>
                                <div class="mw-text mw-text-1">
                                    Выезд мастера на дом<br>
                                    произведения замеров
                                </div>
                            </div>
                            <div class="mw-line js-mwl-2"></div>

                            <div class="mw-step">
                                <div class="mw-circle js-mw-2">2</div>
                                <div class="mw-text">
                                    Отрисовка эскиза и подбор тканей
                                </div>
                            </div>
                            <div class="mw-line js-mwl-3"></div>

                            <div class="mw-step">
                                <div class="mw-circle js-mw-3">3</div>
                                <div class="mw-text">
                                    Изготовление
                                </div>
                            </div>
                            <div class="mw-line js-mwl-4"></div>

                            <div class="mw-step">
                                <div class="mw-circle mw-4 js-mw-4">4</div>
                                <div class="mw-text">
                                    Доставка и установка
                                </div>
                            </div>
                        </div>

                        <div class="mw-image">
                            <div class="mwi">
                                <div class="mwi-window"><img src="/assets/img/window.png" alt=""></div>
                                <!-- ПЕРВАЯ ЛИНИЯ -->
                                <div class="mwi-1">
                                    <svg version="1.1" id="Слой_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="-459 50 40 462" style="enable-background:new -459 50 40 462;" xml:space="preserve">
                                    <g>
                                        <polygon class="cls0" points="-439,51.9 -443,60.1 -435,60.1 -439,51.9 	"/>
                                    </g>
                                        <g>
                                            <polygon class="cls0" points="-435,501.9 -443,501.9 -439,510.1 -435,501.9 	"/>
                                        </g>
                                        <line class="cls1" x1="-439" y1="60.2" x2="-439" y2="501.9"/>
                                        <line class="cls1" x1="-459" y1="50.9" x2="-419" y2="50.9"/>
                                        <line class="cls1" x1="-459" y1="511.1" x2="-419" y2="511.1"/>
                                    </svg>
                                </div>
                                <!-- ВТОРАЯ ЛИНИЯ -->
                                <div class="mwi-1 mwi-1-1">
                                    <svg version="1.1" id="Слой_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="-221 261 516 40" style="enable-background:new -221 261 516 40;" xml:space="preserve">
                                    <g>
                                        <polygon class="cls0" points="-210.8,277 -219,281 -210.8,285 -210.8,277 	"/>
                                    </g>
                                        <g>
                                            <polygon class="cls0" points="284.7,277 284.7,285 293,281 284.7,277 	"/>
                                        </g>
                                        <line class="cls1" x1="-210.8" y1="281" x2="284.7" y2="281"/>
                                        <line class="cls1" x1="-220" y1="301" x2="-220" y2="261"/>
                                        <line class="cls1" x1="294" y1="301" x2="294" y2="261"/>
                                    </svg>
                                </div>
                                <!-- СХЕМА -->
                                <div class="mwi-2">
                                    <svg version="1.1" id="Слой_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-119.8 165.3 184 173.1" style="enable-background:new -119.8 165.3 184 173.1;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <polyline class="st0" points="-19.5,165.9 -22,165.9 -22,168.4 			"/>
                                            <path class="st1" d="M-22.1,173.6l0,1.2c-0.1,8.1,0.6,16.3,2.3,24.2c9.6,44.3,42,57.6,54.5,61.1"/>
                                            <path class="st0" d="M37.2,260.7c1.6,0.4,2.4,0.5,2.4,0.5s-0.3,0.8-0.8,2.4"/>
                                            <path class="st2" d="M37.2,268.2c-5.9,16.7-20.3,57.5-20.6,60.1c1.1,5.8,6.9,9.3,8.4,9.5c1.5,0.2,4.6-4.1,7.3-4.1
                                                s6.9,3.8,8.4,4.1c1.5,0.3,3.3-4.1,7.1-4.1s3,4.8,7.9,4s8-7.8,8-7.8v-159"/>
                                            <polyline class="st0" points="63.7,168.4 63.7,165.9 61.2,165.9 			"/>
                                            <line class="st3" x1="56.4" y1="165.9" x2="-17.1" y2="165.9"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <line class="st0" x1="39.7" y1="261.2" x2="42" y2="260.2"/>
                                            <line class="st4" x1="45.8" y1="258.6" x2="59.4" y2="252.9"/>
                                            <line class="st0" x1="61.4" y1="252.1" x2="63.7" y2="251.1"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st0" d="M20.8,165.9c0,0-0.1,0.9-0.2,2.5"/>
                                            <path class="st5" d="M20.5,173.3c0.1,15.7,4.2,52.6,38.8,72.3"/>
                                            <path class="st0" d="M61.4,246.8c0.7,0.4,1.5,0.8,2.2,1.1"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st0" d="M35.3,165.9c0,0-0.1,0.9-0.1,2.5"/>
                                            <path class="st6" d="M35.3,173.4c0.5,13.9,4.1,43.8,24.5,61.4"/>
                                            <path class="st0" d="M61.7,236.4c0.7,0.5,1.3,1,2,1.5"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="st0" d="M51.7,165.9c0,0-0.1,0.9-0.2,2.5"/>
                                            <path class="st7" d="M51.2,173.8c-0.3,11.6,0.6,33.5,9.7,50.1"/>
                                            <path class="st0" d="M62.3,226.3c0.4,0.7,0.9,1.4,1.4,2.1"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <line class="st0" x1="53.7" y1="337.6" x2="54.2" y2="335.2"/>
                                            <line class="st8" x1="55.2" y1="329.8" x2="62.7" y2="289.3"/>
                                            <line class="st0" x1="63.2" y1="286.6" x2="63.7" y2="284.2"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <line class="st0" x1="42.9" y1="336.3" x2="43.4" y2="333.8"/>
                                            <line class="st9" x1="44.4" y1="329.2" x2="60" y2="256.9"/>
                                            <path class="st0" d="M60.6,254.6l0.5-2.4c-0.8-0.2-1.6-0.4-2.4-0.7"/>
                                            <path class="st10" d="M53.9,249.9C9.6,233.4,4.8,186.5,4.5,171"/>
                                            <path class="st0" d="M4.4,168.4c0-1.6,0.1-2.5,0.1-2.5"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <line class="st0" x1="27.6" y1="336.3" x2="28.3" y2="333.8"/>
                                            <line class="st11" x1="29.5" y1="328.9" x2="46.8" y2="262.5"/>
                                            <path class="st0" d="M47.5,260.1l0.6-2.4c-0.8-0.3-1.6-0.6-2.3-0.9"/>
                                            <path class="st12" d="M41.3,254.9c-49.1-21.6-51.1-68.8-50.4-84.1"/>
                                            <path class="st0" d="M-9,168.4c0.1-1.6,0.3-2.5,0.3-2.5"/>
                                        </g>
                                    </g>
                                </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <polyline class="st0" points="-36.2,165.9 -33.7,165.9 -33.6,168.4 			"/>
                                                    <path class="st1" d="M-33.6,173.6l0,1.2c0.1,8.1-0.6,16.3-2.3,24.2c-9.6,44.3-42,57.6-54.5,61.1"/>
                                                    <path class="st0" d="M-92.9,260.7c-1.6,0.4-2.4,0.5-2.4,0.5s0.3,0.8,0.8,2.4"/>
                                                    <path class="st2" d="M-92.8,268.2c5.9,16.7,20.3,57.5,20.6,60.1c-1.1,5.8-6.9,9.3-8.4,9.5c-1.5,0.2-4.6-4.1-7.3-4.1
                                                s-6.9,3.8-8.4,4.1c-1.5,0.3-3.3-4.1-7.1-4.1s-3,4.8-7.9,4c-4.9-0.8-8-7.8-8-7.8v-159"/>
                                                    <polyline class="st0" points="-119.3,168.4 -119.3,165.9 -116.8,165.9 			"/>
                                                    <line class="st3" x1="-112.1" y1="165.9" x2="-38.5" y2="165.9"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <line class="st0" x1="-95.3" y1="261.2" x2="-97.6" y2="260.2"/>
                                                    <line class="st4" x1="-101.5" y1="258.6" x2="-115.1" y2="252.9"/>
                                                    <line class="st0" x1="-117" y1="252.1" x2="-119.3" y2="251.1"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path class="st0" d="M-76.4,165.9c0,0,0.1,0.9,0.2,2.5"/>
                                                    <path class="st5" d="M-76.1,173.3c-0.1,15.7-4.2,52.6-38.8,72.3"/>
                                                    <path class="st0" d="M-117.1,246.8c-0.7,0.4-1.5,0.8-2.2,1.1"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path class="st0" d="M-90.9,165.9c0,0,0.1,0.9,0.1,2.5"/>
                                                    <path class="st6" d="M-90.9,173.4c-0.5,13.9-4.1,43.8-24.5,61.4"/>
                                                    <path class="st0" d="M-117.3,236.4c-0.7,0.5-1.3,1-2,1.5"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <path class="st0" d="M-107.3,165.9c0,0,0.1,0.9,0.2,2.5"/>
                                                    <path class="st7" d="M-106.9,173.8c0.3,11.6-0.6,33.5-9.7,50.1"/>
                                                    <path class="st0" d="M-118,226.3c-0.4,0.7-0.9,1.4-1.4,2.1"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <line class="st0" x1="-109.3" y1="337.6" x2="-109.8" y2="335.2"/>
                                                    <line class="st8" x1="-110.8" y1="329.8" x2="-118.4" y2="289.3"/>
                                                    <line class="st0" x1="-118.9" y1="286.6" x2="-119.3" y2="284.2"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <line class="st0" x1="-98.5" y1="336.3" x2="-99" y2="333.8"/>
                                                    <line class="st9" x1="-100" y1="329.2" x2="-115.7" y2="256.9"/>
                                                    <path class="st0" d="M-116.2,254.6l-0.5-2.4c0.8-0.2,1.6-0.4,2.4-0.7"/>
                                                    <path class="st10" d="M-109.5,249.9c44.3-16.5,49.1-63.4,49.4-78.9"/>
                                                    <path class="st0" d="M-60.1,168.4c0-1.6-0.1-2.5-0.1-2.5"/>
                                                </g>
                                            </g>
                                            <g>
                                                <g>
                                                    <line class="st0" x1="-83.3" y1="336.3" x2="-83.9" y2="333.8"/>
                                                    <line class="st11" x1="-85.2" y1="328.9" x2="-102.5" y2="262.5"/>
                                                    <path class="st0" d="M-103.1,260.1l-0.6-2.4c0.8-0.3,1.6-0.6,2.3-0.9"/>
                                                    <path class="st12" d="M-96.9,254.9c49.1-21.6,51.1-68.8,50.4-84.1"/>
                                                    <path class="st0" d="M-46.6,168.4c-0.1-1.6-0.3-2.5-0.3-2.5"/>
                                                </g>
                                            </g>
                                        </g>
                                </svg></div>
                                <!-- СХЕМА С НОЖНИЦАМИ-->
                                <div class="mwi-3">
                                    <img src="/assets/img/a-scheme.svg" alt="">
                                </div>
                                <div class="mwi-3 mwi-3-scissors">
                                    <img src="/assets/img/a-scissors.gif" alt="">
                                </div>

                                <!-- ШТОРЫ -->
                                <div class="mwi-4"><img src="/assets/img/a-blinds.gif" alt=""></div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>
            
    <!--
    <div class="section-wrapper">
        <div class="js-footer-1 js-footer" data-hash="slides-a"><a name="s-anch-1" class="s-anch"></a></div>
        <div class="js-footer-2 js-footer" data-hash="slides-b"><a name="s-anch-2" class="s-anch"></a></div>
        <div class="js-footer-3 js-footer" data-hash="slides-c"><a name="s-anch-3" class="s-anch"></a></div>
        <div class="js-footer-4 js-footer" data-hash="slides-d"><a name="s-anch-4" class="s-anch"></a></div>
    </div>
    -->

@endsection