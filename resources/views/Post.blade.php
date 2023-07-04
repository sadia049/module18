<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
<body>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Post Id</th>
      <th scope="col">Category Id</th>
      <th scope="col">Title</th>
      <th scope="col">Excerpt</th>
      <th scope="col">Slug</th>
      <th scope="col">Summary</th>
      <th scope="col">Is Published</th>
      <th scope="col">Decription</th>
      <th scope="col">Min Read</th>
      
    </tr>
  </thead>
  <tbody>
    <!-- <pre>
    {{print_r($post->toArray())}}    
    </pre> -->
    @foreach ($post as $singlerow)
        
    <tr>
      <td>{{$singlerow->postid}}</td>
      <td>{{$singlerow->category_id }}</td>
      <td>{{$singlerow->title}}</td>
      <td>{{$singlerow->excerpt}}</td>
      <td>{{$singlerow->slug}}</td>
      <td>{{$singlerow->summary}}</td>
      <td>{{$singlerow->ispublished}}</td>
      <td>{{$singlerow->description}}</td>
      <td>{{$singlerow->minread}}</td>
    </tr>
    @endforeach
   
   </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>