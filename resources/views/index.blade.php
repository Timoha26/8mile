@extends('app')
@section('title', '- Главная')
@section('content')
    <main>
        <div class="view full-page-intro main main-dinamic">
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="wow fadeIn row">
                        <div class="col-md-12 mt-4 white-text text-center text-md-center">
                            <img src="images/tra.png" alt="" width="450px" height="350px" class="img-fluid">
                            <h1 class="fontweight-bold text-left d-none d-lg-block">Заказ Газели в Кемерово</h1>
                            <h3 class="fontweight-bold text-center d-lg-none">Заказ Газели в Кемерово</h3>
                            <hr class="hr-light">
                            <h4 class="fontweight-bold d-none d-lg-block">+7-902-755-03-30</h4>
                            <h4 class="fontweight-bold d-none d-lg-block">59-03-30</h4>
                            <p class="d-lg-none">+7-902-755-03-30, 59-03-30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr class="my-5 hr-grey">
            <section>
                <h3 class="h3 mb-3 text-center">Мы предоставляем услуги: грузоперевозок и грузчиков</h3>
                <div class="row wow fadeIn">
                    <div class="col-lg-6 col-md-12 px-4">
                        <div style="height: 30px;"></div>
                        <div class="row mt-4">
                            <div class="col-1 mr-3">
                                <i class="fas fa-home fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Квартирные, Офисные и Дачные Переезды</h5>
                                <p class="grey-text">Наши Услуги позволят Вам получить качественный сервис по доступной
                                    цене в Кемерово.</p>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="row mt-4">
                            <div class="col-1 mr-3">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Доставка Стройматериалов и Вывоз Мусора</h5>
                                <p class="grey-text">Благодаря нам Вы сможете вовремя получить стройматериал и вывезти
                                    мусор.</p>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="row mt-4">
                            <div class="col-1 mr-3">
                                <i class="fas fa-people-carry fa-2x"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Услуги Профессиональных Грузчиков</h5>
                                <p class="grey-text">Грузчики от нашей компании аккуратно погрузят и разгрузят.</p>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-4">
                        <div style="height: 30px;"></div>
                        <img src="images/truck.jpg" alt="" class="img-fluid z-depth-1-half">
                    </div>
                </div>
            </section>
            <hr class="my-5">
            <section>
                <h2 class="my-5 h3 text-center">Транспортная Компания: Восьмая Миля</h2>
                <div class="row features-small mb-5 mt-3 wow fadeIn">
                    <div class="col-md-4">
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">В нашей компании работают профессиональные
                                    сотрудники с большим опытом работы в грузоперевозках.</p>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">Заказав доставку груза в нашей компании Вы можете
                                    быть на 100% уверенны в качестве работы и сроках доставки.</p>
                            </div>
                        </div>
                        <div style="height: 30px;"></div>
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">У нас Вы сможете пользоваться любой удобной для
                                    Вас формой оплаты со всеми закрывающими документами.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 flex-center">
                        <img src="images/loader.jpg" alt="" class="img-fluid z-depth-0">
                    </div>
                    <div class="col-md-4">
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">Отправьте заявку или позвоните по номеру, мы
                                    ответим оперативно!</p>
                            </div>
                        </div>
                        <div style="height: 75px;"></div>
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">Уточните детали грузоперевозки и подтвердите
                                    заказ.</p>
                            </div>
                        </div>
                        <div style="height: 75px;"></div>
                        <div class="row mt-4">
                            <div class="col-2"><i class="fa fa-check-circle indigo-text fa-2x"></i></div>
                            <div class="col-10">
                                <p class="grey-text font-weight-bold">Выполнение доставки груза в соответствии с Вашими
                                    требованиями.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="my-5">
        </div>
    </main>
@endsection