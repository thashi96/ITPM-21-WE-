@extends('layouts.stu') 
@section('content')

<main role="main">



<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			@foreach($course_des as $values)
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
				<img class="card-img-top" src="{{url('images/courses/'.$values->image)}}">
					<div class="card-body">
                        <h4>{{$values->c_name}}</h4>
                        <hr>
						<p class="card-text"></p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<a class="btn btn-info" href="{{url('course_page/'.$values->id)}}">View</a>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
							<small class="text-muted">9 mins</small>
						</div>
					</div>
				</div>
			</div>
			@endforeach	
		</div>
	</div>
</div>

</main>

@endsection