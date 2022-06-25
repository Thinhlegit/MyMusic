  <div class="option--search">
    <div class="right--block">
        <div class="control--icon left-block-option enable--btn">
            <a href="{{ URL::previous() }}"> <i class="fa-solid fa-angle-left"></i></a>
        </div>
        <div class="control--icon left-block-option">
            <a href="{{ URL::previous() }}"> <i class="fa-solid fa-angle-right"></i></a>
        </div>


    </div>
    <form action="/">
        <div class="midle--block" >
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="search" name="search" placeholder="Nhập tên bài hát, nghệ sĩ hoặc MV...">
        </div>
    </form>

    <div class="left--block" >
        <!-- auth -->
        @auth
            <div class="left-block-option" >
                <a href="/listings/create" > <i style="color: white;" class="fa-solid fa-upload"></i></a>

            </div>
            <div class="left-block-option">
                <a href="/listings/manage"><i style="color: white;" class="fa-solid fa-gear"></i></a>

            </div>


            <form class="inline " method="POST" action="/logout">
                @csrf
                <button type="submit" style="color:white; margin-left:5px;margin-right:15px;" >
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
        @else
            <div class="left-block-option">
                <a href="/login"><i style="color: white;" class="fa-solid fa-right-to-bracket"></i></a>
            </div>
            <div class="left-block-option" >
                <a href="/register" > <i style="color: white;" class="fa-solid fa-circle-user"></i></a>
            </div>
        @endauth


    </div>

  </div>
