<!-- 
    Author: Team Gani
    Date last modified: April 5, 2015
    Description:
        This page is for the uploading of CSV file wherein the said file is processed by the AdminParserController.

    Suggestion for better UX:
        Implement dropzone.js
 -->

@extends('iteach.admin.dash-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Upload CSV File <small>Admin {{ Auth::user()->username }} </small>
            </h1>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
                Successful Upload
            </h3>
            @for($i=0;$i<count($course_num);$i++)   
                {{$course_num[$i]}} |
                {{$course_title[$i]}} |
                {{$type[$i]}} |
                {{$start_time[$i]}} - {{$end_time[$i]}} |
                {{$day[$i]}} |
                {{$room[$i]}} |
                {{$slots[$i]}} |
                {{$ini_instructor[$i]}} |
                {{$units[$i]}}
                <br/>
            @endfor
        </div>
     </div>
@endsection    

