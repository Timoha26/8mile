<header>
    <nav style="background-color: rgba( 0, 0, 0, 0.4); background-color: #1C2331"
         class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">8Mile</a>
            <button class="navbar-toggler type" type="button" data-toggle="collapse"
                    data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a href="/" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                        <a href="/services" class="nav-link">Прайс лист</a>
                    </li>
                    <li class="nav-item {{ Request::is('contacts') ? 'active' : '' }}">
                        <a href="/contacts" class="nav-link">Контакты</a>
                    </li>
                    <!--<li class="nav-item {{ Request::is('orders') ? 'active' : '' }}">
                        <a href="/orders?skip=0" class="nav-link">Заказы</a>
                    </li>-->
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fab fa-vk"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-phone"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fa fa-mobile"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fab fa-viber"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <i class="fab fa-whatsapp mr-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>