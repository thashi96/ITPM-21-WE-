@extends('layouts.stu') 
@section('content')
<div class="row">
    <div class="col-md-12"><br/>
     <h1>Post New Question<h3/><br/>
     @if (count($errors) > 0)
        <div class = "alert alert-danger alert-dismissible fade in">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      @if(session()->has('message'))
        <div class="alert alert-success">
            <p>{{ session()->get('message') }}</p>
        </div>
      @endif
      <br/>
        <form method="post" action="{{url('save_question')}}">
            {{csrf_field()}}

            <input type="hidden" name="sid" value="{{$student_id}}">
            <!--title-->
            <div class="row">
                <div class="col-25"><label for="title">Title</label></div>
                <div class="col-75">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title"/><br/>
                </div> 
            </div>   
            <!--body-->
            <div class="row">
                <div class="col-25"><label for="body">Body</label></div>
                    <br/>
                    <textarea id="body" name="body"placeholder="Enter question body" style="height:200px"></textarea><br/>
                </div> 
            </div> 
            <!--category-->
            <div class="row">
                <div class="col-25"><label for="category">Course Category</label></div>
            </div>
            <select name="category" id="category" class="form-control input-sm">
               
                    @foreach($c_cat as $item)
                        <option value="{{ $item->cat_name }}">{{ $item->cat_name }}</option>
                    @endforeach
           </select>  
            <!--tags -->
            <div class="row">
                <div class="col-25"><label for="tags">Add Tags</label></div>
            </div>
            <input type="text" class="form-control" id="tags" name = "tags[]" data-role="tagsinput"> 

            <!--button-->  
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Post Question</button>
            </div>
        </form>
    </div>
</div>
@endsection