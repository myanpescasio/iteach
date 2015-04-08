<!-- 
    Author: Team Gani
    Date last modified: April 5, 2015
    Description:

 -->

@extends('iteach.admin.dash-admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                View System Log <small>Admin {{ Auth::user()->username }} </small>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <table class="table table-bordered">
                <th width="15%" class="text-center">Log ID</th>
                <th width="55%" class="text-center">Transaction</th>
                <th width="30%" class="text-center">Timestamp</th>

                <!-- Looping of logs should be somewhat like this. -->
                @foreach ($sampleLog as $log)
                    <tr class="text-center">
                        <td> {{ $log[0] }} </td>
                        <td> {{ $log[1] }} </td> 
                        <td> {{ $log[2] }} </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection    

