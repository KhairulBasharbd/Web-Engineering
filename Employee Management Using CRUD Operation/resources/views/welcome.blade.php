@extends('layout')

@section('page-content')
    <br>
    <br>
    <br>
    <h1 class="text-center text-primary">Welcome to Employee information System</h1>

    <a class = 'btn btn-primary' href = "{{route('create')}}">Add new employee</a>
    <br><br>
    <table border = '3', class = 'table table-striped'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Job_tile</th>
                <th>Joining_date</th>
                <th>Salary</th>
                <th>E-mail</th>
                <th>Mobile_no</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody> 
            @foreach ($employees as $item )
                <tr>
                    <td>{{$item->id}} </td>
                    <td>{{$item->name}} </td>
                    <td>{{$item->job_title}} </td>
                    <td>{{$item->joining_date}} </td>
                    <td>{{$item->salary}} </td>
                    <td>{{$item->email}} </td>
                    <td>{{$item->mobile_no}} </td>
                    <td>{{$item->address}} </td>
                    <td>
                        <form action = "{{route('destroy',$item->id)}}" method="post" >
                            @csrf
                            <input class = 'btn btn-danger' type='submit',value='Delete'>
                        </form>
                    </td>


                </tr>

                
            @endforeach 
            
        </tbody>
    </table>
<div class = d-flex justify-center-center>    {{ $employees->links() }}
</div>








@endsection
