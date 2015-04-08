@extends('iteach.admin.dash-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                View Instructor <small>Admin {{ Auth::user()->username }}</small>
            </h1>
        </div>
    </div>
@endsection

