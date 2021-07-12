<div class="container">
    @foreach ($comments as $item)
    <div class="container">
        <strong>{{$item->user->name}}</strong>
        <p>{{$item->comment}}</p>
        <form action="{{route('comments.store')}}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="comment">
                <input type ='hidden' class="form-control" name="post_id" value="{{$post_id}}">
                <input type="hidden" class="form-control" name="parent_id" value="{{$item->id}}">
                <button type="submit" class="btn btn-primary">reply</button>
            </div>

            @include('posts.comments',['comments'=>$item->replies])
        </form>
    </div>

@endforeach


</div>


