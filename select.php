<?php  
 if(isset($_POST["computer_id"]))  
 {  
      $output = '';
      $sql = "SELECT * FROM computer WHERE id_comp = '".$_POST["computer_id"]."'";  
      $result = mysqli_query($connect, $sql);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Nama</label></td>  
                     <td width="70%">'.$row["nama"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>No Aset</label></td>  
                     <td width="70%">'.$row["no_aset_comp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Jabatan</label></td>  
                     <td width="70%">'.$row["jabatan"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Jenama</label></td>  
                     <td width="70%">'.$row["jenama_comp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Model</label></td>  
                     <td width="70%">'.$row["model_comp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Nama User</label></td>  
                     <td width="70%">'.$row["nama_user"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Jenis</label></td>  
                     <td width="70%">'.$row["jenis_comp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Ram</label></td>  
                     <td width="70%">'.$row["ram"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>Os</label></td>  
                     <td width="70%">'.$row["os"].'</td>  
                </tr>   
                <tr>  
                     <td width="30%"><label>Processor</label></td>  
                     <td width="70%">'.$row["processor"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>IP Address</label></td>  
                     <td width="70%">'.$row["ip_address"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Workgroup</label></td>  
                     <td width="70%">'.$row["workgroup"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Tahun</label></td>  
                     <td width="70%">'.$row["tahun_comp"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Notes</label></td>  
                     <td width="70%">'.$row["notes"].'</td>  
                </tr>    
                ';  
      }  
      $output .= "</table></div>";  
      echo $output;  
 }  
 ?>