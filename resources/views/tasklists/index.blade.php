@extends('layouts.app')

@section('content')



    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        
        <h1>{{ $user->name }}さんのタスクリスト一覧</h1>
        
        @if (count($tasklists) > 0)
        	<ul>
                    @foreach ($tasklists as $tasklist)
                        <li>{!! link_to_route('tasklist.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }} : {{ $tasklist->status}}</li>
                    @endforeach
        	</ul>
        @endif
        
        



        {!! link_to_route('tasklist.create', '新規タスクの投稿' , null , ['class' => 'btn btn-primary']) !!}


    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Task Lists</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif

@endsection