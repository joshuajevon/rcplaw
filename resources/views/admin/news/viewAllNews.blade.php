@extends('template.template')

@section('body')

@endsection

@section('head')

    @foreach ($newss as $news)
        {{$news->title}}
        <img src="{{ asset('/storage/image/'.$news->image) }}" alt="">
        {{$news->description}}
        {{$news->author}}
        {{$news->date}}
    @endforeach

@endsection
