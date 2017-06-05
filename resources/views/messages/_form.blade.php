{!! Form::open(array('url' => action('MessagesController@store'))) !!}

{!! Form::hidden('topic_id', $topic->id) !!}
{!! Form::hidden('user_id', auth()->user()->id) !!}

<div class="form-group">
    {!! Form::label('content', 'Введите Ваше сообщение') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Отправить сообщение!', ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}