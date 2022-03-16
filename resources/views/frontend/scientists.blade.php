@extends('frontend.layouts.app')
@section('content')
<div id="main_content">
<section class="featured-places mt-0 blog container-fluid" id="blog">
                <!-- <div class="container"> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <span class="fw-700 fz-30">Ученые</span>
                                <!-- <h2>Praesent nec dui sed urna</h2> -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container col-md-12">
                            @foreach($scientists as $item)
                            <div class="col-md-3 mb-20 col-sm-6 col-xs-12">
                                <div class="featured-item">
                                    <div class="thumb scientic-img">
                                        <img src="/public/uploads/{{$item->image}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>{{$item->name}}</h4>
                                        <!-- <span>Category Two</span>-->
                                        <p>{{$item->shortDescription}}</p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="text-button">
                                                    <a href="/scientist/{{$item->id}}">Подробно</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    {{ $scientists->render("pagination::default") }}
                    
                <!-- </div> -->
            </section>
</div>
@endsection