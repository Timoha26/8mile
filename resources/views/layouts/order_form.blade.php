<form id="contactform" method="POST" class="validateform" action="/orders">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h5 class="text-center">Заказать Газель</h5>
    <hr class="hr-light">
    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" name="customer_name" class="form-control" placeholder="Ваше имя:" required>
    </div>
    <div class="md-form">
        <i class="fa fa-phone prefix grey-text"></i>
        <input type="text" name="customer_phone" class="form-control" placeholder="Телефон:" required>
    </div>
    <div class="md-form">
        <h5 class="text-center">Информация о вашем заказе</h5>
        <textarea name="info" class="form-control form-control-md" required></textarea>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Отправить</button>
    </div>
</form>