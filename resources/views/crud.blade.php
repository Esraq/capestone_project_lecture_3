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

    <form action="crud" method="POST" enctype="multipart/form-data">
                                @csrf





                                <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" placeholder="Enter name">
      @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
    </div>
  </div>
  <br><br><br>





    
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
    </div>
  </div>
  <br><br><br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Enter password">
      @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif

    </div>
  </div>
  <br><br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="password_confirmation" placeholder="Enter password">
      @if ($errors->first('password'))<div class="alert alert-danger">{!! $errors->first('password') !!}</div> @endif

    </div>
  </div>
  <br><br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Image:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="photo">
      @if ($errors->first('photo'))<div class="alert alert-danger">{!! $errors->first('photo') !!}</div> @endif

    </div>
  </div>
  <br><br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">File:</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="docs" placeholder="Enter password">
      @if ($errors->first('docs'))<div class="alert alert-danger">{!! $errors->first('docs') !!}</div> @endif

    </div>
  </div>
  <br><br>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>


</body>

</html>