@extends('layouts.app')

@include('includes.header')
@section('content')
  @include('includes.message-block')
 
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3" style="padding: 30px;">
      <header><h3>What would you like to post about?</h3></header>
      <form action="{{ route('post.create') }}" method="post">
        <div class="form-group">
          <textarea class="form-control title" name="title" id="new-post" rows ="4" placeholder="Title"></textarea>
          <textarea class="form-control" name="body" id="new-post" rows="4" placeholder="Your post"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token">
      </form>
    </div>
  </section>
  <section class="row posts">
    <div class="col-md-6 col-md-offset-3" style="padding: 30px;">
      <header><h2>All Posts</h2></header>
      @foreach($posts as $post)
      <article class="post" data-postid="{{ $post->id }}">
          <h3>{{ $post->title }}</h3>
            <p id="post-content">{{ $post->body }}</p>
          <div class="info">
            Posted by {{ $post->user->name }} on {{ $post->created_at }}
          </div>
          <div class="interaction">
            <a href="#">Like</a> 
            @if(Auth::user() == $post->user)
              |
              <a href="#" class="edit">Edit</a> |
              <a href="{{ route('post.delete', ['post_id' => $post->id]) }}">Delete</a>
            @endif
            @if($post->views > 0)
              <span class="view-counter">views: {{ $post->views }} </span>
            @endif  
          </div>
        </article>
      @endforeach
        
    </div>
  </section>
  
  <div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="post-title">Edit Title</label>
                            <textarea class="form-control" name="post-title" id="post-title" rows="5"></textarea>
                            <label for="post-body">Edit Post</label>
                            <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script>
        var token = '{{ Session::token() }}';
        var urlEdit = '{{ route('edit') }}';
    </script>
@endsection