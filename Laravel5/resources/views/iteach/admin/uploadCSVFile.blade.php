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
        <form action="processCSVFile" method="post" enctype="multipart/form-data" class="form-horizontal col-lg-8 col-lg-offset-1">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="inputFile" class="control-label col-lg-2">File Name:</label>
                <div class="col-lg-8">
                    <input type="file" class="form-control" name="inputFile" id="inputFile">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-lg-offset-2">
                    <button type="submit" class="btn btn-default">Upload</button>
                    <button type="reset" class="btn btn-default">Clear</button>
                </div>
            </div>
        </form>
    </div>
@endsection    

