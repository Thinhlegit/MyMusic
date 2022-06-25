<x-layout >

  <div class="srcollbar" display="none">

    @unless(count($listings) == 0)

      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc Ballab</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='Ballad')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>
      <!--  -->
      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc Hiphop</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='HipHop')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>

      <!--  -->


      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc Trẻ</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='Nhạc trẻ')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>

<!--  -->
      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc Pop Âu Mĩ</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='Pop')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>
<!--  -->
      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc ADM sôi động</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='EDM')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>

      <!--  -->
      <div class="list__genre">
        <a href="#" class="list__genre--header">Nhạc Nhạc US-UK</a>
        <div class="list__genre--bar">

          @foreach($listings as $listing)
            @if($listing->tags =='Nhạc US-UK')
                   <x-listing-card :listing="$listing" />
            @endif
          @endforeach
        </div>
      </div>


    @else
    <p class="message_warning">Không có bản nhạc nào có sẳn cả !!!</p>
    @endunless
    <div class="mt-6 p-4">
      {{$listings->links()}}
    </div>
  </div>
</x-layout>
