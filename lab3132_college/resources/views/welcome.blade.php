@extends('layout')

@section('page-content')
    <br>
    <br>
    <h1 class="text-center text-primary">Welcome to Employee information System</h1>

    <a class = "btn btn-primary mb-4",  href="{{route('add')}}">Add New Employee</a>
    

    <table border = '3',class="table table-striped">
        <thead>
            <tr class="table-active">
                <th>Id</th>
                <th>Name</th>
                <th>Job Title</th>
                <th>Joining Date</th>
                <th>Salary</th>
                <th>E-mail</th>
                <th>Mobile no</th>
                <th>Address</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $item)
                
           
            <tr class="table table-striped">
                <td>{{$item ->id}}</td>
                <td>{{$item ->name}}</td>
                <td>{{$item ->job_title}}</td>
                <td>{{$item ->joining_date}}</td>
                <td>{{$item ->salary}}</td> 
                <td>{{$item ->email}}</td>
                <td>{{$item ->mobile_no}}</td>
                <td>{{$item ->address}}</td>
                <td>
                    <form class="btn btn-primary w-10" method='post' action="{{route('delete',$item->id)}}">
                        @csrf

                        <input type ='submit' value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>

    <div class="d-flex justify-center-center">{{$employees->links() }}</div>


@endsection
