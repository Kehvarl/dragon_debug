@extends('layouts.master')

@section('heading')
Dragon Debugging -- {{ $session->problem }}
@endsection

@section('content')
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
