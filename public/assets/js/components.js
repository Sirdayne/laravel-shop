$(document).ready(function(){
    
    // НАВИГАЦИЯ
    Vue.component('component-header', {
      template: `<div class="navigation">
            <div class="wrap">
				<div class="burger">
					<div class="brg-1"></div>
					<div class="brg-2"></div>
					<div class="brg-3"></div>
				</div>
				
                <a href="index.html"><div class="nav-logo"><img src="./img/logo-header.png" alt=""></div></a>

                <div class="nav-center">
                    <div class="nav"><a href="index.html">ГЛАВНАЯ</a><span class="nav-line"></span></div>
                    <div class="nav nav-modal">
                        УСЛУГИ<span class="nav-line"></span>
                        <div class="nav-services">
                            <div class="nav-s"><a href="jalousie_roll.html">ИЗГОТОВЛЕНИЕ РОЛЛШТОР</a></div>
                            <div class="nav-s"><a href="sew.html">ИНДИВИДУАЛЬНЫЙ ПОШИВ ШТОР</a></div>
                            <div class="nav-s"><a href="decor_panels.html">ПРОДАЖА ДЕКОРАТИВНЫХ ПАНЕЛЕЙ</a></div>
                            <div class="nav-s"><a href="wallpapers.html">ДИЗАЙНЕРСКИЕ ОБОИ</a></div>
                            <div class="nav-s"><a href="floor_slabs.html">НАПОЛЬНЫЕ ПЛИТЫ</a></div>
                            <div class="nav-s"><a href="business.html">ДЛЯ БИЗНЕСА</a></div>
                            <div class="nav-s"><a href="dealers.html">ДЛЯ ДИЛЕРОВ</a></div>
                        </div>
                    </div>
                    <!--<div class="nav"><a href="">ДОПОЛНИТЕЛЬНЫЕ<br>УСЛУГИ</a></div>-->
                    <div class="nav"><a href="about.html">О НАС</a><span class="nav-line"></span></div>
                    <!--<div class="nav"><a href="discounts.html">АКЦИИ И ЦЕНЫ</a><span class="nav-line"></span></div>-->
                    <div class="nav"><a href="types.html">ВИДЫ ШТОР</a><span class="nav-line"></span></div>
                    <div class="nav"><a href="portfolio.html">ПОРТФОЛИО</a><span class="nav-line"></span></div>
                    <div class="nav"><a href="news.html">НОВОСТИ</a><span class="nav-line"></span></div>
                    <div class="nav"><a href="reviews.html">ОТЗЫВЫ</a><span class="nav-line"></span></div>
                    <div class="nav"><a href="contacts.html">КОНТАКТЫ</a><span class="nav-line"></span></div>
                </div>

                <div class="nav-tel">
                    <a href="tel:+87172250426">8(7172)25-04-26</a>
                </div>
            </div>
        </div>`
    })
    
    // НАВИГАЦИЯ В ФУТЕРЕ
    Vue.component('component-footer', {
      template: `<footer class="footer">

                <div class="wrap footer-center">

                    <div class="footer-part">
                        <div class="footer-logo">
                            <img src="./img/logo-footer.png" alt="">
                        </div>
                    </div>

                    <div class="footer-part footer-part-menu">
                        <div class="f-nav"><a href="index.html">ГЛАВНАЯ</a></div>
                        <div class="f-nav"><a href="about.html">О НАС</a></div>
                        <!--<div class="f-nav"><a href="discounts.html">АКЦИИ И ЦЕНЫ</a></div>-->
                        <div class="f-nav"><a href="types.html">ВИДЫ ШТОР</a></div>
                        <div class="f-nav"><a href="portfolio.html">ПОРТФОЛИО</a></div>
                        <div class="f-nav"><a href="news.html">НОВОСТИ</a></div>
                        <div class="f-nav"><a href="reviews.html">ОТЗЫВЫ</a></div>
                        <div class="f-nav"><a href="contacts.html">КОНТАКТЫ</a></div>
                    </div>


                    <div class="footer-part">
                        <div class="f-contacts footer-mob-none">КОНТАКТЫ</div>

                        <div class="f-contacts f-con-margin">КАЗАХСТАН. Г.АСТАНА,</div>
                        <div class="f-contacts">УЛ. КУНАЕВА, Д. 35/1, КВ. 3,</div>
                        <div class="f-contacts">ТЕЛ: +7 (7172) 516 520</div>
                        <div class="f-btn"><button class="btn-white jk">ВЫЗВАТЬ ДИЗАЙНЕРА</button></div>
                    </div>

                    <div class="footer-part">
                        <div class="f-contacts">ПРИСОЕДИНЯЙТЕСЬ</div>
                        <div class="f-contacts">
                            <div class="f-1"></div>
                            <div class="f-2"></div>
                            <div class="f-3"></div>
                        </div>
                    </div>
                 
                </div>
                      
                <div class="wrap">
                    <a href="http://ginnova.kz" target="_blank">
                    <div class="gi-logo">
                        <p>РАЗРАБОТАНО С ОСОБЫМ ТРЕПЕТОМ</p>
                        <svg class="authors-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22.83px" height="25px" viewBox="0 0 612 670">
                            <path fill="#1a80c3" d="M275.097-0.906c41.842,1.701,78.333,4.859,117.257,9.96c11.676,1.458,30.165,6.316,32.109,13.361c4.624,16.763,3.65,36.197,0.244,53.932c-1.46,7.773-14.108,7.044-21.65,6.802c-50.601-1.458-101.201-5.345-151.8-5.831c-89.28-0.971-141.097,37.411-155.207,124.867c-14.596,90.128-15.569,182.2,1.703,272.571c15.327,79.926,66.414,117.824,148.152,117.095c30.166-0.242,61.79-0.242,94.632-0.972c0.243-12.39-0.486-19.191-0.486-26.48c0-70.937,0-141.872,0-212.81c0-27.937,5.352-33.039,33.328-33.282c54.006-0.243,54.006-0.243,54.006,54.417c0,80.896,0,161.551,0,242.447c0,38.627,0.243,43.243-38.681,46.644c-59.356,5.102-119.445,9.475-178.56,6.073c-98.524-5.83-161.774-62.919-191.21-155.234c-10.46-33.039-15.813-68.75-16.786-103.489c-1.703-63.164-2.189-126.569,3.406-189.489C17.231,88.494,96.294,9.783,214.766,0.309C217.929-0.177,258.312-0.906,275.097-0.906z"></path>
                            <path fill="#1a80c3" d="M613,334.1c0,99.847,0,199.449,0,299.295c0,26.479-3.894,30.123-30.896,30.366c-56.683,0.486-56.683,0.486-56.683-56.117c0-188.273,0-376.547,0-565.064c0-34.254,3.406-37.655,36.978-37.655C613,4.925,613,4.925,613,55.698C613,148.498,613,241.299,613,334.1z"></path>
                        </svg>

                    </div>
                    </a>
                </div>
                
            </footer>`
    })
    
    // создание корневого экземпляра
    new Vue({
      el: '#header'
    })
    
    new Vue({
      el: '#footer'
    })
    
});

