@extends('dash-guest')

@section('content')
    <div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">
		Instructors <small>Guest</small>
	    </h1>
	    <div id="wrap">
		    <ul id="gallery">
			    @for($i=0; $i<count($intructors); $i++)
				    <?php $image = "profile/".$intructors[$i]->employeeId.".jpg"?>	<!-- Get the directory of Image -->
				    <li id= "teach">
					    <a data-toggle="modal" data-target="#openModal{{$i}}"><img src="{{$image}}" onerror="this.src='profile/100.jpg'"> </a>
						    <div id="label">
							    {{$intructors[$i]->fname}} {{$intructors[$i]->lname}}<br>
						    </div>
						    
					    <div id="openModal{{$i}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
						<div class="modal-dialog">
							<a href="#close" title="Close" class="close">X</a>
							<div class="modal-content">
							    <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="purchaseLabel">{{$intructors[$i]->fname}} {{$intructors[$i]->lname}}<br></h4>
							    </div>
							    <div class="modal-body">
								<div class="panel-body">
								    <div class="table-responsive">
									<table class="table table-hover">
									    <thead>
										<tr>
										    <th>Course Number</th>
										    <th>Section</th>
										    <th>Start Time</th>
										    <th>End Time</th>
										    <th>Day</th>
										    <th>Room</th>
										    <th>Units</th>
										</tr>
									    </thead>                  
									    <?php $eid = $intructors[$i]->employeeId; ?>
									    @while ($i<count($intructors) && $eid == $intructors[$i]->employeeId)
										<tr>
										    <td>{{$intructors[$i]->courseNum}}</td>
										    <td>{{$intructors[$i]->sectionNum}}</td>
										    <td>{{$intructors[$i]->startTime}}</td>
										    <td>{{$intructors[$i]->endTime}}</td>
										    <td>{{$intructors[$i]->day}}</td>
										    <td>{{$intructors[$i]->roomNum}}</td>
										    <td>{{$intructors[$i]->units}}</td>                                      
										    </tr>
										<?php $i++; ?>
									    @endwhile
									    <?php $i--; ?> <!-- Above loop will skip an index. This line prevents that to happen -->
										
									</table>
								    </div>
								</div>
							    </div>
							    <div class="modal-footer">
								<!--button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Purchase</button-->
								<p>Somethings</p>
							    </div>
							</div>
						</div>
					    </div>
				    </li>
			    @endfor
		    </ul>
	    </div>
	</div>
    </div>
    
    
@endsection