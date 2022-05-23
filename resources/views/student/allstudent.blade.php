@extends('backend.layouts.app')


{{-- student --}}
@section('title','add-edit')
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
                           <th scope="col">Action</th>
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

                            <td>
                                <a href="{{url('student/edit/'.$student->id)}}" class="btn btn-primary">Edit</a>
                                {{-- <a href="{{url('student/edit/'.$student->id)}}" class="btn btn-primary">Edit</a> --}}
                                <a href="{{route('student.delete',$student->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    {{-- form end --}}


                </div>
            </div>
        </div>
        {{-- sidebar --}}
        <div class="col-md-4">
            <form action="{{route('student.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" name="student_name" class="form-control" placeholder="student name" id="exampleInputEmail1" aria-describedby="emailHelp" required>

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Class</label>
                    <input type="text" name="class" class="form-control" placeholder="class" id="exampleInputEmail1" aria-describedby="emailHelp" required>
 required
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="address" id="exampleInputEmail1" aria-describedby="emailHelp"  required>

                  </div>

                <button type="submit" class="btn btn-primary">Add</button>
              </form>

    </div>
     {{-- sidebar end --}}
</div>
@endsection


