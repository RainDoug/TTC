<?php 	
   		include("data.php");
		$pagePhoto="";
		$pageTitle="Contact Us";
		$pagePicture="";
		$pageMetaKeyword="";
		$pageMetaDescription="";


	
 ?>
 <?php include("header.php");?>

 <p> If you have questions concerning any of our warranty policies, please feel free to contact us.</p>
    <div class="contactLocation">

                        <table class="contactTable">
                            <?PHP if ($mainPhone) { ?>
                            <tr>
                                <td width=100><b>CALL</b></td>
                                <td></td>
                                <td><?PHP echo $mainPhone?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($altPhone) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree) { ?>
                            <tr>
                                <td><b>TOLL FREE</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainFax) { ?>
                            <tr>
                                <td><b>FAX</b></td>
                                <td></td>
                                <td><?PHP echo $mainFax?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainEmail) { ?>
                            <tr>
                                <td><b>EMAIL</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $mainEmail;?>"><?PHP echo $mainEmail;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($mainAddr) { ?>
                            <tr>
                                <td><b>VISIT</b></td>
                                <td></td>
                                <td><?PHP echo $mainAddr;?><br/>
                                    <?PHP echo $city;?>, <?PHP echo $state;?> <?PHP echo $zip?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr) { ?>
                            <tr>
                                <td><b>MAIL</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr;?><br />
                                <?PHP echo $mailCity;?>, <?PHP echo $mailState;?> <?PHP echo $mailZip?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mainDirections) { ?>
                            <tr>
                                <td valign=top><b>DIRECTIONS</b></td>
                                <td></td>
                                <td><?PHP echo $mainDirections;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table><br /><br />
                       
    </div>
<!--<?PHP if ($city2) { ?>
    <div class="contactLocation">
        <h2><?PHP echo $city2;?> Location</h2>
                        <table class="contactTable">
                            <?PHP if ($phone2) { ?>
                            <tr>
                                <td width=100><b>phone</b></td>
                                <td></td>
                                <td><?PHP echo $phone2?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($altPhone2) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone2;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree2) { ?>
                            <tr>
                                <td><b>toll free</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree2;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($fax2) { ?>
                            <tr>
                                <td><b>fax</b></td>
                                <td></td>
                                <td><?PHP echo $fax2?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($email2) { ?>
                            <tr>
                                <td><b>email</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $email2;?>"><?PHP echo $email2;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($addr2) { ?>
                            <tr>
                                <td><b>address</b></td>
                                <td></td>
                                <td><?PHP echo $addr2;?><br/>
                                    <?PHP echo $city2;?>, <?PHP echo $state2;?> <?PHP echo $zip2?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr2) { ?>
                            <tr>
                                <td><b>mailing address</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr2;?><br />
                                <?PHP echo $city2;?>, <?PHP echo $state2;?> <?PHP echo $zip2?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($directions2) { ?>
                            <tr>
                                <td valign=top><b>Directions</b></td>
                                <td></td>
                                <td><?PHP echo $directions2;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table>
                        <div class="googleMap">
                            <?PHP echo $googlePlace2;?>
                        </div>
    </div>
<?PHP } ?>
<?PHP if ($city3) { ?>
    <div class="contactLocation">
        <h2><?PHP echo $city3;?> Location</h2>
                        <table class="contactTable">
                            <?PHP if ($phone3) { ?>
                            <tr>
                                <td width=100><b>phone</b></td>
                                <td></td>
                                <td><?PHP echo $phone3?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($altPhone3) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone3;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree3) { ?>
                            <tr>
                                <td><b>toll free</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree3;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($fax3) { ?>
                            <tr>
                                <td><b>fax</b></td>
                                <td></td>
                                <td><?PHP echo $fax3?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($email3) { ?>
                            <tr>
                                <td><b>email</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $email3;?>"><?PHP echo $email3;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($addr3) { ?>
                            <tr>
                                <td><b>address</b></td>
                                <td></td>
                                <td><?PHP echo $addr3;?><br/>
                                    <?PHP echo $city3;?>, <?PHP echo $state3;?> <?PHP echo $zip3?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr3) { ?>
                            <tr>
                                <td><b>mailing address</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr3;?><br />
                                <?PHP echo $city3;?>, <?PHP echo $state3;?> <?PHP echo $zip3?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($directions3) { ?>
                            <tr>
                                <td valign=top><b>Directions</b></td>
                                <td></td>
                                <td><?PHP echo $directions3;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table>
                        <div class="googleMap">
                            <?PHP echo $googlePlace3;?>
                        </div>
    </div>
<?PHP } ?>
<?PHP if ($city4) { ?>
    <div class="contactLocation">
        <h2><?PHP echo $city4;?> Location</h2>
                        <table class="contactTable">
                            <?PHP if ($phone4) { ?>
                            <tr>
                                <td width=100><b>phone</b></td>
                                <td></td>
                                <td><?PHP echo $phone4?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($altPhone4) { ?>
                            <tr>
                                <td><b>or call</b></td>
                                <td></td>
                                <td><?PHP echo $altPhone4;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($tollFree4) { ?>
                            <tr>
                                <td><b>toll free</b></td>
                                <td></td>
                                <td><?PHP echo $tollFree4;?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($fax4) { ?>
                            <tr>
                                <td><b>fax</b></td>
                                <td></td>
                                <td><?PHP echo $fax4?></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($email4) { ?>
                            <tr>
                                <td><b>email</b></td>
                                <td></td>
                                <td>
                                <a href="mailto:<?PHP echo $email4;?>"><?PHP echo $email4;?></a>
                                </td>
                            </tr>
                           
                           <?PHP } ?>
                            
                            <?PHP if ($addr4) { ?>
                            <tr>
                                <td><b>address</b></td>
                                <td></td>
                                <td><?PHP echo $addr4;?><br/>
                                    <?PHP echo $city4;?>, <?PHP echo $state4;?> <?PHP echo $zip4?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($mailAddr4) { ?>
                            <tr>
                                <td><b>mailing address</b></td>
                                <td></td>
                                <td><?PHP echo $mailAddr4;?><br />
                                <?PHP echo $city4;?>, <?PHP echo $state4;?> <?PHP echo $zip4?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <?PHP } ?>
                            
                            <?PHP if ($directions4) { ?>
                            <tr>
                                <td valign=top><b>Directions</b></td>
                                <td></td>
                                <td><?PHP echo $directions4;?>
                                </td>
                            </tr>
                            <?PHP } ?>
                        </table>
                        <div class="googleMap">
                            <?PHP echo $googlePlace4;?>
                        </div>
    </div>
<?PHP } ?>-->
 
    
<?php include("footer.php"); ?>
