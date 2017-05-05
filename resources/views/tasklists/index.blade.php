@extends('layouts.app')

@section('content')


<h1>タスクリスト一覧</h1>

@if (count($tasklists) > 0)
	<ul>
            @foreach ($tasklists as $tasklist)
                <li>{!! link_to_route('tasklist.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }} : {{ $tasklist->status}}</li>
            @endforeach
	</ul>
@endif

{!! link_to_route('tasklist.create', '新規タスクの投稿' , null , ['class' => 'btn btn-primary']) !!}
@endsection