
@extends('asset')

@section('content')

        <!--Contact Us Area Start-->
        <div class="contact-us-area area-padding">
            <div class="container"> 

<style type="text/css">
    .wrapper {
  padding: 0 2em;
  text-align:center;
  font-family: 'Raleway', Arial, sans-serif;
}

.wrapper h1{
  font-weight: 800;
  font-size: 2em;
  color: #5F5E5E;
  margin: 2em;
}

.container-gallery{
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;

  -webkit-flex-flow: row wrap;
  flex-flow: row wrap;
  justify-content: center;
  align-items: center;
}

@media screen and (min-width: 1024px){
  .big-list-block-10 > li {
      width: 8.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-9 > li {
      width: 9.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-8 > li {
      width: 11.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-7 > li {
      width: 12.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-6 > li {
      width: 15.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-5 > li {
      width: 18.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-4 > li {
      width: 21.28571%;
      padding: 0 5px 10px;
  }
  
  .big-list-block-3 > li {
      width: 30.28571%;
      padding: 0 5px 10px;
  }

  .big-list-block-2 > li {
      width: 46.28571%;
      padding: 0 5px 10px;
  }

  .big-list-block-1 > li {
      width: 95.28571%;
      padding: 0 5px 10px;
  }

}

@media screen and (max-width: 1024px){
  .medium-list-block-7 > li {
      width: 11%;
      padding: 0 5px 10px;
  }
  
  .medium-list-block-6 > li {
      width: 13%;
      padding: 0 5px 10px;
  }
  
  .medium-list-block-5 > li {
      width: 17%;
      padding: 0 5px 10px;
  }
  
  .medium-list-block-4 > li {
      width: 21%;
      padding: 0 5px 10px;
  }
  
  .medium-list-block-3 > li {
      width: 29%;
      padding: 0 5px 10px;
  }

  .medium-list-block-2 > li {
      width: 46%;
      padding: 0 5px 10px;
  }

  .medium-list-block-1 > li {
      width: 97%;
      padding: 0 5px 10px;
  }

}

@media screen and (max-width: 500px){
  .small-list-block-6 > li {
      width: 11%;
      padding: 0 5px 10px;
  }

  .small-list-block-5 > li {
      width: 15%;
      padding: 0 5px 10px;
  }

  .small-list-block-4 > li {
      width: 19%;
      padding: 0 5px 10px;
  }

  .small-list-block-3 > li {
      width: 27%;
      padding: 0 5px 10px;
  }

  .small-list-block-2 > li {
      width: 43%;
      padding: 0 5px 10px;
  }

  .small-list-block-1 > li {
      width: 93%;
      padding: 0 5px 10px;
  }
}

[class*="block-grid-"] > li {
    display: inline;
    height: auto;
    float: left;
    padding: 0 5px 10px;
}

@media screen and (min-width: 1024px) {
  .small-list-block-1 > li:nth-of-type(1n+1) {
    clear: none;
  }

  .small-list-block-2 > li:nth-of-type(2n+1) {
    clear: none;
  }

  .small-list-block-3 > li:nth-of-type(3n+1) {
    clear: none;
  }

  .small-list-block-4 > li:nth-of-type(4n+1) {
    clear: none;
  }

  .small-list-block-5 > li:nth-of-type(5n+1) {
    clear: none;
  }

  .small-list-block-6 > li:nth-of-type(6n+1) {
    clear: none;
  }

  .small-list-block-7 > li:nth-of-type(7n+1) {
    clear: none;
  }

  .small-list-block-8 > li:nth-of-type(8n+1) {
    clear: none;
  }

  .small-list-block-9 > li:nth-of-type(9n+1) {
    clear: none;
  }

  .small-list-block-10 > li:nth-of-type(10n+1) {
    clear: none;
  }

  .small-list-block-11 > li:nth-of-type(11n+1) {
    clear: none;
  }

  .small-list-block-12 > li:nth-of-type(12n+1) {
    clear: none;
  }
}

@media screen and (min-width: 1024px) {
  .medium-list-block-1 > li:nth-of-type(1n+1) {
    clear: none;
  }

  .medium-list-block-2 > li:nth-of-type(2n+1) {
    clear: none;
  }

  .medium-list-block-3 > li:nth-of-type(3n+1) {
    clear: none;
  }

  .medium-list-block-4 > li:nth-of-type(4n+1) {
    clear: none;
  }

  .medium-list-block-5 > li:nth-of-type(5n+1) {
    clear: none;
  }

  .medium-list-block-6 > li:nth-of-type(6n+1) {
    clear: none;
  }

  .medium-list-block-7 > li:nth-of-type(7n+1) {
    clear: none;
  }

  .medium-list-block-8 > li:nth-of-type(8n+1) {
    clear: none;
  }

  .medium-list-block-9 > li:nth-of-type(9n+1) {
    clear: none;
  }

  .medium-list-block-10 > li:nth-of-type(10n+1) {
    clear: none;
  }

  .medium-list-block-11 > li:nth-of-type(11n+1) {
    clear: none;
  }

  .medium-list-block-12 > li:nth-of-type(12n+1) {
    clear: none;
  }
}

@media screen and (min-width: 768px) {
  .big-list-block-1 > li:nth-of-type(1n+1) {
    clear: none;
  }

  .big-list-block-2 > li:nth-of-type(2n+1) {
    clear: none;
  }

  .big-list-block-3 > li:nth-of-type(3n+1) {
    clear: none;
  }

  .big-list-block-4 > li:nth-of-type(4n+1) {
    clear: none;
  }

  .big-list-block-5 > li:nth-of-type(5n+1) {
    clear: none;
  }

  .big-list-block-6 > li:nth-of-type(6n+1) {
    clear: none;
  }

  .big-list-block-7 > li:nth-of-type(7n+1) {
    clear: none;
  }

  .big-list-block-8 > li:nth-of-type(8n+1) {
    clear: none;
  }

  .big-list-block-9 > li:nth-of-type(9n+1) {
    clear: none;
  }

  .big-list-block-10 > li:nth-of-type(10n+1) {
    clear: none;
  }

  .big-list-block-11 > li:nth-of-type(11n+1) {
    clear: none;
  }

  .big-list-block-12 > li:nth-of-type(12n+1) {
    clear: none;
  }
}

*, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.item-gallery{
  display: inline-block;
  margin: 0.6em; 
}

.lightbox:before{
    content: 'x';
    position: relative;
    display: block;
    color: #fff;
    left: 42%;
    margin-top: 2%;
    font-size: 2em;
    font-weight: 900;
}

.lightbox a{
    text-decoration: none;
}

.item-gallery a:first-of-type img{
    max-width: 100%;
    height: auto;
}

.lightbox {
  display: none;
  position: fixed;
  z-index: 999;
  width: 100%;
  height: 100%;
  text-align: center;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
  text-decoration: none;
}

.lightbox img {
  max-width: 90%;
  max-height: 80%;
  margin-top: 1%; 
  box-shadow: 0 0 24px 2px #0E0E0E;
}

.lightbox span{
  color: #fff;
  text-decoration: none;
  padding: 0.5em;
  font-size: 1.2em;
  display: block;
}

.ease-animate img{
  animation-name: stretch;
  animation-duration: 0.5s; 
  animation-timing-function: ease; 
  animation-delay: 0;
}

@keyframes stretch {
  0% {
    transform: scale(.3);
  }

  100% {
    transform: scale(1);
  }
}

.elastic-animate img{
  animation-name: elastic;
  animation-duration: 1s; 
  animation-timing-function: ease-in-out; 
  animation-delay: 0;
}

@keyframes elastic {
  0% {
    transform: scale(.3);
  }
  
  25% {
    transform: scale(1);
  }
  
  50% {
    transform: scale(.9);
  }

  100% {
    transform: scale(1);
  }
}

.fade-animate img{
  animation-name: fade;
  animation-duration: 0.7s; 
  animation-timing-function: Linear In; 
  animation-delay: 0;
}

@keyframes fade {
  0% {
    opacity: .5;
    transform: scale(.5);
  }
  
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

.lightbox:target {
  outline: none;
  display: block;
  
}
</style>


  <section class="wrapper">
    <header>
      <h1>Photo Gallery</h1>
    </header>
    <section class="container-gallery small-list-block-1 medium-list-block-3 big-list-block-6">
    @foreach($slide as $v)
      <li class="item-gallery">
        <a href="#img{{$v->id}}">
          <img style="" src="{{ asset('images/'.$v->image) }}">
        </a>
        <a href="#" class="lightbox elastic-animate" id="img{{$v->id}}">
          <img src="{{ asset('images/'.$v->image) }}">
        </a>
      </li>
      @endforeach
    </section>
  </section>

            </div>
        </div>
        <!--End of Contact Us ARea-->     
      
      @endsection

      <script type="text/javascript" src="http://fancyapps.com/fancybox/source/jquery.fancybox.js"></script>