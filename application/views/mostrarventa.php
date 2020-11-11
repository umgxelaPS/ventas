
<div class="row">
	<div class="col-xs-12 text-center">
		<b>Almacen Belen</b><br>
		10 av 3-89 zon 2 San Marcos <br>
		Tel. 45667788 <br>
	</div>
</div> <br>
<div class="row">
	<div class="col-xs-6">	
		<b>CLIENTE</b><br>
		<b>Nombres:</b><?php echo $venta->nombres;?> <br>
		<b>Nit:</b> <?php echo $venta->nit;?> <br>
		<b>Telefono:</b><?php echo $venta->telefono;?> <br>
		<b>Direccion</b><?php echo $venta->direccion;?> <br>
	</div>	
	<div class="col-xs-6">	
		<b>COMPROBANTE</b> <br>
		<b>  Tipo de Comprobante:</b><?php echo $venta->tipocomprobante;?> <br>
		<b>Serie:</b><?php echo $venta->serie;?> <br>
		<b>No. de Comprobante:</b><?php echo $venta->numero_documento;?> <br>
		<b>Fecha</b> <?php echo $venta->fecha;?> 
	</div>	
</div>
<br>
<div class="row">
	<div class="col-xs-12">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th>Importe</th>
				</tr>
			</thead>
			<tbody>
                <?php foreach($detalles as $detalle):?>
				<tr>
					<td><?php echo $detalle->codigo;?></td>
					<td><?php echo $detalle->nombre;?></td>
					<td><?php echo $detalle->precio;?></td>
					<td><?php echo $detalle->cantidad;?></td>
					<td><?php echo $detalle->importe;?></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
					<td><?php echo $venta->subtotal;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>IGV:</strong></td>
					<td><?php echo $venta->iva;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Descuento:</strong></td>
					<td><?php echo $venta->descuento;?></td>
				</tr>
				<tr>
					<td colspan="4" class="text-right"><strong>Total:</strong></td>
					<td><?php echo $venta->total;?></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>