@extends('client.layout.layout')

@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(https://via.placeholder.com/1920x1164)">
    	<div class="auto-container">
			<h1>News & Articles</h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>News Articles</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- News Page Section -->
    <section class="news-page-section">
		<div class="auto-container">
            <div class="row clearfix">

				<!-- News Block -->
                @foreach ($posts as $post )


				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/blog/{{ $post->id }}"><img src="https://via.placeholder.com/360x280" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li><span class="icon fa fa-calendar"></span> March 15, 2020</li>
								<li><span class="icon fa fa-comment-o"></span> 187</li>
							</ul>
							<h5><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h5>
							<div class="text">{{ $post->text }}</div>
							<a href="blog-single.html" class="theme-btn btn-style-four"><span class="txt">Read More</span></a>
						</div>
					</div>
				</div>
                @endforeach

			</div>

			<!-- Post Share Options -->
			<div class="styled-pagination text-center">
				<ul class="clearfix">
					<li><a href="#">1</a></li>
					<li class="active"><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</div>

		</div>
	</section>
	<!-- End Banner Section Two -->

@endsection
