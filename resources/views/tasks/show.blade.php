@extends('layouts.app')

@section('content')
<h1>id = {{ $user->id }} のタスク詳細ページ</h1>
<?php $user = $task->user; ?>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task = $user->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task = $user->content }}</td>
        </tr>
    </table>

   
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $user->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model( $task,['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection