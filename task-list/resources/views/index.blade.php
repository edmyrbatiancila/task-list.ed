@extends('layouts.app')

@section('title', 'The Lists of Tasks:')

@section('content')
    <!-- @if(count($tasks)) -->
            <ul>
@forelse($tasks as $task)
                <li><a href="{{ route('tasks.show', ['id' => $task -> id]) }}">{{$task -> title}}</a></li>
@empty
            <div>There are no tasks!</div>
@endforelse
            </ul>
    <!-- @endif -->
@endsection
