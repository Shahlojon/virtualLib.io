@extends('frontend.layouts.app')
@section('content')

    <div class="header-block">
        <div class="container">
            <div class="scientic">
            @foreach($scientists as $item)
                <div style="position: relative;" class="col-md-3 cols sci-item">
                    <div class="d-flex justify-content-center ">
                        <div class="skien-in">
                            <img src="/public/uploads/{{ $item->image }}" alt="">
                            <p class="text-center">{{$item->name}}</p>
                        </div>
                    </div>
                    <div class="click-skientist">
                        <p class="mytext"><strong>{{$item->shortDescription}}</strong></p>
                    </div>
                </div>
            @endforeach
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
                    @foreach($books as $item)                   
                        <div class="item popular-item">
                            <div class="thumb">
                                <img src="/public/uploads/{{$item->image}}" alt="">
                                <div class="text-content">
                                    <h4>{{$item->title}}</h4>
                                    <span>{{$item->pageCount}}</span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-bars"></i></a>
                                </div>
                            </div>
                        </div>  
                    @endforeach                  
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
                    @foreach($articles as $item)
                        <div class="col-md-4">
                            <h2>{{$item->title}}</h2>
                            <p id="summernote">{!!html_entity_decode($item->description)!!}</p>
                            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                        </div>
                    @endforeach
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
    
@endsection    

    <script>window.jQuery || document.write('<script src="/public/web/js/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="/public/web/js/bootstrap.min.js"></script>
    <script src="/public/web/js/plugins.js"></script>
    <script src="/public/web/js/main.js"></script>
</body>

</html>
</body>
</html>