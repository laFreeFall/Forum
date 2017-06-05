@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @include('partials._popup_form', [
                    'buttonName' => 'Добавить раздел',
                    'controllerName' => 'SectionsController',
                    'formFolder' => 'sections',
                    'dataTarget' => 'add-section'
                ])

                @forelse($sections as $section)
                    @include('sections._section')
                @empty
                    <p class="text-center">Пока разделов нет</p>
                @endforelse


            </div>
        </div>
    </div>
@endsection
