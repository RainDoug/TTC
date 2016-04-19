<?php header('Content-type: text/css'); ?>
<?php include ('data.php'); ?>
<style>
@charset "utf-8";
/* CSS Document */

body {
    background: #7C0700;
    color: #FFF;
}
.copyright {
	font-size:10px;
	color:#999999;
	margin-left:5px;
	text-align:center;
}

.copyright a {
	color:#52711f;
}

.a_btn {
	
}

.leftSide {
	float:left;
	text-align:right;
	padding-right:5px;
}

.rightSide {
	float:left;
	
}

.clear { clear:both; }
.special_offer {
    text-decoration: none;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    padding: 12px 10px 12px 10px;
	margin-bottom:10px;	
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#<? echo $listlight?>), to(#<? echo $listdark?>)); /* top most bar under logo */
	text-align:right;
	font-size:14px;
	color:white;
	font-weight:bold;
	
	
}
.address {
	line-height:normal;
}

.contact_info {
	line-height:28px;
	padding:12px 10px 12px 10px;
	font-size:14px;
	text-shadow:none !important;
}

.map {
	float:right;
	margin-top:-2px;
	margin-right:12px;
}
.location {
	color:#3b4582;
	font-size:16px;
	font-weight:bold;
}

#jqt > * {

}

#jqt h1, #jqt h2 {
    font: bold 18px "Helvetica Neue", Helvetica;
    text-shadow: rgba(255,255,255,.2) 0 1px 1px;
    color: #000;
    margin: 10px 20px 5px;
}
/* @group Toolbar */
#jqt .toolbar, #jqt .toolbarhome {
    -webkit-box-sizing: border-box;
    border-bottom: 1px solid #7C0700; 
    padding: 30px;
    height: 75px;
    position: relative;
	background:url(img/interior.png) top right no-repeat #<? echo $interiorbg; ?>;  /********* interior picture and background color behind it ********/
	border-top:5px solid #<? echo $topborder; ?>; /* top most border of mobile site */
	background-color:#7C0700;
}

#jqt .toolbarhome {
	background: url(img/logo.png) top right no-repeat #<? echo $interiorbg; ?>;
}

#jqt .black-translucent .toolbar {
    margin-top: 20px;
}
#jqt .toolbar > h1 {
    position: absolute;
    overflow: visible;
    top: 3px;
    line-height: 1em;
    margin: 45px 0 0 0;
    height: 40px;
	left:10%;
    font-size: 20px;
    width: 150px;
    text-align: left;
    text-overflow: ellipsis;
    white-space: nowrap;
    color: white;  /************************** Text Color of the Header */
}
#jqt.landscape .toolbar > h1 {
    /*margin-left: -125px;*/
    width: 250px;
}
/************************************************ Back Button ***************/
#jqt .button, #jqt .back, #jqt .cancel, #jqt .add {
    position: absolute;
    overflow: hidden;
    top: 8px;
    right: 10px;
    margin: 0;
    border-width: 0 5px;
    padding: 0 3px;
    width: auto;
    height: 30px;
    line-height: 30px;
    font-family: inherit;
    font-size: 12px;
    font-weight: bold;
    color: #fff;
    text-shadow: rgba(0, 0, 0, 0.5) 0px -1px 0;
    text-overflow: ellipsis;
    text-decoration: none;
    white-space: nowrap;
    background: none;
}
#jqt .button.active, #jqt .cancel.active, #jqt .add.active {
    -webkit-border-image: url(img/button_clicked.png) 0 5 0 5;
}
#jqt .blueButton {
    -webkit-border-image: url(img/blueButton.png) 0 5 0 5;
    border-width: 0 5px;
}
#jqt .back {
    left: 6px;
    right: auto;
    padding: 0;
	width:85px;
    max-width: 85px;	
	background: url(img/backbtn.png) top left no-repeat;
}

#jqt .back.active {
    -webkit-border-image: url(img/back_button.png);
}
/************************************************* Back End *****************/
/*#jqt .leftButton, #jqt .cancel {
    left: 6px;
    right: auto;
}
#jqt .add {
    font-size: 24px;
    line-height: 24px;
    font-weight: bold;
}
#jqt .whiteButton,
#jqt .grayButton, #jqt .redButton, #jqt .blueButton, #jqt .greenButton {
    border-width: 0 12px;
    color: #000000;
    display: block;
    font-size: 20px;
    font-weight: bold;
    padding: 10px;
    text-align: center;
    text-decoration: inherit;
    text-shadow: rgba(255, 255, 255, 0.7) 0 1px 0;
}

#jqt .whiteButton.active, #jqt .grayButton.active, #jqt .redButton.active, #jqt .blueButton.active, #jqt .greenButton.active,
#jqt .whiteButton:active, #jqt .grayButton:active, #jqt .redButton:active, #jqt .blueButton:active, #jqt .greenButton:active {
    -webkit-border-image: url(img/activeButton.png) 0 12 0 12;
    color: #000000 !important;
}
#jqt .whiteButton {
    -webkit-border-image: url(img/whiteButton.png) 0 12 0 12;
}
#jqt .grayButton {
    -webkit-border-image: url(img/grayButton.png) 0 12 0 12;
    color: #FFFFFF;
}

#jqt .redButton {
    -webkit-border-image: url(img/redButton.png) 0 12 0 12;
}

#jqt .greenButton {
    -webkit-border-image: url(img/greenButton.png) 0 12 0 12;
}
/* @end */
/* @group Lists *//**************************************************************************** Need info Skip over ******************************************/
#jqt h1 + ul, #jqt h2 + ul, #jqt h3 + ul, #jqt h4 + ul, #jqt h5 + ul, #jqt h6 + ul {
    margin-top: 0;
}
#jqt ul {
    color: #aaa;
   /* border: 1px solid #333333; */
    font: bold 18px "Helvetica Neue", Helvetica;
    padding: 0;
    margin: 15px 10px 17px 10px;
}
#jqt ul.rounded {
    -webkit-border-radius: 8px;
    -webkit-box-shadow: rgba(0,0,0,.3) 1px 1px 3px;
}
#jqt ul.rounded li:first-child, #jqt ul.rounded li:first-child a {
    border-top: 0;
    -webkit-border-top-left-radius: 8px;
    -webkit-border-top-right-radius: 8px;
}
#jqt ul.rounded li:last-child, #jqt ul.rounded li:last-child a {
    -webkit-border-bottom-left-radius: 8px;
    -webkit-border-bottom-right-radius: 8px;
}
#jqt ul li {
    color: #666;
   /* border-top: 1px solid #333;
    border-bottom: #555858;*/
    list-style-type: none;
    padding: 10px 10px 10px 10px;
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#<? echo $listlight?>), to(#<? echo $listdark?>));
    overflow: hidden;
}
#jqt ul li.arrow {
    background-color: #4c4d4e !important;
    background-image: url(img/chevron.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4c4d4e), to(#404142));
    background-position: right center !important;
    background-repeat: no-repeat !important;
}

#jqt ul li.arrow a {
    padding: 12px 22px 12px 10px;
}

#jqt ul li.forward {
    background-image: url(img/chevron_circle.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4c4d4e), to(#404142));
    background-position: right center;
    background-repeat: no-repeat;
}
/* universal links on list *//******************************************************************************** Link Information Skip over **************************************************/
#jqt ul li a, #jqt li.img a + a {
    color: #<? echo $lista; ?>; /******* edge to edge list item color ***************************/
    text-decoration: none;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    padding: 12px 10px 12px 10px;
    margin: -10px;
    /*text-shadow: rgba(0,0,0,.2) 0 1px 1px;*/
	background: url(img/chevron.png) right center no-repeat; 
}
#jqt ul li a.active, #jqt ul li a.button {
    background-color: #<? echo $listActive; ?>; /************************* Edge to Edge Active Color *************************************/
    color: #fff;
}
#jqt ul li a.active.loading {
    background-image: url(img/loading.gif);
    background-position: 95% center;
    background-repeat: no-repeat;
}
#jqt ul li.arrow a.active {
    background-image: url(img/chevron.png);
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul li.forward a.active {
    background-image: url(img/chevron_circle.png);
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul li.img a + a {
    margin: -10px 10px -20px -5px;
    font-size: 17px;
    font-weight: bold;
}
#jqt ul li.img a + a + a {
    font-size: 14px;
    font-weight: normal;
    margin-left: -10px;
    margin-bottom: -10px;
    margin-top: 0;
}
#jqt ul li.img a + small + a {
    margin-left: -5px;
}
#jqt ul li.img a + small + a + a {
    margin-left: -10px;
    margin-top: -20px;
    margin-bottom: -10px;
    font-size: 14px;
    font-weight: normal;
}
#jqt ul li.img a + small + a + a + a {
    margin-left: 0px !important;
    margin-bottom: 0;
}
#jqt ul li a + a {
    color: #000;
    font: 14px "Helvetica Neue", Helvetica;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0;
}
#jqt ul li a + a + a, #jqt ul li.img a + a + a + a, #jqt ul li.img a + small + a + a + a {
    color: #666;
    font: 13px "Helvetica Neue", Helvetica;
    margin: 0;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    padding: 0;
}
/*@end *//*********************************************************************************** Done Skipping ***************************************************************/
/* @group Forms */
/*#jqt ul.form li {
    padding: 7px 10px;
}
#jqt ul.form li.error {
    border: 2px solid red;
}
#jqt ul.form li.error + li.error {
    border-top: 0;
}
#jqt ul li input[type="text"],
#jqt ul li input[type="password"],
#jqt ul li input[type="tel"],
#jqt ul li input[type="number"],
#jqt ul li input[type="search"],
#jqt ul li input[type="email"],
#jqt ul li input[type="url"],
#jqt ul li textarea,
#jqt ul li select {
    color: #777;
    background: transparent url('data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==');
    border: 0;
    font: normal 17px "Helvetica Neue", Helvetica;
    padding: 0;
    display: inline-block;
    margin-left: 0px;
    width: 100%;
    -webkit-appearance: textarea;
}
#jqt ul li textarea {
    height: 120px;
    padding: 0;
    text-indent: -2px;
}
#jqt ul li select {
    text-indent: 0px;
    background: transparent url(img/chevron.png) no-repeat right center;
    -webkit-appearance: textfield;
    margin-left: -6px;
    width: 104%;
}
#jqt ul li input[type="checkbox"], #jqt ul li input[type="radio"] {
    margin: 0;
    padding: 10px 10px;
}
#jqt ul li input[type="checkbox"]:after, #jqt ul li input[type="radio"]:after {
    content: attr(title);
    font: 17px "Helvetica Neue", Helvetica;
    display: block;
    width: 246px;
    color: #777;
    margin: -12px 0 0 17px;
}
#jqt.android ul li input[type="checkbox"]:after, #jqt.android ul li input[type="radio"]:after {
    margin: 3px 0 0 24px;
}
/* @end */
/* @group Mini Label */
/*#jqt ul li small {
    color: #64c114;
    font: 17px "Helvetica Neue", Helvetica;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    display: block;
    width: 23%;
    float: right;
    padding: 0;
}
#jqt ul li.arrow small {
    padding: 0 15px;
}
#jqt ul li small.counter {
    font-size: 17px;
    line-height: 13px;
    font-weight: bold;
    background: rgba(0,0,0,.15);
    color: #fff;
    -webkit-border-radius: 11px;
    padding: 4px 10px 5px 10px;
    display: block;
    width: auto;
    margin-top: -22px;
    -webkit-box-shadow: rgba(255,255,255,.1) 0 1px 0;
}
#jqt ul li.arrow small.counter {
    margin-right: 15px;
}
/* @end */
/* @group Individual */
/*#jqt ul.individual {
    border: 0;
    background: none;
    clear: both;
    overflow: hidden;
    padding-bottom: 3px;
    -webkit-box-shadow: none;
}
#jqt ul.individual li {
    background: #4c4d4e;
    border: 1px solid #333;
    font-size: 14px;
    text-align: center;
    -webkit-border-radius: 8px;
    -webkit-box-sizing: border-box;
    width: 48%;
    float: left;
    display: block;
    padding: 11px 10px 14px 10px;
    -webkit-box-shadow: rgba(0,0,0,.2) 1px 1px 3px;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4c4d4e), to(#404142));
}
#jqt ul.individual li + li {
    float: right;
}
#jqt ul.individual li a {
    color: #fff;
    line-height: 16px;
    margin: -11px -10px -14px -10px;
    padding: 11px 10px 14px 10px;
    -webkit-border-radius: 8px;
}
/* @end */
/* @group Toggle */
/*#jqt .toggle {
    width: 94px;
    position: relative;
    height: 27px;
    display: block;
    overflow: hidden;
    float: right;
}
#jqt .toggle input[type="checkbox"]:checked {
    background-position: 0 0;
}
#jqt .toggle input[type="checkbox"] {
    -webkit-appearance: textarea;
    -webkit-border-radius: 5px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-transition: background-position .15s;
    background-color: transparent;
    background: #fff url(img/on_off.png) -55px 0 no-repeat;
    border: 0;
    height: 27px;
    margin: 0;
    overflow: hidden;
    position: absolute;
    width: 94px;
}
/* @end */
/* @group Info *//************************************************* This is the second page div space under the Toolbar ****************************************/
#jqt .info {
   background-color:#fff;
    font-size: 12px;
    line-height: 16px;
    text-align: center;
    text-shadow: rgba(255,255,255,.8) 0 1px 0;
    color: #<? echo $infotext?>;
    padding: 15px;
    border-top: 1px solid rgba(255,255,255,.2);
    font-weight: bold;
}
#jqt .info a {
	color:#<? echo $infolink?>;
	text-decoration:underline;
	font-size:13px;
}
#jqt .info p {
	text-align:left;
	margin:3px 10px 8px 10px;
}
#jqt .info ul {list-style:circle;}
#jqt .info li {font-size:11px;font-weight:bold;text-decoration:none;margin:0 10px;color:#<? echo $listitem; ?>;background:none;list-style:circle;text-align:left;height:15px;width:auto;padding:0;}
#jqt .info li a {font-size:11px;font-weight:bold;text-decoration:none;margin:0 10px;color:#<? echo $listitema; ?>;background:none;list-style:circle;text-align:left;height:15px;width:auto;padding:0;}
#jqt .info h2 {color:#<? echo $listitemh2; ?>;font-size:16px;font-weight:bold;border-bottom:1px solid #<? echo $listitemh2; ?>;}
/* @end */
/* @group Edge to edge *//************************** Edge to Edge is the div that is where the UL and LI is located for this touch app ************************************/
#jqt ul.edgetoedge {
    border-width: 1px 0;
    margin: 12px 0 5px 0;
    padding: 0;
}

#jqt ul.edgetoedge li {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#<? $listlight?>), to(#<? echo $listdark?>));
	        /************************* Color of the List Item Background *************************/
    border-bottom: 2px solid #<? echo $listBorder; ?>;
    border-top: 1px solid #<? echo $listBorder; ?>;
    font-size: 14px;
    margin-bottom: -1px;
}
#jqt ul.edgetoedge li.arrow {
    background-color: #404142 !important;
    background-image: url(img/chevron.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1e1f21), to(#272729));
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul.edgetoedge li.sep {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(0,0,0,0)), to(rgba(0,0,0,.5)));
   /* border-bottom: 1px solid #111113;
    border-top: 1px solid #666;*/
    color: #3e9ac3;
    font-size: 16px;
    margin: 1px 0 0 0;
    padding: 2px 10px;
    text-shadow: #000 0 1px 0;
}
#jqt ul.edgetoedge li em {
    font-weight: normal;
    font-style: normal;
}
/* @end */
/* @group Plastic */
/*#jqt #plastic {
    background: #17181a;
}
#jqt ul.plastic {
    background: #17181a;
    color: #aaa;
    font: bold 18px "Helvetica Neue", Helvetica;
    margin: 0;
    padding: 0;
    border-width: 0 0 1px 0;
}
#jqt ul.plastic li {
    border-width: 1px 0;
    border-style: solid;
    border-top-color: #222;
    border-bottom-color: #000;
    color: #666;
    list-style-type: none;
    overflow: hidden;
    padding: 10px 10px 10px 10px;
}
#jqt ul.plastic li a.active.loading {
    background-image: url(img/loading.gif);
    background-position: 95% center;
    background-repeat: no-repeat;
}
#jqt ul.plastic li small {
    color: #888;
    font-size: 13px;
    font-weight: bold;
    line-height: 24px;
    text-transform: uppercase;
}
#jqt ul.plastic li:nth-child(odd) {
    background-color: #1c1c1f;
}
#jqt ul.plastic li.arrow {
    background-image: url(img/chevron.png);
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul.plastic li.arrow a.active {
    background-image: url(img/chevron.png);
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul.plastic li.forward {
    background-image: url(img/chevron_circle.png);
    background-position: right center;
    background-repeat: no-repeat;
}
#jqt ul.plastic li.forward a.active {
    background-image: url(img/chevron_circle.png);
    background-position: right center;
    background-repeat: no-repeat;
}
/* @group Metal */
/*#jqt ul.metal {
    border-bottom: 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    margin: 0;
}
#jqt ul.metal li {
    background-image: none;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #666;
    font-size: 26px;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(238,238,238,1)), to(rgba(156,158,160,1)));
}
#jqt ul.metal li a {
    line-height: 26px;
    margin: 0;
    text-shadow: #fff 0 1px 0;
    padding: 13px 0;
}
#jqt ul.metal li a em {
    display: block;
    font-size: 14px;
    font-style: normal;
    color: #444;
    width: 50%;
    line-height: 14px;
}
#jqt ul.metal li a.active {
    color: rgb(0,0,0);
}
#jqt ul.metal li small {
    float: right;
    position: relative;
    margin-top: 10px;
    font-weight: bold;
}
#jqt ul.metal li.arrow {
    background-image: url(img/chevron.png);
    background-position: right center;
    background-repeat: no-repeat;
    background-image: url(img/chevron.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(238,238,238,1)), to(rgba(156,158,160,1)));
    background-repeat: no-repeat;
    background-position: right center;
}
#jqt ul.metal li.arrow a small {
    padding-right: 15px;
    line-height: 17px;
}
/* @end */
/*input[type='submit'] {
    -webkit-border-radius: 4px;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(238,238,238,1)), to(rgba(156,158,160,1)));
    border: 1px outset black;
    display: block;
    font-size: inherit;
    font-weight: inherit;
    padding: 10px;
}
*/
</style>