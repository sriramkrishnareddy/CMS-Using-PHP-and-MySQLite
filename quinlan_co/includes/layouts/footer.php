<div id="footer">Copyright <?php echo date("Y"); ?>, Sriram</div>
				
	
	</body>
</html>
<?php	
	//Close the connection if exists
	if(isset($connection)){
		mysqli_close($connection);
	}
?>