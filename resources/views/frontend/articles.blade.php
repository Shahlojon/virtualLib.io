@extends('frontend.layouts.app')
@section('content')
<div id="main_content">
            <!-- -->
            <section class="featured-places mt-0 blog container-fluid" id="blog">
                <!-- <div class="container"> -->
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12">
                          <div class="section-heading">
                              <span class="fw-700 fz-30">Последние статьи</span>
                          </div>
                      </div>
                  </div>
                    <div class="col-md-3 mb-20 col-sm-6 col-xs-12">
                      <div class="featured-item">                     
                        <div class="down-content">
                          <h4>Статьи</h4>
                          <!-- <span>Category Two</span> -->
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eaque, mollitia totam cumque quos ratione voluptatem.....
                          </p>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="text-button">
                                <a href="#">Подробно</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-heading">
                                <span class="fw-700 fz-30">Все статьи</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-12">
                       @foreach($articles as $article)
                            <div class="col-md-3 mb-20 col-sm-6 col-xs-12">
                              <div class="featured-item">
                                <!-- <div class="thumb scientic-img">
                                  <img src="img/ff.jpg" alt="" />
                                </div> -->
                                <div class="down-content">
                                  <h4>{{$article->title}}</h4>
                                  <!-- <span>Category Two</span> -->
                                  <p>
                                    {!!html_entity_decode($article->shortDescription)!!}
                                  </p>
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="text-button">
                                        <a href="#">Подробно</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>  
                            @endforeach                        
                       </div>
                    </div>
                    <div class="box-body d-flex justify-content-center align-items-center">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                <!-- </div> -->
            </section>
        </div>
@endsection