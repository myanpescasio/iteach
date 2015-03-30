@extends('master')
		
@section('content')
	@for($i=0;$i<count($course_num);$i++)	
		{{$faculty[$i]}} | 
		{{$course_num[$i]}} |
		{{$time[$i]}} |
		{{$day[$i]}} |
		{{$room[$i]}} |
		{{$slots[$i]}} |
		{{$units[$i]}} |
		<br/>
	@endfor
@stop


