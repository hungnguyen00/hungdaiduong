@extends ('layouts.dashboard')
@section('section')
    @if ($success)
    <div class="alert alert-success  alert-dismissable " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Thêm vào thành công
    </div>
    @endif
    <div class="panel panel-primary">
	  
		<div class="panel-heading">
		<h3 class="panel-title">New Menu			</h3>
	
	</div>
		
	<div class="panel-body">
	{{Form::open(array('url' => 'admin/menu/create', 'method' => 'post')) }}            
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" placeholder="Input Name"  @if ($errors->has('name')) autofocus @endif>
                @if ($errors->has('name'))
                <p class="help-block">Name không được để trống hoặc name đã tồn tại</p>
                @endif
            </div>
            
            
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Please"></textarea>
            </div>
                                    
            <button type="submit" name="save" class="btn btn-default">Save</button>
            <button type="reset" class="btn btn-default">Reset</button>
        {{ Form::close() }}
			</div>
	</div>
@stop