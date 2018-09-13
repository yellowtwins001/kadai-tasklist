@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if(count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            @foreach($tasks as $task)
                <tbody>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id'=> $task->id ]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tbody>
            @endforeach
        </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-default']) !!}

@endsection