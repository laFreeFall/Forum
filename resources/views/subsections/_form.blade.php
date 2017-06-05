{!! Form::hidden('section_id', $section->id) !!}

<div class="form-group">
    {!! Form::label('title', 'Название подраздела') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Описание') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

{!! Form::submit('Создать подраздел!', ['class' => 'btn btn-default']) !!}
