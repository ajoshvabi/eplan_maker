
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

{literal}
<script type="payment/web/application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<link href="payment/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="payment/web/js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment Form Widget</h1>
		<div class="content">
			
			<script src="payment/web/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>	
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <!--  -->
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <!-- <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li>  -->
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											
											<h3 class="pay-title">Credit Card Info</h3>
											<form method="post" action="">
												<div class="tab-for">
												<input type="hidden" name="hide" value="h">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="" name="nameoncard">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" name="cardno" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" name="month"/>	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" name="year"/>	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" name="cvvno" onfocus="this.value = '';"  required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.fednetbank.com/'"><i></i>Federal Bank</label> </div></div>

													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.indianbank.net.in/jsp/startIBPreview.jsp'"><i></i>Indian Bank</label> </div></div>

													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"  onclick="location.href='https://retail.onlinesbi.com/retail/login.htm'"><i></i>State Bank Of India</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/index.page'"><i></i>ICIC Bank</label> </div></div>	

													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://v1.hdfcbank.com/assets/popuppages/netbanking.htm'"><i></i>HDFC Bank</label> </div></div>
														
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://canarabank.com/NET_Banking.aspx'"><i></i>Canara Bank</label> </div></div>

											         <div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.axisbank.com/'"><i></i>Axis Bank</label> </div></div>

													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://netpnb.com/'"><i></i>Punjab National Bank</label> </div></div>		

													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.bankofbaroda.in/'"><i></i>Bank of Baroda</label> </div></div>	
													
													<div class="check_box" > <div class="radio"> <label><input type="radio" name="radio" onclick="location.href='https://www.yesbank.in/retail-disclaimer'"><i></i>Yes Bank</label> </div></div>	
													
												</div>
												<div class="clear"></div>
											</div>
											
										</div>
									</div>
						<!-- 			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div> -->
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
											<form method="post" action="">
												<div class="tab-for">
												<input type="hidden" name="hide" value="h1">						
													<h5>NAME ON CARD</h5>
														<input type="text" value="" name="nameoncard1">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="" name="cardno1">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" name="month1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" name="year1"/>	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" name="cvvno1" onfocus="this.value = '';"  required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © 2016 Payment Form Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
	</div>
	{/literal}
</body>
</html>