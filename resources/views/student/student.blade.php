@extends('backend.layouts.app')


{{-- student --}}

@section('title','All Student')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student</div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">SI</th>
                            <th scope="col">Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Address</th>

                          </tr>
                        </thead>
                        <tbody>
                            @php($i=1)
                            @foreach ($students as $student )



                          <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$student->student_name}}</td>
                            <td>{{$student->class}}</td>
                            <td>{{$student->address}}</td>


                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    {{-- form end --}}


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>

</div>
@endsection


