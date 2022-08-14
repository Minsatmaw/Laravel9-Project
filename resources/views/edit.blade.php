@extends('master')
@section('title')
    Edit Post
@endsection

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h3 class="card-title mb-0">Edit Post</h3>
                            </div>
                            <div class="align-content-center">
                                <a href="{{route('post.index')}}" class="btn btn-primary my-2">Home</a>
                            </div>
                        </div>

                        <form action="{{route('post.update',$post->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <lable class="form-label">Post Title</lable>
                                <input type="text" class="form-control form-control-lg" value="{{$post->title}}" name="title">
                            </div>
                            <div class="mb-3">
                                <lable class="form-label">Description</lable>
                                <textarea type="text" rows="10" class="form-control form-control-lg" name="description">{{$post->description}}</textarea>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
