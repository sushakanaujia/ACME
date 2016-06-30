<html>
	<head>
		<meta charset="utf-8">
		<title>ACME</title>
		<!-- Mobile specific metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Force IE9 to render in normal mode -->
		<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
		<meta name="author" content="" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="application-name" content="" />
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="documentContainer">
			<!-- wrap for header and page layout starts here -->
			<div id="wrap">
				<!-- companyHeader starts here -->
				
				<!-- companyHeader ends here -->
				<!-- pageLayout starts here -->
				<div id="pageLayout" class="outer_wrapper">
					<!-- pageHeader starts here -->
					<div class="pageHeader tradepoint_theme">
						<div class="container">
							<div class="pageHeaderText">ACME COMPUTER REPAIR</div>
						</div>
					</div>
					<!-- pageHeader ends here -->
					
					<!-- PageContents starts here -->
					<div class="createContractPage pageContents">
						<div class="container">
							<div class="createEventInner customSelect">
								<form action="process.php" method="post" class="form-horizontal" id="indexform" novalidate='novalidate'>
									<section class="createEventSection container_white">
										<div class="pageSectionTitle">
											ACME COMPUTER  information
										</div>
										<div class="form_container toolTipForm">
											<div class="form-group">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Complainer Name</strong></span>
															<span>Only letters are allowed</span>
														</div>
														<div class="form_label">
															Complainer Name
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5">
													<input type="text" id="name" name="name" class="form-control" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Complainer Mobile</strong></span>
															<span>Only numbers are allowed</span>
														</div>
														<div class="form_label">
															Complainer Mobile
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5">
													<input type="text" id="mobile" name="mobile" class="form-control" maxlength="10" >
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Select Vendor</strong></span>
															<span>Please select vendor</span>
														</div>
														<div class="form_label">
															Select Vendor
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5 customTypeHead">
													<select id="vendor" name="vendor" style="width:360px;" onchange="clear_size();">
														<option value="">Select Your vendor Type</option>
														<?php $vendor=array(1=>'Sony',2=>'Apple',3=>'Hp'); foreach($vendor as $val){?>
														<option value="<?php echo lcfirst($val);?>"><?php echo ucfirst($val);?></option>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Select Type</strong></span>
															<span>Please select Type</span>
														</div>
														<div class="form_label">
															Select Type
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5 customTypeHead">
													<select id="type" name="type" style="width:360px;" onchange="get_size();">
														<option value="">Select Your Type</option>
														<?php $type=array(1=>'laptop',2=>'personel desktop',3=>'server'); foreach($type as $val){?>
														<option value="<?php echo lcfirst($val);?>"><?php echo ucfirst($val);?></option>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group" id="laptop" style="display:none;">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Select Size</strong></span>
															<span>Please select Size</span>
														</div>
														<div class="form_label">
															Select Size
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5 customTypeHead">
													<select id="laptop_size" name="laptop_size" style="width:360px;">
														<option value="">Select Your Size</option>
														<?php $size=array(1=>'small'); foreach($size as $val){?>
														<option value="<?php echo lcfirst($val);?>"><?php echo ucfirst($val);?></option>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group" id="apple"  style="display:none;">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Select Size</strong></span>
															<span>Please select Size</span>
														</div>
														<div class="form_label">
															Select Size
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5 customTypeHead">
													<select id="apple_size" name="apple_size" style="width:360px;">
														<option value="">Select Your Size</option>
														<?php $size=array(1=>'small',2=>'medium'); foreach($size as $val){?>
														<option value="<?php echo lcfirst($val);?>"><?php echo ucfirst($val);?></option>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="form-group" id="server"  style="display:none;">
												<label class="col-md-2 col-sm-3 col-sm-offset-1 control-label">
													<div class="tooltipWrap">
														<div class="tooltipInner">
															<span><strong>Select Size</strong></span>
															<span>Please select Size</span>
														</div>
														<div class="form_label">
															Select Size
														</div>
													</div>
												</label>
												<div class="col-md-4 col-sm-5 customTypeHead">
													<select id="server_size" name="server_size" style="width:360px;">
														<option value="">Select Your Size</option>
														<?php $size=array(1=>'small',2=>'medium',3=>'large'); foreach($size as $val){?>
														<option value="<?php echo lcfirst($val);?>"><?php echo ucfirst($val);?></option>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<label id="size-error" style="display:none;"></label>
											<div class="createContractAction clearfix">
												<div class="form-group">
													<div class="col-md-5 col-md-offset-3">
														<button type="button" class="btn btn_tradepoint font_12" id="btncontracts" >Submit</button>
														
													</div>
												</div>
											</div>
										</div>
									</section>
								</form>
							</div>
						</div>
					</div>
					<!-- PageContents ends here -->
				</div>
				<!-- pageLayout ends here -->
				<div id="confirmation" class="clearfix modal fade tradepointModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">ACME COMPUTER REPAIR</h4>
							</div>
							<div class="modal-body">
								<div class="comingSoonMsg">
									Please select size
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<!-- for sticky footer -->
				<div class="clearBoth"></div>
				<div class="push"></div>
			</div>
			<!-- wrap for header and page layout ends here -->
			<!-- footer Container Starts here -->
			
			<!-- footer Container ends here -->
			
		</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validate.js"></script>
		<script src="js/validate.min.js"></script>
		<script>
		$(document).ready(function(){
		$('#name').val('');
		$('#mobile').val('');
		$('#vendor').val('');
			$('#type').val('');
		var type=$('#type').val();
		var vendor=$('#vendor').val();
		if((vendor=='sony' || vendor=='apple' || vendor=='hp') && (type=='laptop' || type=='personel desktop')){
			var lflag=true;
			}	else{ var lflag=false;}
		if((vendor=='sony' ||  vendor=='hp') && (type=='server')){
			var sflag=true;
			}	else{ var sflag=false;}
		if((vendor=='apple') && (type=='server')){
			var aflag=true;
			}	else{ var aflag=false;}
		$.validator.addMethod("blank", function(value, element)
		{
		if((jQuery.trim(value)).length==0)
		return false;
		else
		return true;
		}, "Only blank spaces are  allowed");
		$.validator.addMethod("letters", function(value, element)
		{
		return this.optional(element) || /^[a-zA-Z\u00E0-\u00FC\:\-_#\n// ]+$/i.test(value);
		}, "Special characters and numbers are not allowed");
		$.validator.addMethod("validaddress", function(value, element)
		{
		return this.optional(element) || /^[a-zA-Z0-9\u00E0-\u00FC\.,:;\-_#$@&%`'?+"()\n// ]+$/i.test(value);
		}, "Special characters are not allowed");
		$.validator.addMethod("valid_commission", function(value, element)
		{
		if(value >=1 && value <=100)
		return true;
		else
		return false;
		}, "Commission between 1-100 ");
		$( "#indexform" ).validate(
		{
			highlight: function(element) {
		if($(element).hasClass("chosen-select"))
		{
		$(element).next("div").addClass("error");
		}
		else
		{
		$(element).addClass("error");
		}
		},
		
				errorPlacement: function(error, element) {
					if(element.hasClass("chosen-select")){
						error.insertAfter(element.parent().find('.chosen-container'));
					}
						else if(element.parents('.fl-content').find(".input-group-addon").length>0){
								error.insertAfter(element.parent());
						}
						else if(element.hasClass("styled")){
							error.insertAfter(element.parent());
						}
					else{
							error.insertAfter(element);
					}
				
				},
		rules: {
		
		
			vendor: {
		
		required: true,
		
		},
		type: {
		
		required: true,
		
		},
		laptop_size: {
		
		required: lflag,
		
		},
		server_size: {
		
		required: sflag,
		
		},
		apple_size: {
		
		required: aflag,
		
		},
		name:{
		required: true,
		blank: true,
		letters: true,
		},
		mobile:{
		required: true,
		blank: true,
		number: true,
		
		},
		
		
				
		
		},
		messages: {
		
		
								
		}
		});
		$('#btncontracts').click(function() {
		
		$('#indexform').valid();
		if ($('#indexform').valid()) {
			if($('#laptop_size').val()=="" && $('#server_size').val()=="" && $('#server_size').val()==""){
		$('#confirmation').modal('show');
		return false;
		}else{
		
		
			$( "#indexform" ).submit();
			}
		
		}   });
		});
		function get_size(){
			
		var type=$('#type').val();
		var vendor=$('#vendor').val();
		if((vendor=='sony' || vendor=='apple' || vendor=='hp') && (type=='laptop' || type=='personel desktop')){
		$('#laptop').show();
		$('#apple').hide();
		$('#server').hide();
		}
		else if((vendor=='sony' ||  vendor=='hp') && (type=='server')){
		$('#laptop').hide();
		$('#apple').hide();
		$('#server').show();
		}
		else if((vendor=='apple') && (type=='server')){
		$('#laptop').hide();
		$('#server').hide();
		$('#apple').show();
		}
		}
		function clear_size(){
		$('#type').val('');
		}
		</script>
	</body>
</html>