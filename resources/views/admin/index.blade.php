@extends('admin.layouts.app')


@section('title','Панел управления')

@section('styles')

@endsection

@section('content')

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>Добро пожаловать {{ Auth::user()->name }} </h3>
                    </div>
                </div><!-- Page Heading End -->


            </div><!-- Page Headings End -->
@endsection

@section('scripts')

@endsection