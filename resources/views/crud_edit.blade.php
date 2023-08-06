

<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    <body>

    <form action="{{ route('crud.update',$crud->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')




                                <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" value="{{$crud->name}}" placeholder="Enter name">
      @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
    </div>
  </div>
  <br><br><br>





    
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" value="{{$crud->email}}" placeholder="Enter email">
      @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
    </div>
  </div>
  <br>
<br>
  <div class="form-group">
  <label class="control-label col-sm-2" for="pwd">Previous Image:</label>
  <div class="col-sm-10">
                                            <img src="{{ asset('images/' . $crud->photo) }}" alt="" height="90px" width="120">
                                            </div>
                                            </div>
<br>
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Upload Image:</label>
   
    <div class="col-sm-10">
"     
      <input type="file" class="form-control" name="photo">
      <br>
      @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif
      <input type="hidden" name="hidden_image" value="{{ $crud->photo}}" />

    </div>
  </div>
  
  <br><br>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Current File:</label>


  <div class="col-sm-10">
  <a class="image-link" href="{{ asset('images/' . $crud->docs) }}"><img src="/images/docs.jpg" class="img-responsive" loading="lazy" height="45px" width="45px"></a>

  <input type="hidden" name="hidden_docs" value="{{ $crud->docs}}" />
                                            </div>
                                            </div>
</div>
<br>
 

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">File[Upload if you want to replace previous one]:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="docs" placeholder="Enter password">
      @if ($errors->first('docs'))<div class="alert alert-danger">{!! $errors->first('docs') !!}</div> @endif
      <input type="hidden" name="hidden_image" value="{{ $crud->docs}}" />
    </div>
  </div>
  <br><br>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <br>
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>


</body>

</html>