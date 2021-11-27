@extends('layout.master')

@section('content')
<h1>Edit Page</h1>

<div class="x_content">
    <br />
<form   action="{{ route('branch.update', $branchs->id)}}" method="post" id="demo-form2" class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Branch Sort Name 
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{$branchs->branchsort}}" id="first-name" required="required" class="form-control" name="bsort">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Branch Full Name 
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{$branchs->branchfull}}" id="last-name" required="required" name="bfull" class="form-control">
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