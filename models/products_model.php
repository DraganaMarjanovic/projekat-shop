<?php


const ORDER_BY_PRICE_ASC = "price-asc";

const ORDER_BY_PRICE_DESC= "price-desc";


function getAllProducts() {
    $products = [
        [
            'id' => 1,
            'title' => "PODLOGA WAKE",
            'description' => "Podloska Wake ultralaka podloska tezine 560 g, 5 cm debljine. Odlican izolator od hladonoce
            a neravnine na zemlji prilagodjavaju se zbog saca koje imaju medjuprostor i fleksibilnost da se oblikuju prema
            podlozi. Dimenzije podloske 185 x 55 x 5 cm. Može se koristiti za: kampovanje, viskogorstvo, planinarenje,
            penjanje, alpinizam, boravak u prirodi, spavanje u satoru, pl.domu i na otvorenom.",
            'img' => "./public/theme/img/podloga.jpg",
            'price'=> 5200,
            'category'=> "podloga",
            'available'=> true
        ],
        [
            'id' => 2,
            'title' => "RANAC CAMP SUMMIT",
            'description' => "Easy Camp Summit 50+10 je klasičan model, savršen za neiskusne kampere. Tradicionalni,
            podesivi sistem za leđa nudi bezbedno i udobno pristajanje. Podeljeni glavni odeljak obezbeđuje optimalnu
            raspodelu težine i ovaj ranac ima mnogo džepova , pokrivač za kišu i podesivi gornji poklopac za veći
            kapacitet.",
            'img' => "./public/theme/img/ranac1.jpeg",
            'price'=> 8300,
            'category'=>"ranac",
            'available'=> true
        ],
        [
            'id' => 3,
            'title' => "AUSTRIA ALPIN DEREZE",
            'description' => "Austria alpin dereze klasicne namenjene za obicnu planinarsku cipelu, lagano se podesavaju
            svakoj cipeli, 10 zuba, nemenjene za treking ture u Alpima po gleceru, snegu, zastita od snega..." ,
            'img' => "./public/theme/img/dere.jpg",
            'price'=> 12900,
            'category'=>"dereze",
            'available'=> true
        ],
        [
            'id' => 4,
            'title' => "BLACK DIAMOND DEREZE",
            'description' => "Dereze Black Diamond univerzalne Contact sa 10 zuba od nerdjajuceg celika za viskogorske
            ture. Zastita od snega . Duplo nazubljeni masivniji i veci zubi. Odlicnu stabilnost za kretanje po gleceru daju
            ovih 10 zuba i nacin na koji su postavljeni. Brza snala za podesavanje duzine cipela, dupla zastita od snega,
            prednja i zadnja plastika nije krta , savitljiva i meksa sto im produzava zivotni vek. Spadaju u kategoriju laksih
            dereza u odnosu na konkurenciju sa tezinom 850 g. Mogu se koristiti na obicne cipele, poludoboke i duboke,
            ne rdjaju, ne skida im se farba",
            'img' => "./public/theme/img/black.jpg",
            'price'=> 16700,
            'category'=> "dereze",
            'available'=> true
        ],
        [
            'id' => 5,
            'title' => "PINGUIN ACTIVENT 55 L",
            'description' => "Poseduje ABS sistem ventilacije, YKK rajsferslusi, HI COR materijal otporan na
            habanje,nove kopce, 2 odvojene pregrade za stvari, u kapi 2 dzepa, bocni ulaz u ranac preko 2 spoljna
            dzepa, pokrivka za kisu, otvor i pregrada za kamel bag, brzo zatezanje na struku, skida se kapa i drzac oko
            struka sa kojim se kombimnuje kao torbica, podesavanje ramenih steznika, mogucnost kacenja satora,
            podloske, uzeta, vrece za spavanje.",
            'img' => "./public/theme/img/pinguin2.jpeg",
            'price'=> 10000,
            'category'=>"ranac",
            'available'=> true
        ],
        [
            'id' => 6,
            'title' => "DEREZE ULTRA TRAIL",
            'description' =>"EzyShoes X-Treme je neklizajuća podloga specijalno dizajnirana za sportiste koji traže
            odlično prianjanje na snegu, ledu ili blatu.Ojačana od hidrofobne kompozitne strukture visoke otpornosti kako
            bi se osigurala optimalna izdržljivost čak i pri ekstremnoj upotrebi na tvrdim površinama kao što je asfalt.
            Nova omča za pričvršćivanje oko skočnog zgloba i preko prednjeg stopala obezbeđuje sigurno držanje za
            EzyShoe. Lagane i efikasne podloge se navlače za nekoliko sekundi i odgovaraju svakoj vrsti obuće.
            MATERIJAL Napravljen je od poliestera i poliuretana",
            'img' => "./public/theme/img/trail.webp",
            'price'=> 3000,
            'category'=>"dereze",
            'available'=> true
        ],
        [
            'id' => 7,
            'title' => "PODLOGA LULLABY",
            'description' => "Podloška Lullaby 3 cm samonaduvavajuća podloška sa anti slip povrsinom od proklizavanja
            namenjena zenama . Sa perforiranim rupama i oblikom mumije. Dimenzija 180x57x3 cm,tezine 810 g, malog
            pakovanja. Gornji materijal Polyester TPY , non slip print, TPU laminated, ventil plastican, rezervni set i futrola
            za podlosku.",
            'img' => "./public/theme/img/lula.jpg",
            'price'=> 6800,
            'category'=> "podloga",
            'available'=> true
        ],
        [
            'id' => 8,
            'title' => "SOFTSHELL ROMUS",
            'description' => "Romus shell jakna odlican izolator toplote, 8000 otpornost na vodu, 5000 disljivost, zastita od
            vetra i kise, ima luftere ispod rukava, 2 dzepa, elsticne ramfle na krajevima rukava i na dnu jakne, kapuljacu u
            kragni, preporuka za jesen, prolece I zimu ispod jakne.",
            'img' => "./public/theme/img/zelena.jpg",
            'price'=> 9200,
            'category'=> "jakne",
            'available'=> true
        ],
        [
            'id' => 9,
            'title' => "PINGVIN KARBONSKI",
            'description' => "Stapovi Pingvin Karbonski 135 cm ultra lagani 3 delni stapovi sa metalnim kopčama. Ne lome
            se lako, Karbon ne dozvoljava pucanje stapa za razliku od aluminijumskih koji su krti . Kontrola dotezanja
            kopče,ručka od EVA pene, smozatežuća gurtna za ruku, 2 krplje za dubok sneg, utabanu stazu, kapica za
            zastita vrha od tvrde podloge. Tezine 235 g ! Namenjen visokogorcima, planinarima, rekreativcima kao i
            onima koji traze kvalitetne stapove.",
            'img' => "./public/theme/img/pin.jpg",
            'price'=> 5200,
            'category'=> "stapovi",
            'available'=> true
        ],
        [
            'id' => 10,
            'title' => "WOLF CAMPER JAGUAR ",
            'description' => "Jaguar je lagana treking patika-cipela diskretnog, klasičnog izgleda. Patika-cipela sa
            vodootpornom i prozračnom membranom održava vaša stopala suvim, toplim i laka je za nošenje. Gornji
            materijal je prozračan, oko stopala ne zagreva previše. Gumeni đon Jaguar patike-cipele je Vibram đon.
            Gumeni đon podržava i rasterećuje stopalo i omogućava potpunu kontrolu hodanja.",
            'img' => "./public/theme/img/wolf.jpg",         
            'price'=> 6000,
            'category'=>"cipele",
            'available'=> true
        ],
        [
            'id' => 11,
            'title' => "OSPREY TEMPEST",
            'description' => " Tempest 40L lagani ranac za višednevne ture. Sa livenim AirScapeTM zadnjim panelom.
            Specifično ženski dizajn sa džepom sa rajsferšlusom na kaišu, zakačke za štapove i sekiricu i pregrada za
            rezervoar. Visoko kvalitetna bluesign®-approved reciklirani high-tenacity nylon sa PFC-free DWR
            premazom.",
            'img' => "./public/theme/img/osprey.webp",
            'price'=> 2800,
            'category'=>"ranac",
            'available'=> false
        ],
        [
            'id' => 12,
            'title' => "ŠTAPOVI- TREKER",
            'description' => "Trostruki štapovi  podesivi 135 cm duzina,rucke kombinacija gume i memorisjke pene ci me se absorbuju udari za zglob i smanju stisak na rucku,aluminijumski.
            • sastave: grip, omča od neoprena, anti šok,,aluminijum 6061.",
            'img' => "./public/theme/img/treker.jpg",
            'price'=> 3400,
            'category'=>"stapovi",
            'available'=> true
        ],
        [
            'id' => 13,
            'title' => "TREKMEST FOLD LOCK",
            'description' => "Fold lock štap napravljen je od Aircraft lima, kombinacija aluminijuma i karbona, ultra lak
            ispod 250 g , vrh pojačan, duzina sklopivog stapa ispod 30 cm, ručka od memorijske pene, sajlom koja vezuje
            donja 2 elementa, 1 kopca, drugi deo je na sigurnosni mehanizam, podesivom narukvicom za zglob.",
            'img' => "./public/theme/img/fold.jpg",
            'price'=> 5000,
            'category'=>"stapovi",
            'available'=> true
        ],
        [
            'id' => 14,
            'title' => "ASOLO DRIFTER",
            'description' =>"Planinarske cipele Asolo zenski Drifter model je najprodavniji model u poslednjih 5 godina a
            kombinaciju materijala cine Kordura u kombinaciji sa Goretex membranom i Vibram gumom je ono sto ovaj
            model izdvaja od svih drugih u kategoriji trekinga. Gumeno ojacanje na prstima i zastita od udaraca u stenu,
            metalne kopce za zatezanje pertli, mali climbing zone na prstima cipela namenjena za razlicite vrste terena
            (kamenjar, makadam, zemlja...) ",
            'img' => "./public/theme/img/planin.jpg",
            'price'=> 17300,
            'category'=>"cipele",
            'available'=> true
        ],
        [
            'id' => 15,
            'title' => "LA SPORTIVA TRANGO",
            'description' =>"Gore-Tex Performance Comfort membrana ucinice da vam cipela dise i bude nepormociva.
            3D Felx System u peti obezbedjuje vam konrolu gazenja po neravnom terenu. Deo oko skocnog zgloba sa
            flexom na kome je la sportiva stavila akcenat kako bi obezbedili da skocni zglob radi i da se stopalo prilagodi
            svim uslovima terena. Samim tim se dobija efekat da nemate cipelu na nozi jer vas ne pritiska na prelazu
            stopala i potkolenice. Impackt brake sistem, Gore-Tex membrana, Tezina 720 g.",
            'img' => "./public/theme/img/orange.jpg",
            'price'=> 20000,
            'category'=>"cipele",
            'available'=> false
        ],
      
        [
            'id' => 16,
            'title' => "TRANGO GUIDE GTX ",
            'description' => "Poseduju  Exklusiv đon sa imapkt brake sistemom u peti i na prstima, takodje climbing zone na prstima cime je olaksano penjanje na vrhove. 3D flex sistemom na zglobu cime je olaksano pokretanje u zglobu pri penjanju i nestvara dodatna pritisak na cevanicu. Zadovoljava sirok spektar potreba jednom recju Univerzalna visokogorska cipela ,kao i za planinarenje, specijalizovane sluzbe GSS",
            'img' => "./public/theme/img/trabgo.jpg",
            'price'=> 28000,
            'category'=>"cipele",
            'available'=> true
        ],
        [
            'id' => 17,
            'title' => "SOFTSHELL ROMA",
            'description' => "Roma shell deblja jakna, zastita od vetra i kise, ima luftere ispod rukava, 2 dzepa, elsticne
            ramfle na krajevima rukava i na dnu jakne, kapuljacu u kragni, preporuka za jesen-prolece eventualno u zimu
            ispod jakne. ",
            'img' => "./public/theme/img/soft.jpg",
            'price'=> 8700,
            'category'=> "jakne",
            'available'=> false
        ],
        [
            'id' => 18,
            'title' => "SOFTSHELL DYNA",
            'description' => "Dyna soft shell lagana jakna 4 way strech-rastegljiva u svim pravcima otporna na vetar, vodu
            8000, disljiva 5000, 2 dzepa, integrisana kapuljaca. Strukirana jakna sa elastinom na rukavima i zatrezanjem
            kapuljace i na dnu jakne. Pogodna za jesen kao prvi sloj i zastita od vetra, vode.",
            'img' => "./public/theme/img/dyna1.jpg",
            'price'=> 8500,
            'category'=>"jakne",
            'available'=> true
        ],
        [
            'id' => 19,
            'title' => "PODLOGA TIGUAN",
            'description' =>"Podloska Tiguan 4 cm ultralaka podlsoka sa neverovatnih 450 g spada u najlaske podloske
            za planinarenje, kampovanje, viskogorstvo. Ima vertikalne kanale koji se smanjuju u donjem delu, dimezije
            podloske su 195 x 55. Dobar izolator od hladnoce i prilagodjava se neravninama. Napravljena od 390T20D
            PES ripstop with TPU coating, plast / plastic, double lock. ",
            'img' => "./public/theme/img/tigu.jpg",
            'price'=> 8700,
            'category'=>"podloga",
            'available'=> true
        ],
    
        [
            'id' => 20,
            'title' => "SOFTSHELL BRENDON",
            'description' =>"soft shell lagana jakna 4 way strech-rastegljiva u svim pravcima otporna na vetar, vodu
            8000, disljiva 5000, 2 dzepa, integrisana kapuljaca. Strukirana jakna sa elastinom na rukavima i zatrezanjem
            kapuljace i na dnu jakne",
            'img' => "./public/theme/img/crna.jpg",
            'price'=> 8500,
            'category'=>"jakne",
            'available'=> true
        ],
        [
            'id' => 21,
            'title' => "PODLOGA PEAK 38",
            'description' => "Podloška Pinguin Peak 38 samonaduvavajuća podloška sa horizontalnim i vertikalnih tunelima unutar podloske. Dimenzija 183x51x3.8 cm,tezine 890 g, gornji materijal Polyester Diamond RipStop, , TPU laminated, ventil plastican,rezervni set i futrola za podlosku.",
            'img' => "./public/theme/img/peak.jpg",
            'price'=> 7100,
            'category'=> "podloga",
            'available'=> true
        ],


    ];

    return $products;
}
   
    function getOneProductById($id) {
        $allProducts = getAllProducts();
        foreach ($allProducts as $singleProduct) {
            if($singleProduct['id'] == $id) {
                return $singleProduct;
            }
        }
        return false;
    }




    function getRelatedProducs($mainProduct) {
        $related = [];
        $products = getAllProducts();
        foreach ($products as  $product) {
            if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
                $related[] = $product;
                if(count($related) >= 3) {
                    break;
                }
            }
        }
        return $related;
    }



    function sortProductBy($products, $sortBy) {
        switch ($sortBy) {
            case ORDER_BY_PRICE_ASC:
                usort($products, function ($item1, $item2) {
                    return $item1['price'] <=> $item2['price'];
                });
                break;
            case ORDER_BY_PRICE_DESC:
                array_multisort(array_column($products, 'price'), SORT_DESC, $products);
                break;
            default:
                break;
        }
        return $products;
    }



    function filteredProducts($products, $term) {
        $filteredProducts = [];
        foreach ($products as $product) {
            if(str_contains($product['title'], $term ) || str_contains($product['category'], $term)) {
                $filteredProducts[] = $product;
            }
        }
        return $filteredProducts;
    }



    function getAvailableProducts() {
        $allProducts = getAllProducts();
        $availabaleProducts = [];
        foreach ($allProducts as $product) {
            if($product['available'] == false) {
                $availabaleProducts[] = $product;
              
            }
        }
        return $availabaleProducts;
    }



    function getPopular() {
        $popular = getAllProducts();
        $popularProducts = [];
        foreach ($popular as $product) {
             { if($product['price'] < 13000)
                $popularProducts[] = $product;
                if(count($popularProducts) >= 3) {
                    break;
                }
            }
        }
        return $popularProducts;
    }



    
function getPrevProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == 0) {
                return $products[count($products) - 1]['id'];
            } else {
                return $products[$key-1]['id'];
            }
        }
    }
}

function getNextProductId($productId) {
    $products = getAvailableProducts();
    foreach ($products as $key => $product) {
        if($product['id'] == $productId) {
            if($key == (count($products) -1)) {
                return $products[0]['id'];
            } else {
                return $products[$key+1]['id'];
            }
        }
    }
}






?>