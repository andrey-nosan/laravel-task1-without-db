@extends('layouts.layout')

@section('content')
      <div class="row">
        {!! Lipsum::long()->text(1) !!}
      </div>
@endsection