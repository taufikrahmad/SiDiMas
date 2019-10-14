@extends('main')

@section('title','| Configurations ')
@section('style')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Configurations
        <small>System Configurations</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Configurations</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="col-sm-12">
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tag"></i> System Configurations</h3>
          <div class="box-tools pull-right">
            <a href="{{url('Configuration/Create')}}" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Add</a>
          </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Key 1</th>
                                <th>Key 2</th>
                                <th>Key 3</th>
                                <th>Key 4</th>
                                <th>Description 1</th>
                                <th>Description 2</th>
                                <th>Description 3</th>
                                <th>Description 4</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- END Main content -->
@endsection

@section('pagejs')
<script type="text/javascript">

function editConfig(e){
    window.location.assign("{{url('Configuration/edit')}}/"+$(e).data('target'));
}


$(function() {


    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'Configuration/json',
        type: 'POST',
        searching: false,
        ordering:'true',
        order: [0, 'asc'],
        columns: [
            { data: 'Key1', name: 'Key1' },
            { data: 'Key2', name: 'Key2' },
            { data: 'Key3', name: 'Key3' },
            { data: 'Key4', name: 'Key4' },
            { data: 'Desc1', name: 'Desc1' },
            { data: 'Desc2', name: 'Desc2' },
            { data: 'Desc3', name: 'Desc3' },
            { data: 'Desc4', name: 'Desc4' },
            {
                data: null,
                render:function (data, type, full, meta)
                        { 
                            return "<div class='btn-group'>\
                                    <button type='button' class='btn btn-default btn-flat'>Action</button>\
                                    <button type='button' class='btn btn-default btn-flat dropdown-toggle' data-toggle='dropdown'>\
                                        <span class='caret'></span>\
                                        <span class='sr-only'>Toggle Dropdown</span>\
                                    </button>\
                                    <ul class='dropdown-menu' role='menu'>\
                                        <li><a href='#' onclick='editConfig(this)' data-target='"+full.Key1+"'><i class='fa fa-pencil'></i>&nbsp;Update</a></li>\
                                        <li><a href='#' class='delete-config' data-target='"+full.Key1+"'><i class='fa fa-trash'></i>&nbsp;Delete</a></li>\
                                    </ul>\
                                </div>"
                        },
                targets: -1
            }
        ]
    });



});
</script>
@endsection