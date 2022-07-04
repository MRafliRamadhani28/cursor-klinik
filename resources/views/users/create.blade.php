@extends('layouts.app', ['page' => __('User Management'), 'pageSlug' => 'users'])

@section('content')

<div class="card">
  <div class="card-header">
    <div class="card-title">Create Data User</div>
  </div>
  <div class="card-body">
    <form class="form" action="{{ route('user.store') }}" method="POST">
      @csrf
      <div class="column">

        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} col-md-6">
          <label for="inputName">Name</label>
          <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
          @include('alerts.feedback', ['field' => 'name'])
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
          @include('alerts.feedback', ['field' => 'email'])
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} col-md-6">
          <label for="inputEmail4">Password</label>
          <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
          @include('alerts.feedback', ['field' => 'password'])

          <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} col-md-6">
          <label for="inputEmail4">Role</label>
          <select name="role" id="role" class="form-control text-light">
            <option value="">Pilih Role</option>
            <option value="1">Doctor</option>
            <option value="2">Receptionist</option>
            <option value="3">Cashier</option>
          </select>
        </div>

      </div>
      
      <div class="row">
        <div class="col-6 text-right mt-5">
          <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
          <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection