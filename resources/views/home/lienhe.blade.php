@extends('layouts.apphome')

@section('content')
    <div class="content">
        <!-- section -->
        <section class="section_title">
            <div class="container">
                <div class="row">
                    <p>Liên hệ</p>
                </div>
            </div>
        </section>
        <!-- end section -->
        <div class="container">
            <div class="contact"></div>
            <div class="row">
                <div class="col-md-6 info" style="margin-top: 30px; margin-bottom: 20px; padding-bottom: 20px">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1" style="color: #1e3e6e; margin-top: 30px">Họ và tên</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Họ và tên">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số điện thoại</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Nội dung</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn" style="background: #1e3e6e; color: white">Đăng ký ngay
                        </button>
                    </form>
                </div>
                <div class="col-md-5 information">
                    <p class="title2">Công ty Cổ phần Điện toán Viễn Thông Viettelco</p>
                    <p class="title3">ĐKKD số: 0106454130<br>
                        Email: truongpv@viettelco.com.vn<br>
                        Hotline: 0243.8259.888 - 0911.471.191<br>
                        Địa chỉ: Số 92/1 Đào Tấn - Ba Đình - Hà Nội</p>
                    <img class="map" src="/images/map.png">
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer" style="background: #1e3e6e; padding-bottom: 20px; margin-top: 30px">
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
