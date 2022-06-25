<!--Navbar Bottom-->
@props(['listing'])
<div class="main__bottom" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/images/theme1.png);">
        <!--left bottom-->
    <div class="playlist--song bottom--playlist--song">
        <div class="song--info ">
            <div class="img play">
                <img class="play-img" src="/images/pic1.jpg" alt="">
            </div>
            <div class="song">
                <marquee scrollamount="5" class="song--name play"></marquee>
                <br>
                <a class="song--actor play">Sơn Tùng</a>
            </div>
        </div>
        <div class="song--icon">
            <div class="song--favor">
                <i class=" fa-solid fa-heart"></i>
            </div>
            <div class="song--option">
                <i class="fa-solid fa-ellipsis"></i>
            </div>
        </div>
    </div>
    <!--midle bottom-->
    <div class="player-control-block ">
        <div class="player-control-top">
        <div class="btn-control random">
            <i class="fa-solid fa-shuffle"></i>
        </div>
        <div class="btn-control prev">
            <i class="fa-solid fa-backward-step "></i>
        </div>
        <div class="btn-control btn-toggle">
            <i class="fas fa-pause icon-pause"></i>
            <i class="fas fa-play icon-play"></i>
        </div>
        <div class="btn-control next">
            <i class="fa-solid fa-forward-step"></i>
        </div>
        <div class="btn-control repeat">
            <i class="fa-solid fa-repeat"></i>
        </div>
        </div>
        <div class="player-control-bottom">
            <span class="tracktime">00:00</span>
            <input id="progress--main" class="progress play" type="range" value="0" step="1" min="0" max="100">
            <div class="progress__track song--track">
                <div class="progress__track-update" style="width: 100%;"></div>
            </div>
            <span class="durationtime">10:33</span>
        </div>
    </div>
    <!--right bottom-->
    <div class="player-volume">
        <div class="btn-volume">
            <i class="fa-solid fa-video"></i>
        </div>
        <div class="btn-volume">
            <i class="fa-solid fa-volume-high"></i>
        </div>
        <div class="btn-volume">
            <i class="fa-solid fa-volume-low"></i>
        </div>

        <input type="range" class="volume__range progress" value="0" step="0" min="0" max="100">
    </div>
</div>
