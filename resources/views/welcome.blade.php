@extends('layout.app')
@section('title', 'neil')
@section('teacherName', $teacher->fname . ' '.$teacher->mname.' '. $teacher->lname)

@section('shaker')
@include('components.logo')
@endsection
@section('header')
@include('components.header')
@endsection
@section('menu')
@include('components.menu')
@endsection
@section('contentTitle', 'Import')
@section('contentInfo', 'Import')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1>Hello </h1>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $('#importC').addClass('active');
    </script>
@endsection

@section('footer')
@include('components.footer')
@endsection
