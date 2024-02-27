<script>
   $(document).ready( function () {
        $('#propietario').DataTable();
    } );
</script> 
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
	CURLOPT_URL => "http://172.16.25.232/Apiresidencia/getpropietario.php",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$objeto = json_decode($response);
	//print_r($objeto);
  ?>
  <table class="table table-striped" id="propietario">
    <thead>
        <tr>
           <th>ID</th>
           <th>NOMBRES</th>
           <th>APELLIDOS</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>CORREO</th>
        </tr>
    </thead>

    <tbody>
      
        <?php
          foreach($objeto as $reg)
          {
           ?>
           <tr>
             <td> <?=$reg->id ?> </td> 
             <td> <?=$reg->nombres ?> </td> 
             <td> <?=$reg->apellidos ?> </td> 
             <td> <?=$reg->direccion ?> </td> 
             <td> <?=$reg->telefono ?> </td> 
             <td> <?=$reg->correo ?> </td> 
           </tr>  
         <?php    
          }
        ?>
      
    </tbody>
    <tfoot>
    <tr>
         <th>ID</th>
           <th>NOMBRES</th>
           <th>APELLIDO</th>
           <th>DIRECCION</th>
           <th>TELEFONO</th>
           <th>CORREO</th>
        </tr>
    </tfoot>
  </table>

<?php
}
?>