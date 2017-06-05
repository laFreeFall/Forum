@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center">Пользователь {{ $user->name }}</h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-body col-md-2 text-center">
                                <strong>{{ $user->name }}</strong>
                                <br>
                                <img src="http://chocolatevent.by/sites/default/files/noavatar.png" alt="avatar" width="100px" height="100px">
                                <p>Сообщений: {{ count($user->messages) }}</p>
                                <p>Рейтинг: {{ $user->rating }}</p>
                                <p>Регистрация: {{ $user->created_at->format('d.m.Y') }}</p>
                            </div>
                            <div class="panel-body col-md-10">
                                <h4 class="text-center">Темы, созданные пользователем <span class="badge">{{ $user->topics->count() }}</span></h4>
                                <table class="table">
                                    <tr>
                                        <th>Название темы</th>
                                        <th>Последнее сообщение</th>
                                        <th>Сообщений</th>
                                        <th>Просмотров</th>
                                    </tr>
                                    @forelse($user->topics as $topic)
                                        @include('topics._topic')
                                        {{--<a href="{{ action('TopicsController@show', $topic->id) }}">{{ $topic->title }}</a>--}}
                                        {{--<br>--}}
                                    @empty
                                        <p>Пользователь пока не создал ни одной темы.</p>
                                    @endforelse
                                </table>
                                <hr>
                                <h4 class="text-center">Сообщения, оставленные пользователем <span class="badge">{{ $user->messages->count() }}</span></h4>
                                <ul class="list-group">
                                @forelse($user->messages as $message)
                                    <li class="list-group-item">
                                        {{ $message->content }}
                                        <br>
                                        <em>
                                        В теме <a href="{{ action('TopicsController@show', $message->topic->id) }}">{{ $message->topic->title }}</a>
                                        {{ $message->updated_at->format('d.m.Y, H:i') }}
                                        </em>
                                    </li>
                                @empty
                                    <p>Пока пользователь не оставил ни одного сообщения.</p>
                                @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
