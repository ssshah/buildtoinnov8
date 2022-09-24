<?php        

/**
 * Created by PhpStorm.
 * User: TALHA
 * Date: 12/31/2020
 * Time: 3:45 AM
 */

if(isset($_GET['v1']))
{

    $obj = json_decode($_POST['myData'],true);
         if(isset($obj['/stream'])){
              $stream =$obj['/stream'];
              print_r($stream);
    if(isset($stream['server_name'])) {
        $title=explode(' - ',$stream['title']);
        if(isset($title[1]))
        {
        $title=str_replace("-default.png","",$title[1]);
        }else{
            $title=str_replace("-default.png","",$stream['title']);;
        }
 
          $con=mysqli_connect('localhost','buildtoinnov8_form','4568385!@#','buildtoinnov8_form');
  $get_dat = mysqli_query($con, "SELECT * FROM songs where title='$title'");
while ($row = $get_dat->fetch_assoc()) {
 
        $runtime= explode(':',$row['runtime']);
     if(isset($runtime[0]) && isset($runtime[1]))
    {
        $dura= $runtime[0]*60+   $runtime[1];
    }
            $final['title'] = $row['title'];
        $final['artist'] = $row['singer'];
        $final['album'] = $row['album'];
        $final['cover'] = $row['title'];
        $final['duration'] = $dura;
        $final['programStartTS'] = date('l j F Y H:i:s');
        $streams['playHistory']['song'][]=$final;
}
       
    }
    $file = fopen("test.txt","w");
    fwrite($file, json_encode($streams, JSON_PRETTY_PRINT));
    fclose($file);
 }
}
else{
?>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        url="https://prazor23.prazor.com/info.xsl";
        return $.ajax({
        type: 'GET',
        url: url,
        async: true,
        jsonpCallback: 'parseMusic',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function(data) {
             console.log(data);
            var dataString = JSON.stringify(data);
                 $.ajax({
                type: 'POST',
                url: 'https://m4mobility.com/s/meta.php?v1',
                data: {myData: dataString},
                    success: function (data) {
console.log(data);
                }
            });
         },
        error: function(e) {
            return console.error(e);
        }
    });
    });

</script>

<?php } ?>
