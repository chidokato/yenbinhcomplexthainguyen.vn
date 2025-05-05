@extends('layout.index')

@section('title') {{$setting->title ? $setting->title : $setting->name}} @endsection
@section('description') {{$setting->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}data/images/z6111931192228-68adeb5ed9b7d918f28bc256b902e2cb_34.jpg @endsection

@section('css')
<link href="assets/css/home.css" rel="stylesheet">
<link href="assets/css/myswiper.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
@endsection

@section('content')
<div class="home">
    

@include('layout.header')

@include('pages.section.slider')

<section class="overview" id="tong-quan">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="img">
                    <img src="assets/images/1.png">   
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <table>
                        <tr>
                            <td><span>CÔNG TRÌNH:</span></td>
                            <td>Nhà ở cao tầng TT-01 (The Rise), TT-03 (The Flow)<br>thuộc dự án Khu đô thị Yên Bình</td>
                        </tr>
                        <tr>
                            <td><span>CHỦ ĐẦU TƯ:</span></td>
                            <td>Công ty Cổ phần phát triển đô thị Yên Bình <br> Chi nhánh Yên Bình Xuân Mai</td>
                        </tr>
                        <tr>
                            <td><span>Liên danh HTĐT <br> Tổng thầu EPC <br> Đơn vị PTDA:</span></td>
                            <td>Công ty Cổ phần Đầu tư và Xây dựng Xuân Mai</td>
                        </tr>
                        <tr>
                            <td><span>VỊ TRÍ:</span></td>
                            <td>Phường Đồng Tiến và Phường Tân Hương, <br> Thành phố Phổ Yên, Tỉnh Thái Nguyên</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/2.png">
                    <div class="iteam">
                        <p>DIỆN TÍCH <br> KHU ĐẤT XÂY DỰNG:</p>
                        <p>Tòa TT-01 (The Rise) : 6.730 m2</p>
                        <p>Tòa TT-03 (The Flow): 6.776 m2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/3.png">
                    <div class="iteam">
                        <p>SỐ TẦNG:</p>
                        <p>02 tòa tháp</p>
                        <p>20 tầng nổi</p>
                        <p>02 tầng hầm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/4.png">
                    <div class="iteam">
                        <p>LOẠI HÌNH SẢN PHẨM:</p>
                        <p>Căn hộ thương mại</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/5.png">
                    <div class="iteam">
                        <p>SỐ CĂN HỘ:</p>
                        <p>1.400 căn</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/6.png">
                    <div class="iteam">
                        <p>MẬT ĐỘ XÂY DỰNG:</p>
                        <p>~46.4%</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/7.png">
                    <div class="iteam">
                        <p>PHÁP LÝ:</p>
                        <p>Sổ đỏ sở hữu lâu dài</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/8.png">
                    <div class="iteam">
                        <p>THỜI ĐIỂM KÝ HĐMB:</p>
                        <p>05/2025</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="iteam-row">
                    <img src="assets/images/9.png">
                    <div class="iteam">
                        <p>DỰ KIẾN BÀN GIAO:</p>
                        <p>Quý II/2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- @include('pages.section.overview') -->
@include('pages.section.outstanding')
@include('pages.section.location')

<section class="potential">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="title gradient-text mb-4">
                    Tiềm năng gia tăng giá trị vượt trội <br> đón đầu tương lai
                </div>
                <div class="desc">
                    <div class="img">
                        <img  src="assets/images/58.png">
                    </div>
                    <div class="content">
                        <p>Sở hữu vị trí tâm điểm đón đầu chu kỳ phát triển hạ tầng & công nghiệp của Phổ Yên, Yên Bình Complex nắm chắc tiềm năng tăng giá "phi mã". Lợi thế nhân đôi khi là căn hộ thương mại tiên phong tại "thủ phủ công nghệ", đón đầu nhu cầu ở khổng lồ của hàng trăm nghìn chuyên gia Samsung & KCN, mở ra cơ hội đầu tư kép vượt trội: vừa gia tăng giá trị tài sản, vừa khai thác cho thuê với lợi nhuận bền vững.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="utilities" id="tien-ich">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="img mb-4">
                    <img class="width80" src="assets/images/16.png">
                    <div class="title">TIỆN ÍCH ĐẶC QUYỀN</div>
                </div>
                <div class="desc">
                    <p>Khám phá đặc quyền tận hưởng thế giới tiện ích hoàn mỹ ngay ngưỡng cửa, nơi nuông chiều mọi giác quan, mang đến cuộc sống tiện nghi viên mãn và nâng tầm giá trị mỗi ngày</p>
                    <img src="assets/images/17.png">
                </div>
            </div>
            <div class="col-md-4 pt-5">
                <div class="img mt-4">
                    <img class="w-100" src="assets/images/15.png">
                </div>
                <div class="content">
                    <ol class="fancy-counter">
                        <li>Quảng Trường Bậc Cấp</li>
                        <li>Khu BBQ ngoài trời</li>
                        <li>Đường dạo chạy bộ ven hồ</li>
                        <li>Màng xanh cảnh quan</li>
                        <li>Khu thư giãn, vọng cảnh</li>
                        <li>Khu sân chơi đa năng</li>
                        <li>Đường dạo bậc bước BTXM</li>
                        <li>Quảng trường trung tâm</li>
                        <li>Bãi cỏ đa năng</li>
                        <li>Khu vui chơi trẻ em</li>
                        <li>Tổ hợp sân thể thao</li>
                        <li>Cung đường thể thao</li>
                        <li>Vườn cờ</li>
                    </ol>

                    <ol class="fancy-counter fancy-counter-14">
                        <li>Sân thiền, Yoga ngoài trời</li>
                        <li>Đường dạo kết nối</li>
                        <li>Quảng trường clubhouse</li>
                        <li>Trục quảng trường ánh sáng</li>
                        <li>Sân vui chơi trẻ em</li>
                        <li>Sân tập Yoga</li>
                        <li>Khu nghỉ tĩnh</li>
                        <li>Sân thể thao</li>
                        <li>Bãi cỏ đa năng</li>
                        <li>Sân chơi âm nhạc</li>
                        <li>Giàn hoa cảnh quan</li>
                        <li>Bãi đỗ xe</li>
                        <li>Trường Học</li>
                    </ol>
                </div>
            </div>
        </div>

        
    </div>
</section>

<section class="utilities-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title mb-2">HỆ THỐNG GIÁO DỤC TOÀN DIỆN</div>
                <p>Trường mầm non, tiểu học, THCS... hiện đại với đội ngũ giáo viên chuyên nghiệp.</p>
                <div class="img"><img src="assets/images/46.png"></div>
            </div>
            <div class="col-md-6">
                <div class="img"><img src="assets/images/45.png"></div>
                <div class="title mt-4">HỆ THỐNG TRUNG TÂM THƯƠNG MẠI VÀ GIẢI TRÍ</div>
                <p>Nhà hàng Á, Âu, Việt</p>
                <p>Trung tâm thương mại mua sắm</p>
                <p>Hệ thống chuỗi Shophouse kinh doanh, khu BBQ, Gym, Spa, Sân Tennis, Karaoke ….</p>
            </div>
        </div>
    </div>
</section>

<hr class="line">

<!-- @include('pages.section.utilities') -->
@include('pages.section.premises')
@include('pages.section.apartment')
@include('pages.section.policy')

@endsection

@section('js')
<script>
    var totalSlides = document.querySelectorAll('.swiper-slide').length;
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
        initialSlide: totalSlides - 1,
        cardsEffect: {
            perSlideOffset: 9,
            perSlideRotate: 0.1,
        },
        navigation: {
            // nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-next"
        }
    });

    var swiper8 = new Swiper(".hero-slider .swiper", {
        spaceBetween: 0,
        effect: "fade",
        lazy: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".hero-slider .swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".hero-slider .swiper-button-next",
            prevEl: ".hero-slider .swiper-button-prev",
        },
    });

    var swiper7 = new Swiper(".apartment-slider .swiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 30,
        grabCursor: true,
        centeredSlides: true,
        effect: "coverflow",
        coverflowEffect: {
            rotate: 0,
            stretch: 20,
            scale:.8,
            depth: 0,
            modifier: 1.5,
            slideShadows : false,
        },
        pagination: {
            el: ".apartment-slider .swiper-pagination",
            clickable: true,
        },
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.3,
                spaceBetween: 0,
                coverflowEffect: {
                    depth: 2,
                }
            },
            // when window width is >= 480px
            768: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            // when window width is >= 640px
            1024: {
                slidesPerView: 3,
                spaceBetween: 0,
                navigation: {
                    nextEl: ".apartment-slider .swiper-button-next",
                    prevEl: ".apartment-slider .swiper-button-prev",
                },
            }
        },  
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
  Fancybox.bind('[data-fancybox="gallery"]', {
    animated: false,
    Images: {
      zoom: false
    },
    Toolbar: {
      display: [
        "close"
      ]
    },
    Carousel: {
      infinite: true,
      // Ngăn thumbnail xuất hiện dưới popup
      thumbnails: {
        show: false
      }
    }
  });
</script>


@endsection
