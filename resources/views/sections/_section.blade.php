<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-center section-title"><a href="{{ action('SectionsController@show', $section->id) }}">{{ $section->title }}</a></h3>
        @include('partials._popup_form', [
            'buttonName' => 'Добавить подраздел',
            'controllerName' => 'SubsectionsController',
            'formFolder' => 'subsections',
            'dataTarget' => 'add-subsection-' . $section->id
        ])
    </div>

    {{--<ul class="list-group">--}}
    <table class="table table-hover">
        <tr>
            <th>Название подраздела</th>
            <th class="text-center">Тем</th>
            <th class="text-center">Сообщений</th>
            <th>Последнее сообщение</th>
        </tr>
        @forelse($section->subsections as $subsection)
            @include('subsections._subsection')
        @empty
            <p class="text-center">Пока подразделов нет</p>
        @endforelse
    </table>

    {{--</ul>--}}
</div>