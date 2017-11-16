@extends('frontend.layouts.master')
@section('title', 'Home')
@section('main-content')
   <!--banner-->
		<div class="banner-section">
			<div class="container">
				@include('frontend.slider')
			</div>
		</div>
<!---banner--->
		<div class="content">
			<div class="banner-bottom">
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Easy & Smart</h4>
					</div>
					<div class="ban-right">
						<i class="fa fa-check-circle"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>30 Days Free Trail</h4>
					</div>
					<div class="ban-right">
						<i class="fa fa-calendar-o"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>Expert Staff</h4>
					</div>
					<div class="ban-right">
						<i class="fa fa-user"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 ban-grid">
					<div class="ban-left">
						<h4>We Are Fast</h4>
					</div>
					<div class="ban-right">
						<i class="fa fa-tachometer"></i>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		<!---welcome--->
			<div class="welcome-section">
				<div class="container">
					<h2 class="tittle"> Best Accounting Software in Bangladesh </h2> </br>
					<p><strong>Smart Account</strong> is a most user friendly Browser based Solution which combines Multi-user Account System, Responsive user Interface, Accounting anytime, anywhere, powerful reporting, easy to Customization, Customization Report etc. Simple, easy-to-use cloud accounting software to help you manage your business, the smart way!</p>
					<div class="welcome-grids">
						<div class="col-md-4 wel-grid">
								<img src="images/Pay-button-on-keyboard.jpg" class="img-responsive" alt="General Account Managment"/>
							<div class="wel-text hvr-shutter-out-horizontal">
								<h4>General  Account<span> Management</span></h4>
								<p align="justify">Project-wise Accounts Management, Receivables & Payables Entry, Due Payment, Balance Transference to other account, Account wise Monthly-Yearly Report etc. </p>
							</div>
						</div>
						<div class="col-md-4 wel-grid">
							<div class="wel-text hvr-shutter-out-horizontal wel1">
								<h4>Inventory<span>-Sales & Production </span></h4>
								<p align="justify">Product Order, Stock Management, Sales Management with Bar-code (POS Sale), Profit & Loss, Supplier & Client Manage with SMS Sending. Row Material, Production Function & Cost Management.</p>
							</div>
							<img src="{{asset('public/frontend/images/inventory.png')}}" class="img-responsive" alt="Inventory Sales & Production"/>
						</div>
						<div class="col-md-4 wel-grid">
						<img src="images/Billing.jpg" class="img-responsive" alt="Billing Management"/>
							<div class="wel-text hvr-shutter-out-horizontal">
								<h4>Billing Management <span> </span></h4>
								<p align="justify">Cable TV Billing, Internet Line Billing, Utility Billing Automatic Invoice Generate Every Month, Line Man Wise Bill, Area Wise Bill, Bill Pay by Mobile (bKash) Bank, SMS Sending etc</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---welcome--->
			<!---services--->
			<div class="services">
				<div class="container">
					<h3 class="tittle">Accounting Software Feature</h3>
					<div class="services-grids">
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
									<i class="fa  fa-desktop"></i>
									</div>
								<div class="right-grid">
									<h4>General Accounts </h4>
									<p align="justify">Project-wise Accounts Management, Receivables & Payables Entry, Due Payment, Balance Transference to other account, Account wise Monthly-Yearly Report etc. </p>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="fa fa-camera-retro" ></i>
									</div>
								<div class="right-grid">
									<h4>General Spending </h4>
									<p>Employ Information, Employee Pay clip Generate, Employee Advance Payment, Advance Adjustment, Report,  SMS Communication    </p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
									<i class="fa fa-tablet"></i>
									</div>
								<div class="right-grid">
									<h4>Production-Costing</h4>
									<p align="justify">The cornerstone of financial analysis for any manufacturer is calculating an accurate product cost & Inventory. Row Material Management, Production Function & Cost Management.</p>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="services-grids">
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="fa fa-laptop"></i>
									</div>
								<div class="right-grid">
									<h4>Inventory & Sales</h4>
									<p align="justify">Product Order, Stock Management, Sales Management with Bar-code (POS Sale), Profit & Loss, Supplier & Client Manage with SMS Sending.</p>
							    </div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
										<i class="fa fa-umbrella"></i>
									</div>
								<div class="right-grid">
									<h4>Billing Management </h4>
									<p align="justify">Cable TV Billing, Internet Line Billing, Utility Billing Automatic Invoice Generate Every Month, Line Man Wise Bill, Area Wise Bill, Bill Pay by Mobile (bKash) Bank, SMS Sending etc</p>
							     </div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="col-md-4 services-grid">
							<div class="service">
									<div class="left-grid">
									<i class="fa fa-globe"></i>
									</div>
								<div class="right-grid">
									<h4>SMS & e-Mail Send </h4>
									<p align="justify">SMS & e-Mail Send Facility there in Software, Organization can send SMS to Client, by the selecting in system all Member/ Client one by one or at once & out of database. </p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!-- Nav tabs -->
			@include('frontend.pricing_slider')
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
			<!---what we do--->
			<div class="what-section">
				<div class="container">
					<div class="what-grids">
						<div class="col-md-8 what-grid">
							<h3 class="tittle">Account Management Software In Bangladesh</h3>
							<h5>Online Accounting Solution‎, Free Account Management Software, Professional Invoices Anytime, Anywhere Access</h5>
							<p align="justify"><strong>Smart Account</strong> is a most user friendly Browser based Solution which combines Multi-user Account System, Responsive user Interface, Accounting anytime, anywhere, powerful reporting, easy to Customization, Customization Report etc. Simple, easy-to-use cloud accounting software to help you manage your business, the smart way!</p> </br>
							<p class="more"> <a href="http://demo.smartaccount-bd.com" target="_blank" class="button-pipaluk button--inverted"> Free Trial</a> </p>
						
						</div>							
						<div class="col-md-4 what-grid1">
							<img src="images/logo.png" class="img-responsive" alt="Best Account Management Software in Bangladesh"/>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!---test--->
			{{--client slider--}}
		@include('frontend.client_slider')
			<!-- //flex-slider -->

<!-- get to know -->
<div class="get-to-know">
	<div class="container">
		
<div class="row">
    <div class="col-sm-3 get-grid">
        <h4>Get to know us better now!</h4>
        <p>Share your Products over the Social Networks</p>
    </div>
    
    <div class="col-sm-3 get-grid">
         <a href="https://www.facebook.com/smartsoftbd" target="_blank"> <img src="images/facebook.png"/></a>
         <a href="https://plus.google.com/u/0/+SmartSoftwareIncbd" target="_blank"> <img src="images/googleplus.png"/></a>
         <a href="https://www.pinterest.com/smartsoftwarebd/" target="_blank"> <img src="images/pinterest.png"/></a>
         <a href="http://www.stumbleupon.com/stumbler/smartsoftwareinc" target="_blank"> <img src="images/Stumbleupon.png"/></a>
         <a href="https://www.linkedin.com/company/smart-software-inc" target="_blank"> <img src="images/linkedin.png"/></a>
         <a href="https://twitter.com/SmartSoftwarebd" target="_blank"> <img src="images/twitter.png"/></a>
    </div>
    <div class="col-sm-3 get-grid">
        <h4>Search!</h4>
        <p>Search across our website</p>
    </div>
    
    <div class="col-sm-3 get-grid">
         <form>
            <input class="form-control" data-wow-delay="0.5s" type="text" placeholder="Search..." />
         </form>
    </div>
</div>
		
	</div>
</div>
<!-- //get to know --> 
    
    
    
@stop