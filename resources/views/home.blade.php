@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <!-- Start comment-sec Area -->
                <section class="comment-sec-area pt-80 pb-80">
                    <div class="container">
                        <div class="row flex-column">
                            <h5 class="text-uppercase pb-80">05 Comments</h5>
                            <br />
                            <!-- Start commentform Area -->
                            <section class="commentform-area pb-120 pt-80 mb-100">
                                <div class="container">
                                    <h5 class="text-uppercas pb-50">Leave a Comment</h5>
                                    <div class="row flex-row d-flex">
                                        <div class="col-lg-12">
                                            <textarea
                                                class="form-control mb-10"
                                                name="message"
                                                placeholder="Messege"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Messege'"
                                                required=""
                                            ></textarea>
                                            <br>
                                            <button class="btn btn-outline-dark" href="#">Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <br>
                            <!-- Frist Comment -->
                            <div class="comment">
                                <div class="card p-2">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="justify-content-between d-flex"> 
                                            <div class="desc">  
                                                <div >
                                                    <h5 class="d-inline-block"><a href="#">Emilly Blunt</a></h5>
                                                    <h6 class="pl-3 d-inline-block">December 4, 2017 at 3:12 pm</h6>
                                                </div>                              
                                                <p class="comment">
                                                    Never say goodbye till the end comes!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-outline-dark text-uppercase" id="reply-btn" 
                                            onclick="showReplyForm('1','Emilly Blunt')">reply 1</button>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="comment-list left-padding" id="reply-form-1" style="display: none">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="desc">
                                            <h5><a href="#">Goerge Stepphen</a></h5>
                                            <p class="date">December 4, 2017 at 3:12 pm</p>
                                            <div class="row flex-row d-flex">
                                            <form action="#" method="POST">
                                                <div class="col-lg-12">
                                                <textarea
                                                    id="reply-form-1-text"
                                                    cols="60"
                                                    rows="2"
                                                    class="form-control mb-10"
                                                    name="message"
                                                    placeholder="Messege"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Messege'"
                                                    required=""
                                                ></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-outline-dark text-uppercase">Reply</button>
                                            </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                  </section>
                  <!-- End comment-sec Area -->
  
                  
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function showReplyForm(commentId,user) {
      var x = document.getElementById(`reply-form-${commentId}`);
      var input = document.getElementById(`reply-form-${commentId}-text`);

      if (x.style.display === "none") {
        x.style.display = "block";
        input.innerText=`@${user} `;

      } else {
        x.style.display = "none";
      }
    }

</script>
@endsection
