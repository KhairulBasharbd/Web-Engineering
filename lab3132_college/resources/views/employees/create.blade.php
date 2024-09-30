@extends('layout')

@section('page-content')
    <legend>Add New Employee</legend>
    <form method='post' action="{{route('addEmployee')}}">
        @csrf
        <div class="form-group">
            <label for="name" >Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="name" name="name"
                       placeholder="Name">
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            </div>
            
        </div>

        <div class="form-group">
            <label for="job_title" >Job_title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="job_title" name="job_title"
                       placeholder=Job_title">
                <div class="invalid-feedback">{{$errors->first('job_title')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="joining_date" >Joining_date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="joining_date" name="joining_date"
                       placeholder="Joining_date">
                <div class="invalid-feedback">{{$errors->first('joining_date')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="salary" >Salary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="salary" name="salary"
                       placeholder="Salary">
                <div class="invalid-feedback">{{$errors->first('salary')}}</div>    
            </div>
        </div>

        <div class="form-group">
            <label for="e-mail" >E-mail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="e-mail" name="e-mail"
                       placeholder="E-mail">
                <div class="invalid-feedback">{{$errors->first('e-mail')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" >Mobile_no</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="mobile_no" name="mobile_no"
                       placeholder="Mobile_no">
                    <div class="invalid-feedback">{{$errors->first('mobile_no')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="address" >Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="address" name="address"
                       placeholder="Address">
                <div class="invalid-feedback">{{$errors->first('address')}}</div>
            </div>
        </div>

        <div class="form-group">
            <div >
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection



