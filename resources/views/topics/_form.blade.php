{!! Form::hidden('subsection_id', $subsection->id) !!}

<div class="form-group">
    {!! Form::label('title', 'Название темы') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание (сообщение)') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3', 'required']) !!}
</div>

{!! Form::submit('Создать тему!', ['class' => 'btn btn-default']) !!}
