<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<p>
    A megvásárolt termékek díját banki átutalással térítheti meg. Kérjük, a <strong>rendelelés leadása után</strong> utalja át megfelelő összeget a lenti bankszámlára, hogy mihamarabb postázhassuk Önnek a kiadványokat.
</p>

<strong>Magyarországi bankszámlánk:</strong>
<ul>
    <li>Számlaszám: <span class="readable-number">11600006-00000000-50900479</span></li>
    <li>IBAN: <span class="readable-number">HU24116000060000000050900479</span></li>
    <li>SWIFT/BIC kód: GIBAHUHB</li>
    <li>ERSTE Bank Hungary Zrt.</li>
</ul>

<strong>Szlovákiai bankszámlánk:</strong>
<ul>
    <li>Számlaszám: <span class="readable-number">11898784/5200</li>
    <li>IBAN: <span class="readable-number">SK9052000000000011898784</span></li>
    <li>SWIFT/BIC kód: OTPVSKBX</li>
    <li>OTP Banka Slovensko a.s.</li>
</ul>

<br> 
<p><strong>Szállítás</strong></p>
<p>A termékeket postán keresztül juttatjuk el Önhöz. 
    A postaköltségeket a lehetőségek szerint igyekszünk a lehető legalacsonyabban tartani. Jelenleg az alábbi árjegyzék alapján számoljuk ki a postaköltséget:
<ul>
    
    <?php if(Shopping::currencyCode() != 'EUR') : ?>
    <li>1 és 2 db könyv rendelése: 300 Ft</li>
    <li>3 és 4 db könyv rendelése: 600 Ft</li>
    <li>5 és 6 db könyv rendelése: 900 Ft</li>
    <li>7 és 8 db könyv rendelése: 1200 Ft</li>
    <li>9 és 10 db könyv rendelése: 1400 Ft</li>
    <?php else : ?>
     <li>1 és 2 db könyv rendelése: 1 &euro;</li>
    <li>3 és 4 db könyv rendelése: 2 &euro;</li>
    <li>5 és 6 db könyv rendelése: 3 &euro;</li>
    <li>7 és 8 db könyv rendelése: 4 &euro;</li>
    <li>9 és 10 db könyv rendelése: 5 &euro;</li>
    <?php endif ?>
</ul>

</p>
<br> 

<p><strong>Személyes átvétel</strong></p>
<p>
    Előzetes egyeztetés után lehetőség van a csomag személyes átvételére is az alábbi településeken:
</p>
<ul>
    <li>Magyarországon</li>
    <ul>
        <li>Győr</li>   
        <li>Pápa</li>
        <li>Bakonyjákó</li>
    </ul>
    <li>Szlovákiában</li>
    <ul>

        <li>Dunaszerdahely (Dunajská Streda)</li>      
        <li>Bős (Gabčíkovo)</li>
    </ul>
</ul>

