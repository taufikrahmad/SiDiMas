@extends('main')

@section('title','| Configurations ')
@section('style')

@section('content')
<section class="content-header">
        <h1>
          Configurations
          <small>Create System Configurations</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Configurations</a></li>
          <li class="active">Create</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">&nbsp;</h3>
  
            <div class="box-tools pull-right">
                <!--
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              -->
            </div>
          </div>
          <div class="box-body">
                <form action="{{action('ConfigurationsController@save')}}" id="formConfiguration" class="form-horizontal" method="post">
                        @csrf <!-- {{ csrf_field() }} -->
                        <div class="row">
                            <div class="col-sm-12">
                                
                                    <div class="form-group">
                                        <label for="inputKey1" class="col-sm-2 control-label">Key 1</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" name="inputKey1" id="inputKey1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDesc1" class="col-sm-2 control-label">Description 1</label>
                                        <div class="col-md-6 col-sm-12">
                                            <textarea name="inputDesc1" id="inputDesc1" class="form-control" style="resize:vertical" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputKey2" class="col-sm-2 control-label">Key 2</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" name="inputKey2" id="inputKey2" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDesc2" class="col-sm-2 control-label">Description 2</label>
                                        <div class="col-md-6 col-sm-12">
                                            <textarea name="inputDesc2" id="inputDesc2" class="form-control" style="resize:vertical" rows="10"></textarea>
                                        </div>
                                    </div>                        
                                    <div class="form-group">
                                        <label for="inputKey3" class="col-sm-2 control-label">Key 3</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" name="inputKey3" id="inputKey1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDesc3" class="col-sm-2 control-label">Description 3</label>
                                        <div class="col-md-6 col-sm-12">
                                            <textarea name="inputDesc3" id="inputDesc3" class="form-control" style="resize:vertical" rows="10"></textarea>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="inputKey4" class="col-sm-2 control-label">Key 4</label>
                                        <div class="col-md-4 col-sm-12">
                                            <input type="text" name="inputKey4" id="inputKey1" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDesc4" class="col-sm-2 control-label">Description 4</label>
                                        <div class="col-md-6 col-sm-12">
                                            <textarea name="inputDesc4" id="inputDesc4" class="form-control" style="resize:vertical" rows="10"></textarea>
                                        </div>
                                    </div>  
                                
                            </div>
                        </div>
                
                </form>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{url('Configuration/Save')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success pull-right">Save</button>
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
  
      </section>
@endsection
@section('pagejs')
<script type="text/javascript">
    $(function() {

        $('#formConfiguration').validate({
            rules: {
                inputKey1: {
                    required: true
                },
                inputDesc1: {
                    required: true
                }
            },
            highlight: function (element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function (element) {
                element.addClass('valid')
                    .closest('.form-group').removeClass('has-error').addClass('has-success');
            }
        });

    });
</script>
@stop