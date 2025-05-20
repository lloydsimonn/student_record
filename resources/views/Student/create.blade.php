@extends('layouts.app')
    @section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('BSIT Students') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
      <div class="content">
          <div class="card card-primary">  
            <!-- action="{{ route ('Student.store')}}"  -->
              <form method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Student No.</label>
                    <input type="number" class="form-control" id="Stud_no" name="Stud_no" placeholder="Student No." required>
                  </div>
                   @error('Stud_no') <span class="text-danger">{{$message}}</span> @enderror
                  
                  <div class="form-row row mb-2">
                    <div class="col">
                      <label for="">First name</label>
                      <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
                    </div>
                      @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                    <div class="col">
                      <label for="">Middle name</label>
                      <input type="text" class="form-control" id="mname" name="mname" placeholder="First name" required>
                    </div>
                       @error('mname') <span class="text-danger">{{$message}}</span> @enderror
                    <div class="col">
                      <label for="">last name</label>
                      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
                    </div>
                  </div>
                   @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                 

                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="Stud_add" name="Stud_add" placeholder="Address" required>
                  </div>
                   @error('Stud_add') <span class="text-danger">{{$message}}</span> @enderror

                  <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input type="date" class="form-control" id="Stud_dob" name="Stud_dob" placeholder="DOB" required>
                  </div>
                   @error('Stud_dob') <span class="text-danger">{{$message}}</span> @enderror
                  <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </div>
          </div>
        </div>
    </div>  
     <div class="content">
        <div class="container-fluid">
        
        <div class="row">

       
                <div class="card-head">
                     
                </div>

                <div class="card-body">

                    

                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Date of birth</th>
                            </tr>
                        </thead>

                        <tbody  >
                            @foreach ($Students as $items)
                            <tr>
                                <td class="">{{$items->id}}</td>
                                <td>{{$items->fname}}</td>
                                <td>{{$items->mname}}</td>
                                <td>{{$items->lname}}</td>
                                <td>{{$items->Stud_add}}</td>
                                <td>{{$items->Stud_dob}}</td>
                                <td> 
                                    <span class="badge bg-success"><a href="" class="btn btn-success mx-3  "><h5>Edit</h5></a></span>
                                </td>
                                <td>    
                                <span class="badge bg-danger"><a href="{{  route('Student.delete',$items->id)}}" class="m-3 p-lg-5"><h5>Delete</h5></a></span>
                                </td>
                                
                            </tr>
                            
                                
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @endsection