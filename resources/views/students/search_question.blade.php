@extends('layouts.stu') 
@section('content')
<div class="row">
    <div class="col-md-12"><br/>
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
      @if($q_des->isEmpty())
        <p>0 results</p>
      @else
        @foreach($q_des as $item)
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
     @endif     
    </div>
</div>
@endsection