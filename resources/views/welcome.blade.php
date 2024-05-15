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
                <button class="btn btn-primary">Import CSV</button>
                <table class="table table-striped" id='teacherTable'>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>DateTime</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Neil Mark A. Luspo</td>
                            <td>Sample DateTime</td>
                            <td>C/in</td>
                        </tr>
                        <tr>
                            <td>Another Teacher</td>
                            <td>Sample DateTime</td>
                            <td>C/in</td>
                        </tr>
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
