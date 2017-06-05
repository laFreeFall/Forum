{{--<li class="list-group-item">--}}
    {{--<a href="{{ action('TopicsController@show', $topic->id) }}">--}}
        {{--{{ $topic->title }}--}}
    {{--</a>--}}
{{--</li>--}}

<tr>
    <td class="col-md-6 vcenter"><a href="{{ action('TopicsController@show', $topic->id) }}">{{ $topic->title }}</a></td>
    {{--<td class="col-md-2">{{ $topic->latest_message->updated_at }} от {{ $topic->latest_message->author->name }}</td>--}}

    {{--<td class="col-md-2"><a href="{{ url('/topics/' . $topic->id . '#message-last') }}">{{ $topic->latest_message->updated_at }}</a> от {{ $topic->latest_message->author->name }}</td>--}}
    {{--{{ dd($topic->latest_message()->content) }}--}}
    <td class="col-md-2 vcenter text-center">{{ count($topic->messages) }}</td>
    <td class="col-md-2 vcenter text-center">{{ $topic->views }}</td>
    <td class="col-md-2 vcenter"><a href="{{ action('TopicsController@show', $topic->id) . '#message-' . count($topic->messages) }}">{{ $topic->latest_message->updated_at }}</a><br> от
        <a href="{{ action('UsersController@show', $topic->latest_message->author->id) }}">{{ $topic->latest_message->author->name }}</a></td>
</tr>