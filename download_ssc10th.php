<!--delete material form-->
<form action="material2.php" method="post" id="form1">
 <div class="row form-group">
	 <div>
			<label for="select" class=" form-control-label">Select Subject</label>
		</div>

				<script type="text/javascript">
				//<![CDATA[
				var theForm = document.forms['form1'];
				if (!theForm) {
					theForm = document.form1;
				}
				function __doPostBack() {
				if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
					theForm.submit();
				}
				}
				//]]>
				</script>
<div>
<!-- Subject 
<div class="col-12 col-md-9">-->
<?php
include("connection.php");

$data = mysqli_query($c,"select * from subject");
print"<select name=\"subject\" onchange=\"javascript:__doPostBack();\" id=\"sub\" class=\"form-control\">";
echo "<option value='0'>Select subject</option>";

while ($row = mysqli_fetch_assoc($data))
{
	$sname = $row['sname'];
	$str="<option value='$sname'";
	if(isset($_REQUEST['subject']))
	if($_REQUEST['subject']==$sname)
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

if(isset($_REQUEST['subject']))
{
	$data = mysqli_query($c,"select ssc_material_name from ssc10th where ssc_subject='".$_REQUEST['subject']."'");
	print"<select Name=\"material\" id=\"s_material\" class=\"form-control\" onchange=\"javascript:__doPostBack();\" selectedValue=". $_REQUEST['subject'] .">";
	while ($row = mysqli_fetch_assoc($data))
	{
		$mname = $row['ssc_material_name'];
		$str="<option value='$mname'";
		if(isset($_REQUEST['material']))
		if($_REQUEST['material']==$mname)
		$str .= "selected='selected'";
		echo $str;
		echo "$sname";
		$did=$row['ssc_material_name'];
		echo "<option value='$did'>$did";
	}
	echo "</select>";
}
else
{
	echo "<select Name=Material id=s_material class=\"form-control\">";
	echo "<option value='0'>Select Material";
	echo "</select>";
}
?>
</div>
</div>
<div>
	<button id="payment-button" type="submit" name="download_ssc10th" class="btn btn-lg btn-info btn-block">
	<span id="payment-button-amount">Get Download Link</span>
	<span id="payment-button-sending" style="display:none;">Sendingâ€¦</span>
</button>
</div>

</form>


<!--delete material-->
<?php	
if(isset($_POST["download_ssc10th"]))
{
if(isset($_POST["material"]))
{
$b= $_POST["material"];
echo "<a href='../olcadminfinal/ssc10th_upload/$b' download>".$_POST['material']."</a>";
//echo "<a href='upload/$b' download>".$_POST['material']."</a>";
}
}
?>
	<!--end delete material-->
	