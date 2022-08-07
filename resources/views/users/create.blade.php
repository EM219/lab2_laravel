@extends('layouts.app')

@section('title' , 'create')

@section('content')


<form method="POST" action="{{Route('users.store')}}">
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1">.
    </div>
    <div class="mb-3 form-check">

    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>


@endsection
