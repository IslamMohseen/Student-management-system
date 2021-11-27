@extends('layout.master')

@section('content')
    <h1 style="text-align: center">{{ trans('main_trans.Student Details') }}</h1>
    <table class="table table-bordered scontent" >
        <thead>
            <th>Student name</th>
		    <th>Father name</th>
            <th>Degree</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->degree}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
                <td><a href="{{route('student.edit', ['id' => $student->id])}}">Edit</a></td>
                <td><a href="{{route('student.delete', ['id' => $student->id])}}">Delete</a></td>
                </tr>
            @endforeach        
        </tbody>
    </table>

    {{ $students->links('vendor.pagination.bootstrap-4') }}

    @endsection


    
