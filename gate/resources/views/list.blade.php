<h1>bài viết </h1>
@foreach($posts as $postItem)
{{--    <p>{{$postItem->id}}</p>--}}

    <p><a href="{{route('post.show', ['id'=>$postItem->id])}}">{{$postItem->title}}</a>

    </p>
@endforeach
