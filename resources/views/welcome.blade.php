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
                <button class="btn btn-primary mb-4" id='importBtn' data-bs-toggle= 'modal' data-bs-target='#staticBackdrop'>Import CSV</button>
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

    <!--Modal-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Import CSV</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div id="remind"></div>
            <form id="dtr_import" enctype="multipart/form-data" method="POST" action="{{route('importCsv')}}">
                @csrf
                          <div class="row d-flex justify-content-center mt-4 mb-4">
                              <div class="col-10">
                                  <input type="file" class="form-control-file form-control-lg" name ="dtr_" id ="dtr_" required accept=".csv" >

                              </div>

                              <div class="col-2">
                                  <button class="btn btn-danger" type="submit" id="import" name="import"><i class="fas fa-file-upload"></i></button>
                              </div>
                              @if (session('success'))
                                <div class="alert mt-4 alert-success" id='alert' role="alert">
                                    {{session('success')}}
                                </div>
                              @endif

                              @if(session('error'))
                                <div class="alert mt-4 alert-danger" id='alert' role="alert">
                                    {{session('error')}}
                                </div>
                              @endif

                          </div>
                      </form>
            </div>

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
