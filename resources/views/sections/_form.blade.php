<div class="form-group">
    {!! Form::label('title', 'Название раздела') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

{!! Form::submit('Создать раздел!', ['class' => 'btn btn-default']) !!}
