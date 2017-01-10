@extends('master')

@section('title')
  Home
@endsection

@section('content')

  <!--Panel-->
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">Admin Details</div>
      <div class="panel-body">

        <!-- panel content -->
        {{--<table class="table">--}}
          {{--<tr>--}}
            {{--<td>Name</td>--}}
            {{--<td>Email</td>--}}
          {{--</tr>--}}
          {{--loop to get data from database--}}
          {{--@foreach ($admin_details as $admin_detail)--}}
            {{--<tr>--}}
              {{--<td>{{ $admin_detail->staffid }}</td>--}}
              {{--<td>{{ $admin_detail->authornames }}</td>--}}
            {{--</tr>--}}
          {{--@endforeach--}}
        {{--</table>--}}

      </div>
    </div>
  </div>
  <!--/.Panel-->

@endsection
