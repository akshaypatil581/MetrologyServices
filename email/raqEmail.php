<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office"
	xmlns:v="urn:schemas-microsoft-com:vml">

<?php 
	$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
	$companyName = $_GET["companyName"];
	$contactPersonName = $_GET["contactPersonName"];
	$phone = $_GET["phone"];
	$email = $_GET["email"];
	$tableData = json_decode($_GET["tableData"]);
?>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width" name="viewport" />
	<meta content="IE=edge" http-equiv="X-UA-Compatible" />
	<title></title>
	<style type="text/css">

		.csListTable {
			padding: 15px;
			text-align: left;
			}
		body {
			margin: 0;
			padding: 0;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}

		* {
			line-height: inherit;
		}

		a[x-apple-data-detectors=true] {
			color: inherit !important;
			text-decoration: none !important;
		}
	</style>
	<style id="media-query" type="text/css">
		@media (max-width: 660px) {

			.block-grid,
			.col {
				min-width: 320px !important;
				max-width: 100% !important;
				display: block !importid
			img.fullwidth,
			img.fullwidthOnMobile {
				max-width: 100% !important;
			}

			.no-stack .col {
				min-width: 0 !important;
				display: table-cell !important;
			}

			.no-stack.two-up .col {
				width: 50% !important;
			}

			.no-stack .col.num2 {
				width: 16.6% !important;
			}

			.no-stack .col.num3 {
				width: 25% !important;
			}

			.no-stack .col.num4 {
				width: 33% !important;
			}

			.no-stack .col.num5 {
				width: 41.6% !important;
			}

			.no-stack .col.num6 {
				width: 50% !important;
			}

			.no-stack .col.num7 {
				width: 58.3% !important;
			}

			.no-stack .col.num8 {
				width: 66.6% !important;
			}

			.no-stack .col.num9 {
				width: 75% !important;
			}

			.no-stack .col.num10 {
				width: 83.3% !important;
			}

			.video-block {
				max-width: none !important;
			}

			.mobile_hide {
				min-height: 0px;
				max-height: 0px;
				max-width: 0px;
				display: none;
				overflow: hidden;
				font-size: 0px;
			}

			.desktop_hide {
				display: block !important;
				max-height: none !important;
			}
		}
	</style>
</head>

<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f1f4f8;">
	<table bgcolor="#f1f4f8" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
		style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f1f4f8; width: 100%;"
		valign="top" width="100%">
		<tbody>
			<tr style="vertical-align: top;" valign="top">
				<td style="word-break: break-word; vertical-align: top;" valign="top">
					<div style="background-color:transparent;overflow:hidden">
						<div class="block-grid"
							style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; width: 100%; background-color: transparent;">
							<div
								style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<div class="col num12"
									style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
									<div style="width:100% !important;">
										<div
											style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<div class="mobile_hide">
												<table border="0" cellpadding="0" cellspacing="0" class="divider"
													role="presentation"
													style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
													valign="top" width="100%">
													<tbody>
														<tr style="vertical-align: top;" valign="top">
															<td class="divider_inner"
																style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;"
																valign="top">
																<table align="center" border="0" cellpadding="0"
																	cellspacing="0" class="divider_content"
																	role="presentation"
																	style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;"
																	valign="top" width="100%">
																	<tbody>
																		<tr style="vertical-align: top;" valign="top">
																			<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
																				valign="top"><span></span></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background-color:transparent;overflow:hidden">
						<div class="block-gridid"
							style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; width: 100%; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
								<div class="col num12"
									style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
									<div style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div
											style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<div align="center" class="img-container center autowidth"
												style="padding-right: 0px;padding-left: 0px;">
												<img
													align="center" alt="I'm an image" border="0"
													class="center autowidth" src="<?php echo $baseUrl;?>/images/Invite_Illustration.png"
													style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 640px; display: block;"
													title="I'm an image" width="640" />
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
												<div
													style="line-height: 1.2; font-size: 12px; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;">
													<p
														style="font-size: 46px; line-height: 1.2; text-align: center; word-break: break-word; mso-line-height-alt: 55px; margin: 0;">
														<span style="font-size: 46px; color: #003188;"><strong>New Quote Request</strong></span></p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.5;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">
												<div
													style="line-height: 1.5; font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 18px;">
													<p
														style="text-align: center; line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; margin: 0;">
														<span style="color: #6d89bc;"><span style="font-size: 16px;">New
														Quote Request through the website request a quote form.</span></span>
													</p>
													<p
														style="text-align: center; line-height: 1.5; word-break: break-word; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; margin: 0;">
														<span style="color: #6d89bc;"><span
																style="font-size: 16px;">Following are the
																deatils.</span></span></p>
												</div>
											</div>
											<table border="0" cellpadding="0" cellspacing="0" class="divider"
												role="presentation"
												style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
												valign="top" width="100%">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner"
															style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 44px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;"
															valign="top">
															<table align="center" border="0" cellpadding="0"
																cellspacing="0" class="divider_content"
																role="presentation"
																style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;"
																valign="top" width="100%">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
																			valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<div align="center" class="img-container center autowidth"
												style="padding-right: 0px;padding-left: 0px;">
													<img align="center" alt="Image" border="0" class="center autowidth"
													src="<?php echo $baseUrl?>/images/Divisor_Lines.png"
													style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 158px; display: block;"
													title="Image" width="158" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background-color:transparent;overflow:hidden">
						<div class="block-grid"
							style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; width: 100%; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
								<div class="col num12"
									style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
									<div style="width:100% !important;">
										<div
											style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<table border="0" cellpadding="0" cellspacing="0" class="divider"
												role="presentation"
												style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
												valign="top" width="100%">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner"
															style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 44px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;"
															valign="top">
															<table align="center" border="0" cellpadding="0"
																cellspacing="0" class="divider_content"
																role="presentation"
																style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;"
																valign="top" width="100%">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
																			valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p
														style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
														<strong><span style="color: #003188; font-size: 20px;">Company Name: <?php echo $companyName ?></span></strong>
													</p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p
														style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
														<strong><span style="color: #003188; font-size: 20px;">Contact Person Name: <?php echo $contactPersonName ?></span></strong>
													</p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p
														style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
														<strong><span style="color: #003188; font-size: 20px;">Email: <?php echo $email ?></span></strong></p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p
														style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
														<strong><span style="color: #003188; font-size: 20px;">Phone: <?php echo $phone ?></span></strong></p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p
														style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
														<strong><span style="color: #003188; font-size: 20px;">List your items for calibration service</span></strong></p>
												</div>
											</div>
											<div
												style="color:#555555;font-family:Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:25px;padding-left:40px;">
												<div
													style="font-size: 14px; line-height: 1.2; color: #555555; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 17px;">
													<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;">
													<table class="csListTable">
														<thead>
															<tr>
															<th scope="col">Sr.No</th>
															<th scope="col">Manufacturer</th>
															<th scope="col">Model</th>
															<th scope="col">Qty</th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($tableData as $key => $value) { ?>
															<tr>
															<th scope="row"><?php echo $value->id?></th>
															<td><?php echo $value->Manufacturer?></td>
															<td><?php echo $value->Model?></td>
															<td><?php echo $value->Qty?></td>
															</tr>
															<?php } ?>
														</tbody>
														</table>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background-color:transparent;overflow:hidden">
						<div class="block-grid"
							style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; width: 100%; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
								<div class="col num12"
									style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
									<div style="width:100% !important;">
										<div
											style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<div align="center" class="button-container"
												style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px;">
													<a href="mailto:<?php echo $email?>"
													style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #fb5f3d; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; width: auto; width: auto; border-top: 1px solid #fb5f3d; border-right: 1px solid #fb5f3d; border-bottom: 1px solid #fb5f3d; border-left: 1px solid #fb5f3d; padding-top: 15px; padding-bottom: 15px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;"
													target="_blank"><span style="padding-left:15px;padding-right:15px;font-size:16px;display:inline-block;"><span
															style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><strong>Contact Back</strong></span></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background-color:transparent;overflow:hidden">
						<div class="block-grid"
							style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; width: 100%; background-color: transparent;">
							<div
								style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;">
								<div class="col num12"
									style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">
									<div style="width:100% !important;">
										<div
											style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">
											<div class="mobile_hide">
												<table border="0" cellpadding="0" cellspacing="0" class="divider"
													role="presentation"
													style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
													valign="top" width="100%">
													<tbody>
														<tr style="vertical-align: top;" valign="top">
															<td class="divider_inner"
																style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 30px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px;"
																valign="top">
																<table align="center" border="0" cellpadding="0"
																	cellspacing="0" class="divider_content"
																	role="presentation"
																	style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;"
																	valign="top" width="100%">
																	<tbody>
																		<tr style="vertical-align: top;" valign="top">
																			<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"
																				valign="top"><span></span></td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>