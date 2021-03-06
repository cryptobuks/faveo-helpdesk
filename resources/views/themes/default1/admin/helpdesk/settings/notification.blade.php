@extends('themes.default1.admin.layout.admin')

@section('Settings')
active
@stop

@section('settings-bar')
active
@stop

@section('notification')
class="active"
@stop

@section('HeadInclude')
@stop
<!-- header -->
@section('PageHeader')
<h1>{!! Lang::get('lang.settings') !!}</h1>
@stop
<!-- /header -->
<!-- breadcrumbs -->
@section('breadcrumbs')
<ol class="breadcrumb">
</ol>
@stop
<!-- /breadcrumbs -->
<!-- content -->
@section('content')
<!-- open a form -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">{{Lang::get('lang.notification_settings')}}</h3>
            </div>
            <!-- check whether success or not -->
            <div class="box-body table-responsive"style="overflow:hidden;">
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check-circle"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {!!Session::get('success')!!}
                </div>
                @endif
                <!-- failure message -->
                @if(Session::has('fails'))
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <b> {!! Lang::get('lang.alert') !!} ! </b>
                    <li class="error-message-padding">{!!Session::get('fails')!!}</li>
                </div>
                @endif
                <div class="row">
                    <!-- Default System Email:	DROPDOWN value from emails table : Required -->
                    <div class="col-md-12">
                        <div class="col-md-3 no-padding">
                            <div class="form-group">
                                {!! Form::label('del_noti', Lang::get('lang.delete_noti')) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('delete-read-notification') }}" class="btn btn-danger">{!! Lang::get('lang.del_all_read') !!}</a>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="col-md-3 no-padding">
                            <div class="form-group">
                                {!! Form::label('del_noti', Lang::get('lang.noti_msg1')) !!}<span class="text-red"> *</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ url('delete-notification-log') }}" method="post">
                            {{ csrf_field() }}
                                <div class="callout callout-default" style="font-style: oblique;">{!! Lang::get('lang.noti_msg2') !!}</div>
                                <input type="number" class="form-control" name='no_of_days' placeholder="{!! lang::get('lang.enter_no_of_days') !!}">
                                <button type="submit" class="btn btn-primary">{!! Lang::get('lang.submit') !!}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop