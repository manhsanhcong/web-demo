<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Tháng năm rộn ràng, ngập tràn khuyến mại.Tặng thêm đến 50% thời gian sử dụng dịch vụ.';
        $post->content = 'Từ ngày 25/05/2019 đến hết ngày 31/05/2019, SunCloud triển khai chương trình khuyến mại, 
                          tặng thêm đến 50% thời gian sử dụng cho tất cả khách hàng khi đăng kí các dịch vụ Máy chủ ảo 
                          (Cloud Server), Thuê chỗ đặt (Colocation):
                          Chi tiết chương trình như sau:
                          1. Dịch vụ Máy chủ ảo (Cloud Server)
                          Cloud Server: Tặng 4 tháng sử dụng dịch vụ khi thanh toán trả trước 12 tháng. 
                          Tiết kiệm chi phí 25%. Nhập mã IDC1204.
                          2. Dịch vụ Thuê chỗ đặt Server (Colocation)
                          Tặng 6 tháng sử dụng dịch vụ khi thanh toán trả trước 12 tháng.
                          Chỉ 7 ngày duy nhất từ ngày 25/05/2019 đến hết ngày 31/05/2019, hãy nắm bắt chương trình khuyến mại, 
                          đăng kí và nhận ngay ưu đãi từ SunCloud!';
        $post->user_id = 1;
        $post->category_id = 2;
        $post->avatar = '';
        $post->save();
    }
}
