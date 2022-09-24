 <?php header('Access-Control-Allow-Origin: *'); ?>

<button class="play_button">Play</button>
        <div id="banner_container"><div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript" src="https://instreamatic.com/static/js/xman.min.js"></script>
                <script type="text/javascript">
                   
                     $(".play_button").click(function() {
                      var adman = new AdMan.Manager({
                        country: "GLOBAL",
                          playerId: "ds",
                        playerType: AdMan.PlayerType.TAG_AUDIO,
                        admanId: 1981,
                        protocol: "https://",
                        voice: {
                            mobile: true,
                         },
                        banner: {
                            id: "banner_container",
                            width: 728,
                            height: 90
                        },
                        events: {
                           
                           adNone: function() {
                               alert("No add")
                              //   $("#player")[0].play();
                            },
                        }
                    });
                    
                    adman.start();
                    });
                </script>
   <audio id="ds" controls autoplay>
<source src="horse.ogg" type="audio/ogg">
  <source src="https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_700KB.mp3" type="audio/mpeg">
  Your browser does not support the audio tag.
</audio>