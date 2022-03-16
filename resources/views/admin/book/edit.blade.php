@extends('admin.layouts.app')

@section('title', 'Книги')

@section('styles')
@endsection

@section('content')

<!-- Content Body Start -->
<div class="content-body">

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Книги редактирования </h3>

            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
    <!--Form controls Start-->
    <div class="col-12 mb-30">
                    <div class="box">
                        
                        <div class="box-body">
                            <div class="row mbn-20">

                                <!--Form Field-->
                                <div class="col-12 mb-20">

                                    <div class="row mbn-15">
                                        <form action="/admin/book/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="col-12 mb-15">
                                        <label class="adomx-checkbox">
                                        <input name="isActive" id="isActive" type="checkbox" {{ ($data->isActive)?'checked':'' }}> <i class="icon"></i>Активность</label>
                                        </div> 
                                        
                                        <div class="col-12 mb-15">
                                        <input required name="title" value="{!! $data->title !!}" type="text" class="form-control" placeholder="Названия книги">
                                        </div>

                                        <div class="col-12 mb-15">
                                            <h5 class="sub-title">Авторы</h5>
                                            <select name="authors[]" class="form-control select2" multiple>
                                            @foreach($authors as $item)
                                                                                        
                                            <option {{ (App\Helpers\Utils::ContainsScientistId($data->bookAuthors, $item->id))? "selected":'' }}   value="{{$item->id}}">{!! $item->name !!}</option> 
                                                
                                            @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class=" col-12 mb-20">
                                            <h6 class="mb-15">Фото</h6>
                                            <input name="image" class="dropify" type="file" data-default-file="/public/uploads/{{$data->image}}">
                                        </div>      
                                        

                                        <div class="col-12 mb-15">                                       
                                            <h5 class="sub-title">Категория </h5>
                                            <select name="categoryId" class="form-control select2">
                                                <option>Выберите категорию</option>
                                                <option value="0">Все</option>
                                                @foreach($categories as $item)
                                                    <option {{ ($item->id==$data->categoryId)?'selected':'' }} value="{{$item->id}}"> {!! $item->Title !!} </option>
                                                @endforeach
                                            </select>        
                                        </div> 

                                        <div class="col-12 mb-15"> 
                                        <input  required name="isbn" value="{{  $data->isbn  }}"  type="text" class="form-control" placeholder="ISBN">
                                        </div>
                                                                    
                                        <div class="col-12 mb-15">
                                        <input  name="yearOfIssue" value="{{ date('Y-m-d', strtotime($data->yearOfIssue)) }}"  type="date" class="form-control" placeholder="Год выпуска">
                                        </div>                     
                                        <div class="col-12 mb-15">
                                        <input  name="pageCount" value="{!! $data->pageCount !!}" type="number" class="form-control" placeholder="Количества страниц">
                                        </div> 
                                        <div class="col-12 mb-15 d-flex">
                                            <div class="col-6">
                                                <input  name="file" value="{!! $data->file !!}" type="file" class="form-control" placeholder="Файл">
                                            </div>
                                            <div class="col-6">
                                            <a href="/public/uploads/{{$data->file}}" target="_blank" rel="noopener noreferrer">{!!$data->file!!}</a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 mb-15">
                                       <textarea name="description" class="form-control summernote" placeholder="Описания">
                                        {!!html_entity_decode($data->description)!!}
                                        </textarea>
                                        </div> 
                                        
                                        <div class="col-12 mb-15">
                                         <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Сохранить</button>
                                        </div>

                                        </form>
                                    </div>

                                </div>

                            </div> 
                        </div>
                       
                    </div>
                </div>
                <!--Form controls End-->

    </div>
</div>
@endsection

@section('scripts')

<script src="/public/admin/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/public/admin/assets/js/plugins/summernote/summernote.active.js"></script>

    <script src="/public/admin/assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="/public/admin/assets/js/plugins/dropify/dropify.active.js"></script>

    <script>
    $(document).on('change', '#isActive', function(){  
        $('#isActive').prop('checked', function (i, value) {
            $(this).val(value);
        });
    });
    </script>
    
    <script src="/public/admin/assets/js/plugins/select2/select2.full.min.js"></script>
    <script src="/public/admin/assets/js/plugins/select2/select2.active.js"></script>
@endsection