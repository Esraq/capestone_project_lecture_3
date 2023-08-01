<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Laravel Crud</h2>

  @if (session()->has('success'))

          <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    Successfully Completed
                  </div>
@endif
            
  <table class="table table-striped">
    <thead>
      <tr>
      <th><center>Name</center></th>
      <th><center>Email</center></th>
        
        <th><center></center></th>
        <th><center></center></th>
        <th colspan="2"><center></center></th>
      </tr>
    </thead>
    <tbody>
        @foreach($crud as $cruds)
      <tr>
      <td><center>{{$cruds->name}}</center></td>
      <td><center>{{$cruds->email}}</center></td>
        
        <td><center><img src="images/{{$cruds->photo}}" height="100px" width="100px"></center></td>
      <td><center>  <a class="image-link" href="/images/{{$cruds->docs}}"><img src="/images/docs.jpg" class="img-responsive" loading="lazy" height="100px" width="100px"></center></td>
      
      </center></td>
        <td><form action="{{ route('crud.destroy',$cruds->id) }}" method="POST">
   
                   
   
   @csrf
   @method('DELETE')

   <button type="submit" class="btn btn-danger">Delete</button>
</form></td>

    <td><a href="{{ URL::to('/crud/'.$cruds->id.'/edit') }}" class="btn btn-primary mb-1">Edit</a></td>

      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>