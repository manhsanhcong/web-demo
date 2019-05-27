@extends('layouts.apphome')

@section('content')
    <div class="content">
        <!-- section -->
        <section class="section_title">
            <div class="container">
                <div class="row">
                    <p>Giải pháp máy chủ</p>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- content -->
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/quan-tri-server-vat-ly.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Dịch vụ Quản trị Server Vật lý</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/thiet-lap-he-thong-cloud.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Dịch vụ thiết lập hệ thống Cloud</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/giai-phap-bao-mat-may-chu.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Dịch vụ Giải pháp bảo mật máy chủ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%"
                                 src="/images/tu-van-thiet-ke-he-thong-mang.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Dịch vụ Tư vấn thiết kế hệ thống</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%"
                                 src="/images/giai-phap-can-bang-tai-he-thong-may-chu.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Giải pháp cân bằng tải hệ thống </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="img-responsive" style="width:100%" src="/images/quan-tri-cloud-server.png"
                                 alt="Cloud Server">
                            <div class="card">
                                <a class="title2" href="#" title="">Dịch vụ quản trị Cloud Server</a>
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
