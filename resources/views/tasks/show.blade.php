@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task, ['route' => ['task.destroy', $task->id],'method' => 'delete'] !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection