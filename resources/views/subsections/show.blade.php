@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $subsection->title }}
                    </div>
                    <div class="panel-body">
                        @include('partials._popup_form', [
                            'buttonName' => 'Создать тему',
                            'controllerName' => 'TopicsController',
                            'formFolder' => 'topics',
                            'dataTarget' => 'add-topic'
                        ])
                        @if(count($topics) > 0)
                        <table class="table">
                            <tr>
                                <th>Название темы</th>
                                <th class="text-center">Сообщений</th>
                                <th class="text-center">Просмотров</th>
                                <th>Последнее сообщение</th>
                            </tr>
                            @foreach($topics as $topic)
                                @include('topics._topic')
                            @endforeach
                        </table>
                        @else
                            <p class="list-group-item">На данный момент открытых тем нет.</p>
                        @endif

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
