<!DOCTYPE html>
<html >
<head>
    <title>@yeild 'tittle'</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    @include('include.header')
   <div class="container">
       @yield('content')

   </div>

</body>
</html>