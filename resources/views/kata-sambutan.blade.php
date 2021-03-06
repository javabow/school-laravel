@extends('templates.pages-templates')
@section('title')
  {{ $kataSambutan->{'title'.Session::get('lang')} }}
@endsection
@section('content')
  <div class="blog-area full-blog standard single-blog full-blog padding-page">
      <div class="container">
          <div class="row">
              <div class="blog-items">
                  <div class="col-md-10 col-md-offset-1">
                      <br>
                      <ul class="breadcrumb">
                          <li><a href="{{url('/')}}"><i class="fas fa-home"></i> Home</a></li>
                          <li class="active">{{ $kataSambutan->{'title'.Session::get('lang')} }}</li>
                      </ul>
                  </div>
                  <div class="blog-content col-md-10 col-md-offset-1">
                      <div class="item-box">
                          <div class="item">
                              <div class="thumb">
                                      <a href="#"><img class="img-responsive" width="100%" src="{{asset($kataSambutan->thumbnail)}}" alt="Thumb"></a>
                                                              </div>
                              <div class="info">
                                  <div class="meta">
                                      <ul>
  <!--                                         <li><a href="#"><i class="fas fa-user"></i> </a></li> -->
                                          <!-- <li><a href="#"><i class="fas fa-comments"></i> 5 Comments</a></li> -->
                                      </ul>
                                      <div class="share">
                                          <ul>
                                            <li class="share">
                                              <a href="#"><i class="fas fa-share-alt"></i></a>
                                            </li>
                                            <li class="facebook">
                                                <div id="fb-root"></div>
                                            	<div class="fb-share-button" data-layout="button" data-size="small">
                                                   	<a href="#"><i class="fab fa-facebook-f"></i></a>
                                            	</div>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="content text-justify">
                                    {!! $kataSambutan->{'content'.Session::get('lang')} !!}
                                  </div>
                              </div>


                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
