<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
          <br>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>System Administrator</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li class="dropdown">
              {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
              {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="#">Settings 1</a></li>--}}
              {{--<li><a href="#">Settings 2</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a class="close-link"><i class="fa fa-close"></i></a></li>--}}
            </ul>
            <div class="clearfix"></div>
          </div>

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
    <div class="x_content">
        <br>
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" role="form" action="update" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="admin_id" class="control-label col-md-3 col-sm-3 col-xs-12">Admin ID</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_id" class="form-control col-md-7 col-xs-12" type="text" name="id"  value="{{$admin->id}}">
                </div>
            </div>

            <div class="form-group">
                <label for="admin_name" class="control-label col-md-3 col-sm-3 col-xs-12">Admin Name</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_name" class="form-control col-md-7 col-xs-12" type="text" name="name" value="{{$admin->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="admin_email" class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="admin_email" class="form-control col-md-7 col-xs-12" type="text" name="email" value="{{$admin->email}}">
                </div>
            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                {{--<button type="submit" class="btn btn-primary">Cancel</button>--}}
                <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
            </form>
    </div>
</div>

{{--<div class="x_panel">--}}
{{--<div class="x_title">--}}
    {{--<h2>List of System Users</h2>--}}
    {{--<ul class="nav navbar-right panel_toolbox">--}}
    {{--<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>--}}
    {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
            {{--<li><a href="#">Settings 1</a></li>--}}
            {{--<li><a href="#">Settings 2</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
    {{--<li><a class="close-link"><i class="fa fa-close"></i></a></li>--}}
    {{--</ul>--}}
{{--<div class="clearfix"></div>--}}
{{--</div>--}}

{{--<div class="x_content">--}}
{{--<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
            {{--<div class="dataTables_length" id="datatable_length">--}}
                {{--<label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">--}}
                        {{--<option value="10">10</option>--}}
                        {{--<option value="25">25</option>--}}
                        {{--<option value="30">30</option>--}}
                        {{--<option value="50">50</option>--}}
                        {{--</select> entries</label>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-sm-6">--}}
            {{--<div id="datatable_filter" class="dataTables_filter">--}}
                {{--<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-12"><table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">--}}
{{--<br><thead>--}}
{{--<tr role="row">--}}
    {{--<th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="User ID: activate to sort column descending" style="width: 197px;">User ID</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 313px;">User Name</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 145px;">Email</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="ROLE ID: activate to sort column ascending" style="width: 74px;">Role ID</th>--}}
    {{--<th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="ROLE NAME: activate to sort column ascending" style="width: 139px;">Role Name</th>--}}
{{--</tr>--}}
{{--</thead>--}}

{{--<tbody>--}}
{{--@foreach($user as $user)--}}
{{--<tr role="row" class="odd">--}}
{{--<td class="sorting_1">{{ $users->id }}</td>--}}
{{--<td>{{ $users->username }}</td>--}}
{{--<td>{{ $users->email }}</td>--}}
{{--<td>{{ $users->role_id }}</td>--}}
{{--<td>{{ $users->roles->name }}</td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</tbody>--}}
{{--</table>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row"><div class="col-sm-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>--}}
{{--</div>--}}
</div>
</div>
</div>
</div>
</div>