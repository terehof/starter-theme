<?php
	$geo_data = get_user_geo_data();
	$browser = new Browser();
?>

<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<style type="text/css">
			@media only screen and (max-width: 600px) {
				.email-content td { font-size: 16px !important; }
				.email-content td[nowrap] { font-size: 14px !important; }		
				
				.email-head td,
				.email-content .columns td { display: block; width: 100%; padding-bottom: 30px; }
				
				.email-head td { padding-left: 0 !important; padding-right: 0 !important; text-align: center; }
				.email-head td.email-site-logo { padding-bottom: 0 !important; }
				.email-head td.email-site-logo svg { display: block; }
			 }
		</style>
	</head>

	<body style="margin: 0; padding: 0;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family: Arial, sans-serif; background: #FFF;">
			<tr>
				<td style="background: #093652; padding-top: 40px; padding-bottom: 40px;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="email-head">
						<tr>
							<td align="center" class="email-site-logo" style="padding-left: 30px;">
								<a href="<?php bloginfo('url') ?>" target="_blank">
									<?php svg_inline( get_attachment_src( carbon_get_theme_option('logo') ), 'display: block; width: 200px; height: auto; color: #FFF;' ) ?>
								</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="center" style="background: #4b6f8a;">
								<p style="font-size: 20px; letter-spacing: 4px; color: #FFF; text-transform: uppercase; margin-top: 30px; margin-bottom: 30px;">
			 						Your Order Has Been Received
								</p>
							</td>
						</tr>
						
						<tr>
							<td align="center">
								<span style="display: block; width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-top: 15px solid #4b6f8a; margin-top: -1px;"></span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr class="email-content">
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding-top: 60px; padding-bottom: 60px; padding-left: 10%; padding-right: 10%;">
								<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
									<tr>
										<td nowrap>
											<p style="font-size: 18px; font-weight: bold; letter-spacing: 2px; color: #093652; background: #FFF; text-transform: uppercase; padding-right: 15px; margin-top: 20px; margin-bottom: 20px;">Order information</p>
										</td>
										
										<td valign="middle" style="width: 100%;">
											<span style="display: block; background: #093652; height: 1px;"></span>
										</td>
									</tr>
								</table>

								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('First Name', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $first_name ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Last Name', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $last_name ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Email', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $email ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Phone', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $phone ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Company Name', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $company_name ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Street Address', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $street_address ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('City', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $city ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('State', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $state ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('ZIP Code', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $zip_code ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Drop Off Date', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $drop_off_date ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Pick Up Date', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $pick_up_date ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Placement', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $placement ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Waste Type', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $waste_type ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Dumpster Size', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $dumpster_size ?>
										</td>
									</tr>

									<tr>
										<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
											<strong style="display: block; font-weight: bold; padding-right: 30px;">
												<?php _e('Total Amount', 'adm') ?>:
											</strong>
										</td>

										<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
											<?php echo $amount ?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #ededed;">
						<tr>
							<td align="center" style="padding-top: 30px; padding-bottom: 30px;">
								<a href="<?php bloginfo('url') ?>" target="_blank" style="display: inline-block;">
									<?php svg_inline( get_attachment_src( carbon_get_theme_option('logo') ), 'display: block; width: 150px; height: auto; fill: #093652;' ) ?>
								</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>

</html>