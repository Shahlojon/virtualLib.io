@extends('frontend.layouts.app')
@section('content')
<div id="main_content">
        <section class="our-services" id="services">
            <div class="container">
                <!-- <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Our Services</span>
                        <h2>Best Template Site</h2>
                    </div>
                </div> 
            </div>  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12 col-custom" style="padding-bottom:25px ;">
                                    <div class="authorimage">
                                        <img src="/public/uploads/{{$scientist->image}}">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="left-content">
                                        <h2>{{$scientist->name}}</h2>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Место рождения : </div>
                                            <div class="col-8">{{$scientist->birthplace}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Год рождения : </div>
                                            <div class="col-8">{{$scientist->birthday}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Страна : </div>
                                            <div class="col-8">{{$scientist->country}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Научная сфера : </div>
                                            <div class="col-8">{{$scientist->scientificSphere}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Учёная степень : </div>
                                            <div class="col-8">{{$scientist->academicDegree}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Учёное звание : </div>
                                            <div class="col-8">{{$scientist->academicTitle}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Место работы : </div>
                                            <div class="col-8">{{$scientist->placeOfWork}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Награды и премии : </div>
                                            <div class="col-8">{{$scientist->awardsAndPrizes}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Дата смерти : </div>
                                            <div class="col-8">{{$scientist->dateOfDeath}}</div>
                                        </div>
                                        <div class="col-12 d-flex mt-10">
                                            <div class="col-4 fw-700 mr-10">Место смерти : </div>
                                            <div class="col-8">{{$scientist->placeOfDeath}}</div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xs-12">
                                    <p class="mt-30">
                                        {!!html_entity_decode($scientist->description)!!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-places" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span style="font-size: 27px;">Книги</span>
                        </div>
                    </div>
                </div>
                <div class="row  ">
                @foreach($scientist->scientistBooks as $item)
                    <div class="item popular-item mb-20 col-sm-4 col-md-3 col-xs-6 col-book-scintest">
                        <div class="thumb ">
                            <img src="/public/uploads/{{$item->book->image}}" alt="">
                            <div class="text-content">
                                <h4>{!! $item->book->title !!}</h4>
                                <span>{{ $item->book->pageCount }} страницы</span>
                            </div>
                            <div class="plus-button">
                                <a href="#"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach  
               
                </div>
                

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span style="font-size: 27px;">Научные работы</span>
                        </div>
                    </div>
                </div>
                <div class="row  ">
                    @foreach($scientist->scientistArticles as $item)
                        <div class="item popular-item mb-20 col-sm-4 col-md-3 col-xs-6 col-book-scintest">
                            <div class="thumb ">
                                <div class="text-content" style="color: #333">
                                    <h4>{!! $item->article->title !!}</h4>
                                    <span>{!! html_entity_decode($item->article->shortDescription) !!} </span>
                                </div>
                                <div class="plus-button">
                                    <a href="#"><i class="fa fa-bars"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="box-body d-flex justify-content-center align-items-center">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
@endsection