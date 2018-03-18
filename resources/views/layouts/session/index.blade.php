@extends('layouts.master')

@section('heading', 'Dragon Debugging -- Sessions')

@section('content')
<ul>
  @foreach ($sessions as $session)
    <li>
      <a href="/session/{{ $session->id }}">
        <strong>{{ $session->problem }}</strong>:&nbsp;
      </a>
      @foreach($session->dragons as $dragon)
        <span class="dragon_list">{{ $dragon->name }}</span>.&nbsp;
      @endforeach
    </li>
  @endforeach
</ul>
<form action="/session" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <input type="text" id="problem" name="problem" placeholder="New Problem Statement">
    <button type="submit" class="btn btn-primary">Create</button>
  </div>
</form>
@endsection
