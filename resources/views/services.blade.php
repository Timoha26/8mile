@extends('app')
@section('title', '- Услуги')
@section('content')
    <div class="view full-page-intro main">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-4 white-text text-center text-md-center">
                        <h1 class="fontweight-bold">Заказ Газели</h1>
                        <hr class="hr-light">
                        <h3 class="fontweight-bold">+7-902-755-03-30</h3>
                        <hr class="hr-light">
                        <h3 class="fontweight-bold">59-03-30</h3>
                    </div>
                    <div class="col-md-6 col-xl-5 mb-4">
                        <div class="card">
                            <div class="card-body text-left">
                                @include('layouts.order_form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Таблица-->
    <hr class="my-5 dark">
    <div class="col-md-12"><h2 class="text-center">Прайс-лист на услуги грузчиков</h2></div>
    <div class="container">
        <div class="col-md-12 bg-primary white-text text-center"><p><strong>Переезды:300 рублей в час. Строй.материалы:
                    350 рублей в час(1человек)</strong></p></div>
    </div>
    <hr class="my-5 dark">
    <div class="table-responsive-md container">
        <caption><h2 class="text-center">Прайс-лист на городские грузоперевозки</h2></caption>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Город</th>
                <th scope="col">Газель до 8-10</th>
                <th scope="col">Газель до 12-14</th>
                <th scope="col">Газель до 16-20</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1 час</th>
                <td>600</td>
                <td>700</td>
                <td>800</td>
            </tr>
            <tr>
                <th scope="row">Вывоз мусора</th>
                <td>2000</td>
                <td>2250</td>
                <td>2500</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="table-responsive-md container">
        <caption><h2 class="text-center">Прайс-лист на пригородные грузоперевозки</h2></caption>
        <div class="dark-text my-2 text-center">
            <p class="text-white bg-primary"><strong>Произведен расчет стоимости д/п "Центральный" пр.Ленина 90/4 в
                    стоимость входит 1час ожидания</strong></p>
        </div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Пригород</th>
                <th scope="col">Газель до 8-10</th>
                <th scope="col">Газель до 12-14</th>
                <th scope="col">Газель до 16-20</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Азотовец с/о</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Андреевка</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Балахонка старая</th>
                <td>1600</td>
                <td>1800</td>
                <td>2000</td>
            </tr>
            <tr>
                <th scope="row">Береговой</th>
                <td>1700</td>
                <td>1900</td>
                <td>2100</td>
            </tr>
            <tr>
                <th scope="row">Березка с/о</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Березка-2 с/о</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Березово</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Верхотомка</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Елыкаево</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Журавли</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Заря c/о Кировский</th>
                <td>1400</td>
                <td>1600</td>
                <td>1800</td>
            </tr>
            <tr>
                <th scope="row">Звездный</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Кедровка</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Лапичевская</th>
                <td>1400</td>
                <td>1600</td>
                <td>1800</td>
            </tr>
            <tr>
                <th scope="row">Лесная Поляна</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Мазурово</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Маручак(Ближний)</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Маручак(Дальний)</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Мамаевский</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Моржуха</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Новостройка</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Осиновка</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Петровский</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Печатник</th>
                <td>1400</td>
                <td>1600</td>
                <td>1800</td>
            </tr>
            <tr>
                <th scope="row">Пионерка-Пригородный</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Притомье</th>
                <td>1400</td>
                <td>1600</td>
                <td>1800</td>
            </tr>
            <tr>
                <th scope="row">Промышленновский</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Пугачи</th>
                <td>1400</td>
                <td>1600</td>
                <td>1800</td>
            </tr>
            <tr>
                <th scope="row">Радуга с/о Кировский</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Семеновский</th>
                <td>1600</td>
                <td>1800</td>
                <td>2000</td>
            </tr>
            <tr>
                <th scope="row">Силино</th>
                <td>1700</td>
                <td>1900</td>
                <td>2100</td>
            </tr>
            <tr>
                <th scope="row">Смолино</th>
                <td>1600</td>
                <td>1800</td>
                <td>2000</td>
            </tr>
            <tr>
                <th scope="row">Сухая речка</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Тебеньки</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Село Топки</th>
                <td>1500</td>
                <td>1700</td>
                <td>1900</td>
            </tr>
            <tr>
                <th scope="row">Улус</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Село Ягуновка</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            <tr>
                <th scope="row">Шахта Ягуновская</th>
                <td>1200</td>
                <td>1400</td>
                <td>1600</td>
            </tr>
            <tr>
                <th scope="row">Ясногорский</th>
                <td>1300</td>
                <td>1500</td>
                <td>1700</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="table-responsive-md container">
        <caption><h2 class="text-center">Прайс-лист на междугородные грузоперевозки</h2></caption>
        <div class="dark-text my-2 text-center">
            <p class="text-light bg-primary"><strong>Произведен расчет стоимости д/п "Центральный" пр.Ленина 90/4 в
                    стоимость входит 1час ожидания</strong></p>
        </div>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Межгород</th>
                <th scope="col">Газель до 8-10</th>
                <th scope="col">Газель до 12-14</th>
                <th scope="col">Газель до 16-20</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">Новая Балахонка</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Барановка</th>
                <td>2300</td>
                <td>2500</td>
                <td>2700</td>
            </tr>
            <tr>
                <th scope="row">Барачаты</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Барзас</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Березовский</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Воскресенка</th>
                <td>2400</td>
                <td>2600</td>
                <td>2800</td>
            </tr>
            <tr>
                <th scope="row">Глубокая</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Дедюево</th>
                <td>1800</td>
                <td>2000</td>
                <td>2200</td>
            </tr>
            <tr>
                <th scope="row">Зарубино</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Известковый</th>
                <td>2200</td>
                <td>2400</td>
                <td>2600</td>
            </tr>
            <tr>
                <th scope="row">Колмогорово</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Крюково</th>
                <td>1900</td>
                <td>2100</td>
                <td>2300</td>
            </tr>
            <tr>
                <th scope="row">Кузбасский</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Ленинградский</th>
                <td>2400</td>
                <td>2600</td>
                <td>2800</td>
            </tr>
            <tr>
                <th scope="row">Медынино</th>
                <td>2300</td>
                <td>2500</td>
                <td>2700</td>
            </tr>
            <tr>
                <th scope="row">Новороманово</th>
                <td>3100</td>
                <td>3500</td>
                <td>3900</td>
            </tr>
            <tr>
                <th scope="row">Панфилово</th>
                <td>2400</td>
                <td>2600</td>
                <td>2800</td>
            </tr>
            <tr>
                <th scope="row">Пинигино</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Плотниково</th>
                <td>2300</td>
                <td>2500</td>
                <td>2700</td>
            </tr>
            <tr>
                <th scope="row">Адонино</th>
                <td>2400</td>
                <td>2600</td>
                <td>2800</td>
            </tr>
            <tr>
                <th scope="row">Подъяково</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Ор-Искитим</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Разведчик</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Раздолье</th>
                <td>3300</td>
                <td>3700</td>
                <td>4100</td>
            </tr>
            <tr>
                <th scope="row">Рассвет</th>
                <td>2500</td>
                <td>2700</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Сарапки</th>
                <td>2300</td>
                <td>2500</td>
                <td>2700</td>
            </tr>
            <tr>
                <th scope="row">Симаново</th>
                <td>2700</td>
                <td>2900</td>
                <td>3100</td>
            </tr>
            <tr>
                <th scope="row">Смирновский</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Старочервово</th>
                <td>2200</td>
                <td>2400</td>
                <td>2600</td>
            </tr>
            <tr>
                <th scope="row">Трищевский</th>
                <td>2100</td>
                <td>2300</td>
                <td>2500</td>
            </tr>
            <tr>
                <th scope="row">Топки(Город)</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Юнга</th>
                <td>2100</td>
                <td>2300</td>
                <td>2500</td>
            </tr>
            <tr>
                <th scope="row">Упоровки</th>
                <td>2300</td>
                <td>2500</td>
                <td>2700</td>
            </tr>
            <tr>
                <th scope="row">Успенка</th>
                <td>3000</td>
                <td>3300</td>
                <td>3600</td>
            </tr>
            <tr>
                <th scope="row">Усть-Хмелевка</th>
                <td>2300</td>
                <td>2600</td>
                <td>2900</td>
            </tr>
            <tr>
                <th scope="row">Черемичкино</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Чусовитино</th>
                <td>2900</td>
                <td>3300</td>
                <td>3600</td>
            </tr>
            <tr>
                <th scope="row">Шевели</th>
                <td>2200</td>
                <td>2400</td>
                <td>2600</td>
            </tr>
            <tr>
                <th scope="row">Шишино</th>
                <td>3000</td>
                <td>3400</td>
                <td>3800</td>
            </tr>
            <tr>
                <th scope="row">Щегловский</th>
                <td>2000</td>
                <td>2200</td>
                <td>2400</td>
            </tr>
            <tr>
                <th scope="row">Абакан</th>
                <td>22000</td>
                <td>23000</td>
                <td>25000</td>
            </tr>
            <tr>
                <th scope="row">Ачинск</th>
                <td>12000</td>
                <td>13000</td>
                <td>14000</td>
            </tr>
            <tr>
                <th scope="row">Анжеро-Судженск</th>
                <td>4000</td>
                <td>4300</td>
                <td>4600</td>
            </tr>
            <tr>
                <th scope="row">Барнаул</th>
                <td>13800</td>
                <td>14800</td>
                <td>15800</td>
            </tr>
            <tr>
                <th scope="row">Пачатский</th>
                <td>5300</td>
                <td>5700</td>
                <td>6100</td>
            </tr>
            <tr>
                <th scope="row">Берцк</th>
                <td>10000</td>
                <td>11000</td>
                <td>12000</td>
            </tr>
            <tr>
                <th scope="row">Белово</th>
                <td>4500</td>
                <td>4900</td>
                <td>5300</td>
            </tr>
            <tr>
                <th scope="row">Горно-Алтайск</th>
                <td>21000</td>
                <td>22500</td>
                <td>24000</td>
            </tr>
            <tr>
                <th scope="row">Грамотеино</th>
                <td>4000</td>
                <td>4300</td>
                <td>4600</td>
            </tr>
            <tr>
                <th scope="row">Гурьевск</th>
                <td>5500</td>
                <td>5900</td>
                <td>6300</td>
            </tr>
            <tr>
                <th scope="row">Зеленогорский</th>
                <td>3800</td>
                <td>4200</td>
                <td>4600</td>
            </tr>
            <tr>
                <th scope="row">Ижморский</th>
                <td>5100</td>
                <td>5500</td>
                <td>5900</td>
            </tr>
            <tr>
                <th scope="row">Инской</th>
                <td>4500</td>
                <td>4800</td>
                <td>5100</td>
            </tr>
            <tr>
                <th scope="row">Калтан</th>
                <td>9000</td>
                <td>9500</td>
                <td>1000</td>
            </tr>
            <tr>
                <th scope="row">Киселевск</th>
                <td>6200</td>
                <td>6600</td>
                <td>7000</td>
            </tr>
            <tr>
                <th scope="row">Крапивинский</th>
                <td>3300</td>
                <td>3600</td>
                <td>3900</td>
            </tr>
            <tr>
                <th scope="row">Краснобродский</th>
                <td>5700</td>
                <td>6100</td>
                <td>6500</td>
            </tr>
            <tr>
                <th scope="row">Красноярск</th>
                <td>18000</td>
                <td>19000</td>
                <td>20000</td>
            </tr>
            <tr>
                <th scope="row">Красный Яр</th>
                <td>4000</td>
                <td>4300</td>
                <td>4600</td>
            </tr>
            <tr>
                <th scope="row">Ленинск-Кузнецк</th>
                <td>3500</td>
                <td>3700</td>
                <td>3900</td>
            </tr>
            <tr>
                <th scope="row">Мариинск</th>
                <td>6000</td>
                <td>6500</td>
                <td>7000</td>
            </tr>
            <tr>
                <th scope="row">Междуреченск</th>
                <td>10500</td>
                <td>11500</td>
                <td>12500</td>
            </tr>
            <tr>
                <th scope="row">Мыски</th>
                <td>9500</td>
                <td>10000</td>
                <td>10500</td>
            </tr>
            <tr>
                <th scope="row">Новокузнецк</th>
                <td>8000</td>
                <td>8500</td>
                <td>9000</td>
            </tr>
            <tr>
                <th scope="row">Новосибирск</th>
                <td>9200</td>
                <td>9900</td>
                <td>10600</td>
            </tr>
            <tr>
                <th scope="row">Омск</th>
                <td>30000</td>
                <td>31500</td>
                <td>33000</td>
            </tr>
            <tr>
                <th scope="row">Осенники</th>
                <td>8500</td>
                <td>9000</td>
                <td>9500</td>
            </tr>
            <tr>
                <th scope="row">Полысаево</th>
                <td>3700</td>
                <td>4000</td>
                <td>4300</td>
            </tr>
            <tr>
                <th scope="row">Прокопьевск</th>
                <td>6500</td>
                <td>7000</td>
                <td>7500</td>
            </tr>
            <tr>
                <th scope="row">Промышленное</th>
                <td>3000</td>
                <td>3200</td>
                <td>3400</td>
            </tr>
            <tr>
                <th scope="row">Салаир</th>
                <td>5900</td>
                <td>6300</td>
                <td>6700</td>
            </tr>
            <tr>
                <th scope="row">Саяногорск</th>
                <td>24000</td>
                <td>25500</td>
                <td>27000</td>
            </tr>
            <tr>
                <th scope="row">Тайга</th>
                <td>4000</td>
                <td>4300</td>
                <td>4600</td>
            </tr>
            <tr>
                <th scope="row">Таштагол</th>
                <td>12500</td>
                <td>13500</td>
                <td>14500</td>
            </tr>
            <tr>
                <th scope="row">Тисуль</th>
                <td>8000</td>
                <td>8500</td>
                <td>9000</td>
            </tr>
            <tr>
                <th scope="row">Томск</th>
                <td>7500</td>
                <td>8000</td>
                <td>8500</td>
            </tr>
            <tr>
                <th scope="row">Тяжинский</th>
                <td>8000</td>
                <td>8500</td>
                <td>9000</td>
            </tr>
            <tr>
                <th scope="row">Ужур</th>
                <td>12500</td>
                <td>13500</td>
                <td>14500</td>
            </tr>
            <tr>
                <th scope="row">Чибула</th>
                <td>5300</td>
                <td>5700</td>
                <td>6100</td>
            </tr>
            <tr>
                <th scope="row">Шерегеш</th>
                <td>13500</td>
                <td>14500</td>
                <td>15500</td>
            </tr>
            <tr>
                <th scope="row">Юрга</th>
                <td>4400</td>
                <td>4800</td>
                <td>5200</td>
            </tr>
            <tr>
                <th scope="row">Яшкино</th>
                <td>3300</td>
                <td>3600</td>
                <td>3900</td>
            </tr>
            <tr>
                <th scope="row">Яя</th>
                <td>4800</td>
                <td>5200</td>
                <td>5600</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="my-5 mx-auto text-center">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Заказать</button>
        </div>
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заказ газели</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('layouts.order_form')
                </div>
            </div>
        </div>
    </div>
@endsection