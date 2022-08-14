@extends('master')
@section('title')
    Simple Blog
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center ">
           <div class="col-lg-8">
               <div class="card my-4">
                   <div class="card-body">
                       <div class="d-flex justify-content-between">
                           <div class="">
                               <h3 class="card-title mb-0">Hello</h3>
                               <p class="text-black-50 mb-0">What is on you mind?</p>
                           </div>
                           <div class="">
                               <h2 class="card-title mb-0">Welcome</h2>
                           </div>
                           <div class="align-content-center">
                               <a href="{{route('post.create')}}" class="btn btn-primary my-2">Create Post</a>
                           </div>
                       </div>

                   </div>
               </div>

               @foreach($posts as $post)
                   <div class="card mb-3">
                       <div class="card-body">
                           <h4 class="card-title fw-bold">{{$post->title}}</h4>
                           <p class="card-text">{{\Illuminate\Support\Str::words($post->description ,50)}}</p>
                       </div>
                       <div class="d-flex justify-content-between mb-3">
                           <p></p>
                           <div>
                               <form action="{{route('post.delete',$post->id)}}" class="d-inline-block" method="post">
                                   @csrf
                                   @method('delete')
                                   <button class="btn btn-outline-danger">Delete</button>
                               </form>
                               <a href="{{route('post.edit',$post->id)}}" class="btn btn-outline-dark">Edit</a>
                               <a href="{{route('post.show',$post->id)}}" class="btn btn-outline-primary">See More</a>
                           </div>

                       </div>
                   </div>
               @endforeach


           </div>
        </div>
    </div>
@endsection
