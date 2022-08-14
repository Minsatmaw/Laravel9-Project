@extends('master')
@section('title')Exchange Test @endsection


@section('content')
    <div class="p-3">
        <h1>Exchange</h1>
        <div class="p-3">
            <form method="post" action="{{route('exchange-test')}}" enctype="multipart/form-data">
                {{--                <div class="mb-3">--}}
                {{--                    <input type="file" class="form-control" name="photo">--}}
                {{--                </div>--}}
                @csrf
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="text" class="form-control" name="amount">
                </div>
                <div class="mb-3">
                    <label class="form-label">From Currency</label>
                    <input type="text" class="form-control" name="fromCurrency">
                </div>
                <div class="mb-3">
                    <label class="form-label">To Currency</label>
                    <input type="text" class="form-control" name="toCurrency">
                </div>
                <button class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>
@endsection
