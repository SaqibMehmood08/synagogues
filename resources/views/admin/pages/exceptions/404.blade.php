<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>error page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <section class="page_404">
        <div class="container">
          <div class="row">
          <div class="col-sm-12 ">
          <div class="col-sm-10 col-sm-offset-1  text-center">
          <div class="four_zero_four_bg">
            <h1 class="text-center four_o_four ">404</h1>


          </div>

          <div class="contant_box_404">


          <p id="message">The page you are looking for not avaible!</p>

          <a href="{{ route('welcome') }}" class="link_404">Go to Home</a>
        </div>
          </div>
          </div>
          </div>
        </div>
      </section>
</body>
</html>
<style>

.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}
.four_o_four{
color: blue;
}
#message{
    color: blue;
}
.page_404  img{ width:100%;}

.four_zero_four_bg{

 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;

 }


 .four_zero_four_bg h1{
 font-size:80px;
 }

  .four_zero_four_bg h3{
       font-size:80px;
       }

       .link_404{
  color: #fff!important;
    padding: 10px 20px;
    background: blue;
    margin: 20px 0;
    display: inline-block;}
  .contant_box_404{ margin-top:-50px;}
</style>
