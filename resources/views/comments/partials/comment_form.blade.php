<?php

use Illuminate\Support\Facades\Route;

?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="card mb-4">
  <div class="card-header">
    Add Comment
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <textarea class="form-control" name="comment_body" rows="3" placeholder="Type your comment here..."></textarea>
      </div>
      <div class="form-group">
        <label for="file">File (optional)</label>
        <input type="file" class="form-control-file" name="file" id="file">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Add Comment</button>
      </div>
    </form>
  </div>
</div>


