@extends('layouts.master')

@section('heading', 'Dragon Debugging -- Sessions')

@section('content')
<ul>
  @foreach ($sessions as $session)
    <li>
      <strong>{{ $session->problem }}</strong>:&nbsp;
      @foreach($session->dragons as $dragon)
        <span class="dragon_list">{{ $dragon->name }}</span>.&nbsp;
      @endforeach
    </li>
  @endforeach
</ul>
@endsection
