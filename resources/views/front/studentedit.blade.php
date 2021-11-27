@extends('layout.master')

@section('content')
<h1>Edit Page</h1>

<div class="x_content">
    <br />
<form   action="{{ route('student.update', $students->id)}}" method="post" id="demo-form2" class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >{{ trans('main_trans.First Name') }} 
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{$students->firstname}}" id="first-name" required="required" class="form-control" name="fname">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">{{ trans('main_trans.Last Name') }} 
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" value="{{$students->lastname}}" id="last-name" required="required" name="lname" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label for="class" class="col-form-label col-md-3 col-sm-3 label-align">Degree</label>
        <div class="col-md-6 col-sm-6 ">
            <input id="class" value="{{$students->degree}}" class="form-control" type="text" name="degree">
        </div>
    </div>
    <div class="item form-group">
        <label for="phone num" class="col-form-label col-md-3 col-sm-3 label-align">Phone Num</label>
        <div class="col-md-6 col-sm-6 ">
            <input id="phone um" value="{{$students->phone}}" class="form-control" type="text" name="phone">
        </div>
    </div>
    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
        <div class="col-md-6 col-sm-6 ">
            <input id="email" value="{{$students->email}}" class="form-control" type="email" name="email">
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