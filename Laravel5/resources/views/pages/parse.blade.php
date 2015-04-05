@extends('master')
		
@section('content')
	@for($i=0;$i<count($course_num);$i++)	
		{{$course_num[$i]}} |
		{{$course_title[$i]}} |
		{{$studyOrTeach[$i]}} |
		{{$start_time[$i]}} - {{$end_time[$i]}} |
		{{$day[$i]}} |
		{{$room[$i]}} |
		{{$slots[$i]}} |
		{{$units[$i]}} |
		<br/>
	@endfor
@stop


