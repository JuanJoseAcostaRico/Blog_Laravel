@extends('layuot')

@section('content')

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Blog</h1>
                            <span class="subheading">Post del Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
 <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">

                        <ul>
                            @foreach ($posts as $post)
                                <li>
                                    <a href="{{ route('blog.show', $post->slug) }}">
                                        <h2 class="post-title">{{ $post->title }}</h2>
                                        {{ $post->title }}

                                    </a>
                                    <p class="post-meta">
                                        Posteado en {{ $post->created_at }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />


<h1>Lista de Post</h1>

<ul>
@foreach ($posts as $post)
<li>
    <a href="{{ route('blog.show', $post->slug) }}">
    {{ $post->title }}</a>
</li>
@endforeach
</ul>
@endsection
