<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
</head>
<body>
  <a class="text-decoration-none text-success" href="/">
         <button type="button" class="btn btn-outline-dark  mt-2 ml-3 ">
       Home</button></a>
    <div class="container">

    <h2 style='font-family:cursive, Arial' class="display-4 text-center user-select-none shadow p-3 mb-5 bg-white rounded"> 
       Article</h2>
    
<form action="/post-blog" method='post' class='offset-4'>
  <div class="form-group">
    <label class="user-select-none" for="title" style="font-weight:bold">Title</label>
    <input  type="text" class="form-control shadow-lg bg-light w-50" id="title" name="title" value="{{ old('title') }}">
    <div class='text-danger'> {{$errors->first('title')}}</div>
  </div>

  <div class="form-group">
    <label class="user-select-none" for="content" style="font-weight:bold">Content</label>
    <textarea   class="form-control shadow-lg bg-light w-50" id="content" name="content"  value="{{ old('content') }}"></textarea>
    <div class='text-danger'>{{$errors->first('content')}}</div>
  </div>

  <div class="form-group">
    <label class="user-select-none" for="category" style="font-weight:bold">Tags Category</label>
    <select  class="form-control mdb-select md-form shadow-lg bg-light w-50" id="category"  name="tag_id[]" multiple required>
      @foreach ($tag as $tags)
      <option value="{{$tags->id}}">{{$tags->tag}}</option>
      @endforeach
    </select>
  </div>
   <button type="submit" class="btn btn-primary offset-2">Submit</button>
   @csrf
</form>






</div>


</body>
</html>