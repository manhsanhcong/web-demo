@extends('layouts.apphome')

@section('content')
    <div class="content">
        <!-- slider -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="/images/slider1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="/images/slider2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/images/slider3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- end slide -->

        <!-- promotion -->
        <div class="promotion">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <p class="gift col-md-3 col-sm-3"><img src="/images/gift.png" alt="Gift"></p>
                        <div class="col-md-9 col-sm-9">
                            <p class="title col-md-9 col-sm-6">Ưu đãi lớn</p>
                            <div class="row">
                                <p class="title1 col-md-6 col-sm-3">Tặng 01 tháng khi thanh toán 06 tháng<br>
                                    Tặng 02 tháng khi thanh toán 12 tháng</p>
                                <div class="title1 col-md-6 col-sm-3">Áp dụng cho dịch vụ máy chủ từ gói xa<br>
                                    Từ ngày 01/05/2019 đến ngày 30/05/2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end promotion -->

        <!-- content -->
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server1.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="/cloudserver" title="">Cloud Server</a>
                                <p class="title3">VDC Cloud Server cam kết hệ thống luôn ổn định và sẵn sàng ở mức tối
                                    thiểu 99,99%.&nbsp;Sử
                                    dụng 100% ổ cứng SSD tốc độ tối thiểu 500 MB/s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server2.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="/thuemaychurieng" title="">Thuê máy chủ riêng</a>
                                <p class="title3">VDC cung cấp dịch vụ cho thuê máy chủ tại các trung tâm dữ liệu đạt
                                    chuẩn quốc tế,
                                    với hạ tầng phần cứng và giải pháp công nghệ hàng…

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server3.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="/thuechodatmaychu" title="">Thuê chỗ đặt máy chủ</a>
                                <p class="title3">Dịch vụ VDC Colocation là dịch vụ cho thuê một phần không gian – diện
                                    tích mặt sàn để
                                    đặt hệ thống máy chủ và các thiết phị phần cứng…

                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server4.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="/giaiphapmaychu" title="">Giải pháp máy chủ</a>
                                <p class="title3">VDC cung cấp giải pháp tích hợp hệ thống: <strong>Thiết lập hệ thống
                                        Cloud</strong>, <strong>Giải pháp bảo mật</strong>, <strong>Tư vấn hệ thống
                                        mạng máy chủ công ty</strong>, Giải pháp cân…

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server5.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="#" title="">Email</a>
                                <p class="title3">Khi sử dụng email chuyên nghiệp theo tên miền riêng bạn đang chứng
                                    minh rằng bạn thực
                                    sự nghiêm túc trong kinh doanh. Nền tảng ...</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/cloud-server6.png"
                                 alt="Cloud Server">
                            <div class="card-body">
                                <a class="title2" href="#" title="">Hosting + Tên miền</a>
                                <p class="title3">Nơi lý tưởng cho website của bạn Nhanh, ổn định, bảo mật nhiều sự lựa
                                    chọn. Dịch vụ
                                    cloud hosting (lưu trữ đám mây) tốc độ gấp 3 bình thường</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content -->

        <!-- promotion -->
        <div class="promotion">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <p class="gift col-md-3 col-sm-3"><img src="/images/gift.png" alt="Gift"></p>
                        <div class="col-md-9 col-sm-9">
                            <p class="title col-md-9 col-sm-6">Ưu đãi lớn</p>
                            <div class="row">
                                <p class="title1 col-md-6 col-sm-3">Tặng 01 tháng khi thanh toán 06 tháng<br>
                                    Tặng 02 tháng khi thanh toán 12 tháng</p>
                                <div class="title1 col-md-6 col-sm-3">Áp dụng cho dịch vụ Cloudserver từ gói xa<br>
                                    Từ ngày 01/05/2019 đến ngày 30/05/2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end promotion -->

        <!-- why content -->
        <section class="info_content" style="margin-bottom: 30px">
            <!-- Container-->
            <div class="container animation-elements animated fadeInDown" style="opacity: 1;">
                <!-- Titles -->
                <h1 class="title4">
                    <span style="background: #1e3e6e; color: white; padding: 0px 10px">Lý do bạn chọn SunCloud</span>
                </h1>
                <!-- End Titles -->

                <!-- Row fuid-->
                <div class="row">
                    <!-- Item feature-->
                    <div class="why col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/1.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">Cơ sở hạ tầng máy chủ</h6>
                                    <p class="title5">Tốc độ đảm bảo và ổn định</p>
                                </div>
                            </div>
                            <p class="title3">Trung tâm dữ liệu đạt chuẩn quốc tế VDC-VNPT Tier3. Hệ thống điện ổn định,
                                nhiệt độ lý
                                tưởng, đáp ứng quy chuẩn quốc tế: Cấu hình mạnh, Nhanh chóng &amp; ổn định, Bảo mật mọi
                                thông tin.</p>
                        </div>
                    </div>
                    <!-- End Item feature-->

                    <!-- Item feature-->
                    <div class="why col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/2.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">24/7 Support</h6>
                                    <p class="title5">Kịp thời và chính xác</p>
                                </div>
                            </div>
                            <p class="title3">VDC luôn sẵn sàng hỗ trợ và cam kết phản hồi thông tin đến Quý khách trong
                                vòng tối đa 15
                                phút vào bất cứ thời gian nào trong ngày, trong tuần, trong năm và các ngày lễ tết.</p>
                        </div>
                    </div>
                    <!-- End Item feature-->

                    <!-- Item feature-->
                    <div class="why1 col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/3.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">Kinh nghiệm triển khai hệ thống lớn</h6>
                                    <p class="title5">Đội ngũ IT trình độ kỹ thuật cao.</p>
                                </div>
                            </div>
                            <p class="title3">Hiện nay, 80% Nhân sự kỹ thuật của VDC đạt chứng chỉ Microsoft Certified
                                Solutions Expert
                                (MCSE), Linux Professional Institute Certification (LPIC-2) của tổ chức quốc tế.</p>
                        </div>
                    </div>
                    <!-- End Item feature-->

                </div>
                <!-- End Row fuid-->

                <!-- Row fuid-->
                <div class="row">
                    <!-- Item feature-->
                    <div class="why col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/4.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">Mở rộng hệ thống linh hoạt</h6>
                                    <p class="title5">Bổ sung RAM, CPU, Ổ Cứng linh hoạt</p>
                                </div>
                            </div>
                            <p class="title3">Mở rộng nhanh khi có nhu cầu và hạ cấp (CPU, RAM) khi không cần sử dụng
                                nhiều tài
                                nguyên.</p>
                        </div>
                    </div>
                    <!-- End Item feature-->

                    <!-- Item feature-->
                    <div class="why col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/5.png" style="height:55px;" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">Hệ thống máy chủ bảo mật</h6>
                                    <p class="title5">Bảo mật hệ thống an toàn nhất</p>
                                </div>
                            </div>
                            <p class="title3">Được tạo ra bởi các private-network riêng tránh được sniff, attack, scan…
                                từ các Server
                                khác..</p>
                        </div>
                    </div>
                    <!-- End Item feature-->

                    <!-- Item feature-->
                    <div class=" why1 col-sm-6 col-md-4">
                        <div class="item_feature border_right">
                            <div class="row head_feature">
                                <div class="col-md-2">
                                    <img src="/images/6.png" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h6 class="title6">Cước phí hợp lý nhất</h6>
                                    <p class="title5">Giá thuê máy chủ hợp lý nhất thị trường.</p>
                                </div>
                            </div>
                            <p class="title3">Giá thuê máy chủ ảo, Cloud Server của VDC-VNPT luôn hợp lý với chất lượng
                                cao nhất..</p>
                        </div>
                    </div>
                    <div class="icon-mes">
                        <a href="#" target="_blank" rel="noopener"><img
                                    src="/images/wechat.png"
                                    class="alignnone wp-image-145 size-full" alt="Suncloud"></a>
                    </div>
                    <!-- End Item feature-->

                </div>
                <!-- End Row fuid-->

            </div>
            <!-- End Container-->
        </section>
        <!-- end why content -->

        <!-- footer -->
        <div class="footer" style="background: #1e3e6e; padding-bottom: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget"><h3><a href="#"><span class="title4">Liên hệ</span></a></h3>
                            <p>
                                <a href="#">Địa chỉ: Số 92/1 phố Đào Tấn, Quận Ba Đình, TP. Hà Nội</a><br>
                                <a href="#">Tel: 0911 471 191</a><br>
                                <a href="#">Fax:(024) 3825 9888</a><br>
                                <a href="#">Email: truongpv@viettelco.com.vn</a><br>
                                <a href="#">Mã số thuế: 0106454130</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget"><h3><a class="title4" href="#"><span>Về SunCloud</span></a></h3>
                            <p><a href="#">Giới thiệu</a><br>
                                <a href="#">Liên hệ</a><br>
                                <a href="#">Thanh toán</a><br>
                                <a href="#">Quy định</a><br>
                                <a href="#">Hỗ trợ</a><br>
                                <a href="#">Tin tức</a><br>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget"><h3><span class="title4">DỊCH VỤ</span></h3>
                            <p>
                                <a href="#">Trang chủ</a><br>
                                <a href="#">Cloud Server</a><br>
                                <a href="#">Thuê máy chủ riêng</a><br>
                                <a href="#">Thuê chỗ đặt máy chủ</a><br>
                                <a href="#">Giải pháp máy chủ</a><br>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget"><h3><a href="#"><span class="title4">CHÍNH SÁCH</span></a></h3>
                            <p>
                                <a href="#">Chính sách hoàn tiền</a><br>
                                <a href="#">Quy định sử dụng dịch vụ</a><br>
                                <a href="#">Chính sách bảo mật</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <p class="title7">THANH TOÁN QUA NGÂN HÀNG</p>
                            <a href="#">
                                <img class="banks" src="/images/banks.png" alt="Thanh toán qua ngân hàng">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="widget">
                            <p class="title7">ĐĂNG KÍ NHẬN THÔNG TIN</p>
                            <form class="form-inline" id="receive-info" method="POST">
                                <input name="email" type="email" class="form-controls news-letter-input"
                                       placeholder="    Nhập email của bạn…" required="">
                                <button class="btn btn-vnh news-letter-btn"><i class="fa fa-paper-plane-o fa-2x"
                                                                               aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <p class="title7">CHẤP NHẬN THANH TOÁN</p>
                            <a href="#">
                                <img class="banks" src="/images/online-payments.png" alt="Thanh toán qua ngân hàng">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="widget">
                            <p class="title7">KẾT NỐI VỚI CHÚNG TÔI</p>
                            <a rel="nofollow" href="#" class="social-network"><i class="fa fa-facebook fa-2x"
                                                                                 aria-hidden="true"></i></a>
                            <a rel="nofollow" href="#" class="social-network"><i class="fa fa-twitter fa-2x"
                                                                                 aria-hidden="true"></i></a>
                            <a rel="nofollow" href="#" class="social-network"><i class="fa fa-google-plus fa-2x"
                                                                                 aria-hidden="true"></i></a>
                            <a rel="nofollow" href="#" class="social-network"><i class="fa fa-youtube-play fa-2x"
                                                                                 aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-wapper">
                    <div class="row">
                        <div class="col-sm-8 col-md-12">
                            <div class="footer-coppyright"><a></a> <span>Copyright © Công ty Cổ phần Điện toán Viễn thông Viettelco</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->
    </div>
@endsection
