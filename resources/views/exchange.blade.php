@extends('master')
@section('title')Home @endsection


@section('content')
    <div class="p-3">
        <h1>Home</h1>
        <div class="p-3">
            <form method="post" action="{{route('exchange-to-mmk')}}" enctype="multipart/form-data">
                {{--                <div class="mb-3">--}}
                {{--                    <input type="file" class="form-control" name="photo">--}}
                {{--                </div>--}}
                @csrf
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount">
                </div>
                <div class="mb-3">
                    <label class="form-label">Currency</label>
                    <input type="text" class="form-control" name="currency">
                </div>
                <button class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>
@endsection
