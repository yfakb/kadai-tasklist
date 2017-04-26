@extends('layouts.app')

@section('content')


<h1>タスクリスト一覧</h1>

@if (count($tasklists) > 0)
	<ul>
            @foreach ($tasklists as $tasklist)
                <li>{!! link_to_route('tasklist.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }}</li>
            @endforeach
	</ul>
@endif

@endsection