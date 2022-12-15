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
        top: 203.5px;
        left: 805px;
        font-size: 60px;
        margin-left: 6px;
        width: 570px;
    }
    .text-2{
        font-family: CircularSpotifyText;
        position: absolute;
        top: 650px;
        left: 171px;
        font-size: 80px;
        width: 600px;
    }
    .text-2 span{
        font-size: 50px;
    }
    .contenedor{
        margin-left: -8px;
        margin-top: -8px;
        position: relative;
    }
    .range-custom{
        background-color: #18d464;
        position: absolute;
        top: 780px;
        left: 166px;
    }

    #myinput {
        background: linear-gradient(to right, #ffffff 0%, #ffffff 40%, #5CBE83 50%, #5CBE83 100%);
        border-radius: 8px;
        height: 7px;
        width: 356px;
        outline: none;
        transition: background 450ms ease-in;
        -webkit-appearance: none;
    }

    input[type='range']::-webkit-slider-thumb {
        width: 10px;
        -webkit-appearance: none;
        height: 10px;
        cursor: ew-resize;
        background: white;
        box-shadow: -20px 0 0 20px white;
        border-radius: 60%;
    }


</style>
<div class="contenedor">
<img src="{{asset('img/playlist.jpg')}}" width="1280" height="1152">
    <div class="text">
        {{number_format($reproductions)}}
    </div>
    <div class="text-2">{{number_format($reproductions)}} <span>streams</span> </div>
    <div class="range-custom"><input type="range" id="myinput" min="1" max="31" value="{{date('d')}}" style="width: 1000px; height: 20px;" ></div>
</div>

<script>
    document.getElementById("myinput").oninput = function() {
        var value = (this.value-this.min)/(this.max-this.min)*100
        this.style.background = 'linear-gradient(to right, #ffffff 0%, #ffffff ' + value + '%, #5CBE83 ' + value + '%, #5CBE83 100%)'
    };
</script>
</BODY>
</HTML>
