<x-layout>

<style>
  /*-------------------------
moovie.css - HTML5 Media player made for movies
Made by: Bruno Vieira
--------------------------- */

/* VARIABLES */

:root {

  /* Colors */
  --moovie_main_color: #3191f7;
  --moovie_bg_controls: rgba(16, 34, 62, 0.6);
  --moovie_bg_submenu: #f7f7f7;
  --moovie_bg_cuetimer: #2b2b2b;
  --moovie_submenu_options_fcolor: #515151;
  --moovie_topic_submenu_fcolor: #797979;
  --moovie_currenttime_color: white;
  --moovie_caption_fcolor: white;
  --moovie_cuetimer_fcolor: white;
  /* Font Size */
  --moovie_submenu_options_fsize: 10pt;
  --moovie_topic_submenu_fsize: 9pt;
  --moovie_currenttime_fsize: 11pt;
  --moovie_cuetimer_fsize: 10pt;
  /* Icons size */
  --moovie_svgicons_width: 15px;
  /* General Styles */
  --moovie_padding_controls: 13px;
}

/* START CSS */


video {
  background: transparent;
  border-bottom: 1px solid transparent;
  display: block;
  outline: none !important;
}

.moovie_tooltip {
  position: absolute;
  margin-top: -66px;
  background-color: var(--moovie_bg_cuetimer);
  padding: 5px 10px 5px 10px;
  border-radius: 3px;
  font-size: 10pt;
  opacity: 0;
  pointer-events: none;
  white-space: nowrap;
  -o-transition: opacity .2s ease-in-out;
  -ms-transition: opacity .2s ease-in-out;
  -moz-transition: opacity .2s ease-in-out;
  -webkit-transition: opacity .2s ease-in-out;
  transition: opacity .2s ease-in-out;
  z-index: 4;
}

.player__button:hover .moovie_tooltip {
  opacity: 1;
}

.moovie_cevent {
  position: absolute;
  z-index: 999;
  background-color: black;
  padding: 10px 20px 10px 20px;
  color: white;
  cursor: pointer;
  border: 1px solid #1c1c1c;
  border-radius: 4px;
}

.moovie_cevent:hover {
  color: grey;
}

.top-left {
  top: 49px;
  left: 25px;
}

.top-center {
  top: 49px;
  right: 50%;
  transform: translate(50%, -50%);
}

.top-right {
  top: 49px;
  right: 25px;
}

.bottom-left {
  bottom: 73px;
  left: 25px;
}

.bottom-center {
  bottom: 73px;
  right: 50%;
  transform: translate(50%, -50%);
}

.bottom-right {
  bottom: 73px;
  right: 25px;
}

.moovie {
  position: relative;
  overflow: hidden;
  box-sizing: border-box;
  font-family: Arial;
  border-radius: 7px;
  outline: none !important;
}

.loadingv {
  width: 100%;
  position: absolute;
  height: 100%;
  z-index: 5;
}

.loading {
  height: 20px;
  text-align: center;
  position: absolute;
  overflow: hidden;
  font-style: italic;
  bottom: -5px;
  width: 100%;
}

.moovie_bg {
  position: absolute;
  left: -46px;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  background: -webkit-repeating-linear-gradient(145deg, #f8e9db 1px, #fff5ed 2px, #fff5ed 11px, #f8e9db 12px, #f8e9db 20px);
  background: repeating-linear-gradient(-55deg, #1c1c1c 1px, #464646 2px, #464646 11px, #242424 12px, #222 20px);
  -webkit-animation-name: moovie_stripes;
  -webkit-animation-duration: .6s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-name: moovie_stripes;
  animation-duration: 0.6s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.moovie_cuetime {
  opacity: 0;
  background-color: var(--moovie_bg_cuetimer);
  position: absolute;
  margin-top: -17px;
  z-index: 9999;
  margin-left: 30px;
  font-size: var(--moovie_cuetimer_fsize);
  padding: 1px 5px 1px 5px;
  border-radius: 3px;
  left: 0px;
  transform: translate(14px, -3px);
  color: var(--moovie_cuetimer_fcolor);

  -o-transition: opacity .2s ease-in-out;
  -ms-transition: opacity .2s ease-in-out;
  -moz-transition: opacity .2s ease-in-out;
  -webkit-transition: opacity .2s ease-in-out;
  transition: opacity .2s ease-in-out;
}

.moovie_cuetime_small {
  top: -12px !important;
  margin-left: -19px !important;
  transform: translate(0px) !important;
}

.responsive_bar {
  position: absolute !important;
  width: 100% !important;
  left: -11px !important;
  top: -15px !important;
}

.labelformat {
  position: absolute;
  right: 22px;
  background-color: #686868;
  color: white;
  border-radius: 4px;
  margin-top: 1px;
  font-size: 7pt;
  letter-spacing: 1px;
  font-weight: bold;
  width: 37px;
  height: 20px;
  padding-left: 9px;
  line-height: 20px;
}

.moovie_submenu {
  position: absolute;
  bottom: 11px;
  right: 26px;
  margin-bottom: 56px;
  background-color: var(--moovie_bg_submenu);
  border-radius: 5px;
  box-shadow: 1px 2px 2px 0px #242424;
  z-index: 5;
}

.moovie_submenu ul {
  list-style: none;
  padding: 0px;
  margin: 8px 0px 8px 0px;
  text-align: left;
}

.moovie_captionspot {
  color: var(--moovie_caption_fcolor);
  position: absolute;
  z-index: 0;
  width: 100%;
  bottom: 40px;
  pointer-events: none;
  text-align: center !important;
}

.moovie_caption {
  width: 55%;
  margin: 0 auto;
  text-shadow: 1px 1px 1px black;
  pointer-events: none;
  z-index: 0;
  transition: all 0.2s ease 0s;
}

.caption_size {
  font-size: 17pt;
}

.moovie_submenu ul li {
  padding: 10px 14px 10px 14px;
  font-size: var(--moovie_submenu_options_fsize);
  width: 170px;
  margin: 0px 12px 0px 10px;
  border-radius: 2px;
  color: var(--moovie_submenu_options_fcolor);
}

.moovie_submenu ul li:hover {
  background-color: var(--moovie_main_color);
  cursor: pointer;
  transition: all 0.2s ease;
  color: white;
}

.moovie_submenu ul li:hover .labelformat {
  background-color: white;
  color: var(--moovie_main_color);
}

.option_submenu {
  position: absolute;
  right: 28px;
  font-weight: bold;
}

.poster_layer {
  outline: none !important;
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  z-index: 2;
  cursor: pointer;
  box-sizing: border-box;
  background-repeat: no-repeat;
}

.poster_layer:hover .poster_center {
  opacity: 1;
}

.poster_center {
  position: relative;
  width: 100%;
  padding: 10px;
  color: white;
  transform: translate(-1.5%, -66%);
  top: 50%;
  text-align: center;
  opacity: 0.8;
}

.poster_button {
  width: 61px;
  padding: 16px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
  background-color: var(--moovie_main_color);
  box-sizing: border-box;
  pointer-events: none;
}

.poster_button:hover {
  opacity: 0.8;
  transition: all 0.2s ease;
}

.player__button {
  background: none;
  line-height: 1;
  color: white;
  text-align: center;
  outline: 0;
  padding: 8px 11px 9px 11px;
  background-color: transparent;
  margin-right: 4px;
  border: 0px;
  border-radius: 4px;
}

.player__button:hover {
  transition: all 0.2s ease;
  background-color: var(--moovie_main_color);
  cursor: pointer;
}

.player__button img {
  width: var(--moovie_svgicons_width);
  position: relative;
  top: 2px;
  vertical-align: baseline;
}

.player_button_disabled {
  cursor: default !important;
  background-color: transparent !important;
}

.moovie_currentime {
  color: var(--moovie_currenttime_color);
  font-size: var(--moovie_currenttime_fsize);
  padding-top: 10px;
}

.player__button:focus {
  border-color: #ffc600;
  outline: none;
}

.player__slider {
  width: 10px;
  height: 30px;
}

.topic_submenu {
  padding: 0px 0px 5px 0px !important;
  border-bottom: 1px dashed #e1e1e1 !important;
  width: auto !important;
  color: var(--moovie_topic_submenu_fcolor) !important;
  font-weight: bold !important;
  background-color: transparent !important;
  margin-bottom: 9px !important;
  font-size: var(--moovie_topic_submenu_fsize) !important;
}

.moovie_controls {
  box-sizing: border-box;
  background-color: var(--moovie_bg_controls);
  display: flex;
  position: absolute;
  bottom: 1px;
  width: 100%;
  padding: var(--moovie_padding_controls);
  z-index: 3;
  -o-transition: opacity .2s ease-in-out;
  -ms-transition: opacity .2s ease-in-out;
  -moz-transition: opacity .2s ease-in-out;
  -webkit-transition: opacity .2s ease-in-out;
  transition: opacity .2s ease-in-out;

}

.moovie_progress {
  position: relative;
  display: flex;
  flex-basis: 100%;
  flex: 10;
  height: 33px !important;
  transition: height 0.3s;
  background-color: rgba(55, 112, 168, 0);
  cursor: pointer;
  top: 0px;
  margin-right: 11px;
  margin-left: 10px;
  overflow: hidden;
}

.moovie_progress_sound {
  position: relative;
  display: flex;
  flex-basis: 100%;
  flex: 10;
  height: 7px !important;
  transition: height 0.3s;
  background-color: rgba(233, 236, 239, 0.4);
  cursor: pointer;
  top: 15px;
  margin-right: 11px;
  margin-left: 10px;
}

.progress__filled {
  width: 0%;
  background: var(--moovie_main_color);
  flex: 0;
  flex-basis: 0%;
  z-index: 2;
}

.progress__filled_buffered {
  width: 12%;
  background: #1d64ae;
  position: absolute;
  height: 12px;
  z-index: 1;
}

.opacity_svg {
  opacity: 0.4;
}

/* RANGE INPUT */

input[type=range] {
  -webkit-appearance: none;
  background: transparent;
  width: 100%;
  /* margin: 0 5px; */
  z-index: 3;
}

input[type=range]:focus {
  outline: none;
}

input[type=range]::-webkit-slider-runnable-track {
  -webkit-appearance: none;
  width: 100%;
  height: 7px;
  cursor: pointer;
  background-color: rgba(233, 236, 239, 0.4);
  border-radius: 1.3px;
  border: 0.2px solid rgba(1, 1, 1, 0);
}

input[type=range]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  background-color: rgba(198, 198, 198, 0.4);
  border-radius: 1.3px;
}

input[type=range]::-webkit-range-thumb {
  height: 13px;
  width: 13px;
  border-radius: 50px;
  background: var(--moovie_main_color);
  border: none;
  cursor: pointer;
}

input[type=range]::-moz-range-thumb {
  height: 13px;
  width: 13px;
  border-radius: 50px;
  background: var(--moovie_main_color);
  border: none;
  cursor: pointer;
}

/* PROGRESS BAR */

progress {
  border-radius: 7px;
  width: 100%;
  height: 5px;
  margin-left: -11.5%;
  box-shadow: ;
  position: absolute;
  margin-left: 0px;
  top: 14px;
  border: 0px;
  z-index: 1;
  background-color: #b32c2c00;
}

progress::-webkit-progress-bar {
  background-color: transparent;
}

progress::-webkit-progress-value {
  background-color: white;
  opacity: 0.3
}

progress::-moz-progress-bar {
  background-color: white;
  opacity: 0.3
}

input[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 13px;
  width: 13px;
  border-radius: 100%;
  background: var(--moovie_main_color);
  cursor: pointer;
  margin-top: -4.3px;
}

/* LOADING SCREEN */

.lds-ellipsis {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
}

.lds-ellipsis div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: var(--moovie_main_color);
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}

.lds-ellipsis div:nth-child(1) {
  left: 8px;
  animation: lds-ellipsis1 0.6s infinite;
}

.lds-ellipsis div:nth-child(2) {
  left: 8px;
  animation: lds-ellipsis2 0.6s infinite;
}

.lds-ellipsis div:nth-child(3) {
  left: 32px;
  animation: lds-ellipsis2 0.6s infinite;
}

.lds-ellipsis div:nth-child(4) {
  left: 56px;
  animation: lds-ellipsis3 0.6s infinite;
}

@keyframes lds-ellipsis1 {
  0% {
    transform: scale(0);
  }

  100% {
    transform: scale(1);
  }
}

@keyframes lds-ellipsis3 {
  0% {
    transform: scale(1);
  }

  100% {
    transform: scale(0);
  }
}

@keyframes lds-ellipsis2 {
  0% {
    transform: translate(0, 0);
  }

  100% {
    transform: translate(24px, 0);
  }
}

@-webkit-keyframes moovie_stripes {
  from {
    -webkit-transform: translateX(0);
  }

  to {
    -webkit-transform: translateX(46px);
  }
}

@keyframes moovie_stripes {
  from {
    transform: translateX(0);
  }

  to {
    transform: translateX(46px);
  }
}
</style>
<head>

  <!-- Bootstrap core CSS -->
  <link href="demo-template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Moovie CSS Style -->
  <link rel="stylesheet" type="text/css" href="css/moovie.css">

  <!-- GFonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

</head>

<body >

  <!-- Page Content -->
  <div style="height: 600px;"  class="container">

    <div class="row">
      <div class="col-lg-12 text-center">
           <div style='max-width: 1000px; position: relative; margin: 0 auto; margin-top: 0px; margin-top: 0px; margin-top: 5px;'>

              <p style="margin-bottom: 49px; font-size: 28pt; color: white; font-family: Montserrat;">Mucsic Video Player</p>
            </div>


            <div style='max-width: 800px; position: relative; margin: 0 auto; margin-top: 0px; margin-top: 24px;'>
                <video id="example" poster=" {{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}">
                    <source src="{{$listing->logo ? asset('storage/' . $listing->song) : asset('/images/no-image.png')}}" type="video/mp4">
                    <track kind="captions" label="Portuguese" srclang="pt" src="https://raw.githubusercontent.com/BMSVieira/moovie.js/main/demo-template/subtitles/pt.vtt">
                    <track kind="captions" label="English" srclang="en" src="https://raw.githubusercontent.com/BMSVieira/moovie.js/main/demo-template/subtitles/en.vtt">
                    <track kind="captions" label="French" srclang="en" src="https://raw.githubusercontent.com/BMSVieira/moovie.js/main/demo-template/subtitles/french.srt">
                    Your browser does not support the video tag.
                </video>

            </div>
      </div>
    </div>
  </div>
  <!-- Moovie JS Core -->
  <script src="{{ asset('/mv/js/moovie.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
            var demo1 = new Moovie({
              selector: "#example",
              dimensions: {
                   width: "100%"
              },
              config: {
                  storage: {
                     captionOffset: false,
                     playrateSpeed: false,
                     captionSize: false
                  }
              }
            });
    });
  </script>
</body>
</x-layout>
