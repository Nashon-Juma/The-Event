
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanks</title>
    <style>
        body {background-color: #2e0505e0
            }
        .thanks {
  width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 15%;
}

.title {
  font: normal normal 32px 'Arial', 'Helvetica', sans-serif;
  text-transform: uppercase;
  margin-bottom: 20px;
  text-align: center;
  color: #b40101;
}

.home a{
  color: white;
  background: #b40101;
  text-transform: uppercase;
  text-decoration: none;
  text-align: center;
  font-size: 14px;
  border: 1px solid #b40101;
  display: block;
  margin: 0 auto 10px;
  width: 100%;
  padding: 1em;
  line-height: 1px;
   -moz-transform: scale(1.02);
    -webkit-transform: scale(1.02);
    -o-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
}

.home:hover {
  outline: none;
  background: #fd3434;
    -moz-transform: scale(1.02);
    -webkit-transform: scale(1.02);
    -o-transform: scale(1.02);
    -ms-transform: scale(1.02);
    transform: scale(1.02);
}
    </style>
</head>
<x-header/>
@extends('layout.app')


@section('content')

    <div class="thanks">
        <p class="title">Thank You!</p>
        <p><strong>We'll contact you within the next 24Hours.</strong></p>

      <p>You'll speak with our customer care who wil give you more details about the event.</p>

        <div class="home"><a href="/"> Home Page </a></div>

    </div>

@endsection
</body>
</html>



