<section class="content-item mt-4" id="comments">
    <div class="container mb-5">
        <div class="row">
            <a href="/"><- Back</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="col-md-12">
                    <button type="button" class="btn btn-success" wire:click="like">+</button>
                </div>
                <div class="col-md-12">
                    <h1>{{ $counter }}</h1>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger" wire:click="dislike">-</button>
                </div>
            </div>
        </div>
    </div>
</section>
