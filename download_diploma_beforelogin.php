<!--delete material form-->
	<form action="material.php" method="post" id="form3">
										 <div class="row form-group">
											 <div >
                                                    <label for="select" class=" form-control-label">Select Department</label>
                                                </div>
										
														<script type="text/javascript">
														//<![CDATA[
														var theForm3 = document.forms['form3'];
														if (!theForm3) {
															theForm3 = document.form3;
														}
														function __doPostBack3() {
														if (!theForm3.onsubmit || (theForm3.onsubmit() != false)) {
															theForm3.submit();
														}
														}
														//]]>
														</script>
 <!-- Subject -->
									<div>
										<?php
											include("connection.php");
											$data = mysqli_query($c,"select * from department");
											print"<select name=\"department3\" onchange=\"javascript:__doPostBack3();\" id=\"dept\" class=\"form-control\">";
											echo "<option value='0'>Select Department</option>";
											while ($row = mysqli_fetch_assoc($data))
											{

												$dept_name = $row['dept_name'];
												$str="<option value='$dept_name'";
												if(isset($_REQUEST['department3']))
												{
													
													if($_REQUEST['department3']==$dept_name)
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
										<div >
														<?php
														include("connection.php"); 
															
															if(isset($_REQUEST['department3']))
															{
																$data = mysqli_query($c,"select sname from diploma_subject where diploma_dept='".$_REQUEST['department3']."'");
															   print"<select Name=\"subject3\" id=\"s_subject3\" class=\"form-control\" onchange=\"javascript:__doPostBack3();\" selectedValue=". $_REQUEST['department3'] .">";
																echo "<option value='0'>Select subject</option>";
																while ($row = mysqli_fetch_assoc($data))
																{
																	$sn = $row['sname'];
																	$str="<option value='$sn'";
																	if(isset($_REQUEST['subject3']))
																	{
																		
																		if($_REQUEST['subject3']==$sn)
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
																echo "<select Name=subject3 id=s_subject3 class=\"form-control\">";
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
												if(isset($_REQUEST['subject3']))
												{
													$data = mysqli_query($c,"select diploma_material_name from diploma where diploma_subject='".$_REQUEST['subject3']."'");
												   print"<select Name=\"material3\" id=\"s_material2\" class=\"form-control\" onchange=\"javascript:__doPostBack3();\" selectedValue=". $_REQUEST['subject3'] .">";
													echo "<option value=''>Select Material</option>";
													while ($row = mysqli_fetch_assoc($data))
													{
													$mname = $row['diploma_material_name'];
													$str="<option value='$mname'";
													if(isset($_REQUEST['material3']))
												   if($_REQUEST['material3']==$mname)
													$str .= "selected='selected'";
													echo $str;
													echo "$mname";
														$did=$row['diploma_material_name'];
														echo "<option value='$did'>$did";
													}
													echo "</select>";
												}
												else
												{
													echo "<select Name=Material3 id=s_material2 class=\"form-control\">";
													echo "<option value='0'>Select Material";
													echo "</select>";
												}
											?>
									</div>
 <!--<input type="submit" value="Submit" name="SubmitData"/>-->
										</div>
										<div>
										<button id="payment-button" type="submit" name="download_diploma_beforelogin" class="btn btn-lg btn-info btn-block">
											<span id="payment-button-amount">Get Download Link</span>
											<span id="payment-button-sending" style="display:none;">Sending…</span>
										</button>
										</div>
									</form>
	

<!--delete material-->
	<?php
	if(isset($_POST['download_diploma_beforelogin']))
	{
		if(isset($_POST["material3"]))	
		{
			echo "You must have to login first to Download.. <a href='login.php'> login </a>";
			//$b= $_POST["material3"];
			//echo "<a href='upload/$b' download>".$_POST['material']."</a>";
			//echo "<a  class='btn btn-select-plan btn-sm' href='../olcadminfinal/diploma_upload/$b' download>".$_POST['material3']."</a>";
		}
	}
?>
	<!--end delete material-->
	
	