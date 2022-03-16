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
                <h3 class="title">Учёные создания</h3>

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
                                        <form action="/admin/scientist/store" method="post" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="col-12 mb-15">
                                        <label class="adomx-checkbox">
                                        <input name="isActive" id="isActive" type="checkbox" checked> <i class="icon"></i>Активность</label>
                                        </div> 
                                        
                                        <div class="col-12 mb-15">
                                        <input required name="name" type="text" class="form-control" placeholder="Имя учённого">
                                        </div>
                                        
                                        <div class=" col-12 mb-20">
                                            <h6 class="mb-15">Фото</h6>
                                            <input name="image" class="dropify" type="file" data-default-file="">
                                        </div>
                                                                             
                                        <div class="col-12 mb-15">
                                        <input  name="birthplace" type="text" class="form-control" placeholder="Место рождения">
                                        </div>                             
                                        <div class="col-12 mb-15">
                                        <input  name="birthday" type="date" class="form-control" placeholder="Год рождения">
                                        </div>
                                                                    
                                        <div class="col-12 mb-15">
                                        <input  name="country" type="text" class="form-control" placeholder="Страна">
                                        </div>                     
                                        <div class="col-12 mb-15">
                                        <input  name="scientificSphere" type="text" class="form-control" placeholder="Научная сфера">
                                        </div> 
                                        <div class="col-12 mb-15">
                                        <input  name="academicDegree" type="text" class="form-control" placeholder="Учёная степень">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input  name="academicTitle" type="text" class="form-control" placeholder="Учёное звание">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input  name="placeOfWork" type="text" class="form-control" placeholder="Место работы">
                                        </div>
                                          <div class="col-12 mb-15">
                                        <input  name="awardsAndPrizes" type="text" class="form-control" placeholder="Награды и премии">
                                        </div> 
                                          <div class="col-12 mb-15">
                                        <input  name="dateOfDeath" type="date" class="form-control" placeholder="Дата смерти">
                                        </div>
                                         <div class="col-12 mb-15">
                                        <input  name="placeOfDeath" type="text" class="form-control" placeholder="Место смерти">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <textarea name="shortDescription" class="form-control " placeholder="Короткое описания"></textarea>
                                        </div>
                                        <div class="col-12 mb-15">
                                        <textarea name="description" class="form-control summernote" placeholder="Описания"></textarea>
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