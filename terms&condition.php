<?php
session_start(); 
		
			if (isset($_POST['find']))
			{
				$k=$_POST['k'];
				if(empty($k) || trim($k)=="")
				{
					echo "<font> please enter keyword</font>";
				}
				else
				{
				
				header("location:search.php?k=".$k);
				}
			}
	

?>


<?php
	session_start();
	if(isset($_SESSION['cust_id']))
	{
		
		$cust_id=$_SESSION['cust_id'];

	}
?>



<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "connection.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>wedding collection | Terms and Conditions</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Skate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>
</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="banner_1.jpeg" width="200"></a></h1>
		</div>
		<div class="h_menu">
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
			<li><a href="404.php">services</a></li>
			<li><a href="portfolio.php">collection</a>
									<li><a href="view-order.php">view orders</a></li>

			<!--<li><a href="portfolio.php">Collection</a>
		    <ul class="sub-menu list-unstyled">
				<li><a href="portfolio.php">Bride</a></li>
				<li><a href="portfolio.php">Groom</a></li>
			</ul>
			</li> -->
			</li>
			<!--<li><a href="blog.php">BLOG</a></li>
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="Registration.php">REGISTRATION</a></li>
			<li><a href="feedback.php">feedback</a></li>
			 -->
			<li><a href="">users</a>
		    <ul class="sub-menu list-unstyled">
			<?php
				if(!isset($_SESSION['cust_id']))
				{
				?>
					<li><a href="clientlogin.php">Login</a> </li>
					
					<li><a href="Registration.php">Registeration</a> </li>								   
					
				<?php
				}
				else
				{
				?>	
				<li><a href="profile.php">Profile</a> </li>
					
					<li><a href="logout.php">logout</a> </li>								   
					
				<?php
				}
				?>	
			
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="feedback.php">feedback</a></li>
			</ul>
			</li>
			
			<form action="" method="post">
        <fieldset>
	<br>
          <input type="text" value="Search Our Website&hellip;" name="k" onFocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="find" />
		  <img src="cart.jpg" alt="cart.php" width="30" height="30" style="float:right">
<?php
		  include "connection.php";
		  
		  $query="select count(*) as cnt from tbl_temp where cust_id=$cust_id";
		  $res=mysql_query($query);
		  $row=mysql_fetch_array($res);
		  $cart_cnt=$row['cnt'];
		  ?>
          <li style="float:right"><a href="cart.php">Items(<?php echo  $cart_cnt; ?>)</a></li>
          
</fieldset>
      </form>
          
		

			
		</ul>
		</nav>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="grid_12">
       <img src="images/color_stripe.jpg" class="img-responsive" class="c_stripe">
    </div>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left"><?php echo $row['prod_name'] ?></h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">terms&amp;condition</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
		
		<div class="details">
		  <p class="para">
		  
		  
		  
<h1><b>Terms and Conditions</b></h1><br><br><br>
PLEASE READ THESE TERMS OF USE ("AGREEMENT" OR "TERMS OF USE") CAREFULLY BEFORE USING THE WEBSITE AND SERVICES OFFERED BY MIRRAW ONLINE SERVICES PVT. LTD. ("MIRRAW"). THIS AGREEMENT SETS FORTH THE LEGALLY BINDING TERMS AND CONDITIONS FOR YOUR USE OF THE WEBSITE AT WWW.MIRRAW.COM (THE "SITE") AND ALL SERVICES PROVIDED BY MIRRAW ON THE SITE.
By using the Site in any manner, including but not limited to visiting or browsing the Site, you (the "user" or "you") agree to be bound by this Agreement, including those additional terms and conditions and policies referenced herein and/or available by hyperlink. This Agreement applies to all users of the Site, including without limitation users who are vendors, customers, merchants, contributors of content, information and other materials or services on the Site.
Membership Eligibility and Registration
Age:
<br><br>Mirraw's services are available only to, and may only be used by, individuals who are 18 years and older who can form legally binding contracts under applicable law. You represent and warrant that you are at least 18 years old and that all registration information you submit is accurate and truthful. Mirraw may, in its sole discretion, refuse to offer access to or use of the Site to any person or entity and change its eligibility criteria at any time. This provision is void where prohibited by law and the right to access the Site is revoked in such jurisdictions. Individuals under the age of 18 must at all times use Mirraw's services only in conjunction with and under the supervision of a parent or legal guardian who is at least 18 years of age. In these cases, the adult is the user and is responsible for any and all activities.
Account Information:
<br><br>You must keep your account information up-to-date and accurate at all times, including a valid email address. You must use every effort to keep your password safe and should not disclose it to any other person. You shall not transfer or sell your User Name to any other person.
Mirraw's services are not available to temporarily or indefinitely suspended Mirraw members. Mirraw reserves the right, in Mirraw's sole discretion, to cancel unconfirmed or inactive accounts. Mirraw reserves the right to refuse service to anyone, for any reason, at any time.
Fees and billing
Our fees and sales commission are described in our Fees Policy. Changes to the Fees Policy and the fees for Mirraw's services are effective after Mirraw provides you with at least fifteen (15) days' notice by posting the changes on the Site. However, Mirraw may choose to temporarily change the Fees Policy and the fees for Mirraw's services for promotional events (for example, free listing days); such changes are effective when Mirraw posts the temporary promotional event on the Site. Unless otherwise stated, all fees are quoted in Indian Rupees (INR).
VAT and other taxes<br><br><br>
The seller is solely responsible for the payment of VAT and other taxes applicable to the seller. The seller should take care of including this in the product price and must not charge the buyer tax above and over the listed product price. Wherever the sales of a product needs a special government permit or any other documentations as applicable (in case of a b2b shipping to specific states, etc) the seller shall take the responsibility to obtain the same.
Listing and Selling
<br><br><br>Registered users of Mirraw.com can create their personal shop on Mirraw.com. All items and offers of a user will be listed in this shop. Mirraw is an exclusive marketplace for designer items. If your products don’t fit into these, you may not be allowed to open a shop at Mirraw, unless the management accepts to treat you as an exception. Sellers are solely responsible for all items listed in their shop and for the compliance with legal regulations. Information provided by you in the course of setting up a shop shall be true, accurate and complete. You are obliged to update this data as necessary and to always provide up-to- date information.
Minimum Value:<br><br><br>
All products listed on Mirraw must have a price greater than INR 300. Products cheaper than INR 300 will not be accepted for listing.
Listing Description:
<br><br><br>By listing an item on the Site you warrant that you and all aspects of the item comply with Mirraw's published policies. You also warrant that you may legally sell the item. You must accurately describe your item and all terms of sale in your mirraw shop. Your listings may only include text descriptions, graphics, pictures and other content relevant to the sale of that item. All items must be listed in an appropriate category. Each listing must accurately and completely describe the item/items for sale in that listing
Binding Sale:<br><br><br>
Listed items represent a binding offer at the set price to other users who comply with the conditions specified in the offer. The contract of purchase is formed when a user complies with the conditions specified in the offer and completes the checkout process. All sales are binding. The seller is obligated to ship the order in a prompt manner once the buyer has completed the transaction on Mirraw. The buyer is obligated to deliver appropriate payment for items purchased, unless there is an exceptional circumstance.
Shop Policies:<br><br><br>
<br><br><br>All sellers are urged to outline shop policies for their Mirraw shop. These policies may include, for example, shipping, returns and selling policies. Sellers must create reasonable policies in good faith and must abide by such policies. All shop policies must comply with Mirraw's site-wide policies. Sellers are responsible for enforcing their own reasonable shop policies. Mirraw reserves the right to request that a seller modify a shop policy
Offers & Promotions:<br><br><br>
By listing an item on Mirraw, you give Mirraw right to use images for marketing and promotional purposes.
You are responsible for ensuring that you have the right to use all content on your listing and that Mirraw has the right to host it on our servers. All content may only refer to<br><br><br> the items listed on Mirraw and may not advertise goods not listed on Mirraw.com. All information relevant to the purchase decision must be true, accurate and complete. All information related to payment, delivery and delivery time must be complete. As a business person offering goods and services to consumers you are obligated to give all necessary information regarding consumer protection as required by law and to detail legal disclaimer rights if required by law. Mirraw reserves the right to unlist and delete items if an item infringes legal regulations, these Terms & Conditions or the principle and rules of Mirraw.com.
Buying<br><br><br>
By purchasing an item you agree to be bound by the conditions of sale included in the item's description provided that those conditions of sale are not in breach of this User Agreement or otherwise unlawful. Mirraw is not responsible for the side effects one might endure by the use of the products sold at Mirraw. Mirraw takes all steps to ensure that the seller is genuine but cannot guarantee the quality, safety or legality of any aspect of the items listed or the accuracy of the listings.
Cancellation by Mirraw.com<br><br><br>
<br><br><br>Such situations are avoided but if raised please note that there may be certain orders that we are unable to accept and must cancel. We reserve the right, at our sole discretion, to refuse or cancel any order for any reason. Some situations that may result in your order being canceled include limitations on quantities available for purchase, inaccuracies or errors in product or pricing information, or problems identified by our credit and fraud avoidance department. We may also require additional verifications or information before accepting any order. We will contact you if all or any portion of your order is canceled or if additional information is required to accept your order. If your order is cancelled after your credit card has been charged, the said amount will be reversed back in your Card Account.
Can I cancel the Order?<br><br><br>
<br><br><br>The customer can only cancel the order within 24 hours of placing the order. No cancellations will be processed after 24 hours. Once you request the cancellation of item(s) in your order, it will take us a maximum of 4 business days to cancel the order and initiate a refund as per refund policy. You will be notified of the same.
Can I change my shipping address after placing an order?
Please be advised that your shipping address cannot be revised after the order has been placed successfully.
Return policy.<br><br><br>
<br><br><br>We have a customer friendly return policy .You will have to just write us on team@mirraw.com within 24 hrs from time of delivery & return steps will given from our customer support executive.
<br><br><br>1. Provide us with the tracking details of the product. Without this packages could get lost and replacement might be cancelled.
2. Mention the Company Name Mirraw.com and Order Number ( starting with M) on the return package.
Last date of return shipping:7 days from date of delivery.We will not be able to accept returns if dispatched after 7 days from date of delivery.
Return Shipping Cost:
The cost of return shipping will not be covered by Mirraw.com Please note that the below return policy is NOT applicable on orders that are custom made or custom stitched.
Options after Return:
<br><br><br>You can choose to do one of the following
1. Request a replacement, either the same item or a different item from the website
2. Request a coupon code of same value for purchase later on the website. Using the coupon code, you can select anything on the website upto the returned value.
3. Request a refund. We will do a direct refund to the card through which payment was completed. In case the payment was done with cash, kindly provide us your bank account details.
<br><br><br>Packaging Advice:
It is of utmost importance that the items do not get damaged on their return shipping. For Jewellery, please use cotton, bubble wrap, paper or foam to do some kind of padding around the product. For Apparel, please cover the package in polythene plastic and return it in an envelope to avoid damage due to rain. In case of international parcels, the package should be returned with signature requirement upon delivery. This is done to ensure that we receive the parcel correctly/safely.
Conditions of Return
<br><br><br>Clothes and jewellery must not be used (other than for trial), altered, washed, soiled or damaged in any way.Return is acceptable only within 7 days from date of delivery. Original tags and packaging should be intact. For items that come in branded packaging, the box should be undamaged.Returns shipping cost will not be covered by Mirraw.com 'Made to order' Clothes and jewellery are not covered under the return policy.
What we do about mispricings
<br><br><br>Despite our best efforts, a small number of the many thousands of items in our catalogue are mispriced. However, we verify prices as part of our dispatch procedures. If an item's correct price is lower than our stated price, we charge the lower amount and send you the item. If a product's correct price is higher than our stated price, we will cancel your order and notify you of that cancellation.
Cancellation of Fraudulent/Loss to business Orders
<br><br><br>To provide a safe and secure shopping experience, we regularly monitor transactions for fraudulent activity. In the event of detecting any suspicious activity, Mirraw.com reserves the right to cancel all past, pending and future orders without any liability. Mirraw.com also reserves the right to refuse or cancel orders in scenarios like inaccuracies in pricing of product on website and stock unavailability. We may also require additional verifications or information before accepting any order. We will contact you if all or any portion of your order is cancelled or if additional information is required to accept your order. If your order is cancelled after your card has been charged, the said amount will be reversed to your Card Account. Any promotional voucher used for the cancelled orders may not be refunded.
<br><br><br>The customer may be considered fraudulent if any of the following scenarios are met:
Customer doesn't reply to the payment verification mail sent by Mirraw
<br><br><br>Customer fails to produce adequate documents during the payment details verification
Misuse of another customer's phone/email
Customer uses invalid email and phone no.
Overuse of a voucher code
Customer returns the wrong product
Customer refuses to pay for an order
Customer is involved in the snatch and run for any order.
Damage
<br><br><br>We try our best to delivery 100% good quality products,but unfortunately it may happen sometimes product is delivered damaged.In such case we required a photo to be sent to us within  48hrs from the time of delivery.Without photos sent in given time we will not be able to process replacement.In case of products not avialble return Upon receiving the photo, our team will review the damage. If the damage is approved and a complaint is registered, we request you to kindly send the product back to us. If a replacement is in stock with us, we will reship the same to you. In case it is not available, you can request for a refund or a coupon for future purchases. But the final dession is will be taken by Mirraw.com about refund.Investigation may take 3-4 days for international deliveries.
Color & Description Disclaimer
<br><br><br>The details of the products or product specifications (for instance weight, color, handwork details, size, etc.) quoted with the product displays are only approximate values. While every endeavor has been made to accurately reproduce colors, there may be minor variations in color of the actual product because of the nature of fabric dyes, weather at the time of dying and differences in display output due to lighting and digital photography and color settings and capabilities of monitors. A customer must place an order keeping in mind this minor variation in color as seen on a computer screen against the actual color of the outfit received. Mirraw.com firmly believes that all the customers who order online are aware that colors seen on a monitor will be slightly different as compared to the actual outfits or accessories ordered. It is practically impossible for Mirraw.com’s   Designers to replicate the same colors on an outfit as seen on your monitor. A variation in the shade selected by you is considered as a normal practice as these garments have a tendency to reflect different shades of a color under different light and weather, type of camera used for photography or type and settings on the computer monitor. We wish to clarify and ascertain that every customer who orders any outfit from Mirraw.com is aware of this genuine problem.
While ordering on internet, we suggest that customers should be extra careful of following -
<br><br><br>1. Red, maroon and orange colors have a higher tendency to reflect a different shade than other colors. For example even if you yourself try to photograph from a digital camera or scan a red garment, in most of the cases it will show either as maroon or orange on the computer monitor and vice versa. Though imaging technology has advanced, still no foolproof solution to this problem is available at the moment.
2. Many a time’s green and blue shades also overlap. Same is the case with off-white, white and cream colors.
3. Sea Green color sometimes looks Aqua blue and the other way around.
4. Some fabrics like raw silk, khadi silk, cotton silk, south cotton, brocade have a textured effect where we can see the weaving & threads are visible in different directions which is an inherent characteristic or feature of that fabric and proof of its authenticity. These are not defects. This raw finish is the beauty of these fabrics.
5. Handcrafted, hand dyed, hand printed, hand painted, hand embroidered, handloom, hand weaved products will always have minor differences when we compare them as they are not made by machines. Each piece will be unique. Handicraft artisans always try their best to make each piece better than the previous one. So, the product will always have minor variation keeping the same theme constant in artistic manner. The raw finish of the handicrafts cannot be compared with machine finished products as this raw finish is the beauty of the handicrafts items.
<br><br><br>Beads and Sequences missing or Coming off
We believe that customers who are ordering items with sequins and other beaded embroidery are aware of the fact that these shiny embellishments have a tendency to come off. Even with the best of handling and care this cannot be avoided altogether. Many a times during strict physical checking at the customs during transit, more than usual sequences and beads come off. Many a times it may happen that you open a box and find some pieces falling down on the floor. Or you wear the dress and in few hours you might lose some of them. Do not panic or over-react because if you look with a magnifying glass at any such dresses / saris worn by others, you will most certainly find some pieces missing or almost at a state of falling down. Your are deemed to have accepted the terms and conditions.  Mirraw.com reserve right to time modify the Terms & Conditions of Use of the site without any prior notification to you.
<br><br><br>Process for Pilferage Claim
If a customer raises a complaint for partial item/partial order through Customer Care
The customer is supposed to claim for pilferage within 48 hours of delivery failing which the claim will not be entertained
<br><br><br>An Email will be sent to team@mirraw.com seeking/providing following information:
Short description of the case (A few questions will be asked to help us understand the scenario)
The snapshots of the packet and other box(If any)(Try to cover the sides which look tampered/damaged as per the customer)
The refund for prepaid orders will be done after investigation which usually requires 3-4 business day. The process will include investigation with the concerned departments
The customer may not be liable for a refund if he/she falls in any of the scenarios stated below:
Customer fails to provide adequate information about the case
Customer fails to provide snapshots of the packet and box(if any)
Customer must not dispose the packaging for 3-4 days post delivery and wait for next details to be sent by customer support team.
Refund Policy
<br><br><br><br><br><br>Mirraw reserves the sole right to accept or deny refunds and will act reasonably in the common interest of both parties involved. Purchases are only retractable in exceptional circumstances, such as when the seller materially changes the item's description after a purchase has been made, a clear typographical error is made, or there if a seller defaults in any way with the product listed or in the delivery of the same. In case of returns without delivery of product refund cannot be processed.
International Orders
Protocol for international order is followed as outlined in the help article read here Read Here
Prohibited Items
You are prohibited from engaging in selling or buying of the items listed in the prohibited items list. Prohibited Items list.
Prohibited Activities
All activities of users while using Mirraw.com or any service provided by Mirraw shall be in accordance with legal regulations. Content provided by users on Mirraw.com shall not infringe legal regulations or these Terms & Conditions. Your information and your activities must not:
•	be false, inaccurate or misleading;
•	be offensive or menacing, abusive, defamatory;
•	be obscene, indecent or contain child pornography;
•	infringe any third party's copyright, patent, trade mark, trade secret or other proprietary rights or rights of publicity or privacy;
•	be fraudulent or involve the sale of counterfeit or stolen items;
•	be in breach of any applicable laws or regulations (including, but not limited to, laws governing export control, consumer protection, unfair competition, anti- discrimination, false advertising);
•	copy, reproduce, modify, create derivative works from, distribute or publicly display any content (except for your information) from Mirraw.com without the prior expressed written permission of Mirraw and the appropriate third party, as applicable.
<br><br><br><br><br><br>•	create liability for us or cause us to lose (in whole or in part) the services of our ISPs or other sellers or customers;
•	link directly or indirectly to or include descriptions of goods or services that are prohibited under these Terms & Conditions ;
•	Violate this Agreement or any other Mirraw policy or guidelines, or any applicable law, statute, ordinance or regulation.
•	add a Mirraw employee or a Mirraw user, even a user who has purchased an item from you, to your mail list (email or physical mail) without their express consent after adequate disclosure;
•	contain any computer viruses, macro viruses, trojan horses, worms or anything else designed to interfere with, interrupt or disrupt the normal operating procedures of a computer or to surreptitiously intercept, access without authority or expropriate any system, data or personal information;
•	cause the Site to be interrupted, damaged, rendered less efficient or such that the effectiveness or functionality of Mirraw.com is in any way impaired
•	not use any robot, spider, scraper or other automated means to access the Site for any purpose without our express written permission
•	be defamatory, trade libelous, unlawfully threatening, unlawfully harassing, impersonate or intimidate any person (including Mirraw staff or other users), or falsely state or otherwise misrepresent your affiliation with any person, through for example, the use of similar email address, nicknames, or creation of false account(s) or any other method or device
•	be obscene or contain pornography
•	host images not part of a listing
<br><br><br>You must not list any item on Mirraw.com (or complete any transaction initiated using Mirraw.com) that, by paying to us the listing fee or the final value fee, could cause us to violate any applicable law or our items policy. To enable Mirraw to use your information, you grant us a non-exclusive, world-wide, perpetual, irrevocable, royalty-free, sub licensable (through multiple tiers) licence to exercise the copyright, trade mark, publicity, and database rights you have in your Information, in any media now known or not currently known. You also waive all moral rights you have in your information to the fullest extent permitted by law. The license described above shall terminate upon termination or cancellation of this User Agreement by either party.
Cancellation
<br><br><br> Our failure to act with respect to a breach by you or others does not waive our right to act with respect to subsequent or similar breaches. This User Agreement sets forth the entire understanding and agreement between us with respect to its subject matter. No oral explanation or oral information given by any party shall alter the interpretation of this User Agreement. This Agreement will prevail over any conditions of sale imposed by a seller. Our Fees Policy is incorporated in this User Agreement by reference. The fees policy may be amended from time to time and material changes will be posted on the Site and sent to you at your registered email address.


		  
		  
		  
		  &nbsp;</p>
			

			<ul class="comment-list"><br>
			
			 
		  		    	<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
		  		         <li><img src="images/avatar.png" class="img-responsive" alt="">
		  		           <div class="desc">
		  		        	<p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
		  		           </div>
		  		           <div class="clearfix"></div>
		  		         </li>
		   </ul>
	</div>
</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.php"><h2>Wedding Collection</h2></a><br>
			</div>		
			<p class="f_para">Our site offering a wide range in premium menswear & ladieswear from chaniya choli, gown , indowestern , for menswere  servani , suit , indowestern,...& also couple were to ethnic wear..</p>
			<!--<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span> -->
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>our site </h4>
			<ul class="list-unstyled f_list">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="404.php">Services</a></li>
				<li><a href="portfolio.php">Collection</a></li>
				<li><a href="view-order.php">View Orders </a></li>
				
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>Our Users Site </h4>
			<ul class="list-unstyled f_list">
				<?php
				if(!isset($_SESSION['cust_id']))
				{
				?>
					<li><a href="clientlogin.php">Login</a> </li>
					
					<li><a href="Registration.php">Registration</a> </li>								   
					
				<?php
				}
				else
				{
				?>	
					
					<li><a href="logout.php">logout</a> </li>								   
					
				<?php
				}
				?>	
			
			<li><a href="contact.php">CONTACT</a></li>
			<li><a href="feedback.php">feedback</a></li>
			</ul>
			</li>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-xs-3 f_pic">
					<a href="portfolio.php"><img src="img/s17.png" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-xs-9 f_text">
				<p>We have also a huge collection of bridal jewellery.</p>
					<span>8, April 2015</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-xs-3 f_pic"><a href="portfolio.php"><img src="img/s18.jpg" alt="" class="img-responsive"/></a></div>
				<div class="col-xs-9 f_text">
				<p>We have also a huge collection of Grooms Accesories.</p>
					<span>1, April 2015</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Design by<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
			
			<li><a href="terms&condition.php"><em><strong>TERMS &amp; CONDITION </strong></em></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</div>	
</body>

</html>