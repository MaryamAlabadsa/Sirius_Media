<section id="projects" class="projects-section light-gray-section">
    <div class="container">
        <div class="button-group button-group-default d-flex justify-content-center">
            <button data-filter="*" class="active-button">Show All</button>
            @foreach ($services as $service)
            <button data-filter=".{{$service->id}}">{{$service->title}}</button>
            @endforeach

            {{-- <button data-filter=".design">Design</button>
            <button data-filter=".packaging">Packaging</button>
            <button data-filter=".advertising">Advertising</button> --}}
        </div>
    </div>
    <div class="container-fluid">
        <div class="grid row">
            @foreach ($projects as $project)
            <div class="grid-item {{$project->service->id}}">
                <div class="img-wrapper">
                    <img src="{{asset($project->images->first()->url)}}" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="{{route('projectlandingdetails',$project->id)}}"
                            class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>{{$project->title}}</h6>
                                <p class="info">
                                    <span>17<i class="fa fa-comments"></i></span>
                                    <span>24<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="grid-item design">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Notebook Mockup</h6>
                                <p class="info">
                                    <span>13<i class="fa fa-comments"></i></span>
                                    <span>21<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item branding packaging advertising">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Clipboard Stationery</h6>
                                <p class="info">
                                    <span>24<i class="fa fa-comments"></i></span>
                                    <span>21<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item advertising">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Paper Bag</h6>
                                <p class="info">
                                    <span>35<i class="fa fa-comments"></i></span>
                                    <span>52<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item advertising">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Book Mockup</h6>
                                <p class="info">
                                    <span>12<i class="fa fa-comments"></i></span>
                                    <span>23<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item packaging advertising">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Cards Mockup</h6>
                                <p class="info">
                                    <span>24<i class="fa fa-comments"></i></span>
                                    <span>15<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item branding">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Branding Mockup</h6>
                                <p class="info">
                                    <span>15<i class="fa fa-comments"></i></span>
                                    <span>11<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid-item branding packaging">
                <div class="img-wrapper">
                    <img src="http://via.placeholder.com/1920x1080" alt="" class="img-fluid">
                    <div class="description-box hover3d-wrapper">
                        <a href="project-mixed-1.html" class="content d-flex align-items-end hover3d-child">
                            <div class="content-wrapper d-flex justify-content-between">
                                <h6>Branding Mockup</h6>
                                <p class="info">
                                    <span>8<i class="fa fa-comments"></i></span>
                                    <span>14<i class="far fa-heart"></i></span>
                                </p>
                            </div>
                        </a>
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

                            @foreach ($projectOne->comments as $comment)
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
                        {{-- <h6 class="comments-title">Write a comment</h6>
                        <form action="{{route('store.Comment.project',$project->id)}}" method="POST"
                            class="comment-form">
                            @csrf
                            <div class="input-row d-flex">
                                <input type="text" name="name" placeholder="Name">
                                <input type="email" name="email" placeholder="E-mail">
                            </div>
                            <textarea name="comment" placeholder="Your message..."></textarea>
                            <button type="submit">Send Comment</button>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>