<div class="panel panel-default" id="message-{{ $loop->iteration }}">

    <div class="row">
        <div class="panel-body col-md-2 text-center">
            <strong><a href="{{ action('UsersController@show', $message->author->id) }}">{{ $message->author->name }}</a></strong>
            <br>
            <img src="http://chocolatevent.by/sites/default/files/noavatar.png" alt="avatar" width="100px" height="100px">
            <p>Сообщений: {{ count($message->author->messages) }}</p>
            <p>Рейтинг: {{ $message->author->rating }}</p>
            <p>Регистрация: {{ $message->author->created_at->format('d.m.Y') }}</p>
        </div>
        <div class="panel-body col-md-10">
            <p class="list-group-item">{{ $message->content }}</p>
        </div>
    </div>
    <div class="panel-heading">
        <hr>
        {{--<div class="btn btn-default">Спасибо</div>--}}
        <button class="btn btn-default"
                onclick="event.preventDefault(); document.getElementById('rating-message-{{ $message->id }}').submit();">
                {{ $message->isRated() ? 'Убрать Спасибо' : 'Сказать Спасибо' }}
        </button>

        <form id="rating-message-{{ $message->id }}" action="{{ url($message->isRated() ? '/unrate' : '/rate') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            <input type="hidden" name="sender_id" value="{{ auth()->user()->id }}">
            <input type="hidden" name="recipient_id" value="{{ $message->author->id }}">
            <input type="hidden" name="message_id" value="{{ $message->id }}">
        </form>
        <br><br>
        @if($message->ratings->count() > 0)
            <p>Спасибо сказали:
            @foreach($message->ratings as $rating)
                    <a href="{{ action('UsersController@show', $rating->sender->id) }}">{{ $rating->sender->name }}</a>
            @endforeach
            </p>
        @endif
        <hr>
        <p><em>Сообщение <a href="#message-{{ $loop->iteration }}">#{{ $loop->iteration }}</a> <a href="{{ action('UsersController@show', $message->author->id) }}">{{ $message->author->name }}</a>: {{ $message->created_at->format('d.m.Y, H:i') }}</em></p>
    </div>
</div>