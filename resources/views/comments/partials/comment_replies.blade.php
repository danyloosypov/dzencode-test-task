<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@php
  $comments = $comments->reverse(); // Reverse the comments collection
@endphp

@foreach($comments as $comment)
  <div style="padding-left: {{ $padding }}px;">
    <p>{{ $comment->user->name }} said:</p>
    <p>{{ $comment->comment_body }}</p>
    @if($comment->file)
      @if(Str::endsWith($comment->file, '.jpg') || Str::endsWith($comment->file, '.png') || Str::endsWith($comment->file, '.jpeg'))
        <img src="{{ $comment->file_url }}" alt="Comment Image" style="max-width: 100%; max-height: 200px;">
      @elseif(Str::endsWith($comment->file, '.pdf'))
        <a href="{{ $comment->file_url }}" target="_blank">View PDF</a>
      @else
        <a href="{{ $comment->file_url }}" target="_blank">Download File</a>
      @endif
    @endif
    <button class="btn btn-sm btn-secondary reply-btn" data-comment-id="{{ $comment->id }}">Reply</button>
    <div class="reply-form" id="reply-form-{{ $comment->id }}">
      @include('comments.partials.comment_form', ['parentId' => $comment->id])
    </div>
    @if($comment->replies->count() > 0)
      @include('comments.partials.comment_replies', ['comments' => $comment->replies, 'padding' => $padding + 20])
    @endif
  </div>
@endforeach
