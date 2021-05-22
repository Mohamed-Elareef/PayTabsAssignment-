<!DOCTYPE html>
<html>
<head>
<title>Category</title>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script type="text/javascript">

$(document).ready(function() {

	$('select').on('change', function() {
	  //alert( this.value );

	 $.ajax({url: "./GetSubCategory/"+this.value, success: function(result){
	    $("#div1").html(result);
	  }});

	});
});


</script>

</head>

<body>

<?php echo $SelectOption; ?>

<div id="div1"></div>

</body>

</html>