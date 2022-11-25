<!doctype html>
<html lang="en">
  <head>
    <title>my resume | profile | blog posts</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/3d9e5fe33e.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @include('layouts.nav')
   @include('layouts.content')
    @include('layouts.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        var zero = document.querySelector('#zero');
        zero.addEventListener('click',zeroFun);
        function zeroFun(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ url("/git") }}', true);
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector('#all');
                    show.innerHTML = data;
                };
            };
            xhr.send();
        }
        var one = document.querySelector('#one');
        one.addEventListener('click',oneFun);
        function oneFun(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ url("/laravel") }}', true);
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector('#all');
                    show.innerHTML = data;
                };
            };
            xhr.send();
        }
        var two = document.querySelector('#two');
        two.addEventListener('click',twoFun);
        function twoFun(){
            var xhr = new XMLHttpRequest();
            xhr.open('GET','{{ url("/builder") }}', true);
            xhr.onload = function()
            {
                if (xhr.status == 200) {
                    var data = xhr.responseText;
                    // console.log(data);
                    var show = document.querySelector('#all');
                    show.innerHTML = data;
                };
            };
            xhr.send();
        }
    </script>

  </body>
</html>
