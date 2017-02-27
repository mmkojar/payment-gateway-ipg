<?php include("ipg-util.php"); ?>





<html>
	<head>
		<title>IPG Connect Sample for PHP(hashing)</title>
	</head>
	<body>
		<p>
		<h1>
			Order Form
		</h1>
		<?php 
		$responseSuccessURL = "http://127.0.0.1/PHP/response_success.php";
		$responseFailURL = "http://127.0.0.1/PHP/response_fail.php";
		
		?>





<form method="post"
			action="https://test.ipg-online.com/connect/gateway/processing">
			
			

			<input type="hidden" name="timezone" value="IST" />
			<input type="hidden" name="authenticateTransaction" value="true" />

			<table>
				
				<tr>
					<td>
						Transaction Type
					</td>
					<td>
						<input size="50" type="text" name="txntype" value="sale"/>
					</td>
				</tr>
				<tr>
					<td>
						Transaction Date Time
					</td>
					<td>
						<input size="50" type="text" name="txndatetime" value="<?php echo getDateTime(); ?>" />
					</td>
				</tr>
				<tr>
					<td>
						Calculated HASH
					</td>
					<td>
						<input size="50" type="text" name="hash" value="<?php echo createHash("1","356"); ?>"/>
					</td>
				</tr>
				<tr>
					<td>
						Currency
					</td>
					<td>
						<input size="50" type="text" name="currency" value="356" />

					</td>
				</tr>
				<tr>
					<td>
						Payment Mode
					</td>
					<td>
						<input size="50" type="text" name="mode" value="payonly" />
					</td>
				</tr>
				<tr>
					<td>
						Store Id
					</td>
					<td>
						<input size="50" type="text" name="storename" value="3344000159" />
					</td>
				</tr>
				<tr>
					<td>
						Chargetotal
					</td>
					<td>
						<input size="50" type="text" name="chargetotal" value="1" />
					</td>
				</tr>
				
				<tr>
					<td>
						Payment Method
					</td>
					<td>
						<input size="50" type="text" name="paymentMethod" value="" />
					</td>
				</tr>
				<tr>
					<td>
						full_bypass
					</td>
					<td>
						<input id="" name="full_bypass" size="20" value="false" type="text">
					</td>
				</tr>
				<tr>
					<td>
						Shared Secret
					</td>
					<td>
						<input size="50" type="text" name="sharedsecret" value="asdf1234" />
					</td>
				</tr>
				
			<!--	<tr>
					<td>
						oid
					</td>
					<td>
						<input size="50" type="text" name="oid" value="zxcvmnbv1234" />
					</td>
				</tr>-->
				
				<tr>
							<td>email</td>
							<td>
								<input id="email" name="email" class="x25" size="40" type="text" value="renuka.kolte@firstdata.com.au">
							</td>
						</tr>

				<tr>
					<td>
						Language
					</td>
					<td>
						<select name="language">
							<option value="de_DE">Deutsch</option>
							<option value="en_EN" selected>English</option>
						</select>
					</td>
				</tr>
				
				<input type="hidden" name="responseSuccessURL" value="<?php echo $responseSuccessURL ?>"/>
			
			    <input type="hidden" name="responseFailURL" value="<?php echo $responseFailURL ?>"/>
				
			
			
				<tr>
					<td colspan="2" align="center"><input type="submit" name ="submitBtn" value="Submit This Form"></td>
				</tr>
				<input type="hidden" name="hash_algorithm" value="SHA1"/>
		</table>
		</form>

	</body>
</html>
