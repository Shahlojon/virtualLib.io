@extends('frontend.layouts.app')
@section('content')
<div id="main_content" class="book">

      <!-- -->
      <section class="featured-places mt-0 blog" id="blog">
        <div class="">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <span class="fw-700 fz-30">Книги</span>
                <!-- <h2>Praesent nec dui sed urna</h2> -->
              </div>
            </div>
          </div>

          <div class="row">
            <div class="container col-md-12">
              <div class="col-md-2">
                <h3>Все категории</h3>
                <ul class="cat-a">                
                @foreach($categories as $item)
                  <li><a href="/category/{{$item->id}}">{!! $item->Title !!}</a></li>
                @endforeach
                </ul>
              </div>
              <div class="col-md-10 book-text">
              @foreach($books as $book)
                <div class="col-md-3 mb-20 col-sm-6 col-xs-12">
                  <div class="featured-item">
                    <div class="thumb scientic-img">
                      <img src="/public/uploads/{{$book->image}}" alt="" />
                    </div>
                    <div class="down-content ">
                      <p class="down-content-p">{{$book->title}}</p>
                      <div class="author-link">
                      @foreach($book->bookAuthors as $item)
                        <a href="/scientist/{{$item->authorBook->id}}">{{$item->authorBook->name}}</a>
                      @endforeach
                        <p>Год издания: {{date('Y', strtotime($book->yearOfIssue)) }}</p>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="text-button">
                            <a href="/book/{{$book->id}}">Подробно</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
          <div class="box-body d-flex justify-content-center align-items-center">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item active">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>

@endsection