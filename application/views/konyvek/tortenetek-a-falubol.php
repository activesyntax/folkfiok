<?php

$book["id"] = "tortenetek-a-falubol";
$book["price"] = 1500;
$book['preview_image_count'] = 7;
$book["title"] = "Történetek a faluból";
$book["description"] = "<p>A 12 elbeszélést tartalmazó kötet, 127 oldalon keresztül repít vissza minket a 19. századba, s így betekintést nyerhetünk az akkori emberek éle-tébe. Azonban nem csak időbeli utazásról van szó, hiszen a történetek felölelik a teljes magyar nyelv-területet. Olvasás köz-ben a Dunántúltól egészen  Moldváig szárnyalunk, közben pedig úgy érezhetjük, mintha éppen velünk történnének a dolgok itt, a 21. században. Nem hiába, hiszen az élet nagy kérdései ugyanazok maradtak...</p>";

$book['data1'] = ' <table class="table-book-data">
                        <tr><td class="data-label">Szerző:</td> <td>Csatlós Melinda</td></tr>                        
                        <tr><td class="data-label">Kiadás&nbsp;éve:</td> <td>20XX</td></tr>
                        <tr><td class="data-label">Oldalszám:</td> <td>127</td></tr>
                        <tr><td class="data-label">ISBN:</td> <td>978-963-08-7153-2</td></tr>
                        <tr><td class="data-label">Méret:</td> <td>15&nbsp;x&nbsp;21cm</td></tr> 
                        
                    </table>';

$book['data2'] = '<table class="table-book-data">
                    <tr><td class="data-label">Anyanyelvi lektorok:</td> <td>Dr.&nbsp;Molnár Zsolt<br>Molnárné Czeglédi Cecília</td></tr> 
                    <tr><td class="data-label">Néprajzi lektor:</td> <td>Lendvai Tibor</td></tr>           
                    <tr><td class="data-label">Borító:</td> <td>puhatáblás</td></tr>             
                    <tr><td class="data-label">Borítóterv:</td> <td>Nagy Balázs</td></tr>
                </table>';

$book['other_content'] = 'A kötet elbeszéléseinek helyszínei (piros foltok a térképen) felöleik a teljes magyar nyelvterületet.

        <div class="text-center">
            <a href="'.site_url('img/books/terkep-tortenetek-helyszinei.jpg').'" data-lightbox="terkep">
                <img class="" src="'.site_url('img/books/terkep-tortenetek-helyszinei.jpg').'" alt="Történetek a faluból - a könyv helyszínei">
            </a>
        </div>
        ---------- IDE MÉG KELL SZÖVEG ---------------';

$this->load->view('page/book', ["book" => $book]);
?>  