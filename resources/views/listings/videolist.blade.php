<x-layout >


  <div class="srcollbar" display="none">

    @unless(count($listings) == 0)
    <div class="slider__container">
        <div class="slider__container--img">
            <img src="/images/banner1.jpg" alt="">
        </div>
        <div class="slider__container--img">
            <img src="/images/banner2.jpg" alt="">
        </div>
        <div class="slider__container--img">
            <img src="/images/banner3.jpg" alt="">
        </div>
    </div>
      <div class="list__genre">
        <a href="#" class="list__genre--header">Thư Viện MV Ca Nhạc</a>
            @php
                  $tmp=0;
            @endphp
          @foreach($listings as $listing)

            @if(pathinfo($listing->song, PATHINFO_EXTENSION) == 'mp4')
                  @php
                  $tmp++;
                  @endphp
                  @if($listing->id%5==1)
                        <div class="list__genre--bar">
                  @endif
                  <x-mv-card :listing="$listing" />
                  @if($listing->id%5==0)
                        </div>
                  @endif
            @endif
          @endforeach
      <!--  -->

    @else
    <p class="message_warning">Không có bản nhạc nào có sẳn cả !!!</p>
    @endunless
    <div class="mt-6 p-4">
      {{$listings->links()}}
    </div>
  </div>
</x-layout>
