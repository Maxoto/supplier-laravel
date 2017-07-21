<!DOCTYPE html>
<html>
<head>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('js/jquery.min.js')}}"> </script>
<script src="{{ asset('js/bootstrap.min.js')}}"> </script>

	<title> Input Supplier </title>


<style type="text/css">
	.clear{
		clear: both;
		float: none;
	}

	
</style>
	

</head>

	<body>
		<div class="container">
		<h1 align="center" style="padding-bottom: 50px;"> Index Page Supplier </h1>


		<div class="row">
		<a class="btn btn-primary" href="#" style="float: left;"> Daftar Supplier</a>
		</div>

		<br>
		<div class="table-responsive">
			<table class="table" id="tabelutama" align="center">
				
				<thead>
					<!-- <th> ID Supplier </th> -->
					<th width="10%"> ID Inventory </th>
					<th width="35%"> Nama Supplier </th>
					<th width="25%"> Nama Barang </th>
					<th width="25%"> Harga Barang </th>
					<th width="5%"></th>
				</thead>
				<!-- QUERY LOOPING DATA -->
				

				<!-- TABEL ROW ID 1 -->
				<tr id="0">
					<td><input class="form-control" type="text" name="id_invent" id="id_invent" readonly="true"/></td>
					<td><select class="form-control"> 

							<option value="0" disabled="true" selected="true"> Select Supplier </option>
								

					</td>
					<td><input class="form-control" type="text" data-toggle="modal" data-target="#myModal" name="nama_barang" id="" readonly="true"></td>
					<td><input class="form-control" type="text" name="harga_barang" id=""></td>
					<td align="right"> <button class="remove btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"> </span>
					</button> 

					<!-- Button Delete Row  -->
  						
					<!-- Button Delete Row  -->
	
					</td>
					<!-- Rp.<?php //echo number_format($data['harga_barang'],0,",","."); ?> -->
				</tr>
				<!-- TABEL ROW ID 1 -->
				

					

			</table>

			<!-- MODAL  -->
			
		<div id="myModal" class="modal fade" role="dialog">
  			<div class="modal-dialog">

    		<!-- Modal content-->
    		<div class="modal-content">
      			<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Modal Header</h4>
      		</div>
      		<div class="modal-body">
        		<p>Some text in the modal.</p>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    		</div>

  			</div>
		</div>



			<!-- MODAL -->

		<!-- BUTTON ADD ROW -->
		<div align="right">
			<button type="button" class="btn btn-success btn-xs" name="addrow" id="addrow">
			<span class="glyphicon glyphicon-plus"></span>
			</button>
		</div>
		<!-- BUTTON ADD ROW -->

			<table class="tabelrow" style="display: none;">

				<!-- TABEL ROW ID 1 -->
				<tr>
					<td><input class="form-control" type="text" name="id_invent" id="id_invent" readonly="true"/></td>
					<td><select class="form-control"> 

							<option value="0" disabled="true" selected="true"> Select Supplier </option>
							

						</select>

					</td>
					<td><input class="form-control" type="text" name="nama_barang" data-toggle="modal" data-target="#myModal" id=""></td>
					<td><input class="form-control" type="text" name="harga_barang" id=""></td>
					<td align="right"> <button class="remove btn btn-danger btn-xs"><span class="glyphicon glyphicon-minus"> </span>
					</button> 

					<!-- Button Delete Row  -->
  						
					<!-- Button Delete Row  -->
	
					</td>
					<!-- Rp.<?php //echo number_format($data['harga_barang'],0,",","."); ?> -->
				</tr>
				<!-- TABEL ROW ID 1 -->
				

					

			</table>


		</div> <!-- TUTUP TABEL RESPONSIVE -->


		<br><br><br>

		<!-- CLEAR FLOAT -->
		<div class="clear"></div>
		<!-- CLEAR FLOAT -->

		<!-- BUTTON SAVE -->
		<div align="center" style="padding-bottom: 100px;">
			<button type="save" class="btn btn-primary" name="save" id="save"> 
			<span class="glyphicon glyphicon-file"></span>  Save 
				</button>
		</div>
		<!-- BUTTON SAVE -->



		</div> <!-- TUTUP CONTAINER -->



	



	</body>
	

</html>

<script type="text/javascript">
	//AJAX add row
	jQuery(document).ready(function() {
        var id = 0;
      jQuery("#addrow").click(function() {
        id++;           
        var row = jQuery('.tabelrow tr').clone(true);
        row.find("input:text").val("");
        row.attr('id',id); 
        row.appendTo('#tabelutama');        
        return false;
    });        
        
  $('.remove').on("click", function() {
  $(this).parents("tr").remove();
});





}); //TUTUP ready function


</script>