@extends('layouts.adm') 
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
  <script src="main.js"></script>
</head>
<body>

<div class="container">
<h2>Add Your course materials here</h2>
	<div class="row">
    <div class="col-4">
    <form action="{{ url('save_moduleName') }}" method="POST" class="col-sm-12 col-xs-12 client-fill" enctype="multipart/form-data">
				{{ csrf_field() }}
        <div class="input-group input-group-md">
        <input type="hidden" name="couurseID" value="{{$course_id}}">
        <input name="module_name" type="text" class="form-control" placeholder="Module Name" aria-describedby="sizing-addon1" required/>
        <button type="submit" class="btn btn-success ml-2">Add</button>
        </div>
    </form>
    </div>
    <div class="col-4">        
      <table class="table">
        <thead>
          <tr>
            <th>Module Name</th>
            <th>Command</th>
          </tr>
        </thead>
        <?php $No = 1?>
        @foreach ($get_modules as $item)
        <tbody>
          <tr>
            <td class="col-6">{{$No++ .". ". $item->module_name}}</td>
            <td class="col-6">
                <div class="btn-group btn-group-xs" role="group">
                        <button type="button" class="btn btn-info sm">Edit</button>
                        <button type="button" class="btn btn-danger sm">Delete</button>
                </div>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</div>

<div class="container">
  <h2>Upload Your Materials</h2>
  <!--nav tab -->

  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PDF Doc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">MS Word Doc</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MS Powerpoint</a>
    </li>
  </ul>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <form id="discount_data" action="{{ url('module_material/'.'pdf') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                  <label for="sel1">Select list (select one):</label>
                    <select name="module_id" class="form-control" id="sel1" required>
                      @foreach($get_modules as $item)
                        <option value="{{$item->id}}">{{$item->module_name}}</option>
                      @endforeach
                    </select>
                    <input name="meterial_name" type="text" class="form-control" placeholder="Module Name" aria-describedby="sizing-addon1" required/>
                  <div class="form-group files">
                    <label>Upload Your File </label>
                    <input type="file" name="upload_file" class="form-control" id="upload_file" required>
                  </div>
                  <input type="hidden" name="couurseID" value="{{$course_id}}">
                  <button type="submit" class="btn btn-success ml-2">Add</button>
            </div>
        </form>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form id="discount_data" action="{{ url('module_material/'.'word') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
              <div class="form-group">
                    <label for="sel1">Select list (select one):</label>
                      <select name="module_id" class="form-control" id="sel1" required>
                        @foreach($get_modules as $item)
                          <option value="{{$item->id}}">{{$item->module_name}}</option>
                        @endforeach
                      </select>
                      <input name="meterial_name" type="text" class="form-control" placeholder="Module Name" aria-describedby="sizing-addon1" required/>
                    <div class="form-group files">
                      <label>Upload Your File </label>
                      <input type="file" name="upload_file" class="form-control" id="upload_file" required>
                    </div>
                    <input type="hidden" name="couurseID" value="{{$course_id}}">
                    <button type="submit" class="btn btn-success ml-2">Add</button>
              </div>
        </form>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <form id="discount_data" action="{{ url('module_material/'.'powerpoint') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
              <div class="form-group">
                    <label for="sel1">Select list (select one):</label>
                      <select name="module_id" class="form-control" id="sel1" required>
                        @foreach($get_modules as $item)
                          <option value="{{$item->id}}">{{$item->module_name}}</option>
                        @endforeach
                      </select>
                      <input name="meterial_name" type="text" class="form-control" placeholder="Module Name" aria-describedby="sizing-addon1" required/>
                    <div class="form-group files">
                      <label>Upload Your File </label>
                      <input type="file" name="upload_file" class="form-control" id="upload_file" required>
                    </div>
                    <input type="hidden" name="couurseID" value="{{$course_id}}">
                    <button type="submit" class="btn btn-success ml-2">Add</button>
              </div>
        </form>
    </div>
    
  </div>

</div>
</div>
</body>
</html>
@endsection
 
@section('js')
@endsection