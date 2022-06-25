

const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

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

/*xu ly chuyen anh o container__header--right-align*/
var rightImage = $('.right-img')
var indexImage = 0
function changeImage() {

    var arrayImage = [
        "/images/pic1.jpg",
        "/images/pic2.jpg",
        "/images/pic3.jpg",
        "/images/pic4.jpg",
    ];

    rightImage.src = arrayImage[indexImage];
    indexImage++;
    if(indexImage == arrayImage.length -1 ) {
        indexImage = 0;
    }
    
}

setInterval(changeImage, 5000)

/*xu ly playlist*/

const containerLeft = $('.container__music--left')
const containerPlaylist = $('.container__music--playlist')
const playlist = {
    currentIndex: 0,
    isPlaying: false,
    isRandom: false,
    isRepeat: false,
    songs:    [
 
        {
            name: 'Gặp U60 nhưng k ở lại',
            singer: 'Hiền Hồ',
            path: '/music/song6.mp3',
            image: '/images/pic6.jpg'
        },
        {
            name: 'Muộn rồi mà sao còn',
            singer: 'Sơn Tùng MT-P',
            path: './music/song1.mp3',
            image: './images/pic1.jpg'
        },
        {
            name: 'Chạy ngay đi',
            singer: 'Sơn Tùng MT-P',
            path: './music/song2.mp3',
            image: './images/pic2.jpg'
        },
        {
            name: 'Ngày đầu tiên',
            singer: 'Đức Phúc',
            path: './music/song3.mp3',
            image: './images/pic3.jpg'
        },
        {
            name: 'Hôm nay tui buồn',
            singer: 'Cường SadBoiz',
            path: './music/song4.mp3',
            image: './images/pic4.jpg'
        },
        {
            name: 'Chạy về với anh',
            singer: 'Erik',
            path: './music/song5.mp3',
            image: './images/pic5.jpg'
        },
    ],
    render: function () {
        const htmls = this.songs.map((song, index) => {
            return `
            <div class="playlist-song ${index === this.currentIndex ? 'active' : ''}" data-index="${index}">

            <div class="song-info">
                <div class="img">
                    <img src="${song.image}" alt="">
                </div> 
            
                <div class="song">
                    <span class="song--name">${song.name}</span>
                    <br>
                    <span class="song--actor">${song.singer}</span>
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
            transform: 'rotate(360deg)'
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
        songName.textContent = this.currentSong.name
        songActor.textContent = this.currentSong.singer
        $('.img.play img').src=this.currentSong.image
        audio.src = this.currentSong.path
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



/*xu ly heart icom*/ 
// let currentIndexIcons = 0
// var heartIcon = $$('.song-favor')

// heartIcon.forEach((icon, index) => {
//     icon.addEventListener('click',() => {
//         icon.classList.toggle('love')
//         currentIndexIcons = index;
//     })})


// let indexIconsHeart = 0
// var heart = $$('.list__genre--icon.fa-heart')

// heart.forEach((icon, index) => {
//     icon.addEventListener('click',() => {
//         icon.classList.toggle('love')
//         currentIndexIcons = index;
//     })})