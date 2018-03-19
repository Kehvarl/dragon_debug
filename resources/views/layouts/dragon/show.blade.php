@extends('layouts.master')

@section('heading')
Dragon Debugging -- {{ $dragon->name }}
@endsection

@section('content')
  <form action="/dragon/{{ $dragon->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-group">
      <input type="text" name="name" value="{{ $dragon->name }}" placeholder="Dragon Name">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>

  <form action="/dragon/{{ $dragon->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group">
      <button type="submit" class="btn btn-danger">Delete Dragon</button>
    </div>
  </form>
@endsection
