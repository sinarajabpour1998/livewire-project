<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comment</title>

        <style>

        </style>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <livewire:styles />
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <section class="content-item mt-4" id="comments">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>New Comment</h4>
                                </div>
                            </div>
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                                        <textarea class="form-control" id="message" placeholder="Your message" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-normal pull-right btn-primary" wire:click="like">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                        <h3>4 Comments</h3>

                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading">John Doe</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <ul class="list-unstyled list-inline media-detail pull-left">
                                    <li><i class="fa fa-calendar"></i>27/02/2014</li>
                                    <li><i class="fa fa-thumbs-up"></i>13</li>
                                </ul>
                                <ul class="list-unstyled list-inline media-detail pull-right">
                                    <li class=""><a href="">Like</a></li>
                                    <li class=""><a href="">Reply</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <livewire:scripts />
    </body>
</html>
