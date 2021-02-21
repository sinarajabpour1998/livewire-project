@extends('layouts.app')

@section('content')
    <section class="content-item mt-4" id="comments">
        <div class="container">
            <div class="row">
                <div class="text-justify">
                    <div class="col-md-12">
                        <a href="{{ route('counter') }}">1- Counter example</a>
                        <br>
                        <a href="{{ route('comment') }}">2- Comment example</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
