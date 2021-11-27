@extends('layout.master')

@section('content')
<h1>Registration Page</h1>


<div class="x_content">
    <br />
<form   action="{{url('studentstore')}}" method="post" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >First Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="first-name" required="required" class="form-control" name="fname">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" id="last-name" required="required" name="lname" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label for="class" class="col-form-label col-md-3 col-sm-3 label-align">Degree</label>
        <div class="col-md-6 col-sm-6 ">
            <input id="class" class="form-control" type="text" name="degree">
        </div>
    </div>
    <div class="item form-group">
        <label for="phone num" class="col-form-label col-md-3 col-sm-3 label-align">Phone Num<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="phone um" class="form-control" type="text" name="phone">
        </div>
    </div>
    <div class="item form-group">
        <label for="email" class="col-form-label col-md-3 col-sm-3 label-align">Email<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="email" class="form-control" type="email" name="email">
        </div>
    </div>
    
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Branch : <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control branchs" name="branch_id" >
                <option>-- Select Branch --</option>
                @foreach ($branchs as $branch)
                    <option value="{{$branch->id}}">{{$branch->branchfull}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Course: : <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control courses" name="course_id" >
                <option>-- Select Course --</option>
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name" >Image: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" name="image" id="image" class="data-picker form-control col-md-7 col-xs-12">
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
@push('footer-scripts')

    <script type="text/javascript">
    $(document).on('change','.branchs',function() {
        branch_id = $(this).val();
    $.ajax({
        url: 'student/courses',
        dataType: "json",
        data: {"id":branch_id, "_token": "{{ csrf_token() }}"},
        method: "post",
        success: function(data){
            var courses = '<option>-- Select Course --</option>';
            var arr = data.courses.length;
            var aa = data.courses;
            for(var i=0;i<arr;i++){
                courses += '<option value="'+aa[i].id+'">'+aa[i].coursename+'</option>';
            }
            $(".courses").html(courses);
        }
    });
    });
    </script>
@endpush