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
										<a href="#"><img src="{{$image}}" onerror="this.src='profile/100.jpg'"> </a>
											<div id="label">
												{{$intructors[$i]->fname}} {{$intructors[$i]->lname}}<br>
											</div>
									</li>
								@endfor
							</ul>
						</div>
                    </div>
                </div>
@endsection