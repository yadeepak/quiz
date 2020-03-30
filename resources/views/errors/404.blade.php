<html>
    <title>Error</title>
    <head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
    body {
  position: relative;
  margin: 0;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Open Sans', Helvetica, sans-serif;
  font-size: 14px;
  color: #222;
}

.signature {
  position: absolute;
  bottom: -25px;
  font-style: italic;
  font-size: 12px;
  color: #212121;
  text-transform: none;
  text-align: center;
  left: 0;
  right: 0;
}

.background {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  background: linear-gradient(to bottom, #3f3f3f 0%, #1f1f1f 100%);
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.25);
  width: 100%;
    height: 100%;  
}

.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: white;
  border-radius: 5px;
  cursor: pointer;
  width: 50%;
  text-align: center;
  animation: show .5s ease-in-out both;
}

i {
  padding: 20px 0 15px;
  font-size: 35px;
  color: #f65656;
}

.title {
  font-size: 25px;
  padding: 25px;
}

.error {
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 5px 30px 20px;
}

.button {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f65656;
  width: 100%;
  border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
  height: 40px;
  color: white;
}

@keyframes show {
  0% {
    transform: scale(0);
  }
  
  60% {
    transform: scale(1.2);
  }
  
  90% {
    transform: scale(.95);
  }
  
  100% {
    transform: scale(1);
  }
}

.hide {
  animation: hide .5s ease-in-out both;
}

@keyframes hide {
  0% {
    transform: scale(1);
  }
  
  20% {
    transform: scale(1.2);
  }
  
  100% {
    transform: scale(0);
  }
}
    </style>
</head>

<div class="background">
  <div class="wrapper">
    <div><i class="fas fa-exclamation-triangle"></i></div>
    <div class="title"> 
        @if($exception->getMessage())
    {{ $exception->getMessage() }}
        @else
    Page not found
@endif</div>
  </div>
  
</div>
</html>