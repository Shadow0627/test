<?php




$kod = MD5($email."b5994c316da4809d3928b25ccdc40bf6");

$to = $email;
$subject = "Twoje Hasło";

$message = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Respmail is a response HTML email designed to work on all major email platforms and smartphones</title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<meta content="MSHTML 8.00.6001.23562" name="GENERATOR" />
</head>
<body bgcolor="#ffffff">
<div>&nbsp;</div>
<!--
==================== Respmail ====================
Respmail is a response HTML email designed to work
on all major devices and responsive for smartphones
that support media queries.
** NOTE **
This template comes with a lot of standard features
that has been thoroughly tested on major platforms
and devices, it is extremely flexible to use and
can be easily customized by removing any row that
you do not need.
it is gauranteed to work 95% without any major flaws,
any changes or adjustments should thoroughly be
tested and reviewed to match with the general
structure.
** Profile **
Licensed under MIT (https://github.com/charlesmudy/responsive-html-email-template/blob/master/LICENSE)
Designed by Shina Charles Memud
Respmail v1.2 (http://charlesmudy.com/respmail/)
** Quick modification **
We are using width of 500 for the whole content,
you can change it any size you want (e.g. 600).
The fastest and safest way is to use find & replace
Sizes: [
		wrapper   : "500",
		columns   : "210",
		x-columns : [
						left : "90",
						right: "350"
				]
		}
	--></body>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<meta content="telephone=no" name="format-detection" /><!-- disable auto telephone linking in iOS -->
<style type="text/css">HTML {
	PADDING-BOTTOM: 0px; BACKGROUND-COLOR: #e1e1e1; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
BODY {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; WIDTH: 100% !important; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica, Arial, "Lucida Grande", sans-serif; HEIGHT: 100% !important; PADDING-TOP: 0px
}
#bodyTable {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; WIDTH: 100% !important; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica, Arial, "Lucida Grande", sans-serif; HEIGHT: 100% !important; PADDING-TOP: 0px
}
#bodyCell {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; WIDTH: 100% !important; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica, Arial, "Lucida Grande", sans-serif; HEIGHT: 100% !important; PADDING-TOP: 0px
}
#bodyCell {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; WIDTH: 100% !important; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica, Arial, "Lucida Grande", sans-serif; HEIGHT: 100% !important; PADDING-TOP: 0px
}
TABLE {
	BORDER-COLLAPSE: collapse
}
TABLE[id=bodyTable] {
	MARGIN: auto; WIDTH: 100% !important; MAX-WIDTH: 500px !important; COLOR: #7a7a7a; FONT-WEIGHT: normal
}
IMG {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; LINE-HEIGHT: 100%; OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: medium; HEIGHT: auto; BORDER-TOP: 0px; BORDER-RIGHT: 0px; TEXT-DECORATION: none
}
A IMG {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; LINE-HEIGHT: 100%; OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: medium; HEIGHT: auto; BORDER-TOP: 0px; BORDER-RIGHT: 0px; TEXT-DECORATION: none
}
A {
	BORDER-BOTTOM: 1px solid; TEXT-DECORATION: none !important
}
H1 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
H2 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
H3 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
H4 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
H5 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
H6 {
	TEXT-ALIGN: left; PADDING-BOTTOM: 0px; LINE-HEIGHT: 125%; MARGIN: 0px 0px 10px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; FONT-FAMILY: Helvetica; LETTER-SPACING: normal; COLOR: #5f5f5f; FONT-SIZE: 20px; FONT-WEIGHT: normal; PADDING-TOP: 0px
}
.ReadMsgBody {
	WIDTH: 100%
}
.ExternalClass {
	WIDTH: 100%
}
.ExternalClass {
	LINE-HEIGHT: 100%
}
.ExternalClass P {
	LINE-HEIGHT: 100%
}
.ExternalClass SPAN {
	LINE-HEIGHT: 100%
}
.ExternalClass FONT {
	LINE-HEIGHT: 100%
}
.ExternalClass TD {
	LINE-HEIGHT: 100%
}
.ExternalClass DIV {
	LINE-HEIGHT: 100%
}
TABLE {
	mso-table-lspace: 0pt; mso-table-rspace: 0pt
}
TD {
	mso-table-lspace: 0pt; mso-table-rspace: 0pt
}
#outlook A {
	PADDING-BOTTOM: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
IMG {
	OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: medium; DISPLAY: block; -MS-INTERPOLATION-MODE: bicubic; TEXT-DECORATION: none
}
BODY {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
TABLE {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
TD {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
P {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
A {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
LI {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
BLOCKQUOTE {
	FONT-WEIGHT: normal !important; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%
}
.ExternalClass TD[class="ecxflexibleContainerBox"] H3 {
	PADDING-TOP: 10px !important
}
H1 {
	LINE-HEIGHT: 100%; FONT-STYLE: normal; DISPLAY: block; FONT-SIZE: 26px; FONT-WEIGHT: normal
}
H2 {
	LINE-HEIGHT: 120%; FONT-STYLE: normal; DISPLAY: block; FONT-SIZE: 20px; FONT-WEIGHT: normal
}
H3 {
	LINE-HEIGHT: 110%; FONT-STYLE: normal; DISPLAY: block; FONT-SIZE: 17px; FONT-WEIGHT: normal
}
H4 {
	LINE-HEIGHT: 100%; FONT-STYLE: italic; DISPLAY: block; FONT-SIZE: 18px; FONT-WEIGHT: normal
}
.flexibleImage {
	HEIGHT: auto
}
.linkRemoveBorder {
	BORDER-BOTTOM: 0px
}
TABLE[class=flexibleContainerCellDivider] {
	PADDING-BOTTOM: 0px !important; PADDING-TOP: 0px !important
}
BODY {
	BACKGROUND-COLOR: #e1e1e1
}
#bodyTable {
	BACKGROUND-COLOR: #e1e1e1
}
#emailHeader {
	BACKGROUND-COLOR: #e1e1e1
}
#emailBody {
	BACKGROUND-COLOR: #ffffff
}
#emailFooter {
	BACKGROUND-COLOR: #e1e1e1
}
.nestedContainer {
	BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BACKGROUND-COLOR: #f8f8f8; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid
}
.emailButton {
	BACKGROUND-COLOR: #205478; BORDER-COLLAPSE: separate
}
.buttonContent {
	TEXT-ALIGN: center; PADDING-BOTTOM: 15px; LINE-HEIGHT: 100%; PADDING-LEFT: 15px; PADDING-RIGHT: 15px; FONT-FAMILY: Helvetica; COLOR: #ffffff; FONT-SIZE: 18px; FONT-WEIGHT: bold; PADDING-TOP: 15px
}
.buttonContent A {
	BORDER-BOTTOM: 0px; BORDER-LEFT: 0px; DISPLAY: block; COLOR: #ffffff; BORDER-TOP: 0px; BORDER-RIGHT: 0px; TEXT-DECORATION: none !important
}
.emailCalendar {
	BORDER-BOTTOM: #cccccc 1px solid; BORDER-LEFT: #cccccc 1px solid; BACKGROUND-COLOR: #ffffff; BORDER-TOP: #cccccc 1px solid; BORDER-RIGHT: #cccccc 1px solid
}
.emailCalendarMonth {
	TEXT-ALIGN: center; PADDING-BOTTOM: 10px; BACKGROUND-COLOR: #205478; FONT-FAMILY: Helvetica, Arial, sans-serif; COLOR: #ffffff; FONT-SIZE: 16px; FONT-WEIGHT: bold; PADDING-TOP: 10px
}
.emailCalendarDay {
	TEXT-ALIGN: center; PADDING-BOTTOM: 20px; LINE-HEIGHT: 100%; FONT-FAMILY: Helvetica, Arial, sans-serif; COLOR: #205478; FONT-SIZE: 60px; FONT-WEIGHT: bold; PADDING-TOP: 20px
}
.imageContentText {
	LINE-HEIGHT: 0; MARGIN-TOP: 10px
}
.imageContentText A {
	LINE-HEIGHT: 0
}
#invisibleIntroduction {
	DISPLAY: none !important
}
SPAN[class=ios-color-hack] A {
	COLOR: #275100 !important; TEXT-DECORATION: none !important
}
SPAN[class=ios-color-hack2] A {
	COLOR: #205478 !important; TEXT-DECORATION: none !important
}
SPAN[class=ios-color-hack3] A {
	COLOR: #8b8b8b !important; TEXT-DECORATION: none !important
}
[href^="tel"].a {
	COLOR: #606060 !important; CURSOR: default !important; TEXT-DECORATION: none !important; pointer-events: none
}
A[href^="sms"] {
	COLOR: #606060 !important; CURSOR: default !important; TEXT-DECORATION: none !important; pointer-events: none
}
.mobile_link A[href^="tel"] {
	COLOR: #606060 !important; CURSOR: default !important; TEXT-DECORATION: none !important; pointer-events: auto
}
.mobile_link A[href^="sms"] {
	COLOR: #606060 !important; CURSOR: default !important; TEXT-DECORATION: none !important; pointer-events: auto
}

@media Unknown    
{
BODY {
	MIN-WIDTH: 100% !important; WIDTH: 100% !important
}
TABLE[id="emailHeader"] {
	WIDTH: 100% !important
}
TABLE[id="emailBody"] {
	WIDTH: 100% !important
}
TABLE[id="emailFooter"] {
	WIDTH: 100% !important
}
TABLE[class="flexibleContainer"] {
	WIDTH: 100% !important
}
TD[class="flexibleContainerCell"] {
	WIDTH: 100% !important
}
TD[class="flexibleContainerBox"] {
	TEXT-ALIGN: left; WIDTH: 100%; DISPLAY: block
}
TD[class="flexibleContainerBox"] TABLE {
	TEXT-ALIGN: left; WIDTH: 100%; DISPLAY: block
}
TD[class="imageContent"] IMG {
	WIDTH: 100% !important; MAX-WIDTH: 100% !important; HEIGHT: auto !important
}
IMG[class="flexibleImage"] {
	WIDTH: 100% !important; MAX-WIDTH: 100% !important; HEIGHT: auto !important
}
IMG[class="flexibleImageSmall"] {
	WIDTH: auto !important; HEIGHT: auto !important
}
TABLE[class="flexibleContainerBoxNext"] {
	PADDING-TOP: 10px !important
}
TABLE[class="emailButton"] {
	WIDTH: 100% !important
}
TD[class="buttonContent"] {
	PADDING-BOTTOM: 0px !important; PADDING-LEFT: 0px !important; PADDING-RIGHT: 0px !important; PADDING-TOP: 0px !important
}
TD[class="buttonContent"] A {
	PADDING-BOTTOM: 15px !important; PADDING-LEFT: 15px !important; PADDING-RIGHT: 15px !important; PADDING-TOP: 15px !important
}

}
</style>
<!--
			Outlook Conditional CSS
			These two style blocks target Outlook 2007 & 2010 specifically, forcing
			columns into a single vertical stack as on mobile clients. This is
			primarily done to avoid the "page break bug" and is optional.
			More information here:
			http://templates.mailchimp.com/development/css/outlook-conditional-css
		--><!--[if mso 12]>
			<style type="text/css">
				.flexibleContainer{display:block !important; width:100% !important;}
			</style>
		<![endif]--><!--[if mso 14]>
			<style type="text/css">
				.flexibleContainer{display:block !important; width:100% !important;}
			</style>
		<![endif]--><!-- CENTER THE EMAIL // --><!--
		1.  The center tag should normally put all the
			content in the middle of the email page.
			I added "table-layout: fixed;" style to force
			yahoomail which by default put the content left.
		2.  For hotmail and yahoomail, the contents of
			the email starts from this center, so we try to
			apply necessary styling e.g. background-color.
		-->
<center style="BACKGROUND-COLOR: #e1e1e1">
<table border="0" cellpadding="0" cellspacing="0" height="100%" id="bodyTable" style="MIN-WIDTH: 100% !important; WIDTH: 100% !important; MAX-WIDTH: 100% !important; TABLE-LAYOUT: fixed" width="100%">
	<tbody>
		<tr>
			<td align="center" id="bodyCell" valign="top"><!-- EMAIL HEADER // --><!--
							The table "emailBody" is the email"s container.
							Its width can be set to 100% for a color band
							that spans the width of the page.
						-->
			

			<table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" id="emailBody" width="500">
				<tbody>
					<tr>
						
					<!-- // MODULE ROW --><!-- MODULE ROW // --><!--  The "mc:hideable" is a feature for MailChimp which allows
								you to disable certain row. It works perfectly for our row structure.
								http://kb.mailchimp.com/article/template-language-creating-editable-content-areas/
							-->
					<tr mc:hideable="">
						<td align="center" valign="top"><!-- CENTERING TABLE // -->
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr>
									<td align="center" valign="top"><!-- FLEXIBLE CONTAINER // -->
									<table border="0" cellpadding="30" cellspacing="0" class="flexibleContainer" width="500">
										<tbody>
											<tr>
												<td class="flexibleContainerCell" valign="top" width="500"><!-- CONTENT TABLE // -->
												<table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td align="left" class="flexibleContainerBox" valign="top">&nbsp;</td>
															<td align="right" class="flexibleContainerBox" valign="center">
															<table border="0" cellpadding="0" cellspacing="0" class="flexibleContainerBoxNext" height="24" style="MAX-WIDTH: 100%" width="457">
																<tbody>
																	<tr>
																		<td align="left" class="textContent"><span style="FONT-SIZE: 18px"><span style="FONT-FAMILY: arial,helvetica,sans-serif">Twoje hasło <a href="http://www.prouve.com">Prouve.com</a> to</span></span><br />
																		&nbsp;
																		<div align="center"><font size="5"><font color="#990000">'.$haslo.'</font></font></div>
																		</td>
																	</tr>
																</tbody>
															</table>
															</td>
														</tr>
													</tbody>
												</table>
												<!-- // CONTENT TABLE --></td>
											</tr>
										</tbody>
									</table>
									<!-- // FLEXIBLE CONTAINER --></td>
								</tr>
							</tbody>
						</table>
						<!-- // CENTERING TABLE --></td>
					</tr>
					<!-- // MODULE ROW --><!-- MODULE ROW // -->
					
					
					
					
					
					
					<!-- // MODULE ROW --><!-- MODULE DIVIDER // -->
					
					
					
				</tbody>
			</table>

			
			<!-- // END --></td>
		</tr>
	</tbody>
</table>
</center>
</html>


';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <miloszm@konto.pl>' . "\r\n".
'Disposition-Notification-To: <miloszm@konto.pl>' . "\r\n" ;

mail($to,$subject,$message,$headers);

$subject = "Wysłano hasło";

$message = '<HTML xmlns:o = "urn:schemas-microsoft-com:office:office"><HEAD>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META content="MSHTML 6.00.2900.6550" name=GENERATOR>
<STYLE></STYLE>
</HEAD>
<BODY bgColor=#ffffff>



<DIV><STRONG><FONT face=Arial>
Wysłano poprawnie wszystkie wiadomości do '.$email.'<br>
'.$id.' do '.$to.'
</FONT></STRONG></DIV>

</BODY></HTML>
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to = "milosz.mamczyc@gmail.com";
// More headers
$headers .= 'From: <miloszm@konto.pl>' . "\r\n".
'Disposition-Notification-To: <miloszm@konto.pl>' . "\r\n" ;
mail($to,$subject,$message,$headers);




?> 




