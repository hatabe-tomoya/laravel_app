@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">ToDo編集</h2>
{!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!} <!-- 変更 -->
  <div class="form-group">
    {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!} <!-- 変更 -->
  </div>
  {!! Form::submit('更新', ['class' => 'btn btn-success float-right']) !!} <!-- 変更 -->
{!! Form::close() !!} <!-- 変更 -->

@endsection