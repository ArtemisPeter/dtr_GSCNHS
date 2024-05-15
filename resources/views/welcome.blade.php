@extends('layout.app')
@section('title', 'Import')
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
                <button class="btn btn-primary mb-3">Import CSV</button>
                <table class="table table-striped" id='teacherTable'>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>DateTime</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtrs as $dtr)
                            <tr>
                                <td>{{$dtr->teacherName->fname.' '.$dtr->teacherName->lname}}</td>
                                <td>{{$dtr->recordedTime}}</td>
                                <td>{{$dtr->state->state}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $('#importC').addClass('active');
    </script>
    <script src="resources/js/import.js"></script>
@endsection

@section('footer')
@include('components.footer')
@endsection
