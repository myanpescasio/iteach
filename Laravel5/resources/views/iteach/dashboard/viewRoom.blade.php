@extends('dash-guest')

@section('content')
    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Rooms <small>Guest</small>
                        </h1>
                    </div>
                </div>
                <div class="bs-example col-lg-11">
                    <div class="panel-group" id="accordion">

                    @for ($i = 0;$i<count($rooms)-1; $i++)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}">{{$rooms[$i]->roomNum}}</a>
                                </h4>
                            </div>
                            <div id="collapse{{$i}}" class="panel-collapse collapse">
                                <div class="panel-body">
									<table class="tg">
									  <tr>
									    <th class="tg-vx3v" colspan="6">{{$rooms[$i]->roomNum}}</th>
									  </tr>
									  <tr>
									    <td class="tg-7l82">Time / Day</td>
									    <td class="tg-7l82">Monday</td>
									    <td class="tg-7l82">Tuesday</td>
									    <td class="tg-7l82">Wednesday</td>
									    <td class="tg-7l82">Thursday</td>
									    <td class="tg-7l82">Friday</td>
									  </tr>
									  @for($j=7; $j!=12; $j++)
										<tr>
									    	<td class="tg-jecd">{{$j}}:00 - {{$j+1}}:00</td>
									    	<?php $st= $j.":00"; ?>
									    	@for($k=0; $k!=count($sections); $k++)
									    		@if($sections[$k]->day == "M")
									    			@if($sections[$k]->startTime == $st)
									    				<td class="tg-031e">lol</td>
									    			@endif
									    		@endif
									    	@endfor
											
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
										</tr>
									  @endfor
									  	<tr>
									    	<td class="tg-jecd">12:00 - 1:00</td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
										</tr>
									  @for($j=1; $j!=7; $j++)
										<tr>
									    	<td class="tg-jecd">{{$j}}:00 - {{$j+1}}:00</td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
											<td class="tg-031e"></td>
										</tr>
									  @endfor
									</table>
                                </div>
                            </div>
                        </div>
                    @endfor
                        
                    </div>
                </div>
@endsection