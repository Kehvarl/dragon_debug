@extends('layouts.master')

@section('heading', 'Dragon Debugging -- Dragons')

@section('content')
<ul>
  @foreach ($dragons as $dragon)
    <li>
      <a href="/dragon/{{ $dragon->id }}">
        <strong>{{ $dragon->name }}</strong>
      </a>
    </li>
  @endforeach
</ul>
<form action="/dragon" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <input type="text" id="name" name="name" placeholder="New Dragon Name">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>
@endsection
