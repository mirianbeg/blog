@extends('layouts.master')

@section ('content')
  <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
  </div>

  <div class="container">
        <div class="row">
          <div class="col-sm-8 blog-main">
         <H1>
           {{$post->title}}
         </H1> 
   {{$post->body}}
  <hr>

  <div class="comments">
    <ul class="list-group">
       @foreach ($post->comments as $comment)
           <li class="list-group-item">
           <strong>
             {{$comment->created_at->diffForHumans()}}&nbsp
           </strong>
             {{$comment->body}}

           </li>
         @endforeach
     </ul>
  </div><!-- /.comments -->
  
     <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">
        {{csrf_field()}}

          <div class="form-group">
            <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
          </div><!-- /.form-group -->


          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add comment</button>
          </div><!-- /.form-group -->

        </form>
      </div><!-- /.card-block-->
     </div><!-- /.card-->


  
      
     
          </div><!-- /.blog-main -->

         @include('layouts.sidebar')
        </div><!-- /.row -->
  </div><!-- /.container -->
@endsection

@section ('footer')
@endsection









 

   

    

    

    
 
