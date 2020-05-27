<?php
	$geo_data = get_user_geo_data();
	$browser = new Browser();

	$is_notification = $action_settings['label'] == 'Email Notification';
	$is_confirmation = $action_settings['label'] == 'Email Confirmation';
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
							<?php if ( $is_notification ) : ?>
								<td align="right" class="email-hd-logo" style="padding-right: 30px;">
									<a href="https://harbingermarketing.com" target="_blank" style="display: inline-block;">
										<img src="{{TEMPLATE_PATH}}/images/logo-white.png" alt="" style="display: block; width: 200px;">
									</a>
								</td>
							<?php endif ?>
							
							<td align="<?php echo $is_notification ? 'left' : 'center' ?>" class="email-site-logo" style="padding-left: 30px;">
								<a href="<?php bloginfo('url') ?>" target="_blank">
                                    <img src="{{TEMPLATE_PATH}}/images/logo-white.png" alt="" style="display: block; width: 200px; height: auto;">
                                    <!-- TODO: Swap harbinger logo for website logo -->
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
									<?php if ( $is_notification ) : ?>
										You received another lead from Harbinger Marketing
									<?php else : ?>
										We have received your submission
									<?php endif ?>
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
											<p style="font-size: 18px; font-weight: bold; letter-spacing: 2px; color: #093652; background: #FFF; text-transform: uppercase; padding-right: 15px; margin-top: 20px; margin-bottom: 20px;">Key information</p>
										</td>
										
										<td valign="middle" style="width: 100%;">
											<span style="display: block; background: #093652; height: 1px;"></span>
										</td>
									</tr>
								</table>

								<table width="100%" border="0" cellspacing="0" cellpadding="0">
									<?php foreach ( $data['fields'] as $field ) : ?>
										<?php if ( $field['type'] == 'html' || $field['type'] == 'spam' || $field['type'] == 'recaptcha' || $field['type'] == 'submit' ) continue; ?>
										
										<tr>
											<td valign="top" style="font-size: 20px; padding-bottom: 15px;">
												<strong style="display: block; font-weight: bold; padding-right: 30px;">
													<?php echo $field['label'] ?>:
												</strong>
											</td>

											<td valign="top" style="width: 100%; font-size: 20px; padding-bottom: 15px;">
												<?php echo is_array( $field['value'] ) ? implode( ', ', $field['value'] ) : $field['value'] ?>
											</td>
										</tr>
									<?php endforeach ?>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			
			<?php if ( $is_notification ) : ?>
				<tr class="email-content">
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td style="padding-bottom: 60px; padding-left: 10%; padding-right: 10%;">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 10px;">
										<tr>
											<td nowrap>
												<p style="font-size: 18px; font-weight: bold; letter-spacing: 2px; color: #093652; background: #FFF; text-transform: uppercase; padding-right: 15px; margin-top: 20px; margin-bottom: 20px;">Other information</p>
											</td>

											<td valign="middle" style="width: 100%;">
												<span style="display: block; background: #093652; height: 1px;"></span>
											</td>
										</tr>
									</table>


									<table class="columns" width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td valign="top" style="font-size: 20px;">
												<img src="{{TEMPLATE_PATH}}/images/pin-icon.png" style="width: 40px; margin-bottom: 30px;">

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>City:</strong> <?php echo $geo_data['geoplugin_city'] ?>
												</p>

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>State:</strong> <?php echo $geo_data['geoplugin_regionName'] ?>
												</p>

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>Country:</strong> <?php echo $geo_data['geoplugin_countryName'] ?>
												</p>
											</td>

											<td valign="top" style="font-size: 20px;">
												<img src="{{TEMPLATE_PATH}}/images/computer-icon.png" style="width: 60px; margin-bottom: 30px;">

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>Browser:</strong> <?php echo $browser->getBrowser() ?>
												</p>

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>Operatng System:</strong> <?php echo $browser->getPlatform() ?>
												</p>

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR'] ?>
												</p>
											</td>

											<td valign="top" style="font-size: 20px;">
												<img src="{{TEMPLATE_PATH}}/images/clock-icon.png" style="width: 40px; margin-bottom: 30px;">

												<p style="padding-bottom: 15px; margin: 0;">
													<strong>Time Zone:</strong> <?php echo $geo_data['geoplugin_timezone'] ?>
												</p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			<?php endif ?>
			
			<tr>
				<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background: #ededed;">
						<tr>
							<td align="center" style="padding-top: 30px; padding-bottom: 30px;">
								<a href="<?php echo $is_notification ? 'https://harbingermarketing.com' : get_bloginfo('url') ?>" target="_blank" style="display: inline-block;">
									<?php if ( $is_notification ) : ?>
										<img src="{{TEMPLATE_PATH}}/images/logo-icon.png" alt="" style="display: block; height: 40px;">
									<?php else : ?>
                                        <img src="{{TEMPLATE_PATH}}/images/logo-icon.png" alt="" style="display: block; height: 40px;">
                                        <!-- TODO: Swap harbinger logo for website logo -->
									<?php endif ?>
								</a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>

</html>