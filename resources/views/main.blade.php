@extends('layouts.home')

@section('title', 'Заказать эвакуатор (воровайку) в Красноярске')
@section('description', 'Эвакуаторы в Красноярске за 40 мин. от 1000 руб. Круглосуточно. Оперативно.')
@section('keywords', '')
@section('ogimage'){{ asset('img/og/tow_truck.jpg') }}@endsection

@section('content')
<section id="offer-main">
    <div class="container offer">
        <div class="row offer_social">
            <div class="col">
                <a href="https://api.whatsapp.com/send?phone=79233545152" target="_blank" class="header_social-link">
                    <svg class="offer_social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                    </svg>
                </a>
            </div>
            <div class="col">
                <a href="viber://chat?number=79233545152" target="_blank" class="header_social-link">
                    <svg class="offer_social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M444 49.9C431.3 38.2 379.9.9 265.3.4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9.4-85.7.4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9.4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9.6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4.7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5.9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9.1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7.5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1.8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/>
                    </svg>
                </a>
            </div>
            <div class="col">
                <!--<a href="https://tiktok.com" target="_blank" class="header_social-link">
                    <svg class="offer_social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
                    </svg>
                </a>-->
            </div>
            <div class="col">
                <a href="https://vk.com/club195594633" target="_blank" class="header_social-link">
                    <svg class="offer_social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="M545 117.7c3.7-12.5 0-21.7-17.8-21.7h-58.9c-15 0-21.9 7.9-25.6 16.7 0 0-30 73.1-72.4 120.5-13.7 13.7-20 18.1-27.5 18.1-3.7 0-9.4-4.4-9.4-16.9V117.7c0-15-4.2-21.7-16.6-21.7h-92.6c-9.4 0-15 7-15 13.5 0 14.2 21.2 17.5 23.4 57.5v86.8c0 19-3.4 22.5-10.9 22.5-20 0-68.6-73.4-97.4-157.4-5.8-16.3-11.5-22.9-26.6-22.9H38.8c-16.8 0-20.2 7.9-20.2 16.7 0 15.6 20 93.1 93.1 195.5C160.4 378.1 229 416 291.4 416c37.5 0 42.1-8.4 42.1-22.9 0-66.8-3.4-73.1 15.4-73.1 8.7 0 23.7 4.4 58.7 38.1 40 40 46.6 57.9 69 57.9h58.9c16.8 0 25.3-8.4 20.4-25-11.2-34.9-86.9-106.7-90.3-111.5-8.7-11.2-6.2-16.2 0-26.2.1-.1 72-101.3 79.4-135.6z"/>
                    </svg>
                </a>
            </div>
            <div class="col">
                <a href="mailto:spetsavtotekh124@gmail.com" target="_blank" class="header_social-link">
                    <svg class="offer_social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="offer_title">Заказать эвакуатор (воровайку) в Красноярске</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="offer_items-title">Срочная подача техники</h2>
                <div class="offer_item">
                    <svg class="offer_item-icon clock" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"/>
                    </svg>
                    <span class="offer_item-text">за 40 мин.*</span>
                </div>
                <div class="offer_item">
                    <svg class="offer_item-icon ruble" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M239.36 320C324.48 320 384 260.542 384 175.071S324.48 32 239.36 32H76c-6.627 0-12 5.373-12 12v206.632H12c-6.627 0-12 5.373-12 12V308c0 6.627 5.373 12 12 12h52v32H12c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h52v52c0 6.627 5.373 12 12 12h58.56c6.627 0 12-5.373 12-12v-52H308c6.627 0 12-5.373 12-12v-40c0-6.627-5.373-12-12-12H146.56v-32h92.8zm-92.8-219.252h78.72c46.72 0 74.88 29.11 74.88 74.323 0 45.832-28.16 75.561-76.16 75.561h-77.44V100.748z"/>
                    </svg>
                    <span class="offer_item-text">от 1000 руб.</span>
                </div>
                <div class="offer_item offer_item-no-mitm">
                    <span class="offer_item-text">Без посредников и переплат</span>
                </div>
            </div>
        </div>
        <form id="offer_form" class="offer_form contact-form" method="post" action="">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col offer_form-input">
                    <input id="offer_form_name" class="form-control" type="text" name="offer_form_name" placeholder="Имя">
                    <label id="offer_form_name_error" for="offer_form_name" class="error"></label>
                </div>
                <div class="col offer_form-input">
                    <input id="offer_form_phone" class="form-control" type="tel" name="offer_form_phone" placeholder="Телефон">
                    <label id="offer_form_phone_error" for="offer_form_phone" class="error"></label>
                </div>
                <div class="col offer_form-btn">
                    <button class="btn btn-primary send-form" type="submit">Заказать машину</button>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="custom-control custom-checkbox">
                        <input id="offer_form_check" type="checkbox" value="Yes" name="offer_form_check" class="custom-control-input" checked>
                        <label class="custom-control-label" for="offer_form_check">Я согласен с политикой обработки персональных данных</label>
                    </div>
                    <label id="check_error" class="error"></label>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
                    <span class="offer_correction">* - время подачи машины указано в пределах Красноярска, при заказе за пределы города и в “часы пик” время подачи
  уточняйте по телефону.</span>
            </div>
        </div>
    </div>
</section>
<section id="advantages">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="advantages_title">Наши преимущества</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">всегда исправная техника</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">исправные системы безопасности</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">квалифицированные рабочие</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">оперативная подача</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">работаем 24/7</span>
                </div>
            </div>
            <div class="col">
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">работаем по городу и краю</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">работа по договору</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">гибкая система скидок</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">наличный и безналичный расчет (без НДС)</span>
                </div>
                <div class="advantage">
                    <svg class="advantage_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"/>
                    </svg>
                    <span class="advantage_text">индивидуальный подход</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="price">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="price_title">Стоимость заказа эвакуатора</h2>
            </div>
        </div>
        <div class="row price-row">
            <div class="col price-col-img">
                <img class="price_img" src="{{ asset('img/tow_truck.png') }}" alt="Заказать эвакуатор в Красноярске">
            </div>
            <div class="col">
                <div class="specifications">
                    <ul class="list-group">
                        <li class="list-group-item"><span class="specification">Грузоподъемность борта (т)</span><span class="spec-value">5</span></li>
                        <li class="list-group-item"><span class="specification">Длина (м)</span><span class="spec-value">5,8</span></li>
                        <li class="list-group-item"><span class="specification">Ширина (м)</span><span class="spec-value">2,3</span></li>
                        <li class="list-group-item"><span class="specification">Высота подъема (м)</span><span class="spec-value">12</span></li>
                        <li class="list-group-item"><span class="specification">Грузоподъемность (т)</span><span class="spec-value">3</span></li>
                        <li class="list-group-item"><span class="specification">Эвакуаторные лапы</span><span class="spec-value">есть</span></li>
                    </ul>
                </div>
                <div class="prices">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="price_value">1300</span>
                            <span> руб/ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">от 8</span>
                            <span> ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">45</span>
                            <span> руб/км *</span>
                        </li>
                        <li class="list-group-item">
                            <span class="price_value">1500</span>
                            <span> руб/ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">от 4</span>
                            <span> ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">45</span>
                            <span> руб/км *</span>
                        </li>
                        <li class="list-group-item">
                            <span class="price_value">1750</span>
                            <span> руб/ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">от 2</span>
                            <span> ч</span>
                            <span class="price_separator"> / </span>
                            <span class="price_value">45</span>
                            <span> руб/км *</span>
                        </li>
                        <li class="list-group-item prices_car-lift">
                            <div class="prices_car-lift_value">
                                <span>При безналичной оплате </span>
                                <span class="price_value">+100</span>
                                <span> руб/ч</span>
                            </div>
                        </li>
                    </ul>
                    <p>* - километраж включается в стоимость только за пределами города, стоимость километра по Красноярску - 0 руб.</p>
                </div>
            </div>
        </div>
        <form id="price_form" class="price_form contact-form" method="post" action="">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col price_form-input">
                    <input id="price_form_name" class="form-control" type="text" name="price_form_name" placeholder="Имя">
                    <label id="price_form_name_error" for="price_form_name" class="error"></label>
                </div>
                <div class="col price_form-input">
                    <input id="price_form_phone" class="form-control" type="tel" name="price_form_phone" placeholder="Телефон">
                    <label id="price_form_phone_error" for="price_form_phone" class="error"></label>
                </div>
                <div class="col price_form-btn">
                    <button class="btn btn-primary send-form" type="submit">Заказать машину</button>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="custom-control custom-checkbox">
                        <input id="price_form_check" type="checkbox" value="Yes" name="price_form_check" class="custom-control-input" checked>
                        <label class="custom-control-label" for="price_form_check">Я согласен с политикой обработки персональных данных</label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section id="text">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Вызвать эвакуатор в Красноярске</h2>
                <p>Эвакуатор в Красноярске может понадобиться автовладельцам в любой момент. Будь то неожиданная неисправность транспортного средства или внезапное ДТП - мы оказываемся в крайне затруднительном положении. Многие при неожиданной поломке автомобиля сперва пробуют решить проблему самостоятельно - просят помощи друзей или родственников для буксировки неисправного авто на ближайший автосервис или ловят "попутку". Согласитесь, отвлекать других от дел совсем не хочется и лучше доверить транспортировку своего автомобиля профессионалам. Мы осуществляем круглосуточную эвакуацию автомобилей и спецтехники по лучшим ценам, а время подачи составляет 30-40 минут.</p>
                <h3>Заказать воровайку (манипулятор) в Красноярске</h3>
                <p>Самопогрузчик или как именуют в народе "воровайка" - ваш выбор. Представляет собой грузовик с автокраном манипулятором на борту. Совмещает в себе функции грузоподъемника, погрузчика и бортовой машины. С его помощью можно быстро и удобно загружать и перевозить самые различные грузы - строительные материалы, металлоконструкции, каменные и бетонные блоки, спецтехнику, бытовки, гаражи, павильоны и многое другое. Заказать воровайку (самопогрузчик) в Красноярске в нашей компании очень просто - просто позвоните и мы Вам поможем.</p>
            </div>
        </div>
    </div>
</section>
<section id="photos">
    <div class="container photos">
        <div class="row">
            <div class="col">
                <h2 class="photos_title">Наша техника</h2>
            </div>
        </div>
        <div class="row">
            <div class="col photos_item">
                <a data-fancybox="gallery" href="{{ asset('img/photos/ev1.jpg') }}"><img class="photos_img" src="{{ asset('img/photos/min/ev1_min.jpg') }}" alt="Фото нашей работы 1"></a>
            </div>
            <div class="col photos_item">
                <a data-fancybox="gallery" href="{{ asset('img/photos/ev15.jpg') }}"><img class="photos_img" src="{{ asset('img/photos/min/ev15_min.jpg') }}" alt="Фото нашей работы 3"></a>
            </div>
            <div class="col photos_item">
                <a data-fancybox="gallery" href="{{ asset('img/photos/ev16.jpg') }}"><img class="photos_img" src="{{ asset('img/photos/min/ev16_min.jpg') }}" alt="Фото нашей работы 5"></a>
            </div>
            <div class="col photos_item">
                <a data-fancybox="gallery" href="{{ asset('img/photos/ev17.jpg') }}"><img class="photos_img" src="{{ asset('img/photos/min/ev17_min.jpg') }}" alt="Фото нашей работы 7"></a>
            </div>
        </div>
    </div>
</section>
@endsection()
