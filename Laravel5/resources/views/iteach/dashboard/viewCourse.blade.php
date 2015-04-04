@extends('dash-guest')

@section('content')
    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Courses <small>Guest</small>
                        </h1>
                        
                    </div>
                </div>
                <div class="bs-example">
                    <div class="panel-group" id="accordion">

                    @for ($i = 0;$i<count($courses); $i++)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}">{{$courses[$i]}}</a>
                                </h4>
                            </div>
                            <div id="collapse{{$i}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                </div>
                            </div>
                        </div>
                    @endfor
                        
                    </div>
                </div>               
@endsection