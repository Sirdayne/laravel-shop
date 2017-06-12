@extends('layouts.main')

@section('content')

    <div class="navigation-title">
        Наши контакты
    </div>
    
    <div class="contacts-section">
        <div class="wrap">
            <div class="contacts-form">
                <form method="POST" action="/feedback/send_contacts">
                    {{ csrf_field() }}
                    <div class="contact-row"><h3>Будем рады ответить на все ваши вопросы</h3></div>

                    <div class="contact-row"><input type="text" name="name" placeholder="Имя" required></div>
                    <div class="contact-row"><input type="tel" id="client-tel-for-consult-3" name="telephone" placeholder="Телефон" required></div>
                    <div class="contact-row"><textarea cols="30" rows="10" name="text" placeholder="Сообщение"></textarea></div>

                    <div class="contact-row"><button class="btn-contacts">Отправить</button></div>

                </form>
            </div>

            <div class="contacts-rows">

                <div class="contacts-row">
                    <img src="/assets/img/icon-addr.png" alt="">
                    <p>Мәнгілік Ел проспект, 51</p>
                </div>
                <div class="contacts-row">
                    <img src="/assets/img/icon-phone.png" alt="">
                    <p>+7 (777) 474 04 14</p>
                </div>
                <div class="contacts-row">
                    <img src="/assets/img/icon-mail.png" alt="">
                    <p>info@windowfashion.kz</p>
                </div>
                <a href="https://www.instagram.com/windowfashion.purpur/" target="_blank">
                <div class="contacts-row">
                    <img src="/assets/img/icon-inst.png" alt="">
                    <p>@windowfashion.purpur</p>
                </div>
                </a>
            </div>
        </div>
    </div>
    
    <div id="map" style="float:left; width: 100%; height:500px; position:relative; z-index:1;"></div>

    
    <script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    
    <script type="text/javascript">
        var map;

        DG.then(function () {
            map = DG.map('map', {
                center: [51.094528, 71.427312],
                zoom: 17
            });
            DG.marker([51.094528, 71.427312]).addTo(map);
        });
    </script>

            

@endsection
