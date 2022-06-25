<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySic</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/Radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/CaNhan.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/KhamPha.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="{{url('css/style.css')}}> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!--  -->

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
            extend: {
                colors: {
                laravel: '#ef3b2d',
                },
            },
            },
        }
    </script>

</head>
<body>
  <div class="main">
      <x-header/>
      <!--header của web-->
      <div class="main__header">
          <div class="header__option" style="overflow-y:scroll; ">
                @include('partials._search')
                <!-- fetch item -->
                <main style="margin-left: 50px;" >
                    {{$slot}}
                </main>
          </div>
      </div>


  </div>
<script type="text/javascript" src="{{url('KhamPha.js')}}"></script>
<script type="text/javascript" src="{{url('app.js')}}"></script>

</body>
</html>
