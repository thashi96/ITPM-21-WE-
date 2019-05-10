@extends('layouts.stu') 
@section('content')

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <h5 class="m-0">{{$get_q[0]->title}}</h5></br>
            <p>{{$get_q[0]->body}}</p>
            <p text-align="right">{{$stu_details[0]->f_name}} {{$stu_details[0]->l_name}}</p>
        </div>
        <hr>
        <!--view comment part-->
        <div class="card-body">
        @foreach($commy as $item)
            <p>{{$item->comment}} - {{$item->f_name}} {{$item->l_name}} </p></br>            
        @endforeach
        </div>
        <!--add comment part-->
        <div class="card-body">
        <form method="post" action="{{url('save_comments')}}" >
            {{csrf_field()}}
            <!--button comment-->  
            <input type="text" id="comment" name="comment" style="background-color:gainsboro;color:black" class="form-control" placeholder="Enter Comment"/>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-xs">Add comment</button>
            </div>
        
        <input type="hidden" name="qid" value="{{$get_q[0]->qid}}">
         </form>
        </div>
      
    </div>
    <hr>
      
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <!--view answer part-->
            <h5>Your Answers</h5>
            @foreach($ansy as $item)
            <div class="card-body">
            <p>{{$item->answer}}</p></br>
            <p text-align="right">{{$item->f_name}} {{$item->l_name}}</p>
            </div>
            <hr>
             @endforeach
            <!--add answer part-->
            <form method="post" action="{{url('save_answers')}}" >
                {{csrf_field()}}
                <textarea id="answer" name="answer"placeholder="Enter answer" style="height:200px;background-color:	gainsboro;color:black"></textarea><br/>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-xs">Post Answer</button>
                </div>
                <input type="hidden" name="qid" value="{{$get_q[0]->qid}}">
            </form>
        </div>
    </div>
@endsection