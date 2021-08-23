<!--delete material form-->
<form action="material2.php" method="post" id="form4">
							<div class="row form-group">
											 <div>
                                                    <label for="select" class=" form-control-label">Select Department</label>
                                                </div>
										
														<script type="text/javascript">
														//<![CDATA[
														var theForm4 = document.forms['form4'];
														if (!theForm4) {
															theForm4 = document.form4;
														}
														function __doPostBack4() {
														if (!theForm4.onsubmit || (theForm4.onsubmit() != false)) {
															theForm4.submit();
														}
														}
														//]]>
														</script>
	
 <!-- Subject -->
													<div>
														<?php
															include("connection.php");
															$data = mysqli_query($c,"select * from be_department");
															print"<select name=\"department4\" onchange=\"javascript:__doPostBack4();\" id=\"dept\" class=\"form-control\">";
															echo "<option value='0'>Select Department</option>";
															while ($row = mysqli_fetch_assoc($data))
															{

																$dept_name = $row['be_dept_name'];
																$str="<option value='$dept_name'";
																if(isset($_REQUEST['department4']))
																{
																	
																	if($_REQUEST['department4']==$dept_name)
																	{
																		$str .= "selected='selected'";	
																	}
																}
																echo $str;
																echo ">$dept_name";
															}
																	echo "</select>";
														?>
									</div>
									
									
									<div>
                                         <label for="mn" class=" form-control-label">Select subject</label>
                                      </div>
									<div>
														<?php
														include("connection.php"); 
															
															if(isset($_REQUEST['department4']))
															{
																$data = mysqli_query($c,"select be_subject_name from be_subject where be_dept_name='".$_REQUEST['department4']."'");
															   print"<select Name=\"subject4\" id=\"s_subject4\" class=\"form-control\" onchange=\"javascript:__doPostBack4();\" selectedValue=". $_REQUEST['department4'] .">";
																echo "<option value='0'>Select subject</option>";
																while ($row = mysqli_fetch_assoc($data))
																{
																	$sn = $row['be_subject_name'];
																	$str="<option value='$sn'";
																	if(isset($_REQUEST['subject4']))
																	{
																		if($_REQUEST['subject4']==$sn)
																		{
																			$str.= "selected='selected'";	
																		}
																	}
																	echo $str;
																	echo ">$sn";
																}
																echo "</select>";
															}
															else
															{
																echo "<select Name=subject4 id=s_subject4 class=\"form-control\">";
																echo "<option value='0'>Select subject";
																echo "</select>";
															}
														?>
									</div>
									
									
									
									
    <!-- Material -->
									<div>
                                         <label for="mn" class=" form-control-label">Select Material</label>
                                      </div>
										<div>
														<?php
														include("connection.php"); 
															
															if(isset($_REQUEST['subject4']))
															{
																$data = mysqli_query($c,"select be_material_name from be where be_subject='".$_REQUEST['subject4']."'");
															   print"<select Name=\"material4\" id=\"s_material4\" class=\"form-control\" onchange=\"javascript:__doPostBack4();\" selectedValue=". $_REQUEST['subject4'] .">";
																echo "<option value='0'>Select Material</option>";
																while ($row = mysqli_fetch_assoc($data))
																{
																$mname = $row['be_material_name'];
																$str="<option value='$mname'";
																if(isset($_REQUEST['material4']))
															   if($_REQUEST['material4']==$mname)
																$str .= "selected='selected'";
																echo $str;
																echo "$mname";
																	$did=$row['be_material_name'];
																	echo "<option value='$did'>$did";
																}
																echo "</select>";
															}
															else
															{
																echo "<select Name=Material4 id=s_material2 class=\"form-control\">";
																echo "<option value='0'>Select Material";
																echo "</select>";
															}
														?>
									</div>
 <!--<input type="submit" value="Submit" name="SubmitData"/>-->
										</div>
										<div>
										<button id="payment-button" type="submit" name="download_be" class="btn btn-lg btn-info btn-block">
											<span id="payment-button-amount">Get Download Link</span>
											<span id="payment-button-sending" style="display:none;">Sendingâ€¦</span>
										</button>
										</div>
									</form>
	

<!--delete material-->
	<?php
	if(isset($_POST['download_be']))
	{
		if(isset($_POST["material4"]))
		{
			$b= $_POST["material4"];
			echo "<a href='../olcadminfinal/be_upload/$b' download>".$_POST['material4']."</a>";
			//echo "<a href='upload/$b' download>".$_POST['material']."</a>";
		}	
	}
?>
	<!--end delete material-->
	
	