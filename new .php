<?php
									include("connection.php");
									if($c)
									{
									mysqli_select_db($c,"olc");
									$i="select * from ssc10th";
									$res=mysqli_query($c,$i);
									echo "Select file to download: ";
									echo "<form method='post'>";
									echo "<select name='fn'>";
									while($row=mysql_fetch_array($res))
									{
									$a=$row['ssc_material_name'];
									echo "<option value='$a'>".$a."</option>";
									}
									echo "</select> <br><br>";
									echo "<input type='submit' name='sb' value='Get Download Link'>";
									echo "</form>";
									echo "<br>";
									mysql_close($c);
									}
									if(isset($_POST["sb"]))
									{
									$b= $_POST["fn"];
									echo "<a href='upload/$b' download>".$_POST['fn']."</a>";
									}
									?>