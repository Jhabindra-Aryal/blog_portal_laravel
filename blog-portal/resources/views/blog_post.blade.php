<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Portal</title>
</head>
<body>
   <div class="container">
     <div >
       <a class="text-decoration-none text-success" href="/post-blog">
       <button type="button" class="btn btn-outline-dark  mt-4  position-fixed">
       Create Article</button></a></div>
       {{-- for listing all the tags --}}
     <div class="display-4">
       <p class="text-center">List of Tags</p>
     </div>
       <hr class='w-50 text-center bg-danger'>
     <div class='offset-4'>
      <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    @foreach ($tag as $tags)
       
    <a href='{{route('showPostList',['tag_id'=>$tags->id])}}' class="text-decoration-none text-light"> <button type="button" class="btn btn-secondary m-1 w-150">{{$tags->tag}}</button></a>
  
    
    @endforeach

   </div>
      </div>
     </div></div>
    

       {{-- for listing all the posts --}}
      <div class="display-4">
       <p class="text-center">List of Posts</p>
     </div>
       <hr class='w-50 text-center bg-danger'>
    <div  class="offset-3 w-50">
      @foreach($post as $posts)
<div class="list-group m-3">
  <a href="{{route('showPostName',['post_id'=>$posts->id])}}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$posts->title}}</h5>
      
    </div>
    <p class="mb-1 text-truncate">{{$posts->content}}</p>
    

      <p><?php 
      $ta=$posts->tagid;
      $arr=[];
      for($x=2;$x<=strlen($ta);$x+=4){
        array_push($arr,$ta[$x]);
        
      }
     
      
      
      ?>
      </p>
     <a class="text-decoration-none text-dark" href="#" onclick="return false;"> <p class="border text-right p-1"><small>Tags-

     @foreach ($arr as $item)
   
       <a href='{{route('showPostList',['tag_id'=>$item])}}'>{{$tag[$item-1]->tag}}</a>  
     @endforeach
      
      
     </small></p>

  </a>
      
      
      
   
   
  </a>

    </div>
@endforeach
    
    
    
    
    </div>
</body>
</html>