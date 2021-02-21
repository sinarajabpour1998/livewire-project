@extends('layouts.app')

@section('content')
    <section class="content-item mt-4" id="comments">
        <div class="container mb-5">
            <div class="row">
                <a href="/"><- Back</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <livewire:module-comment-component />

                </div>
            </div>
        </div>
    </section>
@endsection
