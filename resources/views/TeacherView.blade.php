@extends('layout.app')
@section('title', 'Teacher')
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
@section('contentTitle', 'Teacher')
@section('contentInfo', 'Master Data / Teacher')

@section('content')
    <div class="card border border-success">
        <div class="card-body">
            <table class="table table-hover" id="teacherTable">
                <thead>
                    <tr>
                        <th>Teacher</td>
                        <th class="text-center">Office Hour</th>
                        <th class="text-center">Action</th>
                        <th class="d-none">TeacherId</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teacherTime as $tt)
                        <tr>
                            <td>{{$tt->fname.' '.$tt->lname}}</td>
                            <td class="text-center">{{$tt->teacherOfficialTime->timeIn_Morning.' - '.$tt->teacherOfficialTime->timeOut_Morning.' | '.$tt->teacherOfficialTime->timeIn_Afternoon.' - '.$tt->teacherOfficialTime->timeOut_Afternoon}}</td>
                            <td class="text-center">
                                <button class="btn btn-primary editbtn"><i class="far fa-edit"></i></button>
                                <button class="btn btn-danger deletebtn"><i class="fas fa-trash-alt"></i></button>
                            </td>
                            <td class="d-none">{{$tt->id}}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <div class="modal fade" id="updateModal" role="dialog" aria-labelledby="updateModal" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="-1" >
        <div class="modal-dialog modal-dialog-centered"role="document">
            <input type = "hidden" name="update_id" id="update_id">
            <div class="modal-content" >
                <div class="modal-header d-flex justify-content-center bg-success">
                    <h2 id="namez"></h2>

                </div>
                <form id="updateInfo" method="POST" action="{{route('teacherUp')}}">
                    @csrf
                    @method('PUT')
                <div class="modal-body">
                    <input class="d-none" id="teacher_Id" name="teacher_Id"></input>
                <div class="alert alert-danger d-none" id='alert' role="alert">

    </div>
                  <div class="row">
                      <div class="col-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="TeacherFname" name="TeacherFname">
                      </div>
                      <div class="col-6">
                        <label for="firstName">Last Name</label>
                        <input type="text" class="form-control" id="TeacherLname" name="TeacherLname">
                      </div>

                  </div>


                  <div class="row mt-2">
                    <div class="col-12">
                      <label for ="contactNum">Office Hours</label>
                        <select class="form-select" id="officeHours" name="officeHours">
                            @foreach ($OfficialTimes as $ot)
                                <option value="{{$ot->id}}">{{$ot->timeIn_Morning.' - '.$ot->timeOut_Morning.' | '.$ot->timeIn_Afternoon.' - '.$ot->timeOut_Afternoon}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeBtn" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>


                </div>

                @if (session('success'))
                    <div class="card-footer bg-success">
                        {{session('success')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="card-footer bg-danger">
                        {{session('error')}}
                    </div>
                @endif
                </form>
            </div>
        </div>

@endsection
@section('scripts')
    <script>
        $('#master').addClass('menu-open');
        $('#teacher').addClass('active');
    </script>
    <script src="resources/js/teacher.js"></script>
@endsection

@section('footer')
@include('components.footer')
@endsection
