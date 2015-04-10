@extends('dash-guest')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                View All <small>Guest</small>
            </h1>                       
        </div>
    </div>

    <div>
        <div class="panel-group" id="accordion">

        @for($i = 0; $i<count($sections); $i++)
        
            @if($sections[$i]->type == 'GradLectOnly' || $sections[$i]->type == 'GradLect' || $sections[$i]->type == 'UndergradLect')
            
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
                                
                                    <tr>
                                        <td>Lecture</td>
                                        <td>{{$sections[$i]->sectionNum}}</td>
                                        <td>{{$sections[$i]->startTime}}</td>
                                        <td>{{$sections[$i]->endTime}}</td>
                                        <td>{{$sections[$i]->day}}</td>
                                        <td>{{$sections[$i]->roomNum}}</td>
                                        <td>{{$sections[$i]->lname}}</td>  
                                        <td><a href="#" class="btn btn-default btn-xs btn-block">EDIT</a></td>                                       
                                    </tr>

                                    <?php $lec = $sections[$i]->sectionNum ?>   
                                    
                                    @for($j = 0; $j<count($sections); $j++) 
                                        <?php
                                            $lab = $sections[$j]->sectionNum;
                                            $sect = explode('-', $lab);
                                        ?>
                                        @if($sect[0] == $lec && count($sect)==2)
                                            <tr>
                                                <td></td>
                                                <td>{{$sections[$j]->sectionNum}}</td>
                                                <td>{{$sections[$j]->startTime}}</td>
                                                <td>{{$sections[$j]->endTime}}</td>
                                                <td>{{$sections[$j]->day}}</td>
                                                <td>{{$sections[$j]->roomNum}}</td>
                                                <td>{{$sections[$j]->lname}}</td>  
                                                <td><a href="#" class="btn btn-default btn-xs btn-block">EDIT</a></td>                                       
                                            </tr>
                                        @endif
                                    @endfor
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endfor
        <!--{{$sections}}-->
                        
        </div>
    </div>
@endsection