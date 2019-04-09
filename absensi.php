<h2>Kelas</h2>

			
  <!-- Trigger the modal with a button -->
  				<h1 type="button" class="btn btn-info btn-lg" id="gua" data-toggle="modal" data-target="#Masuk">Masuk</h1>

  				<h1 type="button" class="btn btn-info btn-lg" id="lo" data-toggle="modal" data-target="#Keluar">Keluar</h1>


   <!-- Modal -->
   <div class="modal fade" id="Masuk" role="dialog">
     <div class="modal-dialog">
     
       <!-- Modal content-->
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Data Absensi</h4>
         </div>
         <div class="modal-body">
         	<form action="masuk.php" method="POST">
         		<select class="form-control" name="nama_matkul">		
         		<?php $ambil=$conn->query ("SELECT * FROM mata_kuliah ORDER BY nama_matkul ASC"); 
         		 		while($pecah = $ambil->fetch_assoc()){ 
         		 			echo '<option value='.$pecah['id_matkul'].'>'.$pecah['nama_matkul'].'</option>';
         		 		}; 

         		?>
         		</select>
         		<br>
         		<button type="submit" name="submit" class="btn btn-success">Input Jam Masuk</button>
         	</form>
         </div>
         <div class="modal-footer">
         	
         </div>
       </div>
       
     </div>
   </div>
      <!-- Modal -->
      <div class="modal fade" id="Keluar" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Data Absensi</h4>
            </div>
            <div class="modal-body">
            	<table class="table table-bordered">
            		<thead>
            		</thead>
            		<tbody>

            			<tr>
            				<td>No</td>
            				<td>Mata Kuliah</td>
            				<td>KODE</td>
            				<td>Action</td>
            			</tr>
            			<?php  

            				date_default_timezone_set("Asia/Jakarta");
            				$now = new DateTime();
            				$now = $now->format('Y-m-d');
            				
            				$sqlKeluar = "SELECT kelas.id_matkul AS matkul, kelas.id_kelas AS kelas FROM kelas LEFT JOIN absensi ON kelas.id_kelas = absensi.id_kelas WHERE absensi.waktu_absensi='$now' AND absensi.jamkeluar_absensi IS NULL ORDER BY kelas.id_matkul ASC ";
            				$result = mysqli_query($conn,$sqlKeluar);
            				$ResultCheck = mysqli_num_rows($result);
            				if ($ResultCheck > 0) {
            					$nomor=1;
            					while ($row = mysqli_fetch_assoc($result)) {
            						$idMatkul = $row['matkul'];
            						$idKelas = $row['kelas'];
            						$sqlKeluar = "SELECT id_matkul, nama_matkul,kode_matkul FROM `mata_kuliah` WHERE id_matkul='$idMatkul'";
            						$resultMatkul = mysqli_query($conn,$sqlKeluar);
            						$rowMatkul = mysqli_fetch_assoc($resultMatkul);

            						echo'
            						<tr>
            							<td>'.$nomor.'</td>
            							<td>'.$rowMatkul['nama_matkul']. '</td>
            							<td>'.$rowMatkul['kode_matkul'].'</td>
            							<td>
	            							<a href="keluar.php?kelas='.$idKelas.'">
	            								<button type="button" class="btn btn-info">Input Jam Keluar</button>
	            							</a>
            							</td>
            						</tr>
            						';
            						$nomor++;


            					}

            				}

            			?>
            		</tbody>
            	</table>
            </div>
            <div class="modal-footer">

            </div>
          </div>
          
        </div>
      </div>

    			
 

<table class="table table-bordered">
      	<head>
      			<tr>
      				<th>No</th>
      				<th>Mata Kuliah</th>
      				<th>KODE</th>
      				<th>Jam Masuk</th>
      				<th>Jam Keluar</th>
      			</tr>
      			<style type="text/css">
      				#gua {
        				width: 100px;
        				height: 50px;
        				background-color: blue;
        				color: white;
        				margin-bottom: 30px;
      				}
      			</style>	
      			<style type="text/css">
      				#lo {
        				width: 100px;
        				height: 50px;
        				background-color: black;
        				color: white;
        				margin-bottom: 30px;
      				}
      			</style>	

      		
      	</head>
      		<tbody>

			<?php $nomor=1; ?>
			<?php $ambil=$conn->query ("SELECT * FROM mata_kuliah ORDER BY nama_matkul ASC"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['nama_matkul']; ?></td>
				<td><?php echo $pecah['kode_matkul']; ?></td>
				<?php 
					$id = $pecah['id_matkul'];
					$ambilAbs=$conn->query ("SELECT absensi.jammasuk_absensi AS masuk, absensi.jamkeluar_absensi AS keluar FROM absensi LEFT JOIN kelas ON kelas.id_kelas = absensi.id_kelas WHERE kelas.id_matkul = '$id' AND absensi.waktu_absensi = '$now'"); 
					while ($pecahAbs = $ambilAbs->fetch_assoc()) {

						echo '<td>'.$pecahAbs['masuk']. '</td>';
						echo '<td>'.$pecahAbs['keluar']. '</td>';

					
					
					};



				?>


			</tr>
			<?php $nomor++; ?>
			<?php }; ?>

	</tbody>
</table>
