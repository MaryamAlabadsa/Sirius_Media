<section id="blog" class="recent-posts gray-section large-section"
    style="background-image: url({{ asset('assets/img/assets/absurdity.png')}}">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="section-title text-center title-divider">Recent Posts <span class="highlight">.</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row blog-wrapper">
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <div class="blog-card-wrapper hover3d-wrapper">
                    <div class="card-content hover3d-child">
                        <div class="card-blog-header">
                            <div class="img-wrapper d-flex align-items-center justify-content-center">
                                <a href="blog-single-post-sidebar-layout.html">
                                    <img src="{{asset($blog->images->first()->url)}}" alt="" class="img-fluid img">
                                    {{-- <div class="tag bg-color-purple">Modern</div> --}}
                                </a>
                            </div>
                        </div>
                        <div class="card-blog-body">
                            <h6><a href="{{route('bloglandingdetails',$blog->id)}}">{{$blog->title}}</a></h6>
                            <p class="content">{{$blog->short_description}}<a
                                    href="{{route('bloglandingdetails',$blog->id)}}">[...]</a></p>
                            <div class="card-blog-footer d-flex justify-content-between align-items-end">
                                <p class="date d-flex align-items-end">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{ $blog->created_at->format('F d, Y') }}
                                </p>
                                <p class="info d-flex align-items-end">
                                    <span><i class="fas fa-comment-alt"></i>{{ $blog->comments()->count()
                                        }}</span>
                                    {{-- <span><i class="fas fa-heart"></i>15</span> --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-4">
                <div class="blog-card-wrapper hover3d-wrapper">
                    <div class="card-content hover3d-child">
                        <div class="card-blog-header">
                            <div class="img-wrapper d-flex align-items-center justify-content-center">
                                <a href="blog-single-post-sidebar-layout.html">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid img">
                                    <div class="tag bg-color-blue">Lifestyle</div>
                                </a>
                            </div>
                        </div>
                        <div class="card-blog-body">
                            <h6><a href="#">Guide to UX prototyping</a></h6>
                            <p class="content">Lorem ipsum dolor sit amet, conctetur ping elit. A archcto codi
                                cumque
                                dissimos dobus, dolorum eos expbo id iusto lorum<a href="#">[...]</a></p>
                            <div class="card-blog-footer d-flex justify-content-between align-items-end">
                                <p class="date d-flex align-items-end">
                                    <i class="fas fa-calendar-alt"></i>
                                    April 25, 2022
                                </p>
                                <p class="info d-flex align-items-end">
                                    <span><i class="fas fa-comment-alt"></i>14</span>
                                    <span><i class="fas fa-heart"></i>22</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-card-wrapper hover3d-wrapper">
                    <div class="card-content hover3d-child">
                        <div class="card-blog-header">
                            <div class="img-wrapper d-flex align-items-center justify-content-center">
                                <a href="blog-single-post-sidebar-layout.html">
                                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid img">
                                    <div class="tag bg-color-yellow">Design</div>
                                </a>
                            </div>
                        </div>
                        <div class="card-blog-body">
                            <h6><a href="#">Destinations for photos</a></h6>
                            <p class="content">Lorem ipsum dolor sit amet, conctetur ping elit. A archcto codi
                                cumque
                                dissimos dobus, dolorum eos expbo id iusto lorum<a href="#">[...]</a></p>
                            <div class="card-blog-footer d-flex justify-content-between align-items-end">
                                <p class="date d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    April 25, 2022
                                </p>
                                <p class="info d-flex align-content-center">
                                    <span><i class="fas fa-comment-alt"></i>11</span>
                                    <span><i class="fas fa-heart"></i>17</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

<section class="white-section blog-section single-post-section">
    <div class="container-fluid gray-section">
        <div class="container">
            <div class="row">
                <div class="col comments-col">
                    <div class="post-comments-wrapper gray-section">
                        <h6 class="comments-title">Comments</h6>
                        <ul class="comments-list">

                            @foreach ($info->comments as $comment)
                            <li class="comment d-flex flex-column">
                                <div class="d-flex">
                                    <div class="author-wrapper">
                                        <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                                    </div>
                                    <div class="comment-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p class="author-name">{{$comment->name}}</p>
                                                <p class="date">{{date('Y-m-d', strtotime($comment->created_at))}}
                                                </p>
                                            </div>
                                            <a href="#" class="reply-link"><i class="fa fa-reply"></i>Reply</a>
                                        </div>
                                        <p class="comment-text">
                                            {{$comment->comment}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <h6 class="comments-title">Write a comment</h6>
                        <form action="{{route('store.comment.info')}}" method="POST" class="comment-form">
                            @csrf
                            <div class="input-row d-flex">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="E-mail">
                            </div>
                            <textarea name="comment" placeholder="Your message..."></textarea>
                            <button type="submit">Send Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>