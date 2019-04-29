<!-- Modal -->
<div class="modal fade" id="projectNR-{{$project['id']}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle{{$project['id']}}" aria-hidden="true">
    <button type="button" class="close modal-button-exit" data-dismiss="modal" aria-label="Close">
        <span class="model-exit-icon" aria-hidden="true"><i class=" fas fa fa-times"></i></span>
    </button>
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div id="ProjectCarusel-NR{{$project['id']}}" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#ProjectCarusel-NR{{$project['id']}}" data-slide-to="0" class="active"></li>
                    <li data-target="#ProjectCarusel-NR{{$project['id']}}" data-slide-to="1"></li>
                    <li data-target="#ProjectCarusel-NR{{$project['id']}}" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{$project['front']}}">
                        </div>
                        @foreach($project['album'] as $image)
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{$image}}">
                        </div>
                        @endforeach
                </div>
                <a class="carousel-control-prev" href="#ProjectCarusel-NR{{$project['id']}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#ProjectCarusel-NR{{$project['id']}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>