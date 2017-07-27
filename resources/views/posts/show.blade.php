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

        </div><!-- /.blog-main -->

       @include('layouts.sidebar')
      </div><!-- /.row -->

    </div><!-- /.container -->

@endsection

@section ('footer')
		
@endsection









 

   

    

    

    
 
