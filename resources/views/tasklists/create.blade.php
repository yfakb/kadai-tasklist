@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    @include('commons.error_messages')

    {!! Form::model($tasklist, ['route' => 'tasklist.store']) !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}   

@endsection