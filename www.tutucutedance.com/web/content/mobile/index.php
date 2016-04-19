<?php include('header.php');?>
    <body>
        <div id="jqt">        	
            <div id="page1">
                <div class="toolbarhome">
                    <!--<h1><img src="img/hsbr-logo.jpg" height="40px" border="0" /></h1> -->
                </div>
                <div class="special_offer"><?php if($foundedYear){ echo "Trusted Since".$foundedYear; }?></div>
                <div class="contact_info">
                <div class="map"><a href="<? echo $gpAddress; ?>" target="_blank"><img src="img/viewmap.png" /></a></div>
                <span class="address">
                <? echo $address; ?><br />
                <? echo $city; ?>, <? echo $state; ?> <? echo $zip; ?>
                </span>
                <br />
                <div class="leftSide">
                E-mail: <br />
                Phone: <br />
                Fax: <br />
                Hours: 
                </div>
                <div class="rightSide">
               <a href="mailto:<? echo $email; ?>"><? echo $email; ?></a><br />
                <strong><a href="tel:<? echo $mainPhone; ?>"><? echo $mainPhone; ?></a></strong><br />
                 <strong><? echo $fax; ?></strong><br />
                 <? echo $officehrs; ?><br />
                </div>                 
                </div>
                <div class="clear"></div>
                <ul class="edgetoedge">
                    <li><a href="#page2">About Us</a></li>
                    <li><a href="#page4">Auto Repair Services</a></li>
                    <li><a href="#page5">Online Specials</a></li>
                    <li><a href="#page9">Contact</a></li>
                </ul>
                <div class="copyright">Copyright &copy; 2012 <? echo $businessName; ?><br>powered by <a href="http://www.rainman.com" target="_blank">Rainman</a></div>
            </div>
<!-- Page 2 -->            
            
            <div id="page2">
                <div class="toolbar">
                    <a href="#" class="back">&nbsp;</a>
                  <h1>About Us</h1>
                </div>
                <div class="info">
                    <p>Serving the <?php echo $area; ?> including <?php echo $cities; ?>, we specialize in <?php echo $cities; ?> including tires, brakes, engines, alignment, shocks & struts and more. From oil changes and state inspections to tire replacement and transmission and engine repair, no job is too big or too small.  Our friendly and knowledgeable staff takes pride in providing superior service and professional attention that meets and exceeds your expectations. Bottom line: your wheels are in good hands with <?php echo $businessName; ?>!</p>

                    <p>Go ahead, call us today at <?php echo $mainPhone; ?> to schedule your next service appointment, and see why we are the leading <strong>auto repair and service</strong> shop in <strong><?php echo $city; ?>, <?php echo $stateShort; ?></strong>. </p>
                    </span>
                    
                    
                        
                    <img src="img/interior-logo.png" />
                </div>
            </div>
            
<!-- End Page 2 -->

<!-- Page 4 -->            
            
            <div id="page4">
                <div class="toolbar">
                    <a href="#" class="back">&nbsp;</a>
                    <h1>Auto Repair Services</h1>
                </div>
                <div class="info">
                	<p>At <?php echo $businessName; ?>, we are committed to providing the most professional and reliable <strong>automotive repair service</strong> throughout the <strong><?php echo $area; ?></strong> area.</p>
                    <p>Our highly-skilled crew of ASE Certified Technicians gets to work using high grade materials and the latest machinery to ensure the highest level of durability for your vehicle. When it comes to getting customized solutions for your cars, trucks, vans, and SUV's, you’ll find no better<strong> <?php echo $city; ?> auto repair shop</strong> than <?php echo $businessName; ?>. </p>
                    <p>We offer a wide array of automotive services including, but not limited to:</p>
                    <strong>
                    <ul>
                    <li>Oil Changes</li>
                    <li>Tune-Up Service</li>
                    <li>Brake Service & Repair</li>
                    <li>Tires: Mounting Balancing and flat repair</li>
                    <li>Engine Repair and Replacement</li> 
                    <li>Engine Performance Check</li>
                    <li>Transmission Service & Repair</li>
                    <li>Shocks and Struts</li>
                    <li>Wheel Alignment</li>
                    <li>Air Conditioning Repair Service</li>
                    <li>Computer Diagnostics</li>
                    <li>Electrical System Diagnosis & Repair</li>
                    <li>Factory Scheduled Maintenance</li>
                    <li>Suspension and Steering </li>
                    <li>Cooling System Service & Repair</li>
                    <li>Exhaust Systems & Mufflers</li>
                    <li>Pre-purchase Inspections</li>
                    <li>Maintenance Inspections</li>
                    <li>Brake & Lamp Inspections</li>
                    </ul>
                    </strong>
                </div>
            </div>
            
<!-------------------------------------------- End Page 4 ------------------------------------------------------>
<!------------------------------------------ Page 5 ------------------------------------------------------------>
           
            <div id="page5">
                <div class="toolbar">
                    <a href="#" class="back">&nbsp;</a>
                    <h1>Online Specials</h1>
                </div>
                <div class="info">
                	<img src="../images/coupon1.png" /><br /><br />
                    <img src="../images/coupon2.png" /><br /><br />
                    <img src="../images/coupon3.png" /><br /><br />
                </div>
            </div>
            
<!------------------------------------------ End Page 5 --------------------------------------------------------->
<!---------------------------------------------- Page 9 ---------------------------------------------------------->
            
            <div id="page9">
                <div class="toolbar">
                    <a href="#" class="back">&nbsp;</a>
                    <h1>Contact Us</h1>
                </div>
                <div class="info">
                    <table>
                    	<tr><td colspan="3"><span class="location"><? echo $location1; ?></span></td></tr>
                        <tr>
                            <td>Phone</td>
                            <td>&nbsp;</td>
                            <td><? echo $mainPhone; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>&nbsp;</td>
                            <td><? echo $fax; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>&nbsp;</td>
                            <td><a href="mailto:<? echo $email; ?>"><? echo $email; ?></a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>Address</td>
                            <td>&nbsp;</td>
                            <td><? echo $address; ?><br>
                            <? echo $city; ?>, <? echo $state; ?> <? echo $zip; ?></td>
                        </tr>
                    </table><br>
<? if ($location2!="") { ?><br><table>
                    	<tr><td colspan="3"><span class="location"><? echo $location2; ?></span></td></tr>
                        <tr>
                            <td>Phone</td>
                            <td>&nbsp;</td>
                            <td><? echo $phone2; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>&nbsp;</td>
                            <td><? echo $fax2; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>&nbsp;</td>
                            <td><a href="mailto:<? echo $email2; ?>"><? echo $email2; ?></a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>Address</td>
                            <td>&nbsp;</td>
                            <td><? echo $addr2; ?><br>
                            <? echo $city2; ?>, <? echo $state2; ?> <? echo $zip2; ?></td>
                        </tr>
                    </table><br>
<? } ?>
<? if ($location3!="") { ?><br><table>
                    	<tr><td colspan="3"><span class="location"><? echo $location3; ?></span></td></tr>
                        <tr>
                            <td>Phone</td>
                            <td>&nbsp;</td>
                            <td><? echo $phone3; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td>&nbsp;</td>
                            <td><? echo $fax3; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>&nbsp;</td>
                            <td><a href="mailto:<? echo $email3; ?>"><? echo $email3; ?></a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                            <td>Address</td>
                            <td>&nbsp;</td>
                            <td><? echo $addr3; ?><br>
                            <? echo $city3; ?>, <? echo $state3; ?> <? echo $zip3; ?></td>
                        </tr>
                    </table><br>
<? } ?> 
                </div>
            </div>
            
<!------------------------------------------- End Page 9 ------------------------------------------>
        </div>
    </body>
</html>