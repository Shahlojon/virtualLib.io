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
                                <div class="col-md-8 ">
                                    <div class="left-content ">
                                        <h2>{{$article->title}}</h2>
                                        <div class="col-12 d-flex">
                                            <div class="col-4 fw-700 mr-10"> ISBN: </div>
                                            <div class="">
                                                <strong>{{$book->isbn}}</strong>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-4 fw-700 mr-10"> Авторы: </div>
                                            <div class="">
                                            @foreach($book->bookAuthors as $item)
                                                <a href="/scientist/{{$item->authorBook->id}}"><strong>{{$item->authorBook->name}}</strong></a>
                                            @endforeach
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-4 fw-700 mr-10">Год публикации   : </div>
                                            <div class="col-8">{{$book->publishedAt}}  год</div>
                                        </div>
                                        <!-- <div class="col-12 d-flex">
                                            <div class="col-4 fw-700 mr-10">Страницы : </div>
                                            <div class="col-8">{{$book->pageCount}} стр</div>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <div class="col-4 fw-700 mr-10">Категория :</div>
                                            <div class="col-8"> <a href="#"><strong>  {{$book->categoryId}}</strong></a></div>
                                        </div> -->
                                        
    
                                    </div>
    
                                    <div class="left-content d-flex mt-50">
                                        <div class="blue-button mr-20">
                                            <a href="#">Скачать</a>
                                        </div>
                                         <div class="blue-button">
                                            <a href="#">Читать</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    
        <section class="popular-places pt-0 mt-30" id="popular">
            <div class="col-12 description-book" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <span style="font-size: 27px;">Описания</span>
                        </div>
                    </div> 
                </div> 
                    <p class="mt-10">{!!html_entity_decode($article->description)!!}</p>
                
               
            </div>
        </section>
    </div>

@endsection