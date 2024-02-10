@extends('client.layout.layout')

@section('content')

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

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="blog-single padding-right">
                    <div class="inner-box">
                        <div class="image">
                            <img src="https://via.placeholder.com/800x450" alt="" />
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon fa fa-calendar"></span> March 15, 2020</li>
                                <li><span class="icon fa fa-comment-o"></span> Comments 187</li>
                                <li><span class="icon fa fa-folder-open-o"></span> Photography</li>
                            </ul>
                            <h3>{{ $blog->title }}</h3>
                            <div class="text">
                                <p>{{ $blog->text }}</p>
                                <!-- Quote Box -->
                                <div class="quote-box">
                                    <div class="inner-box">
                                        <div class="quote"><span class="quote-icon flaticon-quote-3"></span>We Convert Digital Brands Into The <br> Profitable Amazing Products</div>
                                        <div class="author">--- Mark J. Zamberg</div>
                                    </div>
                                </div>
                                <ul class="blog-list">
                                    <li>
                                        <strong>Unique Set of Solutions</strong>
                                        Est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laud antium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.
                                    </li>
                                    <li>
                                        <strong>Enrich Web Experience</strong>
                                        Aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque por quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                    </li>
                                </ul>
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/385x300" alt="" />
                                        </div>
                                    </div>
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="https://via.placeholder.com/385x300" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Post Share Options-->
                            <div class="post-share-options">
                                <div class="post-share-inner clearfix">
                                    <div class="pull-left tags"><span>Post Tags: </span><a href="#">Web Design,</a> <a href="#">SEO, </a><a href="#">Photography,</a></div>
                                    <ul class="social-box pull-right">
                                        <span>Sharing Post:</span>
                                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li class="twitter"><a href="#"><span class="fa fa-behance"></span></a></li>
                                        <li class="facebook"><a href="#"><span class="fa fa-facebook-f"></span></a></li>
                                        <li class="linkedin"><a href="#"><span class="fa fa-instagram"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Comments Area -->
                    <div class="comments-area">
                        <div class="group-title">
                            <h3>Post Comments (2)</h3>
                        </div>

                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="https://via.placeholder.com/60x60" alt=""></div>
                                <div class="comment-info clearfix"><strong>Tanya Leepman</strong><div class="comment-time">February 15, 2020 at 3:48pm</div></div>
                                <div class="text">Tempor incididunt labore loremy enim veniams lorem ipsum dol labore dolore magna enim ad veniam quis incididunt ut laboret dolore sed magna aliqua.</div>
                                <a class="theme-btn reply-btn" href="#">Reply <span class="arrow flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>

                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="https://via.placeholder.com/60x60" alt=""></div>
                                <div class="comment-info clearfix"><strong>William Baysen</strong><div class="comment-time">February 15, 2020 at 3:48pm</div></div>
                                <div class="text">Tempor incididunt labore loremy enim veniams lorem ipsum dol labore dolore magna aliqua ad veniam quis incididunt ut magna aliqua laboret dolore.</div>
                                <a class="theme-btn reply-btn" href="#">Reply <span class="arrow flaticon-arrow-pointing-to-right"></span></a>
                            </div>
                        </div>
                    </div>



                    <!-- Comment Form -->
                    <div class="comment-form">

                        <div class="group-title">
                            <h3>Leave A Comment</h3>
                            <div class="group-text">We’ll not publish your email address. Required fields are marked with *</div>
                        </div>

                        <!--Comment Form-->
                        <form method="post" action="blog.html">
                            <div class="row clearfix">

                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="website" placeholder="Website" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea class="" name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">SEND MESSAGE</span></button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Comment Form -->



                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar sticky-top">

                    <!-- Search -->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="keyword ..." required>
                                <button type="submit"><span class="icon fa fa-search"></span></button>
                            </div>
                        </form>
                    </div>

                    <!-- Categories Widget -->
                    <div class="sidebar-widget categories-widget">
                        <!-- Sidebar Title -->
                        <div class="sidebar-title">
                            <h4>Categories</h4>
                            <div class="separate"></div>
                        </div>
                        <div class="widget-content">
                            <ul class="blog-cat">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Creativity</a></li>
                                <li><a href="#">Freelancing</a></li>
                                <li><a href="#">Web Design</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Popular Post  -->
                    <div class="sidebar-widget popular-posts">
                        <!-- Sidebar Title -->
                        <div class="sidebar-title">
                            <h4>recent Posts</h4>
                            <div class="separate"></div>
                        </div>
                        <div class="widget-content">
                            <article class="post">
                                <figure class="post-thumb"><img src="https://via.placeholder.com/70x70" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-single.html">There also firm amenty <br> to increase ROI</a></div>
                                <div class="post-info">By Andrew</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="https://via.placeholder.com/70x70" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-single.html">Transforming how we think about data</a></div>
                                <div class="post-info">By Andrew</div>
                            </article>
                            <article class="post">
                                <figure class="post-thumb"><img src="https://via.placeholder.com/70x70" alt=""><a href="blog-single.html" class="overlay-box"><span class="icon fa fa-link"></span></a></figure>
                                <div class="text"><a href="blog-single.html">Next generation of our technology</a></div>
                                <div class="post-info">By Andrew</div>
                            </article>
                        </div>
                    </div>

                    <!-- Newsletter Widget -->
                    <div class="sidebar-widget newsletter-widget">
                        <!-- Sidebar Title -->
                        <div class="sidebar-title">
                            <h4>Newsletter</h4>
                            <div class="separate"></div>
                        </div>
                        <div class="widget-content">
                            <div class="text">Kum graecvib appareat nese atusu ipsum utam eleifend haseiy sonety.</div>

                            <!-- Newsletter Form -->
                            <div class="newsletter-form">
                                <form method="post" action="contact.html">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Enter your email" required>
                                        <button type="submit"><span class="icon fa fa-envelope"></span></button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Popular Tags -->
                    <div class="sidebar-widget popular-tags">
                        <!-- Sidebar Title -->
                        <div class="sidebar-title">
                            <h4>Popular Tags</h4>
                            <div class="separate"></div>
                        </div>
                        <div class="widget-content">
                            <a href="#">Branding</a>
                            <a href="#">Web Design</a>
                            <a href="#">Digital</a>
                            <a href="#">Development</a>
                            <a href="#">Marketing</a>
                            <a href="#">SEO</a>
                            <a href="#">Planning</a>
                            <a href="#">IT Solutions</a>
                            <a href="#">Website</a>
                            <a href="#">Fashion</a>
                            <a href="#">Startup</a>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>
</div>

@endsection
