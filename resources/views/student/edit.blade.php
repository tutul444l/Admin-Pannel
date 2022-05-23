@extends('backend.layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">



            {{-- second --}}

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit student
                    </div>

                    <div class="card-body">




                          <div class="col-md-4">
                            <form action="{{url('store/student/'.$students->id)}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" name="student_name" class="form-control" value="{{$students->student_name}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Class</label>
                                    <input type="text" name="class" class="form-control" value="{{$students->class}}" aria-describedby="emailHelp">

                                  </div>

                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{$students->address}}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                  </div>

                                <button type="submit" class="btn btn-primary">Add</button>
                              </form>

                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
