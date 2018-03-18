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
    <div class="message">{{ $message->text }} <span class="message_timestamp">{{ $message->created_at }}</span></div>
  @endforeach
  </div>
@endsection
