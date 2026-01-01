<?php

$book["id"] = "egy-tucat-bakonyi-betyarmese";
$book["price"] = 1800;
$book['preview_image_count'] = 7;
$book["title"] = "Egy tucat bakonyi betyármese";
$book["description"] = "<p>A legendás bakonyi betyárok alakjai (Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska...) híres-neves cselekedetei, a régi parasztvilág betyárszeretete és mindennapjaik legjellemzőbb eseményei elevenednek fel ezekben a történetekben. A gyerekrajzokkal illusztrált mesék, és a könyv elsődleges célja, hogy a mai modern világban egy általános képet adjon a gyerekeknek a régi magyar paraszt és betyárvilágról és annak pozitívumait megvilágítva, értéket közvetítsen számukra. A modern mesékkel ellentétben, a betyártörténetekben nincsenek kitalált vagy természetfeletti szereplők, ezekben mindenki ízig-vérig valóságos, létező ember. (Két kézzel, két lábbal és egy fejjel..)  </p>
                        <p>Olvasás közben itt-ott találkozhatunk régi vagy tájjelegű kifejezésekkel, vagy olyan szavakkal, amelyek jelentése mára már feledésbe merült, és nem alkotóelemei mindennapi szókészletünknek. Ezért a gyerekek számára mindenképpen új ismeretanyagot nyújt. A mesékből azt is megtudhatjuk, hogy vajon a betyárok ma is köztünk élnek-e... </p>        
                        ";

$book['data1'] = '<table class="table-book-data">
                    <tr><td class="data-label">Szerző:</td> <td>Csatlós Melinda</td></tr>            
                    <tr><td class="data-label">Kiadás&nbsp;éve:</td> <td>20XX</td></tr>
                    <tr><td class="data-label">Oldalszám:</td> <td>51</td></tr>
                    <tr><td class="data-label">ISBN:</td> <td>978-963-08-4131-3</td></tr>
                    <tr><td class="data-label">Méret:</td> <td>15&nbsp;x&nbsp;21cm</td></tr>
                </table>';

$book['data2'] = '<table class="table-book-data">
                    <tr><td class="data-label">Lektrok:</td> <td>Dr.&nbsp;Molnár Zsolt<br>Molnárné Czeglédi Cecília</td></tr>
                    <tr><td class="data-label">Borító:</td> <td>keménytáblás</td></tr>             
                    <tr><td class="data-label">Borítóterv:</td> <td>Nagy Balázs</td></tr>
                    <tr><td class="data-label">Borítórajz:</td> <td>Hungler Réka</td></tr>
                </table>';

$book['other_content'] = '<h2>A szerző ajánlója</h2>
        <p>&#8222;Ez a könyv többek közt azért született, mert úgy gondoltam, hogy a mai világban a gyerekek többnyire rossz meséken nőnek fel. Mesére szükségük van, méghozzá olyanra, melyből tanulnak, melybe nem az agresszivitás és a durvaság a fő motívum. A betyárvilág nemzeti múltunk szerves része, s mind idáig elvétve találkozhattunk csupán egy-egy betyármesével. Ezt az űrt próbáltam a könyvemmel betölteni, s a következő nemzedék számára egy kis ízelítőt adni a régi parasztvilág történeteiből. A néhol felbukkanó tájjelegű szavak és régies kifejezések pedig a szókincsgyarapítás céljából kerültek bele a történetekbe, mivel ez a témakör a legtöbbeknek eddig kimaradt az életéből.</p>
        <p>Értékes és jó mesének tartom azokat az alkotásokat, amikben van tanulság és értéket képviselő motívum. Remélem ezzel a könyvvel még inkább meg tudom kedveltetni a gyerekekkel a meséket, s nem titkolt szándékom a nemzeti múltra és annak értékeire való figyelemfelhívás sem. Remélem ezzel a kötettel valóban a jó mesék táborát gyarapítom...&#8221;</p>
        <p class="text-right"><a href="#">Csatlós Melinda</a></p>     


        <h2>Bódai-Sóos Judit ajánlója</h2>
        <p><a href="#">Csatlós Melinda</a> könyve, amint azt a cím is mutatja, tizenkét betyártörténetet fog egy csokorba. S tényleg mesék ezek? A szerző a történeteken keresztül olyan hitelesen mutatja be a hajdani betyárvilágot, hogy akár valóban megtörtént események is lehetnek. Sobri Jóska, Milfajt Ferkó, Savanyú Jóska, Mógor Jancsi, Lakat Miska mindenesetre történelmünk létező figurái, számtalan legenda fűződik nevükhöz, s most e könyv ezt a palettát színesíti, gazdagítja, és még tovább élteti.
            Az utolsó történet pedig igazi csattanó, mely átvezet a hajdani betyárvilágból a mába, a betyárbecsület vezérfonalát használva.
            A könyv nyelvezete ízes, mégsem mondható régiesnek, vagy nehézkesnek. Ráadásul balladai hangulatot keltenek a sorokban megbúvó rímek, gördülékennyé, élvezetessé teszik az olvasást, anélkül, hogy verselést erőltetnének.
            A történetekhez illeszkedő gyermekrajzok tovább emelik a könyv értékét, és híven bizonyítják, hogy nem csak a betyárok tudtak egykor jó csapatmunkát végezni.
        </p>
        <p>Szívből ajánlom ezeket a betyármeséket kicsiknek, nagyoknak egyaránt, akár a Bakonyban élnek, akár nem, mert mindenki mosolyogva tanulhat belőlük.</p>
';

$this->load->view('page/book', ["book" => $book]);
?>  