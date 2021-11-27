@extends('layout.master')
@section('content')
<h1>Branches Details</h1>

<table class="table table-bordered" >
    <thead class="thead-light">
        <th>Branch Sort Name</th>
        <th>Branch Full Name</th>
        <th>Edit</th>
        <th>Delete</th>
    </thead>
    <tbody>

        @foreach ($branchs as $branch)
        <tr>
        <td>{{$branch->branchsort}}</td>
        <td>{{$branch->branchfull}}</td>
        <td><a href="{{route('branch.edit', ['id' => $branch->id])}}">Edit</a></td>
        <td><a href="{{route('branch.delete', ['id' => $branch->id])}}">Delete</a></td>
        </tr>
        @endforeach
    
    </tbody>
</table>
{{ $branchs->links('vendor.pagination.bootstrap-4') }}
@endsection