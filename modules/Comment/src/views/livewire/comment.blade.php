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
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="btn btn-normal pull-right btn-primary" wire:click="submit">Submit</button>
            </div>
        </div>
    </fieldset>
</form>

<h3>4 Comments</h3>

<div class="media">
    <div class="media-body">
        <h4 class="media-heading">{{ $comments['name'] }}</h4>
        <p>{{ $comments['desc'] }}</p>
        <ul class="list-unstyled list-inline media-detail pull-left">
            <li><i class="fa fa-calendar"></i>{{ $comments['date'] }}</li>
        </ul>
        <ul class="list-unstyled list-inline media-detail pull-right">
            <li class=""><a href="">Reply</a></li>
        </ul>
    </div>
</div>
