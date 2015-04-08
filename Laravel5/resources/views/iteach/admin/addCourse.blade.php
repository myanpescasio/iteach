@extends('iteach.admin.dash-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Add Course <small>Admin {{ Auth::user()->username }}</small>
            </h1>
        </div>
    </div>

    <form role="form" class="form-horizontal" method="post" action="">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="inputCourseNumber" class="col-lg-2 control-label">Course Number</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" id="inputCourseNumber" placeholder="CMSC 11">
            </div>
        </div>

        <div class="form-group">
            <label for="inputCourseTitle" class="col-lg-2 control-label">Course Title</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="inputCourseTitle" placeholder="Introduction To Computer Science">
            </div>
        </div>

        <div class="form-group">
            <label for="inputCourseUnit" class="col-lg-2 control-label">Units</label>
            <div class="col-lg-2">
                <input type="number" min="0" max="5" class="form-control" id="inputCourseUnit" placeholder="3">
            </div>
            <label for="inputNumberOfHoursLecture" class="col-lg-2 control-label">Number of Hours</label>
            <div class="col-lg-2">
                <input type="number" min="0" max="3" class="form-control" id="inputNumberOfHoursLecture" placeholder="Lecture">
            </div>
            <div class="col-lg-2">
                <input type="number" min="0" max="3" class="form-control" id="inputNumberOfHoursLaboratory" placeholder="Laboratory">
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-2 control-label">Semester Available</label>
            <div class="col-lg-2">
                <div class="checkbox">
                    <label><input type="checkbox"> First Semester </label>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="checkbox">
                    <label><input type="checkbox"> Second Semester </label>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="checkbox">
                    <label><input type="checkbox"> Mid Year Term </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPrerequisites" class="col-lg-2 control-label">Prerequisite(s)</label>
            <div class="col-lg-8">
                <input type="text" class="form-control" id="inputPrerequisites" placeholder="MATH17, COI">
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-6 col-lg-offset-2">
                <button type="submit" class="btn btn-default">Submit</button>
                <button type="reset" class="btn btn-default">Clear</button>
            </div>
        </div>
    </form>

@endsection

