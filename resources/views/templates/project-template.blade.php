<div class="container">
    <div class="container-fluid project-containter-padding justify-content-center project-row ">
        @foreach($projectList['project'] as $project)
            @if($project['id'] <= 6)
                <div class="col-sm-3 project-card">
                    <div class="project-title">
                        {{$project['name']}}
                    </div>
                    <div class="project-details">
                        {{$project['details']}}
                    </div>
                    <div class="project-tags">
                        Tags:
                        @foreach($project['tags'] as $tagList)
                            <div class="d-inline bill">
                                <span class="badge badge-pill badge-light">{{$tagList}}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="project-design">
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                                data-target="#projectNR-{{$project['id']}}">Design
                            <i class="far fa-object-ungroup"></i>
                        </button>
                    </div>
                    <div class="project-code">
                        @if(!empty($project['github']))
                            <a href="{{$project['github']}}">
                                <button class="btn btn-outline-dark">Public
                                    <i class="fab fa-git"></i>
                                </button>
                            </a>
                        @else

                            <button class="btn btn-outline-dark" disabled>Private
                                <i class="fab fa-git"></i>
                            </button>
                        @endif
                    </div>

                </div>
                @include('templates.project-modal')
            @endif
        @endforeach
    </div>
    <div class="col-12 project-more">And lots <a class="details-button" href="https://github.com/sarziv">more</a>!</div>
</div>

