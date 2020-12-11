<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>TimeCreate</th>
        <th>TimeUpdate</th>
        <th>PostsId</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td>{{$post->posts_id}}</td>
        <td>{{$post->title}}</td>
        <td>
          <a class="btn btn-warning" href="{{route('posts.edit',$post->id)}}">Edit</a>
          <button type="button" class="btn btn-danger delete-button" data-id={{$post->id}}>Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end">  
  <a class="btn btn-primary" href="{{$posts->nextPageUrl()}}">Older Post</a>
  </div>
</div>

</body>
</html>