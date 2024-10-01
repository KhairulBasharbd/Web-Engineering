@extends('layout')

@section('page-content')
    <legend>Add Employee</legend>
    <form method="post" action="{{route('store')}}">
        @csrf
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="name" name="name"
                       placeholder="name">
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            </div>
        </div>

        <div class="form-group">
            <label for="job_title" class="col-sm-2 control-label">job_title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="job_title" name="job_title"
                       placeholder="job_title">
                       <div class="invalid-feedback">{{$errors->first('job_title')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="joining_date" class="col-sm-2 control-label">joining_date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="joining_date" name="joining_date"
                       placeholder="joining_date">
                       <div class="invalid-feedback">{{$errors->first('joining_date')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="salary" class="col-sm-2 control-label">salary</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="salary" name="salary"
                       placeholder="salary">
                       <div class="invalid-feedback">{{$errors->first('salary')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="email" name="email"
                       placeholder="email">
                       <div class="invalid-feedback">{{$errors->first('email')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">mobile_no</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="mobile_no" name="mobile_no"
                       placeholder="mobile_no">
                       <div class="invalid-feedback">{{$errors->first('mobile_no')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control is-invalid " value="" id="address" name="address"
                       placeholder="address">
                       <div class="invalid-feedback">{{$errors->first('address')}}</div>
                    </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection



