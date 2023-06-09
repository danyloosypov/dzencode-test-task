@extends('layouts.app')

@section('content')




  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Comments</h1>
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @include('comments.partials.comment_form', ['parentId' => NULL])
        @include('comments.partials.comment_replies', ['comments' => $comments, 'padding' => 10])
        <div class="d-flex justify-content-center">
          {{ $comments->links() }}
      </div>
      

      </div>
    </div>
  </div>

  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
  <script>
    $(document).ready(function() {
      // Hide all reply forms by default
      $('.reply-form').hide();

      // Handle the click event on the reply buttons
      $('.reply-btn').click(function() {
        var commentId = $(this).data('comment-id');
        var form = $('#reply-form-' + commentId);
        form.find('#parent-id-input').val(commentId) || null;

        // Toggle the visibility of the reply form
        form.toggle();
      });
    });
  </script>
@endsection

