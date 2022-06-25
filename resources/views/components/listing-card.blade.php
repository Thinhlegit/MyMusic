@props(['listing'])

<x-card>
  <!-- <div class="flex">
    <img
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <x-listing-tags :tagsCsv="$listing->tags" />
    </div>
  </div> -->
    <div class="list__genre--music">
      <div class="list__genre--img">
          <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
          <div class="list__genre--icon">
              <div class="icon-block">
                  <i class="fa-solid fa-heart"></i>
              </div>
              <div class="icon-block">
                  <i href="{{url('/view',$listing->listing)}}" class="fa-solid fa-play" src=""></i>
              </div>
              <div class="icon-block">
                  <i class="fa-solid fa-ellipsis"></i>
              </div>
          </div>
      </div>
      <h3 class="text-title">
        <a style="color: white; text-decoration:none;" href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
    <p href="/listings/{{$listing->id}}">{{$listing->description}}</p>
  </div>

</x-card>
