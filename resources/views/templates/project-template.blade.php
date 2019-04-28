<div class="container-fluid project-containter-padding justify-content-center project-row ">
    @foreach($projectList['project'] as $project)

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
            <div class="project-code">
               <button class="btn btn-outline-dark">Code
                   <i class="fab fa-git"></i>
               </button>
        </div>
            <div class="project-design">
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#projectNR-{{$project['id']}}">Design
                    <i class="far fa-object-ungroup"></i>
                </button>
            </div>
        </div>
        @include('templates.project-modal')
    @endforeach

</div>
