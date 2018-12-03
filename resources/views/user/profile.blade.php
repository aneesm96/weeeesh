@extends('layouts.app')

@section('content')


    <div class="panel panel-default">

        <div class="panel-heading">
            Edit your profile
        </div>

        <div class="panel-body">
            <form action="{{route('profile.store',['id' => $user->id ])}}" method="post" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="form-group">

                    <label for="name" > User Name</label>

                    <input type="text"  name="name" class="form-control" value="{{$user->name}}">

                </div>

                <div class="form-group">

                    <label for="email" >Email</label>

                    <input type="email"  readonly name="email" class="form-control" value="{{$user->email}}">

                </div>

                <div class="form-group">

                    <label for="avatar" >Upload new avatar</label>

                    <input type="file"  name="avatar" class="form-control" >

                </div>



                <div class="form-group">
                    <div class="text-center">

                        <button class="btn btn-success" type="submit"> Update Profile</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
@stop