@extends('layout.master')
@section('content')
<h1>Cources Details</h1>

<table class="table table-bordered" >
    <thead class="thead-light">
        <th>Branch Name</th>
        <th>Course Name </th>
        {{-- <th>Edit</th>
        <th>Delete</th> --}}
    </thead>
    <tbody>

        @foreach ($courses as $course)
        <tr>
        <td>{{$course->branchfull}}</td>
        <td>{{$course->coursename}}</td>
        {{-- <td><a href="{{route('branch.edit', ['id' => $branch->id])}}">Edit</a></td> --}}
        </tr>
        @endforeach
    
    </tbody>
</table>
@endsection