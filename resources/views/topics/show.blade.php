@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">{{ $topic->title }}</h3>

                @forelse($messages as $message)
                    @include('messages._message')
                @empty
                    <li class="list-group-item">На данный момент сообщений в теме нет.</li>
                @endforelse


                <div class="panel panel-default">
                    <div class="panel-heading">
                        Написать сообщение
                    </div>
                    <div class="panel-body">
                        @include('messages._form')
                    </div>
                </div>
        </div>
    </div>
@endsection
