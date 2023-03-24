<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@foreach($comments as $comment)
  <div class="" style="border: 1px solid black;
  padding: 10px; padding-left: {{ $padding }}px;">
    <p>Added on {{ $comment->created_at->format('F j, Y \a\t g:i A') }}</p>
    <p><strong>{{ $comment->user->name }} said:</strong></p>
    <p>{{ $comment->comment_body }}</p>
    @if($comment->file)
      @if(Str::endsWith($comment->file, '.jpg') || Str::endsWith($comment->file, '.png') || Str::endsWith($comment->file, '.jpeg'))
        <img src="{{ asset('storage/comments/' . $comment->file) }}" alt="Comment Image" style="max-width: 100%; max-height: 200px;">
        <br>
        <br>
      @elseif(Str::endsWith($comment->file, '.pdf'))
        <a href="{{ $comment->file_url }}" target="_blank">View PDF</a>
        <br>
        <br>
      @elseif(Str::endsWith($comment->file, '.txt'))
        <a href="{{ $comment->file_url }}" target="_blank">View file</a>
        <br>
        <br>
      @endif
    @endif
    <button class="btn btn-sm btn-secondary reply-btn" data-comment-id="{{ $comment->id }}">Reply</button>
    <div class="reply-form" id="reply-form-{{ $comment->id }}">
      @include('comments.partials.comment_form', ['parentId' => $comment->id])
    </div>
    @if($comment->replies->count() > 0)
      <div>
        <br>
        @include('comments.partials.comment_replies', ['comments' => $comment->replies, 'padding' => $padding + 20])
      </div>
    @endif
    <br>
  </div>
  <br>
  
@endforeach

