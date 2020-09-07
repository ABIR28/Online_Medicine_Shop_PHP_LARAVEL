@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

        <div class="topnav">

        <a href="{{url('/doctordata')}}">Doctor List</a>
        <a href="{{url('/sendemail')}}">Email</a>
        <a href="{{url('/healthTips')}}">Health Tips</a>
        <a href="{{url('/notebooks')}}">Note Book</a>

      </div>




    <form action="{{url('/updatePatient')}}">

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Contact</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['contact']}}</td>
            <td><a href="{{url('/editPatient',$user['id'])}}"><i class="fa fa-edit"></i></a></td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    </form>

    </body>
    </html>




                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
