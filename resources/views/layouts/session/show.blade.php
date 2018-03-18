@extends('layouts.master')

@section('heading')
Dragon Debugging -- {{ $session->problem }}
@endsection

@section('content')
<form action="/session/{{ $session->id }}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="form-group">
    <input name="dragon" type="hidden" value="1">
    <button type="submit" class="btn btn-primary">Add Dragon</button>
  </div>
</form>
  <div class="dragons">
  @foreach($session->dragons as $dragon)
    <div class="dragon">{{ $dragon->name }}</div>
  @endforeach
  </div>
  <div class="messages">
  @foreach($session->messages as $message)
    <div class="message">
      {{ $message->text }}
      <span class="message_timestamp" style="font-size:.5em;">
        {{ $message->created_at->diffForHumans() }}
      </span>
    </div>
  @endforeach
  <form action="/session/{{ $session->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <input name="message" type="hidden" value="1">
    <div class="form-group">
      <textarea name="text" autofocus></textarea>
      <button type="submit" class="btn btn-primary">Debug</button>
    </div>
  </form>
  </div>
  <form action="/session/{{ $session->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group">
      <button type="submit" class="btn btn-danger">Delete Session</button>
    </div>
  </form>
@endsection
