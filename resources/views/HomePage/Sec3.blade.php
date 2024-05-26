<head>
    <link rel="stylesheet" href="{{ asset('css/sec3.css') }}">
</head>
<body >
    <div class="caroselloBox">

        <div class="posRel">
            <div class="sx d-flex">
                <div class="boxImage">
                    <img id="img1" src="" alt="">
                </div>
                <div class="boxContent">
                    <div class="box" id="box1">
                        <img id="img2" src="" alt="">
                    </div>
                    <div class="box" id="box2">
                        <img id="img3" src="" alt="">
                    </div>
                </div>
            </div>

        </div>


            <div class="dx">
                <div class=" mb-dima">
                    <h1 id="Titolo"></h1>

                    <div class="d-flex gap-Custom borderCustom">
                        <h5 id="DescriptionOption" class="hoverBottom" >DESCRIPTION</h5>
                        <h5 id="FeaturesOption" class="hoverBottom" >FEATURES</h5>
                        <h5 id="DimensionsOption" class="hoverBottom" >DIMENSIONS</h5>
                    </div>

                        <p id="Descrizione"></p>
                        <p id="Features"></p>
                        <p id="Dimensions"></p>
                    <div class="d-flex align-items-center gap-3 as ">
                        <p id="Price" > </p>
                        <button>Buy Now</button>
                    </div>
                    <button id="btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></button>
                    <button id="btn2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>
                    <div class="Index" id="Index"></div>


                </div>
                <a href="" id="info">View all boards</a>
        </div>



        <script src="{{ asset('js/sec3.js') }}"  crossorigin="anonymous"></script>
    </div>
</body>
</html>







