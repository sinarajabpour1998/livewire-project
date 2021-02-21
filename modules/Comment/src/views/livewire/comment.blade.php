<section class="content-item mt-4" id="comments">
    <div class="container mb-5">
        <div class="row">
            <a href="/"><- Back</a>
        </div>
    </div>
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
