<button class="btn btn-default pull-right spoiler collapsed" data-toggle="collapse" data-target="#{{ $dataTarget }}">
    {{ $buttonName }}
</button>
<br><br>
{{--<div class="collapse {{ $errors->any() ? 'in' : '' }}" id="collapseExample">--}}
<div class="row">
    <div class="collapse col-md-10 col-md-offset-1" id="{{ $dataTarget }}" >
        {!! Form::open(array('url' => action($controllerName . '@store'))) !!}

            @include($formFolder . '._form')

        {!! Form::close() !!}
    </div>
</div>
