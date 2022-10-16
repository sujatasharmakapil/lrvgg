@extends('dashboard/master')

@section('title')
Profile
@endsection

@section('content')
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
 <div class="row">
    <div class="col-md-2">
 			@include('admin/components/sidebar')
 	</div>
 	<div class="col-md-10">
        <a href="{{url('/admin/add-plans')}}"><button type="button" class="btn btn-primary" style="margin-bottom: 0.7%; margin-left: 0.5%;">ADD PLAN +</button></a>
        <table class="table">
          <thead>
            <tr>
                <th scope="col">Plan-Name</th>
                <th scope="col">Plan-Duration</th>
                <th scope="col">Calls-Limit</th>
                <th scope="col">Plan-Description</th>
                <th scope="col">Plan-Price</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
       @if(isset($plans))
        @foreach($plans as $plans)
         
        <tr>
              <td>{{$plans->plan_name}}</td>
              <td>{{$plans->plan_duration}}</td>
              <td>{{$plans->calls_limit}}</td>
              <td>{{$plans->plan_description}}</td>
              <td>{{$plans->plan_price}}</td>
              <td><a href="{{url('/admin/edit-plan')}}/{{$plans->id}}" style="color: white;"> <button type="button" class="btn btn-primary ">Edit<i class="fa fa-edit"></i></button></a></td>
              <td><form method="post" action="{{url('/admin/delete-plan')}}">
                @csrf
              <input type="hidden" name="plan_id" value="{{$plans->id}}">
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form></td></button>
          </tr>
         @endforeach
         @endif
       </tbody>
</table>
 	</div>
 </div>
<!-- </div> -->
@endsection

