@extends('frontend.layouts.app')
@section('link')
@endsection
@section('content')
{{ htmlspecialchars($page->description) }}
{!! $page->description !!}
@endsection