<!-- Modal -->
<div class="modal fade" id="projectNR-{{$project['id']}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle{{$project['id']}}" aria-hidden="true">
    <button type="button" class="close modal-button-exit" data-dismiss="modal" aria-label="Close">
        <span class="model-exit-icon" aria-hidden="true"><i class=" fas fa fa-times"></i></span>
    </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($project['album'] as $album)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$album['front']}}">
                        </div>
                        @foreach($album['all'] as $image)
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{$image}}">
                            </div>
                        @endforeach
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


    </div>
</div>