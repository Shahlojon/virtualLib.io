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
                <h3 class="title">Книги</h3>

            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
        <div class="col-12 mb-30">
            <a href="/admin/book/create" class="button button-my float-right"><span><i class="ti-plus"></i>Добавить</span></a>
        </div>

        <!--Default Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered data-table data-table-default">
                        <thead>
                            <tr>
                                <th>Картинка</th>
                                <th>Заголовок</th>
                                <th>Активность</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                                @if($item->categoryId!=0)
                                    <tr>
                                        <th width="15%"  style="vertical-align: middle">
                                            @if($item->image)
                                                <div class="image-cat">
                                                    <img src="/public/uploads/{{ $item->image }}" alt="">
                                                </div>
                                            @else
                                                Нет фото
                                            @endif
                                        </th>
                                        
                                        <td><strong>{!! mb_substr($item->title, 0, 250) !!}</strong></td>
                                        <td width="70">
                                            @if($item->isActive)
                                            <span class="badge badge-success">да</span>
                                            @else
                                            <span class="badge badge-danger">нет</span>
                                            @endif
                                        </td>
                                        <td width="170" class="text-center act"  style="vertical-align: middle">
                                            <a href="/admin/book/edit/{{$item->id}}">
                                            <span  class="ti-pencil edit-item mr-10"></span>
                                            </a>
                                            <a href="/admin/book/destroy/{{$item->id}}">
                                            <span   class="ti-trash delete-item"></span>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                      
                        

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="/public/admin/assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="/public/admin/assets/js/plugins/datatables/datatables.active.js"></script>
@endsection