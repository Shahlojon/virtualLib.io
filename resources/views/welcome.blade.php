<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phusics Lab</title>
    <!-- <link rel="stylesheet" href="/public/web/css/bootstrap.css"> -->
    <link rel="stylesheet" href="/public/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/web/css/fontAwesome.css">
    <link rel="stylesheet" href="/public/web/css/hero-slider.css">
    <link rel="stylesheet" href="/public/web/css/owl-carousel.css">
    <link rel="stylesheet" href="/public/web/css/templatemo-style.css">
    <link rel="stylesheet" href="/public/web/css/style.css">
    <link rel="stylesheet" href="/public/web/css/custom.css">
    <link rel="stylesheet" href="/public/web/css/login.css">

    <!-- <link rel="stylesheet" href="/public/web/css/styles.css"> -->
</head>

<body>
    <div class="header">
        <div class="header-panel">
            <div class="navbars">

                <div class="navbars-center">
                    <li data-toggle="modal" data-target="#exampleModel"><a href="#">Login</a></li>
                    <li data-toggle="modal" data-target="#exampleModalCenter"><a href="#">Register</a></li>
                    <li class="menu-btn-toogle">
                        <a id="menu-toggler" href="">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="search-item">
                        <form id="form-submit" class="mt-10 " action="" method="get">
                            <div class="col-md-5 col-sm-5 col-lg-6 col-xs-12 first-item ">
                                <div class="search">
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Поиск... " required="">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </form>
                    </li>
                </div>

            </div>
        </div>

        <div class="header-menu">
            <header class="clearfix">
                <div id="header-menu" class="header header-toggle" style="">
                    <label for="open">
                        <span class="hidden-desktop"></span>
                    </label>
                    <input type="checkbox" name="" id="open">
                    <nav class="nav-menu">
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="/books.html">Книги</a></li>
                            <li><a href="/simulation.html">Симулятор</a></li>
                            <li><a href="/skientists.html">Ученые</a></li>
                            <li><a href="/news.html">Статьи</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-12 mt-20">
                    <h1 class="text-center">LAB-PHYSIC</h1>
                    <p class="text-center">Virtual Laboratory for Physics</p>
                </div>
            </header>
        </div>

    </div>

    <div class="header-block">
        <div class="container">
            <div class="scientic">
                <div style="position: relative;" class="col-md-3 cols sci-item">
                    <div class="d-flex justify-content-center ">
                        <div class="skien-in">
                            <img src="/public/web/img/einstein.jpg" alt="">
                            <p class="text-center">Альберт Эйнштейн</p>
                        </div>
                    </div>
                    <div class="click-skientist">
                        <p class="mytext"><strong><em>Lorem</em>  ipsum <ins>dolor</ins> sit <i>amet</i>, consectetur <small>adipisicing</small> elit. Maxime optio labore
                            animi ea natus quia voluptatibus sed unde.
                            Officiis, eligendi ullam magni explicabo architecto eum iusto aspernatur quisquam asperiores
                            possimus!</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="main">
            <!-- -->
            <section class="popular-places" id="popular">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <span style="font-size: 32px;">Книги</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-carousel-main owl-theme">
                        <div class="item popular-item">
                            <div class="thumb">
                                <img src="/public/web/img/ff.jpg" alt="">
                                <div class="text-content">
                                    <h4>Названия книги</h4>
                                    <span>76 страницы</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-bars"></i></a>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </section>
        </div>
        <hr>
        <div class="main">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-headings">
                            <span style="font-size: 32px;">Научные статьи</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2>Научная статья 1</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo,
                            tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem
                            malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>


        <div class="main">
            <!-- pokaji ge simulyatori вот тут же-->
            <section class="popular-places" id="popular">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <span style="font-size: 32px;">Симуляторы</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel owl-carousel-simulations owl-theme">
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/springs/single-spring/single-spring-en.html">
                                    <img src="/public/web/simulation/home-page/pic_spring1.png" alt="">Single Spring</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/springs/double-spring/double-spring-en.html">
                                    <!-- width="104" height="65" -->
                                    <img src="/public/web/simulation/home-page/pic_dbl_spring.png" alt=""><br>Double Spring
                                </a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/pendulum-en.html">
                                    <!-- width="62" height="55" -->
                                    <img src="/public/web/simulation/home-page/pic_pendulum1.png" alt=""><br>Pendulum
                                </a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/direction-field/direction-field-en.html">
                                    <img src="/public/web/simulation/home-page/pic_Pendulum-direction-field.png" alt=""><br>Pendulum
                                    with<br>Direction Field</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/chaotic-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_pendulum2.png" alt=""><br>Chaotic Pendulum</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/compare-pendulum/compare-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_Pendulum-compare.png" alt=""><br>Two
                                    Chaotic<br>Pendulums</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/double-pendulum/double-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_dbl_pendulum.gif" alt=""><br>Double Pendulum</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/moveable-double-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_Moveable-double-pendulum.png"
                                        alt=""><br>Moveable<br>Double Pendulum</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/inverted-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_Inverted-pendulum.png"
                                        alt=""><br>Inverted<br>Vibrating Pendulum</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/pendulum/inverted-double-pendulum-en.html">
                                    <img src="/public/web/simulation/home-page/pic_Inverted-double-pendulum.png"
                                        alt=""><br>Inverted<br>Double Pendulum</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/springs/2d-spring-en.html">
                                    <img src="/public/web/simulation/home-page/pic_spring_2d.png" alt=""><br>2D Spring</a>
                            </div>
                        </div>
                        <div class="item popular-item simulation">
                            <div class="thumb">
                                <a href="/public/web/simulation/springs/double-2d-spring-en.html">
                                    <img src="/public/web/simulation/home-page/pic_dbl_spring_2d.png" alt=""><br>Double<br>2D
                                    Spring</a>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </section>
    </div>
    <footer>

    </footer>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="login">
                <main role="main" class="pb-3">
                    <div class="content">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">&times;</button>
                        </div>

                        <form class="login-form" action="" method="post" novalidate="novalidate">
                            <h3 class="form-title font-green">Регистрация</h3>
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                            </div>

                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9" for="Input_Email">Email</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text"
                                    autocomplete="off" placeholder="Email" data-val="true"
                                    data-val-email="Формат Email - а должет быть правильным"
                                    data-val-required="Email не должен быть пустым!" id="Input_Email" name="Input.Email"
                                    value="">
                                <span class="field-validation-valid" data-valmsg-for="Input.Email"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9" for="Input_Phone">Телефон</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="text"
                                    autocomplete="off" placeholder="Phone" data-val="true"
                                    data-val-regex="Номер телефона должен иметь формат +992-xxx-xx-xx-хх"
                                    data-val-regex-pattern="^\+[1-9]\d{3}\d{3}\d{5}$"
                                    data-val-required="Телефон не должен быть пустым!" id="Input_Phone"
                                    name="Input.Phone" value="">
                                <span class="field-validation-valid" data-valmsg-for="Input.Phone"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label visible-ie8 visible-ie9" for="Input_Password">Пароль</label>
                                <input class="form-control form-control-solid placeholder-no-fix" type="password"
                                    autocomplete="off" placeholder="Пароль" data-val="true"
                                    data-val-length="Пароль Пароль должен содержать не менее 6 и не более 100 символов."
                                    data-val-length-max="100" data-val-length-min="6"
                                    data-val-required="Пароль не должен быть пустым!" id="Input_Password"
                                    maxlength="100" name="Input.Password">
                                <span class="field-validation-valid" data-valmsg-for="Input.Password"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label label="" class="control-label visible-ie8 visible-ie9"
                                    for="Input_ConfirmPassword">Повторите пароль</label>
                                <input class="form-control form-control-solid placeholder-no-fix"
                                    placeholder="Повторите пароль" type="password" data-val="true"
                                    data-val-equalto="Пароли не совподают!" data-val-equalto-other="*.Password"
                                    id="Input_ConfirmPassword" name="Input.ConfirmPassword">
                                <span class="field-validation-valid" data-valmsg-for="Input.ConfirmPassword"
                                    data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-info">Зарегистириоваться</button>
                                <label class="rememberme check mt-checkbox mt-checkbox-outline">
                                    <input type="checkbox" name="remember" value="1">Запонить
                                    <span></span>
                                </label>
                            </div>
                            <div class="create-account">
                                <p>
                                    <a href="login.html" id="register-btn" class="uppercase">Войти</a>
                                </p>
                            </div>
                            <input name="__RequestVerificationToken" type="hidden"
                                value="CfDJ8AT7BKgIfXxCkCXrfJ17xtE1Uf71eoTUF80E8XPMwI3t0kodzQMZBtP2N2JZe3UV7dtSnExVHZBbCZzv5UiXZt5tpbBY_L_Ado_CQNPxfTqhuh9ejasAyFSaiCdM4GlmlFHfryBwHb801sMkmPqjSEc">
                        </form>

                    </div>
                </main>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="login">
                    <main role="main" class=" pb-3">
                        <div class="content">
                            <form class="login-form" action="" method="post" novalidate="novalidate">
                                <h3 class="form-title font-green">Вход</h3>
                                <div class="alert alert-danger display-hide">
                                    <button class="close" data-close="alert"></button>
                                </div>

                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9" for="Input_Email">Email</label>
                                    <input class="form-control form-control-solid placeholder-no-fix" type="email"
                                        autocomplete="off" placeholder="Email" data-val="true"
                                        data-val-email="Формат Email - а должет быть правильным"
                                        data-val-required="Email не должен быть пустым!" id="Input_Email"
                                        name="Input.Email" value="">
                                    <span class="field-validation-valid" data-valmsg-for="Input.Email"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9"
                                        for="Input_Password">Пароль</label>
                                    <input class="form-control form-control-solid placeholder-no-fix" type="password"
                                        autocomplete="off" placeholder="Пароль" data-val="true"
                                        data-val-length="Пароль Пароль должен содержать не менее 6 и не более 100 символов."
                                        data-val-length-max="100" data-val-length-min="6"
                                        data-val-required="Пароль не должен быть пустым!" id="Input_Password"
                                        maxlength="100" name="Input.Password">
                                    <span class="field-validation-valid" data-valmsg-for="Input.Password"
                                        data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn green uppercase">Войти</button>
                                    <label class="rememberme check mt-checkbox mt-checkbox-outline"
                                        for="Input_RememberMe">
                                        <input type="checkbox" name="remember" value="1" data-val="true"
                                            data-val-required="The Запомнить? field is required." id="Input_RememberMe">
                                        Запомнить?
                                        <span></span>
                                    </label>
                                    <a href="forgotpassword" id="forget-password" class="forget-password">Забыли
                                        пароль?</a>
                                </div>
                                <div class="create-account">
                                    <p>
                                        <a href="register.html" id="register-btn" class="uppercase">Создать аккаунт</a>
                                    </p>
                                </div>
                                <input name="__RequestVerificationToken" type="hidden"
                                    value="CfDJ8AT7BKgIfXxCkCXrfJ17xtEQaBM1Xv4eDJ9_oN2FeBaZb0UNCjvDFXuREBlpWGkDxzHXUJMK5MDrZFDGeDifexAjPOMZcb_AKYbVc-XI_yKZx8X_ix2qIVAAEBqNKMI0j4ZZtTUQqwn0_J7b0JMICqM"><input
                                    name="Input.RememberMe" type="hidden" value="false">
                            </form>


                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <script>window.jQuery || document.write('<script src="/public/web/js/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="/public/web/js/bootstrap.min.js"></script>
    <script src="/public/web/js/plugins.js"></script>
    <script src="/public/web/js/main.js"></script>
</body>

</html>