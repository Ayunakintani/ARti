<!DOCTYPE html>
<html>

<head>
       <title>Sistem Pemantau Jadwal Ruangan Kelas </title>
       <script src="aframe/library/aframe.min.js"></script>
       <!-- include aframe-ar.js -->
       <script src="aframe/library/aframe-ar.js"></script>
       <!-- include text geometry -->
       <script src="https://unpkg.com/aframe-text-geometry-component@0.5.1/dist/aframe-text-geometry-component.min.js">
       </script>

</head>








<body style='margin : 0px; overflow: hidden; font-family: Monospace;'>
       <a-scene embedded vr-mode-ui="enabled: false;"
              arjs='detectionMode: mono_and_matrix; matrixCodeType: 3x3; debugUIEnabled: false;'>
              <a-assets>
                     <img id="unila" src="assets/img/unila.png">
                     <a-asset-item id="exoItalicFont"
                            src="https://cdn.glitch.com/c719c986-c0c5-48b8-967c-3cd8b8aa17f3%2Fexo2BlackItalic.typeface.json?1490305922725">
                     </a-asset-item>
              </a-assets>
              <!-- add a simple camera -->
              <a-entity camera></a-entity>

              <a-marker type='barcode' value='1'>



                     <a-plane rotation="-90 0 0" width="1" height="1" src="#unila" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:white"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H20") {
                                            0
            ?>



                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0; '
                  material='shader: flat; color: black'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0.5' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: crimson'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1.5' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: crimson'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-1.5 0 2' text-geometry='value: ".$mydata->keluar."; 
                font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: black'"; ?>></a-entity>

                     <?php } ?>
                     <?php } ?>

              </a-marker>

              <a-marker type='barcode' value='2'>


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>



                     7d
                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H19") {
                            
                        
            ?>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0.5' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1.5' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='0 0 2.5' text-geometry='value: ".$mydata->keluar."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <?php } ?>
                     <?php } ?>

              </a-marker>

              <a-marker type='barcode' value='3'>


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H18") {
                            
                        
                     

            ?>


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


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H17") {
                            
                        
                     

            ?>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0' text-geometry='value: ".$mydata->waktu."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 0.5' text-geometry='value: ".$mydata->dosen."; font: #exoItalicFont; style: italic; size: 0.; weight: bold; height: 0;'
                  material='shader: flat; color: coral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1' text-geometry='value: ".$mydata->matkul."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral'"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 1.5' text-geometry='value: ".$mydata->ruangan."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: lightcoral"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='-3.5 0 2' text-geometry='value: ".$mydata->masuk."; font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral"; ?>></a-entity>

                     <a-entity <?php  echo "rotation='-90 0 0' position='0 0 2.5' text-geometry='value: ".$mydata->keluar.";
             font: #exoItalicFont; style: italic; size: 0.1; weight: bold; height: 0;'
                  material='shader: flat; color: coral"; ?>></a-entity>


                     <?php } ?>
                     <?php } ?>

              </a-marker>


              <a-marker type='barcode' value='5'>


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "H16") {
                            
                        
                     

            ?>

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


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "Baja1") {
                            
                        
                    

            ?>

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


                     <a-plane rotation="-90 0 0" width="1" height="1" src="#img1" position="-2 -7 -1"></a-plane>
                     <a-entity rotation="-90 0 0" position="-3.5 -2 -1"
                            text-geometry="value: Pemantau Jadwal Ruangan; font: #exoItalicFont; style: italic; size: 0.2; weight: bold; height: 0;"
                            material="shader: flat; color:coral"></a-entity>




                     <?php 
                include_once 'json.php';    
                $user = json_decode($response);
                foreach($user->data as $mydata)
                    {
                        if ($mydata->ruangan == "Baja2") {
                            
                        
                     

            ?>

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
              <!-- handle matrix marker -->
              <!-- add a simple camera -->
              <a-entity camera></a-entity>
       </a-scene>
</body>

</html>