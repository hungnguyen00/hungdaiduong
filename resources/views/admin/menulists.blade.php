@extends ('layouts.dashboard')
@section('section')
 @if (session('successedit'))
    <div class="alert alert-success  alert-dismissable " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sửa thành công
    </div>
    @endif
    @if (session('successdelete'))
    <div class="alert alert-success  alert-dismissable " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>  <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Xóa thành công
    </div>
    @endif
    
<div class="col-sm-12">
    <a href="menu/create"<button type="button" class="btn btn-primary    btn-lg   ">Tạo Mới Menu</button></a>
    
						<div class="panel panel-default">
	  
		<div class="panel-heading">
		<h3 class="panel-title">Menu Lists			</h3>
	
	</div>
		
	<div class="panel-body">
				<table class="table table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
                                        <th>Location</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
                                @foreach($menus as $menu)
                                    <tr class="success">
					<td>{{stripslashes($menu->name)}}</td>
					<td>{{stripslashes($menu->description)}}</td>
                                        <td>{{$menu->location}}</td>
                                        <td><a href="menu/edit/{{$menu->id}}"><button type="" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button></a><a href="menu/delete/{{$menu->id}}"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></a></td>
                                    </tr>
                                @endforeach
			</tbody>
		</table>	
			</div>
	</div>

	</div>
@stop