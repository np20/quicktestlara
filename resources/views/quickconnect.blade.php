@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
           
        <?php
            $qbo_obj = new \App\Http\Controllers\QuickBookController();
            $qbo_connect = $qbo_obj->qboConnect();
        ?>
        @if(!$qbo_connect)
            <ipp:connectToIntuit></ipp:connectToIntuit>
        @else
            <a href="{{url('qbo/disconnect')}}" title="">Disconnect</a>
        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection