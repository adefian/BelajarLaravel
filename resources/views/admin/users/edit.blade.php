@extends('layouts.admin')

@section('content')

<h1><i>Edit User</i></h1>

  <div class="row">

      <div class="col-sm-3">
        
        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded"></img>

      </div>

      <div class="col-sm-9">

        <form action="{{route ('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
            @method('PATCH')
            {{csrf_field()}}
            <div class="panel-body">
                <div class="form-group">
                    <label for="name">Name : </label>
                      <input name="name" type="text" class="form-control" placeholder="Name" value="{{$user->name}}">
                </div>  
                <div class="form-group">
                      <label for="email" class="control-label">Email : </label>
                      <input name="email" type="email" class="form-control" placeholder="Email" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="role_id">Role : </label>
                      <select name="role_id" type="text" class="form-control" >
                        <option value="1"@if($user->role_id == '1') selected @endif>Administrator</option>
                        <option value="2"@if($user->role_id == '2') selected @endif>Author</option>
                        <option value="3"@if($user->role_id == '3') selected @endif>Subcriber</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="is_active">Status : </label>
                      <select name="is_active" type="text" class="form-control">
                        <option value="0"@if($user->is_active == '0') selected @endif>Not Active</option>
                        <option value="1"@if($user->is_active == '1') selected @endif>Active</option>
                      </select>
                </div>
                <div class="form-group">
                      <label for="photo_id">Photo : </label>
                      <input name="photo_id" type="file" class="form-control" >
                </div>
                <div class="form-group"> 
                      <label for="password" class="control-label">Password : </label>
                      <input name="password" type="password" class="form-control" placeholder="Password" >
                </div>
                <div class="form-group">
                    <button class="btn btn-warning col-sm-6" type="submit">Update</button>
                </div>
        </form>

                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger col-sm-6 pull-right" type="submit">Delete</button>
                </form>

            </div>
      </div>
</div>
<div class="row">

 @include('includes.form_error') 
    
</div>
@stop