@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>
    <p>{{ $tasklist->status }}</p>
    <p>{{ $tasklist->content }}</p>
    
    {!! link_to_route('tasklist.edit', 'このメッセージ編集', ['id' => $tasklist->id]) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklist.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!} 

@endsection