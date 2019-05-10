@extends('layouts.stu') 
@section('content')
<div class="row">
    <div class="col-md-12"><br/>
    <form action="{{url('search_question/')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
        <input type="text" id="search" name="search" class="form-control" placeholder="Search.."/><br/>
        <button type="submit" class="btn btn-info btn-xs">search</button>
    </form> 
        <h4>Top Question<h4/><br/>
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
      @foreach($q_details as $item)
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <!--answers and view count-->
                    <div class= "col-md-8">
                        <div class="flex-container">
                            <div class="col">Answers</div>
                            <div class="col">views</div>
                            <!-- add answers and view count-->
                        </div>
                    </div>
                    <!--title-->
                     <div class="col">   
                        <a href="{{url('question_page/'.$item->qid,$item->sid)}}"><h5>{{$item->title}}</h5></a>
                        <p >{{str_limit($item ->body, $limit = 50, $end = '...')}}</p>
                     </div>
                    <!--tags-->   
                    <!--time in minites-->  
                </div>   
            </div>
        </div>
     @endforeach  
    </div>
</div>
@endsection