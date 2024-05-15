@extends('layout.app')
@section('title', 'About Me')
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
@section('contentTitle', 'About Me')
@section('contentInfo', 'About Me')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="content mt-4">
                <p style="font-size: 2rem"><b>DTR GENERATOR SYSTEM</b></p>
                <p>It is a DTR generator system that aims to automates the generation of DTR <i>Expect some errors along the way...</i></p></>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $('#aboutMe').addClass('active');
    </script>
@endsection

@section('footer')
@include('components.footer')
@endsection
