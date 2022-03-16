@extends('admin.layouts.app')

@section('title', 'Учёные')

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
                <h3 class="title">Учёные редактирования</h3>

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
                                        <form action="/admin/scientist/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="col-12 mb-15">
                                        <label class="adomx-checkbox">
                                        <input name="isActive" id="isActive" type="checkbox" {{($data->isActive)?'checked':'' }}> <i class="icon"></i>Активность</label>
                                        </div> 
                                        
                                        <div class="col-12 mb-15">
                                        <input required name="name" value="{!! $data->name !!}" type="text" class="form-control" placeholder="Имя учённого">
                                        </div>
                                        
                                        <div class=" col-12 mb-20">
                                            <h6 class="mb-15">Фото</h6>
                                            <input name="image" class="dropify" type="file" data-default-file="/public/uploads/{{$data->image}}">
                                        </div>      
                                        <div class="col-12 mb-15">
                                        <input required name="birthplace" value="{!! $data->birthplace !!}" type="text" class="form-control" placeholder="Место рождения">
                                        </div> 

                                        <div class="col-12 mb-15"> 
                                        <input  name="birthday" value="{{  date('Y-m-d', strtotime($data->birthday))  }}"  type="date" class="form-control" placeholder="Год рождения">
                                        </div>
                                                                    
                                        <div class="col-12 mb-15">
                                        <input  name="country" value="{!! $data->country !!}"  type="text" class="form-control" placeholder="Страна">
                                        </div>                     
                                        <div class="col-12 mb-15">
                                        <input  name="scientificSphere" value="{!! $data->scientificSphere !!}" type="text" class="form-control" placeholder="Научная сфера">
                                        </div> 
                                        <div class="col-12 mb-15">
                                        <input  name="academicDegree" value="{!! $data->academicDegree !!}" type="text" class="form-control" placeholder="Учёная степень">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input  name="academicTitle" value="{!! $data->academicTitle !!}" type="text" class="form-control" placeholder="Учёное звание">
                                        </div>
                                        <div class="col-12 mb-15"> 
                                        <input  name="placeOfWork" value="{!! $data->placeOfWork !!}" type="text" class="form-control" placeholder="Место работы">
                                        </div>
                                          <div class="col-12 mb-15">
                                        <input  name="awardsAndPrizes" value="{!! $data->awardsAndPrizes !!}" type="text" class="form-control" placeholder="Награды и премии">
                                        </div> 
                                          <div class="col-12 mb-15">
                                        <input  name="dateOfDeath" value="{!! $data->dateOfDeath !!}" type="date" class="form-control" placeholder="Дата смерти">
                                        </div>
                                         <div class="col-12 mb-15">
                                        <input  name="placeOfDeath" value="{!! $data->placeOfDeath !!}" type="text" class="form-control" placeholder="Место смерти">
                                        </div>
                                        <div class="col-12 mb-15">
                                       <textarea name="description" class="form-control " placeholder="Короткое описания">
                                        {!!html_entity_decode($data->shortDescription)!!}
                                        </textarea>
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
@endsection