@extends('layouts.app')

@section('content')

    <h1>タスク新規作成</h1>
    
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス：') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('投稿！') !!}
        
    {!! Form::close() !!}

@endsection