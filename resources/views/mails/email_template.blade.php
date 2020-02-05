<?php
// demo details for view see
// $details = [
// 	'fname' => "sachin",
// 	'lname' => "sharma",
// 	'email' => "sachinsharma3050@gmail.com",
// 	'password' => "12345678"
//   ];

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
	<meta content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
	<title>Apptology</title>
	<link rel="shortcut icon" href="http://gocarloans.co.uk/public/front/images/favicon.ico" />
	<style media="all" type="text/css">


	@media screen {
		@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

	}
	html,body{margin: 0; padding: 0; font-family: 'Roboto', sans-serif; font-weight: 300; background: #eeeeee; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box;}
	strong{font-family: 'Roboto', sans-serif; font-weight: 700; letter-spacing: 1px;}

</style>
</head>

<body style="background: #eeeeee; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box;">
	
	<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="margin: 0 auto;font-family: 'Roboto', sans-serif; background: #ffffff; width: 100%; max-width: 680px;">
		<tr>
			<td>
				<!-- <div align="center"><a href="#"><img src="{{ asset(env('ASSETS_PATH').'front2/mail_images/logo.png') }}" style="max-width: 100%;  margin: 0" border="0" alt="App Development"/></a></div> -->
				<div align="center"><a href="#"><img src="http://gocarloans.co.uk/public/front/images/logo.png" style="max-width: 100%;  margin: 0" border="0" alt="App Development"/></a></div>
				<div style="color: #fff; width: 100%; float: left; text-align: center; background: #008ece; padding: 1px 15px; line-height: 5px; font-size: 20px; box-sizing: border-box; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; -o-box-sizing: border-box; -ms-box-sizing: border-box;"></div>

			</td>
		</tr>
		<tr>
			<td>
				<div style="background: #fff; padding: 15px; font-size: 16px;">
					<p><strong>Hi 
					<?php
					if($details['fname'] && $details['lname']){
						$fname = ucfirst($details['fname']);
						$lname = ucfirst($details['lname']);
							echo $fname." ".$lname;
						}
					?>
					</strong></p>
				</div>
			</td>
		</tr>

		<tr>
                 <td style="padding: 20px;"><table style="border:1px #ddd6d6 solid;border-radius:5px;padding: 0 10px;color: #756f6f " width="100%" cellspacing="0" cellpadding="0" border="0">
                   <tbody><tr>
                     <td style="border-right:1px #ddd6d6 solid;padding: 10px 10px; " width="50%">Your Email</td>
                     <td style="padding: 10px 10px; font-weight: bold" width="50%"><?php if(isset($details['email'])){echo $details['email'];} ?></td>
                   </tr>
                 </tbody></table>
               </td>


               </tr>

               <tr>
                 <td style="padding: 20px;"><table style="border:1px #ddd6d6 solid;border-radius:5px;padding: 0 10px;color: #756f6f " width="100%" cellspacing="0" cellpadding="0" border="0">
                   <tbody><tr>
                     <td style="border-right:1px #ddd6d6 solid;padding: 10px 10px; " width="50%">Your Password</td>
                     <td style="padding: 10px 10px; font-weight: bold" width="50%"><?php if(isset($details['password'])){echo $details['password'];} ?></td>
                   </tr>
                 </tbody></table>
               </td>

               
               </tr>

               <tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>

               <tr>
                        <td style="color: #ffffff; font-size: 14px; font-family: 'Roboto', sans-serif; line-height: 26px;" align="center">


                            <div style="line-height: 26px; ">
                                <a href="{{ url('login') }}" style="color: #ffffff;background: #1399d5; text-decoration: none;padding: 10px 30PX;border-radius: 5px">LOGIN</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>
		
		<tr>
			<td>
				<div style=" padding:40px 15px; font-size: 14px; text-align: left; font-family: 'Roboto', sans-serif;">Give us a call on <strong>+123456789</strong> or just reply to this e-mail to get connected to one of our representatives. or just reply to this e-mail to get connected to one of our representatives.</div>
			</td>
		</tr>
		<tr>
                        <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                    </tr>
		
		<tr>
			<td>
				<div style="background: #1c2337 url('http://gocarloans.co.uk/public/front/images/envolupe-top.jpg') center top no-repeat; height: 39px; width: 100%"></div>
				<div style="padding:20px 20px 20px; text-align: center; color: #fff; /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#252d44+50,1c2337+50 */
				background: rgb(37,45,68); /* Old browsers */
				background: -moz-linear-gradient(left, rgba(37,45,68,1) 50%, rgba(28,35,55,1) 50%); /* FF3.6-15 */
				background: -webkit-linear-gradient(left, rgba(37,45,68,1) 50%,rgba(28,35,55,1) 50%); /* Chrome10-25,Safari5.1-6 */
				background: linear-gradient(to right, rgba(37,45,68,1) 50%,rgba(28,35,55,1) 50%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#252d44', endColorstr='#1c2337',GradientType=1 ); /* IE6-9 */">
				

				
				<ul style="list-style: none; margin: 0; padding: 0;">
					<li style="display: inline-block; margin-left: 2px;"><a href="#"><img src="http://gocarloans.co.uk/public/front/images/fb.png" width="25" height="25" alt=""/></a></li>
					<li style="display: inline-block; margin-left: 2px;"><a href="#"><img src="http://gocarloans.co.uk/public/front/images/tw.png" width="25" height="25" alt=""/></a></li>
					<li style="display: inline-block; margin-left: 2px;"><a href="#"><img src="http://gocarloans.co.uk/public/front/images/lk.png" width="25" height="25" alt=""/></a></li>
				</ul>

				<p style="font-size: 12px;">© Gocarloans. All rights reserved. </p>
			</div>
		</td>
	</tr>
</table>

</body>
</html>
