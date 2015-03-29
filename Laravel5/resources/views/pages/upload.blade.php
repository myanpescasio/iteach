@extends('master')
		
@section('content')
	
	<form action="uploadFile" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="file" name="filefield">
        <input type="submit" value="Upload!">
    </form>
@stop
