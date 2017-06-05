{{--<div class="panel-body">--}}
    {{--<div class="list-group-item">--}}
        {{--<a href="{{ action('SubsectionsController@show', $subsection->id) }}" class=" col-md-6">{{ $subsection->title }}</a>--}}
        {{--<p class="col-md-2">последнее сообщение</p>--}}
        {{--<p class="col-md-2">тем</p>--}}
        {{--<p class="col-md-2">сообщений</p>--}}
    {{--</div>--}}
{{--</div>--}}

<tr>
    <td class="col-md-6 vcenter"><a href="{{ action('SubsectionsController@show', $subsection->id) }}">{{ $subsection->title }}</a></td>
    <td class="col-md-2 vcenter text-center">{{ $subsection->topics()->count() }}</td>
    {{--<td class="col-md-2">{{ array_sum($subsection->topics->messages) }}</td>--}}
    {{--{{ dd($subsection->topics) }}--}}
    {{--<td class="col-md-2"> {{ $subsection->messages_amount }} </td>--}}
{{--    <td class="col-md-2"> {{ $subsection->topics()->messages()->count() }} </td>--}}
    <td class="col-md-2 vcenter text-center"> {{ $subsection->messages_amount }} </td>
    {{--<td class="col-md-2"> 228 </td>--}}
    <td class="col-md-2 vcenter">
        {{--{{ dd($subsection->latest_message) }}--}}

        @if(count($subsection->latest_message) > 0)
            {{--<a href="{{ action('TopicsController@show', $subsection->latest_message->topic->id) . '#message-' . $subsection->latest_message->topic->messages()->count() }}">--}}
                {{ $subsection->latest_message->updated_at->format('d.m.Y, H:i') }}<br>
            <a href="{{ action('TopicsController@show', $subsection->latest_message->topic->id) . '#message-' . $subsection->latest_message->topic->messages()->count() }}">
                {{ $subsection->latest_message->topic->title }}</a><br>
            <a href="{{ action('UsersController@show', $subsection->latest_message->author->id) }}">{{ $subsection->latest_message->author->name }}</a>
        @else
            Нет сообщений
        @endif
    </td>

</tr>