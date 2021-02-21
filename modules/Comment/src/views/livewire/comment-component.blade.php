<form>
    <div class="row">
        <div class="col-md-12">
            <h4>New Comment</h4>
        </div>
    </div>
    <fieldset>
        <div class="row">
            <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <textarea class="form-control" id="message" placeholder="Your message" rows="4" wire:model="message"></textarea>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-normal pull-right btn-primary" wire:click="submit">Submit</a>
            </div>
        </div>
    </fieldset>
</form>

<h3>{{ count($comments) }} Comments</h3>
@forelse($comments as $comment)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{ $comment->user->name }}</h4>
            <p>{{ $comment->description }}</p>
            <ul class="list-unstyled list-inline media-detail pull-left">
                <li><i class="fa fa-calendar"></i>{{ $comment->created_at }}</li>
            </ul>
            <ul class="list-unstyled list-inline media-detail pull-right">
                <li class=""><a href="">Reply</a></li>
            </ul>
        </div>
    </div>
@empty
    <p>No Comment</p>
@endforelse

{{ $comments->links() }}
