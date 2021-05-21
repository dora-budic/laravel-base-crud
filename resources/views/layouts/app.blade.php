<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Comics</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>
    <header>
      <a href="{{route('home')}}">Home</a>
      <a href="{{route('comics.index')}}" class="ml-40">Comics</a>
      <a href="{{route('comics.create')}}" class="ml-40">Create comic</a>
    </header>
    <main>
      @yield('main')
    </main>
    <footer>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
