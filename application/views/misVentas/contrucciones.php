<?php include_once('/../headeradmin.php') ;?>
<script src=<?php echo base_url().'script/ventas.js'?> ></script>
<div id="siteframe">
    <div id="content">
        <div class="content-padding">
            <div class="title-page"><h1><?php echo $title_page ?></h1></div>
            <?php include_once('/../columnMenu.php') ;?>
            <div class="box-publicar" id="publi-detalles">
				<table class="table">
				   <thead>
				      <tr>
				         <th>Tipo Construcci�n</th>
				         <th>Tiempo</th>
				         <th>Fecha Publicaci�n</th>
				         <th>Editar</th>
				         
				      </tr>
				   </thead>
				   <tbody>
				   <?php 
                                   if($publicaciones){
				   		$color = array('active','danger','warning','success');
				   		$cont = 0;
				   		foreach ($publicaciones as $value){
				   	?>		
						<tr class="<?php echo $color[$cont]?>">
							<td><?php echo $value['tipo_categoria']?></td>
							<td><?php echo $value['tiempo']?></td>
							<td><?php echo $value['date_publicacion']?></td>
							<td><a href="#" class="btn btn-default btn-lg active" role="button">Editar</a></td>	
						</tr>
					<?php 
							$cont +=1;
							if($cont == 4)
							{
								$cont = 0;
							}			
				   		}
                                   }
				   ?>   
				   </tbody>
				</table>
            </div>
        </div>
    </div>
</div>


<?php include_once('/../footer.php') ;?>