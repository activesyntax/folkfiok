<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Messages {

    public static $companyName = "FolkFiók";
    public static $generalEmail = "info@folkfiok.hu";
    public static $orderEmail = "info@folkfiok.hu";
    public static $betyaroraEmail = "info@folkfiok.hu";
    public static $adminEmail = "info@folkfiok.hu";
    public static $signature = '<p>Üdvözlettel: <br> a FolkFiók csapata<br><br>
                                <a href="http://www.folkfiok.hu">www.folkfiok.hu</a><br><br>
                                <a href="http://www.folkfiok.hu"><img src="http://www.folkfiok.hu/img/folkfiok.png" style="height: 80px; border: none;"></a>
                                </p>';
    public static $signatureText = "\r\nÜdvözlettel: \r\na FolkFiók csapata\r\nhttp://www.folkfiok.hu";
    // Order email
    public static $orderEmailSubject = "FolkFiók - rendelés";
    private static $orderHtmlEmailTemplate = '<div>
            <p>Kedves %s!</p>
            
            <p>Értesítjük, hogy a FolkFiók webáruházában tett rendelését felvettük és rögzítettük. <br>
               Ön <strong>%s</strong> értékben rendelt termékeket. Kérjük, utalja át ezt az összeget az alábbi számlaszámra:
                </p>
                <ul>
                    <li>Számlaszám: 11600006-00000000-50900479</li>
                    <li>IBAN: HU24116000060000000050900479</li>  
                    <li>SWIFT/BIC kód: GIBAHUHB</li>
                </ul>
              
            <p>Megrendelt termékek:</p>
            %s
            <p>
                A megrendelt termékeket haladéktalanul postázzuk Önnek, amint megérkezett számlánkra a termékek díja.<br>
               A továbbiakban ezen az email címen értesítjük Önt megrendelése aktuális állapotáról.
            </p>     
            
              <p>Köszönjük, hogy nálunk vásárolt!</p>
            </div>';
    private static $orderTextEmailTemplate = "Kedves %s!                          
Értesítjük, hogy a FolkFiók webáruházában tett rendelését felvettük és rögzítettük. Ön %s értékben rendelt termékeket. Kérjük, utalja át ezt az összeget az alábbi számlaszámra:
                                                    
Számlaszám: 11600006-00000000-50900479
IBAN: HU24116000060000000050900479  
SWIFT/BIC kód: GIBAHUHB
                                                    
Megrendelt termékek:
                                             
%s
                                                
A megrendelt termékeket haladéktalanul postázzuk, amint megérkezett számlánkra a termékek díja.
A továbbiakban ezen az email címen értesítjük Önt megrendelése aktuális állapotáról.
                                                
Köszönjük, hogy nálunk vásárolt!";

    public static function getOrderEmail($customer_name, $totalAmount, $products, $shipping_costs) {

        $productString = '<table><tr><th style="text-align: left;">Termék</th><th style="text-align: center;">Mennyiség</th><th style="text-align: center;">Ár</th></tr>';
        foreach ($products as $product) {

            $bookPrice = Shopping::get_price_formatted($product->quantity * $product->price);
            $productString .= sprintf('<tr><td>%s</td><td style="text-align: center;">%u db</td><td style="text-align: center;">%s</td></tr>', $product->title, $product->quantity, $bookPrice);
        }

        $productString .= '<tr><td style="text-align: right; border-top: 1px solid #ccc;" colspan="2">Postaköltség:</td><td style="text-align: right; border-top: 1px solid #ccc;">' .Shopping::get_price_formatted($shipping_costs). '</td></tr>'
                . '<tr><td style="text-align: right; font-weight:bold;" colspan="2">Összesen:</td><td style="text-align: right;">' . Shopping::get_price_formatted($totalAmount) . '</td></tr>'
                . '</table>';

        return sprintf(Messages::$orderHtmlEmailTemplate . Messages::$signature, $customer_name, Shopping::get_price_formatted($totalAmount), $productString);
    }

    public static function getOrderEmailText($customer_name, $totalAmount, $products, $shipping_costs) {
        $productString = '';
        foreach ($products as $product) {
            $bookPrice = Shopping::get_price_formatted($product->quantity * $product->price);
            $productString .= sprintf("%s        %u db       %s \r\n", $product->title, $product->quantity, $bookPrice);
        }

        $productString .= "Postaköltség: " . Shopping::get_price_formatted($shipping_costs) . "\r\n";
        $productString .= "Összesen: ".Shopping::get_price_formatted($totalAmount). "\r\n";

        return sprintf(Messages::$orderTextEmailTemplate . Messages::$signatureText, $customer_name, Shopping::get_price_formatted($totalAmount), $productString);
    }

    // Betyarora email
    public static $betyaroraEmailSubject = "FolkFiók - betyáróra";
    public static $betyaroraHtmlEmailTemplate = '<div>
            <p>Kedves %s!</p>
            <p>
               Köszönjük üzenetét! Hamarosan kapcsolatba lépünk Önnel ezen az email címen keresztül.
             </p>     
            </div>';
    public static $betyaroraTextEmailTemplate = 'Kedves %s!                          
Köszönjük üzenetét! Hamarosan kapcsolatba lépünk Önnel ezen az email címen keresztül.';

}
