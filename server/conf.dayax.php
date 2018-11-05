<?php
define("SYS_NAME", "Dayax Cargo Limited");
define("SYS_URL", "http://127.0.0.1/dayax/");
define("KEY_WORDS","Dayax Cargo Air Freight, Sea Freight, Air Shipping, Sea Shipping, Cargo Shipping");
define("DESCRIPTION", "Dayax Cargo Limited (DCL) is an Air, Sea and Road Freight forwarding company based in UK with offices in China, UAE, India, USA, Turkey & Eastern Africa Cities.");
define("DEV", "Byteblade Systems Inc. Web application section");
define("SYS_ICON","");
define("SYS_LOGO", SYS_URL."wpuploads/logos/dayax_cargo_limited_logo.png");

//funcs
function showTracker(){
    echo '<div class="trackbox">
    <form method="post" action="index.php?option=com_cargo&view=trackings">	
    <input name="waybill" autocomplete="off" class="track_input" type="text" value="Enter Waybill No"/>  
    <input type="submit" value="Track Shipment" class="track_btn"/>
    </form>
    </div>';
}

 ?>