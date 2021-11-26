<!-- callback-btn -->
<div class="callback-bt" data-toggle="modal" data-target="#modal">
    <div class="text-call">
        <svg class="callback_phone-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/>
        </svg>
        <span>Заказать<br>звонок</span>
    </div>
</div>
<a class="callback-bt-mobile" href="tel:79233545152">
    <div class="text-call">
        <svg class="callback_phone-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"/>
        </svg>
        <span>Позвонить</span>
    </div>
</a>
<!-- callback-btn end -->
<!-- modal window -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Оставьте свой номер</h4>
                <p>и мы перезвоним в течение 5 минут.</p>
                <form class="modal_form row contact-form" id="modal_form" action="" method="post">
                    {{ csrf_field() }}
                    <div class="col">
                        <p class="message"></p>
                        <div class="modal_form-input">
                            <input id="modal_form_name" class="form-control" type="text" name="modal_form_name" placeholder="Имя">
                            <label id="modal_form_name_error" for="modal_form_name" class="error"></label>
                        </div>
                        <div class="form-group modal_form-input phone">
                            <input id="modal_form_phone" class="form-control" type="tel" name="modal_form_phone" placeholder="Телефон">
                            <label id="modal_form_phone_error" for="modal_form_phone" class="error"></label>
                        </div>
                        <div class="modal_form-btn">
                            <button class="btn btn-primary send-form" type="submit">Заказать машину</button>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input id="modal_form_check" type="checkbox" value="Yes" name="modal_form_check" class="custom-control-input" checked>
                            <label class="custom-control-label" for="modal_form_check">Я согласен с политикой обработки персональных данных</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal window end -->
