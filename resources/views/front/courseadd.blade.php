@extends('layout.master')

@section('content')
<h1>Creat New Course</h1>

<div class="x_content">
    <br />
<form   action="{{url('coursestore')}}" method="post" id="demo-form2" class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Branch Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="branch_id" >
                @foreach ($branchs as $branch)
                    <option value="{{$branch->id}}">{{$branch->branchfull}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Course Full Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" required="required" name="coursename" class="form-control">
        </div>
    </div>   

    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit"  name="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</div>
    
@endsection
    
