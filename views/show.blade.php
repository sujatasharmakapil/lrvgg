<table class="table">
          <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>

       @if(isset($plans))
		  
		   
        @foreach($plans as $plans)
         
        <tr>
              <td>{{$plans->name}}</td>
              <td>{{$plans->email}}</td>
			  <td>{{$plans->password}}</td>
			  <td>{{$plans->image}}</td>
			  <td><a href="{{url('/edit')}}/{{$plans->id}}" style="color: white;"> <button type="button" class="btn btn-primary ">Edit<i class="fa fa-edit"></i></button></a></td>
              <td><form method="post" action="{{url('/delete-plan')}}">
                @csrf
              <input type="hidden" name="plan_id" value="{{$plans->id}}">
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form></td>
          </tr>
         @endforeach
         @endif
       </tbody>
</table>
