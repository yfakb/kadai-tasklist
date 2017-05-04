@extends('layouts.app')

@section('content')


    <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>
    @include('commons.error_messages')

    {!! Form::model($tasklist, ['route' => ['tasklist.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}


        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection