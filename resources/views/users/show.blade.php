@extends('layouts.app')

@section('content')

<h1>id = {{ Auth::id() }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
         @foreach ($tasks as $task)
        <tr>
            <th>id</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        @endforeach
    </table>

   
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
    
    {!! Form::open( ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    
@endsection