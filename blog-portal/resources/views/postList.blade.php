  <!DOCTYPE html>
  <html lang="en">
  <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
  </head>
  <body>  <div class="container">
    <div class="display-4">
      <p class="text-center">List of Posts</p>
    </div>
      <hr class='w-50 text-center bg-danger'>
    <div class='offset-3 w-50'>
  
        @foreach($arr as $list)
<div class="list-group mb-2">
  <a href="{{route('showPostName',['post_id'=>$list->id])}}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><u>{{$list->title}}</u></h5>
    </div>
    <p class="mb-1 text-truncate">{{$list->content}}</p>
    <p class="text-right"><small ><i>Tag-{{$tag->tag}}</i></small></p>
  </a>
</div>
@endforeach

    </div>
    
      
  </body>
  </html>
  
  
  
  
  


