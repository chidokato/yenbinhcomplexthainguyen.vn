<section class="apartment">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="gradient-text"> CÁC LOẠI HÌNH CĂN HỘ </h2>
                <div class="desc">
                    <p>Linh hoạt lựa chọn với bộ sưu tập căn hộ 1-3PN thiết kế tinh tế, tối ưu diện tích. Dù là kiến tạo không gian sống đẳng cấp hay tìm kiếm cơ hội đầu tư thông thái, hiệu quả, mỗi căn hộ đều là lựa chọn hoàn hảo, đáp ứng trọn vẹn mọi phong cách sống.</p>
                </div>

                <div class="apartment-slider">
                    <div class="position-relative grid-view">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($canho as $val)
                                <div class="swiper-slide">
                                    <div class="col">
                                        <div class="card card-s card-s4 ">
                                            @foreach($val->Images as $img)
                                            <span><img src="data/images/{{$img->img}}" ></span>
                                            @endforeach
                                            <div class="card-body">
                                                <div class="card-body-wrap">
                                                    <h5 class="card-title"><span>DT thông thủy | 52.7 m2</span></h5>
                                                    <div class="card-info" title="">
                                                        <table>
                                                            <tr>
                                                                <td>Phòng Khách + Bếp + Ăn</td>
                                                                <td>: 22.5 m<sup>2</sup> </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phòng ngủ 1</td>
                                                                <td>: 13.1 m<sup>2</sup></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phòng chức năng</td>
                                                                <td>: 6.7 m<sup>2</sup></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Logia</td>
                                                                <td>: 3.7 m<sup>2</sup></td>
                                                            </tr>
                                                            <tr>
                                                                <td>WC</td>
                                                                <td>: 5.2 m<sup>2</sup></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="button">
                                                    <button class="btn-button">{{$val->tab}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- <div class="swiper-button-next"></div> -->
                        <!-- <div class="swiper-button-prev"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


