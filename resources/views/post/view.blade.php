@extends('layouts.admin')

@section('content')
    <div class="title" style="background: #e9e9e9">
        <h3 style="text-align: center">{{$post->title}}</h3>
    </div>
    <div class="content">
        <div class="col-md-12">
            <div class="content1" style="float: right; margin-right: 50px   ">
                <a class="fa fa-pencil fa-2x edit" href="{{ route('post.edit', $post->id) }}"
                   style="width: 40px; color: #FFC107" title="Sửa"></a>
                <a class="fa fa-trash delete fa-2x" href="{{ route('post.destroy', $post->id) }}"
                   style="width: 40px; color:red" title="Xóa"
                   onclick="return confirm('Bạn chắc chắn muốn xóa?')"></a>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <h4 scope="col">Category :</h4>
            <p>{{$post->category->name}}</p>
            <div class="row" style="width: auto">
                <h4 scope="col" class="col-xs-12 col-sm-8 col-md-9">Content :</h4></br>
                <h4 scope="col" class="col-xs-12 col-sm-4 col-md-2">Ảnh đại diện :</h4>
            </div>
            <div class="row">
                <div class="box-Highlights col-xs-12 col-sm-8 col-md-9" style="margin-bottom: 20px">
                    <div class="box-txt"><p>{!! $post->content !!}</p></div>
                </div>
                <div class="sidebar col-xs-12 col-sm-4 col-md-3">
                    <td class="avatar"><img src="{{ asset('storage/'. $post->avatar) }}"
                                            style="height:250px; width:auto; margin-top: 24px; margin-bottom: 30px">
                    </td>
                    <div id="secondary" class="secondary">
                        <div id="widget-area" class="widget-area" role="complementary">
                            <aside id="text-4" class="widget widget_text"><h4 class="widget-title"
                                                                              style="text-align: center">THÔNG TIN LIÊN
                                    HỆ</h4>
                                <div class="bar"></div>
                                <div class="textwidget">
                                    <div class="contact-info contact-info-block">
                                        <ul class="contact-details">
                                            <li><strong>Hotline:<br>
                                                </strong>0243.8259.888 – 0911.471.191
                                            </li>
                                            <li></i> <strong>Email:<br>
                                                </strong><a href="mailto:truongpv@viettelco.com.vn">truongpv@viettelco.com.vn</a>
                                            </li>
                                            <li></i> <strong>Địa chỉ:<br>
                                                </strong>92/1 – Đào Tấn – Ba Đình – Hà Nội
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            <aside id="custom_html-6" class="widget_text widget widget_custom_html"><h4
                                        class="widget-title" style="text-align: center">FAN PAGE</h4>
                                <div class="bar"></div>
                                <div class="textwidget custom-html-widget">
                                    <iframe style="border: none; overflow: hidden;"
                                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwifisukien.vn%2F&amp;tabs=timeline&amp;width=300&amp;height=350&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId=222207824958799"
                                            width="100%" height="350PX" frameborder="0" scrolling="no"></iframe>
                                </div>
                            </aside>
                            <aside id="rpwe_widget-2" class="widget rpwe_widget recent-posts-extended"><h4
                                        class="widget-title" style="text-align: center">SỰ KIỆN ĐÃ TRIỂN KHAI</h4>
                                <div class="bar"></div>
                                <div class="rpwe-block ">
                                    <ul class="rpwe-ul">
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/khoi-nghiep-cung-kawai/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/2019/03/khoi-nghiep-cung-kawai-9-45x45.jpg"
                                                        alt="Khởi nghiệp cùng Kawai"></a>
                                            <h3 class="rpwe-title"><a
                                                        href="http://wifisukien.vn/khoi-nghiep-cung-kawai/"
                                                        title="Liên kết đến Khởi nghiệp cùng Kawai" rel="bookmark">Khởi
                                                    nghiệp cùng Kawai</a></h3>
                                            <time class="rpwe-time published" datetime="2019-03-18T09:07:17+00:00">18
                                                Tháng Ba, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/samsung-galaxy-s10/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/2019/03/samsung-galaxy-s10-6-45x45.jpg"
                                                        alt="Sự kiện ra mắt Samsung Galaxy S10+ tại SVĐ Quốc Gia Mỹ Đình"></a>
                                            <h3 class="rpwe-title"><a href="http://wifisukien.vn/samsung-galaxy-s10/"
                                                                      title="Liên kết đến Sự kiện ra mắt Samsung Galaxy S10+ tại SVĐ Quốc Gia Mỹ Đình"
                                                                      rel="bookmark">Sự kiện ra mắt Samsung Galaxy S10+
                                                    tại SVĐ Quốc Gia Mỹ Đình</a></h3>
                                            <time class="rpwe-time published" datetime="2019-03-11T08:04:14+00:00">11
                                                Tháng Ba, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/bao-hiem-manulife/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/2019/01/bao-hiem-manulife-2-45x45.jpg"
                                                        alt="Sự kiện bảo hiểm Manulife Việt Nam"></a>
                                            <h3 class="rpwe-title"><a href="http://wifisukien.vn/bao-hiem-manulife/"
                                                                      title="Liên kết đến Sự kiện bảo hiểm Manulife Việt Nam"
                                                                      rel="bookmark">Sự kiện bảo hiểm Manulife Việt
                                                    Nam</a></h3>
                                            <time class="rpwe-time published" datetime="2019-01-22T03:26:16+00:00">22
                                                Tháng Một, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/manulife-viet-nam/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/manulife-viet-nam-2-45x45.jpg"
                                                        alt="Sự kiện Manulife Việt Nam"></a>
                                            <h3 class="rpwe-title"><a href="http://wifisukien.vn/manulife-viet-nam/"
                                                                      title="Liên kết đến Sự kiện Manulife Việt Nam"
                                                                      rel="bookmark">Sự kiện Manulife Việt Nam</a></h3>
                                            <time class="rpwe-time published" datetime="2018-12-17T16:47:04+00:00">17
                                                Tháng Mười Hai, 2018
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/su-kien-eurosun-viet-nam-2018/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/su-kien-eurosun-viet-nam-2018-6-45x45.jpg"
                                                        alt="Sự kiện EUROSUN Việt Nam 2018"></a>
                                            <h3 class="rpwe-title"><a
                                                        href="http://wifisukien.vn/su-kien-eurosun-viet-nam-2018/"
                                                        title="Liên kết đến Sự kiện EUROSUN Việt Nam 2018"
                                                        rel="bookmark">Sự kiện EUROSUN Việt Nam 2018</a></h3>
                                            <time class="rpwe-time published" datetime="2018-12-11T09:55:49+00:00">11
                                                Tháng Mười Hai, 2018
                                            </time>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <aside id="rpwe_widget-3" class="widget rpwe_widget recent-posts-extended"><h4
                                        class="widget-title" style="text-align: center">SỰ KIỆN SẮP DIỄN RA</h4>
                                <div class="bar"></div>
                                <div class="rpwe-block ">
                                    <ul class="rpwe-ul">
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/vietnam-autoexpo-2019/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/2019/03/vietnam-autoexpo-2019-4-45x45.jpg"
                                                        alt="Vietnam AutoExpo 2019, môi trường lý tưởng cho các doanh nghiệp ô tô, xe máy"></a>
                                            <h3 class="rpwe-title"><a href="http://wifisukien.vn/vietnam-autoexpo-2019/"
                                                                      title="Liên kết đến Vietnam AutoExpo 2019, môi trường lý tưởng cho các doanh nghiệp ô tô, xe máy"
                                                                      rel="bookmark">Vietnam AutoExpo 2019, môi trường
                                                    lý tưởng cho các doanh nghiệp ô tô, xe máy</a></h3>
                                            <time class="rpwe-time published" datetime="2019-03-13T07:40:46+00:00">13
                                                Tháng Ba, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/am-thuc-chau-a/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/am-thuc-chau-a-1-1-45x45.jpg"
                                                        alt="Lễ hội ẩm thực châu Á cùng Coca-Cola"></a>
                                            <h3 class="rpwe-title"><a href="http://wifisukien.vn/am-thuc-chau-a/"
                                                                      title="Liên kết đến Lễ hội ẩm thực châu Á cùng Coca-Cola"
                                                                      rel="bookmark">Lễ hội ẩm thực châu Á cùng
                                                    Coca-Cola</a></h3>
                                            <time class="rpwe-time published" datetime="2019-01-08T08:43:06+00:00">8
                                                Tháng Một, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/su-kien-official-announcement/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/su-kien-official-announcement-4-45x45.jpg"
                                                        alt="Sự kiện Official Announcement"></a>
                                            <h3 class="rpwe-title"><a
                                                        href="http://wifisukien.vn/su-kien-official-announcement/"
                                                        title="Liên kết đến Sự kiện Official Announcement"
                                                        rel="bookmark">Sự kiện Official Announcement</a></h3>
                                            <time class="rpwe-time published" datetime="2019-01-04T03:48:32+00:00">4
                                                Tháng Một, 2019
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/su-kien-pure-vibes-chapter-01/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/su-kien-pure-vibes-chapter-01-7-45x45.jpg"
                                                        alt="Sự kiện Pure Vibes Chapter 01"></a>
                                            <h3 class="rpwe-title"><a
                                                        href="http://wifisukien.vn/su-kien-pure-vibes-chapter-01/"
                                                        title="Liên kết đến Sự kiện Pure Vibes Chapter 01"
                                                        rel="bookmark">Sự kiện Pure Vibes Chapter 01</a></h3>
                                            <time class="rpwe-time published" datetime="2018-12-26T04:04:56+00:00">26
                                                Tháng Mười Hai, 2018
                                            </time>
                                        </li>
                                        <li class="rpwe-li rpwe-clearfix"><a class="rpwe-img"
                                                                             href="http://wifisukien.vn/ngay-hoi-viec-lam-2018-tai-khach-san-jw-marriott-ha-noi/"
                                                                             rel="bookmark"><img
                                                        class="rpwe-alignleft rpwe-thumb"
                                                        src="http://wifisukien.vn/wp-content/uploads/ngay-hoi-viec-lam-2018-tai-khach-san-jw-marriott-ha-noi-1-45x45.jpg"
                                                        alt="Ngày hội việc làm 2018 tại khách sạn JW Marriott Hà Nội"></a>
                                            <h3 class="rpwe-title"><a
                                                        href="http://wifisukien.vn/ngay-hoi-viec-lam-2018-tai-khach-san-jw-marriott-ha-noi/"
                                                        title="Liên kết đến Ngày hội việc làm 2018 tại khách sạn JW Marriott Hà Nội"
                                                        rel="bookmark">Ngày hội việc làm 2018 tại khách sạn JW Marriott
                                                    Hà Nội</a></h3>
                                            <time class="rpwe-time published" datetime="2018-11-12T09:18:55+00:00">12
                                                Tháng Mười Một, 2018
                                            </time>
                                        </li>
                                    </ul>
                                </div><!-- Generated by http://wordpress.org/plugins/recent-posts-widget-extended/ -->
                            </aside>
                        </div><!-- .widget-area -->
                    </div><!-- .secondary -->
                </div>
            </div>
        </div>
        <div style="margin-top: 25px ">
            <a class="btn btn-primary" href="{{ route('post.index') }}">Quay lại</a>
        </div>
    </div>

@endsection
