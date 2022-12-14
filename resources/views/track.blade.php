<HTML>
<HEAD>
    <TITLE>
        Blanca Navidad - Kenia OS
    </TITLE>
</HEAD>
<BODY>
<style>
    @font-face {
        font-family: CircularSpotifyText;
        src: url("{{asset('fonts/CircularSpotifyText-Black.otf')}}"), url("{{asset('fonts/CircularSpotifyText-Bold.otf')}}");
    }
    .text{
        font-family: CircularSpotifyText;
        position: absolute;
        top: 191px;
        left: 661px;
        font-size: 48px;
        background-color: #18d464;
    }
    .text-2{
        font-family: CircularSpotifyText;
        position: absolute;
        top: 20px;
        left: 2200px;
        font-size: 80px;
        background-color: #18d464;
    }
    .contenedor{
        margin-left: -8px;
        margin-top: -8px;
        position: relative;
    }
    .range-custom{
        background-color: #18d464;
        position: absolute;
        top: 60px;
        left: 1800px;
    }

    .form-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -.25rem;
        background-color: white;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -webkit-appearance: none;
        appearance: none
    }

    .form-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: white;
        border: 0;
        border-radius: 1rem;
        -moz-transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        -moz-appearance: none;
        appearance: none
    }

</style>
<div class="contenedor">
<img src="{{asset('img/unnamed.jpg')}}" width="3456" height="288">
    <div class="text">{{$reproductions}}</div>
    <div class="text-2">{{$reproductions}}</div>
    <div class="range-custom"><input type="range" class="form-range" min="1" max="31" value="{{date('d')}}" ></div>
</div>
</BODY>
</HTML>
