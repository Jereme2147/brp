 <?php
    include_once "../header/header.php";
?>
    <div id="safety">
        <div id="safe-title"> 
            <h1>Propane Gas Safety</h1>
        </div>
        <div id="smell" onclick="expand('smell-exp')" class="safety">
            <div>
                <h2>What to do if you smell gas:</h2>
                
            </div>
            <div>
                <img src="/brp/media/phone-call.jpg" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="smell-exp" class="exp">
                <h4>When it comes to gas appliances, safety is a top priority. If you smell gas in your home, follow these steps:</h4>
                <ol>
                    <li><strong>NO FLAMES OR SPARKS.</strong> Immediately put out all smoking materials and other open flames. Do not operate lights, appliances, telephones, or cell phones. Flames or sparks from these sources can trigger an explosion or a fire.</li>
                    <li><strong>LEAVE THE AREA IMMEDIATELY.</strong> Get everyone out of the building or area where you suspect gas is leaking.</li>
                    <li><strong>SHUT OFF THE GAS.</strong> Turn off the main gas supply valve on your propane tank if it is safe to do so. To close the valve, turn it to the right (clockwise).</li>
                    <li><strong>REPORT THE LEAK.</strong> From a neighbor’s home or other nearby building away from the gas leak, call your propane retailer right away. If you can’t reach your propane retailer, call 911 or your local fire department.</li>
                    <li><strong>DO NOT RETURN TO THE BUILDING OR AREA</strong> until your propane retailer, emergency responder, or qualified service technician determines that it is safe to do so.</li>
                    <li><strong>GET YOUR SYSTEM CHECKED.</strong> Before you attempt to use any of your propane appliances, your propane retailer or a qualified service technician must check your entire system to ensure that it is leak-free.</li>
                </ol>
            </div>

        </div>
        <div id="shutoff" onclick="expand('shutoff-exp')" class="safety">
            <div>
                <h2>How to shut your propane take off</h2>
            </div>
             <div>
                <img src="/brp/media/brptank.png" alt="" class="safe-img">
                <h3>&#x25BC Learn more &#x25BC</h3>
            </div>
            <div id="shutoff-exp" class="exp">
                <iframe class="vid" src="https://www.youtube.com/embed/0dPMiNSkOKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>
<?php
    
    include_once "../footer/footer.php";
?>