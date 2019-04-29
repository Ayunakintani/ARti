<!DOCTYPE html>
<html>

<head>
    <title>Sistem Pemantau Jadwal Ruangan Kelas </title>
    <script src="./library/aframe.min.js"></script>
    <script src="./library/aframe-ar.js"></script>
    <script src="https://unpkg.com/aframe-text-geometry-component@0.5.1/dist/aframe-text-geometry-component.min.js"></script>

</head>


    <body style='margin : 0px; overflow: hidden; font-family: Monospace;'>
    <a-scene embedded vr-mode-ui="enabled: false;" arjs='detectionMode: mono_and_matrix; matrixCodeType: 3x3; debugUIEnabled: false;'>
        <a-assets>  


             <img id="img1" src="assets/img/unila.png">
             <img id="img2" src="assets/img/yellow.jpg">
             <img id="img3" src="assets/img/navy.jpg">
             <img id="img4" src="assets/img/pink.png">
             <img id="img5" src="assets/img/pastel.png">

        <a-asset-item id="exoItalicFont" src="https://cdn.glitch.com/c719c986-c0c5-48b8-967c-3cd8b8aa17f3%2Fexo2BlackItalic.typeface.json?1490305922725"></a-asset-item>
        </a-assets>
        <!-- add a simple camera -->
        <a-entity camera></a-entity>

        <a-marker type='barcode' value='1'>


                <a-plane rotation ="-90 0 0" width="0.5" height="0.5" src="#img1"position="-1 0.1 -1"></a-plane>

              
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H20") {
                                        
            ?>


            
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>




                <a-entity align="center" rotation ="-90 0 0" position="-0.5 0.1 -1" align="center" baseline="top" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;" material="shader: flat; color:white"></a-entity>



            <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 0' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.3;  height: 0; '
                 material='shader:  flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-2 0.1 0.5' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-1 0.1 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' align='center' position='0 0.1 1.5' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

            

                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

        <a-marker type='barcode' value='2'>


                <a-plane rotation ="-90 0 0" width="0.5" height="0.5" src="#img1" position="-1 0.1 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-0.5 0.1 -1" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            

            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H19") {
                            
                        
            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>




           
            <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 0' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.3;  height: 0; '
                 material='shader:  flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-2 0.1 0.5' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-1 0.1 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' align='center' position='0 0.1 1.5' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>


                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

        <a-marker type='barcode' value='3'>


                <a-plane rotation ="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-3.5 -2 -1" text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H18") {
                            
                        
                     

            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>



            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0.5' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1.5' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

            <a-entity <?php  echo "rotation='-90 0 0' position='0 0 2.5' text-geometry='value: ".$mydata->keluar."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>
                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

        <a-marker type='barcode' value='4'>


                <a-plane rotation ="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-3.5 -2 -1" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H17") {
                            
                        
                     

            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>


           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 0' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.3;  height: 0; '
                 material='shader:  flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-2 0.1 0.5' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: crimson'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='-1 0.1 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' align='center' position='0 0.1 1.5' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0'  align='center' position='0 0.1 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>


                    <?php } ?>
                  <?php } ?>
            
        </a-marker>


        <a-marker type='barcode' value='5'>


                <a-plane rotation ="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-3.5 -2 -1" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H16") {
                            
                        
            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>



            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 3' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 4' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

            <a-entity <?php  echo "rotation='-90 0 0' position='0 0 4' text-geometry='value: ".$mydata->keluar."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

        <a-marker type='barcode' value='6'>


                <a-plane rotation ="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-3.5 -2 -1" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "Baja1") {
                            
                        
                    

            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>

            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 3' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='0 0 4' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 4 0' text-geometry='value: ".$mydata->keluar."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

         <a-marker type='barcode' value='7'>


                <a-plane rotation ="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>               
                <a-entity rotation ="-90 0 0" position="-3.5 -2 -1" text-geometry="value: Info Kelas; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;" material="shader: flat; color:coral"></a-entity>


            
            
            <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "Baja2") {
                                    
                        
                     

            ?>

                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img4" position="0.5 0 0 "></a-plane>
                <a-plane rotation ="-90 0 0" width="5" height="0.5" src="#img3" position="0.5 0 0.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="3" height="0.5" src="#img2" position="0.3 0 1 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 1.5 "></a-plane>
                <a-plane rotation ="-90 0 0" width="2" height="0.5" src="#img5" position="1 0 2 "></a-plane>



            <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 3' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

           <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 4' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

            <a-entity <?php  echo "rotation='-90 0 0' position='0 0 4' text-geometry='value: ".$mydata->keluar."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                    <?php } ?>
                  <?php } ?>
            
        </a-marker>

    </a-scene>
</body>

</html>
