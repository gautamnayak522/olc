<!--delete material form-->
<form action="material2.php" method="post" id="form2">
 <div class="row form-group">
	 <div>
			<label for="select" class=" form-control-label">Select Subject</label>
		</div>

				<script type="text/javascript">
				//<![CDATA[
				var theForm2 = document.forms['form2'];
				if (!theForm2) {
					theForm2 = document.form2;
				}
				function __doPostBack2() {
				if (!theForm2.onsubmit || (theForm2.onsubmit() != false)) {
					theForm2.submit();
				}
				}
				//]]>
				</script>
<div>
<!-- Subject 
<div class="col-12 col-md-9">-->
<?php
include("connection.php");

$data = mysqli_query($c,"select * from science12th_subject");
print"<select name=\"subject2\" onchange=\"javascript:__doPostBack2();\" id=\"sub\" class=\"form-control\">";
echo "<option value='0'>Select subject</option>";

while ($row = mysqli_fetch_assoc($data))
{
	$sname = $row['sname'];
	$str="<option value='$sname'";
	if(isset($_REQUEST['subject2']))
	if($_REQUEST['subject2']==$sname)
	$str .= "selected='selected'";
	echo $str;
	echo ">$sname";
}
echo "</select>";
?>
</div>
<!-- Material -->

<div>
 <label for="mn" class=" form-control-label">Select Material</label>
</div>
<div>
<?php
include("connection.php"); 

if(isset($_REQUEST['subject2']))
{
	$data = mysqli_query($c,"select science_material_name from science12th where science_subject='".$_REQUEST['subject2']."'");
	print"<select Name=\"material2\" id=\"s_material\" class=\"form-control\" onchange=\"javascript:__doPostBack2();\" selectedValue=". $_REQUEST['subject2'] .">";
	while($row = mysqli_fetch_assoc($data))
	{
		$mname = $row['science_material_name'];
		$str="<option value='$mname'";
		if(isset($_REQUEST['material2']))
		if($_REQUEST['material2']==$mname)
		$str .= "selected='selected'";
		echo $str;
		echo "$sname";
		$did=$row['science_material_name'];
		echo "<option value='$did'>$did";
	}
	echo "</select>";
}
else
{
	echo "<select Name=Material2 id=s_material class=\"form-control\">";
	echo "<option value='0'>Select Material";
	echo "</select>";
}
?>
</div>
</div>
<div>
	<button id="payment-button" type="submit" name="download_science12th" class="btn btn-lg btn-info btn-block">
	<span id="payment-button-amount">Get Download Link</span>
	<span id="payment-button-sending" style="display:none;">Sendingâ€¦</span>
</button>
</div>

</form>


<!--delete material-->
<?php	
if(isset($_POST["download_science12th"]))
{
if(isset($_POST["material2"]))
{	
$b= $_POST["material2"];
echo "<a href='../olcadminfinal/science12th_upload/$b' download>".$_POST['material2']."</a>";
}




//echo "<a href='upload/$b' download>".$_POST['material']."</a>";
}
?>
	<!--end delete material-->
	