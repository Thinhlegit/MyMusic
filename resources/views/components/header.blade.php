<!--Phần left của web-->
<div class="main__slide">
    <div class="slide--bar">
        <a style="padding: 0px;" href="/"><img src="{{url('images/logo.png')}}" alt=""></a>
        <ul>
            <li><a href="{{url('listings/user')}}"><i class="fa-solid fa-blog"></i><span>Cá Nhân</span></a></li>
            <li><a href="/"><i class="fa-solid fa-book"></i><span>Khám Phá</span></a></li>
            <li><a href="{{url('css/Radio.html')}}"><i class="fa-solid fa-star"></i><span>Radio</span></a></li>
            <li><a href="{{url('listings/topic')}}"><i class="fa-solid fa-headphones-simple"></i><span>Thể Loại</span></a></li>
            <li><a href="{{url('listings/mv')}}"><i class="fa-solid fa-film"></i><span>MV</span></a></li>
        </ul>

        @if (Auth::check())
            <div class="login user-login ">

                <p style="font-size: 20px;" class="blink">Welcome <br>
                    <span class="custom">{{auth()->user()->name}}</span>
                </p>
            </div>
        @else
            <div class="login">
                <p>Nghe nhạc không quảng cáo cùng kho nhạc VIP</p>
                <button class="login-btn"><a style="padding: 0px;" href="/login">ĐĂNG NHẬP</a></button>
            </div>
        @endif

    </div>
</div>
