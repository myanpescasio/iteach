@extends('dash-guest')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                View All <small>Guest</small>
            </h1>                       
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Select Course
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            @for($i = 0; $i<count($courses); $i++)
                <li role="presentation"><a role="menuitem" tabindex="-1" href="/{{$courses[$i]->courseNum}}">{{$courses[$i]->courseNum}}</a></li>
            @endfor
        </ul>
    </div>
    <!--<div>
        <div class="panel-group" id="accordion">

            @for($i = 0; $i<count($sections); $i++)
            <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}">{{$sections[$i]->courseNum}} : {{$sections[$i]->courseTitle}}</a>
                </h4>
            </div>
            <div id="collapse{{$i}}" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Section</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Day</th>
                                    <th>Room</th>
                                    <th>Instructor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>                  
                        </table>
                    </div>
                </div>
            </div>
            </div> 
            @endfor                       
        </div>
    </div>-->
@endsection