
<x-layout>


    <div class="app__user--info">
        <div style="margin: 30px;" >
            <img  style="width: 100px;margin-left:45%;object-fit:cover;height:100px; " src="/storage/{{auth()->user()->img}}" alt="" class="app__user--img">
        </div>

        <h3 class="app__user--name">{{auth()->user()->name}}</h3>

    </div>
    <div class="app__user--action">

    </div>
    <div class="container">
        <div class="container__header">
            <h2></h2>
            <button class="btn--play-all"><i class="fa-solid fa-play"></i>Phát tất cả</button>
        </div>

        <div class="container__music">
            <!--RIGHT-->
            <div class="container__music--right">
                <div class="img play">
                <img style="width: 250px;" class="right-img play-img" src="" alt="">
                </div>
            </div>
            <!--LEFT-->
            <div class="container__music--left" >
            </div>
        </div>
    </div>
        </div>
    </div>

    <!--Navbar Bottom-->
    <div class="main__bottom">
            <!--left bottom-->
        <div class="playlist--song bottom--playlist--song">
            <div class="song--info ">
                <div class="img play">
                    <img class="play-img" src="" alt="">
                </div>
                <div class="song">
                    <marquee scrollamount="5" class="song--name play"></marquee>
                    <br>
                    <a class="song--actor play"></a>
                </div>
            </div>
            <div class="song--icon">
                <div class="song--favor">
                    <i class="fa-solid fa-heart"></i>
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
                <audio id="audio" src=""></audio>
                <div class="progress__track song--track">
                    <div class="progress__track-update" style="width: 100%;"></div>
                </div>
                <span class="durationtime">10:33</span>
            </div>
        </div>
        <!--right bottom-->
        <div class="player-volume">

            <div class="btn-volume">
                <i class="fa fa-volume-down"></i>
            </div>
            <input type="range" min="1" max="100" value="99" class="volume__range progress volume_slider" onchange="setVolume()">
            <div class="btn-volume">
                <i class="fa fa-volume-up"></i>
            </div>

        </div>
    </div>
    <script type="text/javascript" >

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const volumeRange = $('.volumeSlider')
const songName = $('.song--name.play')
const songActor = $('.song--actor.play')
const songImage = $('.play-img')
const audio = $('#audio')
const playBtn = $('.btn-control.btn-toggle')
const player = $('.btn-toggle')
const currentTime = $('.tracktime')
const durationTime = $('.durationtime')
const progress = $('.progress.play')
const prevBtn = $('.btn-control.prev')
const nextBtn = $('.btn-control.next')
const randomBtn = $('.btn-control.random')
const repeatBtn = $('.btn-control.repeat')
const left = $('.container__music--left')
const volume = $('.volume__range')
const playAll = $('.btn--play-all')
var countLove = 0

$$('.fa-solid.fa-heart').forEach((icon, index) => {
    icon.addEventListener('click',() => {
        if(icon.className == 'fa-solid fa-heart love'){
            countLove = 0
        } else {
            countLove += 1
        }
        icon.classList.toggle('love')
})})
/*xu ly chuyen anh o container__header--right-align*/
var rightImage = $('.right-img')
var indexImage = 0

function changeImage() {


    rightImage.src = arrayImage[indexImage];
        indexImage++;
        if(indexImage == arrayImage.length -1 ) {
            indexImage = 0;
        }

    }

    setInterval(changeImage, 5000)

    /*xu ly playlist*/
    var arr = @json($listings);
    console.log(arr);
    const containerLeft = $('.container__music--left')
    const containerPlaylist = $('.container__music--playlist')
    const playlist = {
        currentIndex: 0,
        isPlaying: false,
        isRandom: false,
        isRepeat: false,
        songs:arr,
        render: function () {
            const htmls = this.songs.map((song, index) => {
                return `
                <div class="playlist-song ${index === this.currentIndex ? 'active' : ''}" data-index="${index}">

                <div class="song-info">
                    <div class="img">
                        <img src="/storage/${song.logo}" alt="">
                    </div>

                    <div class="song">
                        <span class="song--name">${song.title}</span>
                        <br>
                        <span class="song--actor">${song.description}</span>
                    </div>
                </div>

                <span class="song-time">
                    4:02
                </span>

                <div class="song-icon">
                    <div class="song-favor">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <div class="song-option">
                    <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
            </div>
                `
            })
            containerLeft.innerHTML = htmls.join('')
        },

        handleEvents: function () {
            //cho cai CD quay
            const songImageAnimation = songImage.animate([{
                transform: 'rotate(0deg)'
            }],{
                duration: 10000,
                iterations: Infinity
            })
            songImageAnimation.pause()

            //Xu ly nut play/pause
            const _this = this
            playBtn.onclick = function () {
                if(_this.isPlaying) {
                    _this.isPlaying = false
                    audio.pause()
                    player.classList.remove('playing')
                    songImageAnimation.pause()
                } else {
                    _this.isPlaying = true
                    audio.play()
                    player.classList.add('playing')
                    songImageAnimation.play()
                }
            }

            //Xu ly progress
            audio.ontimeupdate = function() {
                setTimeout(function() {
                    if(audio.duration) {
                        const progressPercent = Math.floor(audio.currentTime / audio.duration * 100)
                        progress.value = progressPercent
                    }
                },2000)

                var minCurrent = (audio.currentTime / 60).toFixed(0)
                var secCurrent = (audio.currentTime % 60).toFixed(0)
                var minDuration = (audio.duration / 60).toFixed(0)
                var secDuration = (audio.duration % 60).toFixed(0)
                currentTime.innerText = `${minCurrent}:${secCurrent}`
                durationTime.innerText = `${minDuration}:${secDuration}`

            }


            //xu ly nut trong progress
            progress.onchange = function(e) {
                const seekTime = e.target.value * audio.duration / 100
                audio.currentTime = seekTime
            }

            prevBtn.onclick = function() {
                if(_this.isRandom) {
                    _this.playRandomSong()
                } else {
                    _this.prevSong()
                }
                player.classList.add('playing')
                audio.play()
                _this.render()
                _this.scrollToActiveSong()
            }

            nextBtn.onclick = function() {
                if(_this.isRandom) {
                    _this.playRandomSong()
                } else {
                    _this.nextSong()
                }
                player.classList.add('playing')
                audio.play()
                _this.render()
                _this.scrollToActiveSong()
            }

            randomBtn.onclick = function() {
                _this.isRandom = !_this.isRandom
                randomBtn.classList.toggle('active', _this.isRandom)
            }

            repeatBtn.onclick = function() {
                _this.isRepeat = !_this.isRepeat
                repeatBtn.classList.toggle('active', _this.isRepeat)
            }

            audio.onended = function() {
                if(_this.isRepeat) {
                    audio.play()
                } else {
                    nextBtn.click()
                }
            }

            left.onclick = function(e) {
                const songNode = e.target.closest('.playlist-song:not(.active)')
                if(songNode || e.target.closest('.song-favor') || e.target.closest('.song-option'))
                    if(songNode) {
                        _this.currentIndex = Number(songNode.getAttribute('data-index'))
                        _this.loadCurrentSong()
                        _this.render()
                        audio.play()

                    } else if(e.target.closest('.song-favor')) {
                        e.target.closest('.song-favor').onclick = function() {
                            e.target.closest('.song-favor').classList.toggle('love')
                        }

                    } else {}

            }


            playAll.onclick = function() {
                _this.currentIndex = 0
                _this.loadCurrentSong()
                _this.render()
                audio.play()
            }
        },

        //Lay song dau tien
        defineProperties: function () {
            Object.defineProperty(this, 'currentSong', {
                get: function () {
                    return this.songs[this.currentIndex]
                }
            })
        },
        scrollToActiveSong:function () {
            setTimeout(function () {
                $('.playlist-song.active').scrollIntoView({
                    behavior: 'smooth',

                })

            },500)
        },

        //render du lieu
        loadCurrentSong: function() {
            songName.textContent = this.currentSong.title
            songActor.textContent = this.currentSong.description
            $('.img.play img').src='/storage/'+this.currentSong.logo
            audio.src = '/storage/'+this.currentSong.song
        },

        //xu ly next, previous
        nextSong: function () {
            this.currentIndex++;
            if(this.currentIndex >= this.songs.length - 1) {
                this.currentIndex = 0
            }
            this.loadCurrentSong()
        },

        prevSong: function () {
            this.currentIndex--;
            if(this.currentIndex < 0) {
                this.currentIndex = this.songs.length - 1
            }
            this.loadCurrentSong()
        },

        playRandomSong: function() {
            let newIndex
            do {
                newIndex = Math.floor(Math.random() * this.songs.length)
            } while (newIndex == this.currentIndex)

            this.currentIndex = newIndex
            this.loadCurrentSong()
        },

        playRepeatSong: function () {
            if(_this.isRepeat) {
                audio.play()
            } else {
                nextBtn.click()
            }
        },

        start: function() {
            //dinh nghia cac thuoc tinh cho Object
            this.defineProperties()

            //xu ly code
            this.handleEvents()

            //tai thong tin bai hat dau tien vao UI vao ung dung
            this.loadCurrentSong()

            //render du lieu
            this.render()




        }
    }

        playlist.start()
</script>

</x-layout>
