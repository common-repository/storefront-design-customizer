<?php

if ( ! function_exists( 'sdc_font_preset' ) ) {
  /**
   * SDC Font Selector
   *
   * @since  1.0.0
   */
    function sdc_font_preset(){

        $font_family_array = array(
            'sinope'                    => 'Open Sans',
            'roboto'                    => 'Roboto',
            'sinlat'                    => 'Lato',
            'sinssp'                    => 'Source Sans Pro',
            'sinosw'                    => 'Oswald',
            'sinmon'                    => 'Montserrat',
            'abeubu'                    => 'Abel and Ubuntu',
            'abrcan'                    => 'Abril Fatface and Candal',
            'abrdro'                    => 'Abril Fatface and Droid Sans',
            'abrjos'                    => 'Abril Fatface and Josefin Sans',
            'abrlab'                    => 'Abril Fatface and La Belle Aurore',
            'abrlat'                    => 'Abril Fatface and Lato',
            'abrope'                    => 'Abril Fatface and Open Sans',
            'abrosw'                    => 'Abril Fatface and Oswald',
            'abrrob'                    => 'Abril Fatface and Roboto',
            'abrvol'                    => 'Abril Fatface and Vollkorn',
            'aleope'                    => 'Alegreya and Open Sans',
            'alesou'                    => 'Alegreya and Source Sans Pro',
            'alesaant'                  => 'Alegreya Sans and Antic Slab',
            'alflor'                    => 'Alfa Slab One & Lora',
            'alfgen'                    => 'Alfa Slab One and Gentium Book',
            'aliope'                    => 'Alike Angular and Open Sans',
            'amatit'                    => 'Amaranth and Titillium Web',
            'amaand'                    => 'Amatic SC and Andika',
            'amajos'                    => 'Amatic SC and Josefin Sans',
            'antjur'                    => 'Anton and Jura',
            'aralat'                    => 'Arapey and Lato',
            'aramon'                    => 'Arapey and Montserrat',
            'araope'                    => 'Arapey and Open Sans',
            'arcten'                    => 'Archivo Black and Tenor Sans',
            'asalat'                    => 'Asap and Lato',
            'asaope'                    => 'Asap and Open Sans',
            'asaopc'                    => 'Asap and Open Sans Condensed',
            'asuchi'                    => 'Asul and Chivo',
            'bahlat'                    => 'Bahiana and Lato',
            'bahope'                    => 'Bahiana and Open Sans',
            'bahral'                    => 'Bahiana and Raleway',
            'banope'                    => 'Bangers and Open Sans',
            'bevpon'                    => 'Bevan and Pontano Sans',
            'bitsou'                    => 'Bitter & Source Sans Pro',
            'bitral'                    => 'Bitter and Raleway',
            'breimp'                    => 'Bree Serif and Imprima',
            'brelor'                    => 'Bree Serif and Lora',
            'breope'                    => 'Bree Serif and Open Sans',
            'cabold'                    => 'Cabin and Old Standard TT',
            'canimp'                    => 'Cantata One and Imprima',
            'caralm'                    => 'Cardo and Almendra Display',
            'carjos'                    => 'Cardo and Josefin Sans',
            'carpgo'                    => 'Cardo and Pathway Gothic One',
            'cliebg'                    => 'Clicker Script and EB Garamond',
            'comlat'                    => 'Comfortaa and Lato',
            'comope'                    => 'Comfortaa and Open Sans',
            'creabe'                    => 'Crete Round and AbeeZee',
            'crmrob'                    => 'Crimson Text and Roboto',
            'danebg'                    => 'Dancing Script and EB Garamond',
            'danled'                    => 'Dancing Script and Ledger',
            'didari'                    => 'Didact Gothic and Arimo',
            'dosope'                    => 'Dosis and Open Sans',
            'drocab'                    => 'Droid Sans and Cabin',
            'drfosw'                    => 'Droid Serif and Oswald',
            'eczwos'                    => 'Eczar and Work Sans',
            'exolat'                    => 'Exo 2 and Lato',
            'exolor'                    => 'Exo 2 and Lora',
            'exoope'                    => 'Exo 2 and Open Sans',
            'exoosw'                    => 'Exo 2 and Oswald',
            'exorob'                    => 'Exo 2 and Roboto',
            'exosou'                    => 'Exo 2 and Source Sans Pro',
            'fjaave'                    => 'Fjalla One and Average',
            'fjacan'                    => 'Fjalla One and Cantarell',
            'flaasa'                    => 'Flamenco and Asap',
            'fradid'                    => 'Francois One and Didact Gothic',
            'fralat'                    => 'Francois One and Lato',
            'fraope'                    => 'Francois One and Open Sans',
            'genope'                    => 'Gentium Basic and Open Sans',
            'henope'                    => 'Henny Penny and Open Sans',
            'henlat'                    => 'Henny Penny and Lato',
            'hinope'                    => 'Hind and Open Sans',
            'indlat'                    => 'Indie Flower and Lato',
            'indosw'                    => 'Indie Flower and Oswald',
            'indpop'                    => 'Indie Flower and Poppins',
            'josjos'                    => 'Josefin Slab and Josefin Sans',
            'josplay'                   => 'Josefin Sans and Playfair Display',
            'jobmav'                    => 'Josefin Slab and Maven Pro',
            'jobosw'                    => 'Josefin Slab and Oswald',
            'kreubu'                    => 'Kreon and Ubuntu',
            'istlor'                    => 'Istok Web and Lora',
            'latmer'                    => 'Lato and Merriweather',
            'latlib'                    => 'Lato and Libre Baskerville',
            'libmon'                    => 'Libre Baskerville and Montserrat',
            'libope'                    => 'Libre Baskerville and Open Sans',
            'libubu'                    => 'Libre Baskerville and Ubuntu',
            'liljos'                    => 'Lilita One and Josefin Sans',
            'lillat'                    => 'Lilita One and Lato',
            'lilope'                    => 'Lilita One and Open Sans',
            'lilrob'                    => 'Lilita One and Roboto',
            'lobari'                    => 'Lobster and Arimo',
            'lobcab'                    => 'Lobster and Cabin',
            'lobmul'                    => 'Lobster and Muli',
            'lobvol'                    => 'Lobster and Vollkorn',
            'lorope'                    => 'Lora and Open Sans',
            'lorsou'                    => 'Lora and Source Sans Pro',
            'luslat'                    => 'Lustria and Lato',
            'lovcab'                    => 'Love Ya Like A Sister and Cabin Sketch',
            'lovfra'                    => 'Love Ya Like A Sister and Francois One',
            'lovope'                    => 'Love Ya Like A Sister and Open Sans',
            'lovosw'                    => 'Love Ya Like A Sister and Oswald',
            'medlat'                    => 'Medula One and Lato',
            'merlat'                    => 'Merriweather and Lato',
            'merope'                    => 'Merriweather and Open Sans',
            'merosw'                    => 'Merriweather and Oswald',
            'mersou'                    => 'Merriweather and Source Sans Pro',
            'moncar'                    => 'Montserrat and Cardo',
            'moncri'                    => 'Montserrat and Crimson Text',
            'mondom'                    => 'Montserrat and Domine',
            'monhin'                    => 'Montserrat and Hind',
            'mpnist'                    => 'Montserrat and Istok Web',
            'monneu'                    => 'Montserrat and Neuton',
            'monpla'                    => 'Montserrat and Playfair Display',
            'monpon'                    => 'Montserrat and Pontano Sans',
            'monrob'                    => 'Montserrat and Roboto',
            'mulpla'                    => 'Muli and Playfair Display',
            'nixled'                    => 'Nixie One and Ledger',
            'nixlib'                    => 'Nixie One and Libre Baskerville',
            'nunale'                    => 'Nunito and Alegreya',
            'nunlor'                    => 'Nunito and Lora',
            'nunope'                    => 'Nunito and Open Sans',
            'oldque'                    => 'Old Standard TT and Questrial',
            'opegen'                    => 'Open Sans and Gentium Book Basic',
            'opelat'                    => 'Open Sans and Lato',
            'opelib'                    => 'Open Sans and Libre Baskerville',
            'opelor'                    => 'Open Sans and Lora',
            'opemon'                    => 'Open Sans and Montserrat',
            'openun'                    => 'Open Sans and Nunito',
            'opeosw'                    => 'Open Sans and Oswald',
            'opepla'                    => 'Open Sans and Playfair Display SC',
            'operal'                    => 'Open Sans and Raleway',
            'operob'                    => 'Open Sans and Roboto',
            'opcosw'                    => 'Open Sans Condensed and Oswald',
            'opcope'                    => 'Open Sans Condensed and Open Sans',
            'opcrob'                    => 'Open Sans Condensed and Roboto',
            'oswdro'                    => 'Oswald & Droid Serif',
            'oswdom'                    => 'Oswald and Domine',
            'oswdrod'                   => 'Oswald & Droid Sans',
            'oswmer'                    => 'Oswald and Merriweather',
            'oswmul'                    => 'Oswald and Muli',
            'oswold'                    => 'Oswald and Old Standard TT',
            'oswope'                    => 'Oswald and Open Sans',
            'oswqua'                    => 'Oswald and Quattrocento',
            'ovomul'                    => 'Ovo and Muli',
            'oxysou'                    => 'Oxygen and Source Sans Pro',
            'pacari'                    => 'Pacifico and Arimo',
            'patlor'                    => 'Patua One and Lora',
            'patosw'                    => 'Patua One and Oswald',
            'paydro'                    => 'Paytone One and Droid Sans',
            'phimul'                    => 'Philosopher and Muli',
            'plaali'                    => 'Playfair Display and Alice',
            'placor'                    => 'Playfair Display and Cormorant Garamond',
            'placri'                    => 'Playfair Display and Crimson Text',
            'plafau'                    => 'Playfair Display and Fauna One',
            'plagle'                    => 'Playfair Display and Glegoo',
            'plalat'                    => 'Playfair Display and Lato',
            'planoti'                   => 'Playfair Display and Noticia Text',
            'planot'                    => 'Playfair Display and Noto Serif',
            'plaope'                    => 'Playfair Display and Open Sans',
            'plapsc'                    => 'Playfair Display and Playfair Display SC',
            'plakru'                    => 'Playfair Display and Sree Krushnadevaraya',
            'plavol'                    => 'Playfair Display and Vollkorn',
            'pscdos'                    => 'Playfair Display SC and Dosis',
            'pscgra'                    => 'Playfair Display SC and Gravitas One',
            'pscope'                    => 'Playfair Display SC and Open Sans',
            'pscrob'                    => 'Playfair Display SC and Roboto',
            'poiope'                    => 'Poiret One and Open Sans',
            'poilat'                    => 'Poiret One and Lato',
            'poplat'                    => 'Poppins and Lato',
            'popope'                    => 'Poppins and Open Sans',
            'poposw'                    => 'Poppins and Oswald',
            'popral'                    => 'Poppins and Raleway',
            'poprob'                    => 'Poppins and Roboto',
            'pralat'                    => 'Pragati Narrow and Lato',
            'preope'                    => 'Press Start 2P and Open Sans',
            'preply'                    => 'Press Start 2P and Play',
            'ptscab'                    => 'PT Sans and Cabin',
            'ptsdid'                    => 'PT Sans and Didact Gothic',
            'ptslat'                    => 'PT Sans and Lato',
            'ptsptr'                    => 'PT Sans and PT Serif',
            'ptsrob'                    => 'PT Sans and Roboto',
            'ptrnos'                    => 'PT Serif and Noto Sans',
            'ptrope'                    => 'PT Serif and Open Sans',
            'ptrpts'                    => 'PT Serif and PT Sans',
            'quajud'                    => 'Quando and Judson',
            'qutfan'                    => 'Quattrocento and Fanwood Text',
            'qutqus'                    => 'Quattrocento and Quattrocento Sans',
            'quiebg'                    => 'Quicksand and EB Garamond',
            'raldros'                   => 'Raleway and Droid Sans',
            'raldrof'                   => 'Raleway and Droid Serif',
            'rallat'                    => 'Raleway and Lato',
            'rallob'                    => 'Raleway and Lobster',
            'ralope'                    => 'Raleway and Open Sans',
            'ralosw'                    => 'Raleway and Oswald',
            'ralpop'                    => 'Raleway and Poppins',
            'ralcab'                    => 'Raleway and Cabin',
            'ralmer'                    => 'Raleway and Merriweather',
            'ralrob'                    => 'Raleway and Roboto',
            'rangud'                    => 'Rancho and Gudea',
            'robnun'                    => 'Roboto and Nunito',
            'robnos'                    => 'Roboto and Noto Serif',
            'robope'                    => 'Roboto and Open Sans',
            'rbccar'                    => 'Roboto Condensed and Cabin',
            'roblor'                    => 'Roboto and Lora',
            'rosope'                    => 'Roboto Slab and Open Sans',
            'rosrob'                    => 'Roboto Slab and Roboto',
            'rokdros'                   => 'Rokkitt and Droid Sans',
            'roklat'                    => 'Rokkitt and Lato',
            'rokope'                    => 'Rokkitt and Open Sans',
            'rokosw'                    => 'Rokkitt and Oswald',
            'rokrob'                    => 'Rokkitt and Roboto',
            'rokubu'                    => 'Rokkitt and Ubuntu',
            'rubrmo'                    => 'Rubik and Roboto Mono',
            'rubrob'                    => 'Rubik Mono One and Roboto Condensed',
            'rufsin'                    => 'Rufina and Sintony',
            'sacali'                    => 'Sacramento and Alice',
            'sankam'                    => 'Sansita One and Kameron',
            'sharob'                    => 'Shadows and Roboto',
            'sigope'                    => 'Signika and Open Sans',
            'squall'                    => 'Squada One and Allerta',
            'stalat'                    => 'Stardos Stencil and Lato',
            'staope'                    => 'Stardos Stencil and Open Sans',
            'staral'                    => 'Stardos Stencil and Raleway',
            'stassp'                    => 'Stardos Stencil and Source Sans Pro',
            'spaope'                    => 'Space Mono and Open sans',
            'sparob'                    => 'Space Mono and Roboto',
            'stipon'                    => 'Stint Ultra and Pontano Sans',
            'titlat'                    => 'Titillium Web and Lato',
            'titope'                    => 'Titillium Web and Open Sans',
            'titosw'                    => 'Titillium Web and Oswald',
            'titral'                    => 'Titillium Web and Raleway',
            'titrob'                    => 'Titillium Web and Roboto',
            'ubucab'                    => 'Ubuntu and Cabin',
            'ubudid'                    => 'Ubuntu and Didact Gothic',
            'ubuhin'                    => 'Ubuntu and Hind',
            'ubulat'                    => 'Ubuntu and Lato',
            'ubulor'                    => 'Ubuntu and Lora',
            'uburob'                    => 'Ubuntu and Roboto',
            'ubusou'                    => 'Ubuntu and Source Sans Pro',
            'ultsla'                    => 'Ultra and Slabo 13px',
            'univol'                    => 'Unica One and Vollkorn',
            'uncope'                    => 'Uncial Antiqua and Open Sans',
            'uncosw'                    => 'Uncial Antiqua and Oswald',
            'vidrob'                    => 'Vidaloka and Roboto',
            'volral'                    => 'Vollkorn and Raleway',
            'volexo'                    => 'Vollkorn and Exo 2',
            'walkre'                    => 'Walter Turncoat and Kreon',
            'walmol'                    => 'Walter Turncoat and Molengo',
            'walosw'                    => 'Walter Turncoat and Oswald',
            'walvol'                    => 'Walter Turncoat and Vollkorn',
            'worope'                    => 'Work Sans and Open Sans',
            'yanlat'                    => 'Yanone Kaffeesatz and Lato',
            'yanope'                    => 'Yanone Kaffeesatz and Open Sans',
            'yanosw'                    => 'Yanone Kaffeesatz and Oswald',
            'yanrob'                    => 'Yanone Kaffeesatz and Roboto',
            'yescri'                    => 'Yeseva One and Crimson Text',
            'yesjos'                    => 'Yeseva One and Josefin Sans',
            'yeslor'                    => 'Yeseva One and Lora',
            'yesope'                    => 'Yeseva One and Open Sans',
            'yesphi'                    => 'Yeseva One and Philosopher',
    );

        return $font_family_array;
    }
}



if ( ! function_exists( 'sdc_font_preset_title' ) ) {
  /**
   * SDC Font Selector Title
   *
   * @since  1.0.0
   */
    function sdc_font_preset_title($font){
        if($font == 'sinmon'){ return "'Montserrat', sans-serif";}
        if($font == 'sinlat'){ return "'Lato', sans-serif";}
        if($font == 'sinosw'){ return "'Oswald', sans-serif";}
        if($font == 'sinope'){ return "'Open Sans', sans-serif";}
        if($font == 'abeubu'){ return "'Abel', sans-serif";}
        if($font == 'abrcan'){ return "'Abril Fatface', cursive";}
        if($font == 'abrdro'){ return "'Abril Fatface', cursive";}
        if($font == 'abrjos'){ return "'Abril Fatface', cursive";}
        if($font == 'abrlab'){ return "'Abril Fatface', cursive";}
        if($font == 'abrlat'){ return "'Abril Fatface', cursive";}
        if($font == 'abrope'){ return "'Abril Fatface', cursive";}
        if($font == 'abrosw'){ return "'Abril Fatface', cursive";}
        if($font == 'abrrob'){ return "'Abril Fatface', cursive";}
        if($font == 'abrvol'){ return "'Abril Fatface', cursive";}
        if($font == 'aleope'){ return "'Alegreya', serif";}
        if($font == 'alesou'){ return "'Alegreya', serif";}
        if($font == 'alesaant'){ return "'Alegreya Sans', sans-serif";}
        if($font == 'alflor'){ return "'Alfa Slab One', cursive";}
        if($font == 'alfgen'){ return "'Alfa Slab One', cursive";}
        if($font == 'aliope'){ return "'Alike Angular', serif";}
        if($font == 'amatit'){ return "'Amaranth', sans-serif";}
        if($font == 'amaand'){ return "'Amatic SC', cursive";}
        if($font == 'amajos'){ return "'Amatic SC', cursive";}
        if($font == 'antjur'){ return "'Anton', sans-serif";}
        if($font == 'aralat'){ return "'Arapey', serif";}
        if($font == 'aramon'){ return "'Arapey', serif";}
        if($font == 'araope'){ return "'Arapey', serif";}
        if($font == 'arcten'){ return "'Archivo Black', sans-serif";}
        if($font == 'asalat'){ return "'Asap', sans-serif";}
        if($font == 'asaope'){ return "'Asap', sans-serif";}
        if($font == 'asaopc'){ return "'Asap', sans-serif";}
        if($font == 'asuchi'){ return "'Asul', sans-serif";}
        if($font == 'bahlat'){ return "'Bahiana', cursive";}
        if($font == 'bahope'){ return "'Bahiana', cursive";}
        if($font == 'bahral'){ return "'Bahiana', cursive";}
        if($font == 'banope'){ return "'Bangers', cursive";}
        if($font == 'bevpon'){ return "'Bevan', cursive";}
        if($font == 'bitsou'){ return "'Bitter', serif";}
        if($font == 'bitral'){ return "'Bitter', serif";}
        if($font == 'breimp'){ return "'Bree Serif', serif";}
        if($font == 'brelor'){ return "'Bree Serif', serif";}
        if($font == 'breope'){ return "'Bree Serif', serif";}
        if($font == 'canimp'){ return "'Cantata One', serif";}
        if($font == 'caralm'){ return "'Cardo', serif";}
        if($font == 'carjos'){ return "'Cardo', serif";}
        if($font == 'carpgo'){ return "'Cardo', serif";}
        if($font == 'cliebg'){ return "'Clicker Script', cursive";}
        if($font == 'comlat'){ return "'Comfortaa', cursive";}
        if($font == 'comope'){ return "'Comfortaa', cursive";}
        if($font == 'creabe'){ return "'Crete Round', serif";}
        if($font == 'crmrob'){ return "'Crimson Text', serif";}
        if($font == 'danebg'){ return "'Dancing Script', cursive";}
        if($font == 'danled'){ return "'Dancing Script', cursive";}
        if($font == 'didari'){ return "'Didact Gothic', sans-serif";}
        if($font == 'dosope'){ return "'Dosis', sans-serif";}
        if($font == 'drocab'){ return "'Droid Sans', sans-serif";}
        if($font == 'drfosw'){ return "'Droid Serif', serif";}
        if($font == 'eczwos'){ return "'Eczar', serif";}
        if($font == 'exolat'){ return "'Exo 2', sans-serif";}
        if($font == 'exolor'){ return "'Exo 2', sans-serif";}
        if($font == 'exoope'){ return "'Exo 2', sans-serif";}
        if($font == 'exoosw'){ return "'Exo 2', sans-serif";}
        if($font == 'exorob'){ return "'Exo 2', sans-serif";}
        if($font == 'exosou'){ return "'Exo 2', sans-serif";}
        if($font == 'fjaave'){ return "'Fjalla One', sans-serif";}
        if($font == 'fjacan'){ return "'Fjalla One', sans-serif";}
        if($font == 'flaasa'){ return "'Flamenco', cursive";}
        if($font == 'fradid'){ return "'Francois One', sans-serif"; }
        if($font == 'fralat'){ return "'Francois One', sans-serif"; }
        if($font == 'fraope'){ return "'Francois One', sans-serif"; }
        if($font == 'genope'){ return "'Gentium Basic', serif"; }
        if($font == 'henope'){ return "'Henny Penny', cursive"; }
        if($font == 'henlat'){ return "'Henny Penny', cursive"; }
        if($font == 'hinope'){ return "'Hind', sans-serif"; }
        if($font == 'indlat'){ return "'Indie Flower', cursive"; }
        if($font == 'indosw'){ return "'Indie Flower', cursive"; }
        if($font == 'indpop'){ return "'Indie Flower', cursive"; }
        if($font == 'josjos'){ return "'Josefin Slab', serif"; }
        if($font == 'josplay'){ return "'Josefin Sans', sans-serif"; }
        if($font == 'jobmav'){ return "'Josefin Slab', serif"; }
        if($font == 'jobosw'){ return "'Josefin Slab', serif"; }
        if($font == 'kreubu'){ return "'Kreon', serif"; }
        if($font == 'cabold'){ return "'Cabin', sans-serif";}
        if($font == 'istlor'){ return "'Istok Web', sans-serif";}
        if($font == 'latmer'){ return "'Lato', sans-serif";}
        if($font == 'latlib'){ return "'Lato', sans-serif";}
        if($font == 'libmon'){ return "'Libre Baskerville', serif";}
        if($font == 'libope'){ return "'Libre Baskerville', serif";}
        if($font == 'libubu'){ return "'Libre Baskerville', serif";}
        if($font == 'liljos'){ return "'Lilita One', cursive";}
        if($font == 'lillat'){ return "'Lilita One', cursive";}
        if($font == 'lilope'){ return "'Lilita One', cursive";}
        if($font == 'lilrob'){ return "'Lilita One', cursive";}
        if($font == 'lobari'){ return "'Lobster', cursive";}
        if($font == 'lobcab'){ return "'Lobster', cursive";}
        if($font == 'lobmul'){ return "'Lobster', cursive";}
        if($font == 'lobvol'){ return "'Lobster', cursive";}
        if($font == 'lorope'){ return "'Lora', serif";}
        if($font == 'lorsou'){ return "'Lora', serif";}
        if($font == 'luslat'){ return "'Lustria', serif";}
        if($font == 'lovcab'){ return "'Love Ya Like A Sister', cursive";}
        if($font == 'lovfra'){ return "'Love Ya Like A Sister', cursive";}
        if($font == 'lovope'){ return "'Love Ya Like A Sister', cursive";}
        if($font == 'lovosw'){ return "'Love Ya Like A Sister', cursive";}
        if($font == 'medlat'){ return "'Medula One', cursive";}
        if($font == 'merlat'){ return "'Merriweather', serif";}
        if($font == 'merope'){ return "'Merriweather', serif";}
        if($font == 'merosw'){ return "'Merriweather', serif";}
        if($font == 'mersou'){ return "'Merriweather', serif";}
        if($font == 'moncar'){ return "'Montserrat', sans-serif";}
        if($font == 'moncri'){ return "'Montserrat', sans-serif";}
        if($font == 'mondom'){ return "'Montserrat', sans-serif";}
        if($font == 'monhin'){ return "'Montserrat', sans-serif";}
        if($font == 'monist'){ return "'Montserrat', sans-serif";}
        if($font == 'monneu'){ return "'Montserrat', sans-serif";}
        if($font == 'monpla'){ return "'Montserrat', sans-serif";}
        if($font == 'monpon'){ return "'Montserrat', sans-serif";}
        if($font == 'monrob'){ return "'Montserrat', sans-serif";}
        if($font == 'mulpla'){ return "'Muli', sans-serif";}
        if($font == 'nixled'){ return "'Nixie One', cursive";}
        if($font == 'nixlib'){ return "'Nixie One', cursive";}
        if($font == 'nunale'){ return "'Nunito', sans-serif";}
        if($font == 'nunlor'){ return "'Nunito', sans-serif";}
        if($font == 'nunope'){ return "'Nunito', sans-serif";}
        if($font == 'oldque'){ return "'Old Standard TT', serif";}
        if($font == 'opegen'){ return "'Open Sans', sans-serif";}
        if($font == 'opelat'){ return "'Open Sans', sans-serif";}
        if($font == 'opelib'){ return "'Open Sans', sans-serif";}
        if($font == 'opelor'){ return "'Open Sans', sans-serif";}
        if($font == 'openun'){ return "'Open Sans', sans-serif";}
        if($font == 'opeosw'){ return "'Open Sans', sans-serif";}
        if($font == 'opepla'){ return "'Open Sans', sans-serif";}
        if($font == 'opemon'){ return "'Open Sans', sans-serif";}
        if($font == 'operal'){ return "'Open Sans', sans-serif";}
        if($font == 'operob'){ return "'Open Sans', sans-serif";}
        if($font == 'opcosw'){ return "'Open Sans Condensed', sans-serif";}
        if($font == 'opcope'){ return "'Open Sans Condensed', sans-serif";}
        if($font == 'opcrob'){ return "'Open Sans Condensed', sans-serif";}
        if($font == 'oswdro'){ return "'Oswald', sans-serif";}
        if($font == 'oswdom'){ return "'Oswald', sans-serif";}
        if($font == 'oswdrod'){ return "'Oswald', sans-serif";}
        if($font == 'oswmer'){ return "'Oswald', sans-serif";}
        if($font == 'oswmul'){ return "'Oswald', sans-serif";}
        if($font == 'oswold'){ return "'Oswald', sans-serif";}
        if($font == 'oswope'){ return "'Oswald', sans-serif";}
        if($font == 'oswqua'){ return "'Oswald', sans-serif";}
        if($font == 'ovomul'){ return "'Ovo', serif";}
        if($font == 'oxysou'){ return "'Oxygen', sans-serif";}
        if($font == 'pacari'){ return "'Pacifico', cursive";}
        if($font == 'patlor'){ return "'Patua One', cursive";}
        if($font == 'patosw'){ return "'Patua One', cursive";}
        if($font == 'paydro'){ return "'Paytone One', sans-serif";}
        if($font == 'phimul'){ return "'Philosopher', sans-serif";}
        if($font == 'plaali'){ return "'Playfair Display', serif";}
        if($font == 'placor'){ return "'Playfair Display', serif";}
        if($font == 'placri'){ return "'Playfair Display', serif";}
        if($font == 'plafau'){ return "'Playfair Display', serif";}
        if($font == 'plagle'){ return "'Playfair Display', serif";}
        if($font == 'plalat'){ return "'Playfair Display', serif";}
        if($font == 'planoti'){ return "'Playfair Display', serif";}
        if($font == 'planot'){ return "'Playfair Display', serif";}
        if($font == 'plaope'){ return "'Playfair Display', serif";}
        if($font == 'plapsc'){ return "'Playfair Display', serif";}
        if($font == 'plakru'){ return "'Playfair Display', serif";}
        if($font == 'plavol'){ return "'Playfair Display', serif";}
        if($font == 'pscdos'){ return "'Playfair Display SC', serif";}
        if($font == 'pscgra'){ return "'Playfair Display SC', serif";}
        if($font == 'pscope'){ return "'Playfair Display SC', serif";}
        if($font == 'pscrob'){ return "'Playfair Display SC', serif";}
        if($font == 'poiope'){ return "'Poiret One', cursive";}
        if($font == 'poilat'){ return "'Poiret One', cursive";}
        if($font == 'poplat'){ return "'Poppins', sans-serif"; }
        if($font == 'popope'){ return "'Poppins', sans-serif"; }
        if($font == 'poposw'){ return "'Poppins', sans-serif"; }
        if($font == 'popral'){ return "'Poppins', sans-serif"; }
        if($font == 'poprob'){ return "'Poppins', sans-serif"; }
        if($font == 'pralat'){ return "'Pragati Narrow', sans-serif"; }
        if($font == 'preope'){ return "'Press Start 2P', cursive";}
        if($font == 'preply'){ return "'Press Start 2P', cursive";}
        if($font == 'ptscab'){ return "'PT Sans', sans-serif";}
        if($font == 'ptsdid'){ return "'PT Sans', sans-serif";}
        if($font == 'ptslat'){ return "'PT Sans', sans-serif";}
        if($font == 'ptsptr'){ return "'PT Sans', sans-serif";}
        if($font == 'ptsrob'){ return "'PT Sans', sans-serif";}
        if($font == 'ptrnos'){ return "'PT Serif', serif";}
        if($font == 'ptrope'){ return "'PT Serif', serif";}
        if($font == 'ptrpts'){ return "'PT Serif', serif";}
        if($font == 'quajud'){ return "'Quando', serif";}
        if($font == 'qutfan'){ return "'Quattrocento', serif";}
        if($font == 'qutqus'){ return "'Quattrocento', serif";}
        if($font == 'quiebg'){ return "'Quicksand', sans-serif";}
        if($font == 'raldros'){ return "'Raleway', sans-serif";}
        if($font == 'raldrof'){ return "'Raleway', sans-serif";}
        if($font == 'rallat'){ return "'Raleway', sans-serif";}
        if($font == 'rallob'){ return "'Raleway', sans-serif";}
        if($font == 'ralope'){ return "'Raleway', sans-serif";}
        if($font == 'ralosw'){ return "'Raleway', sans-serif";}
        if($font == 'ralpop'){ return "'Raleway', sans-serif";}
        if($font == 'ralcab'){ return "'Raleway', sans-serif";}
        if($font == 'ralmer'){ return "'Raleway', sans-serif";}
        if($font == 'ralrob'){ return "'Raleway', sans-serif";}
        if($font == 'rangud'){ return "'Rancho', cursive";}
        if($font == 'roboto'){ return "'Roboto', sans-serif";}
        if($font == 'robnun'){ return "'Roboto', sans-serif";}
        if($font == 'robnos'){ return "'Roboto', sans-serif";}
        if($font == 'robope'){ return "'Roboto', sans-serif";}
        if($font == 'rbccar'){ return "'Roboto Condensed', sans-serif";}
        if($font == 'roblor'){ return "'Roboto', sans-serif";}
        if($font == 'rosope'){ return "'Roboto Slab', serif";}
        if($font == 'rosrob'){ return "'Roboto Slab', serif";}
        if($font == 'rokdros'){ return "'Rokkitt', serif";}
        if($font == 'roklat'){ return "'Rokkitt', serif";}
        if($font == 'rokope'){ return "'Rokkitt', serif";}
        if($font == 'rokosw'){ return "'Rokkitt', serif";}
        if($font == 'rokrob'){ return "'Rokkitt', serif";}
        if($font == 'rokubu'){ return "'Rokkitt', serif";}
        if($font == 'rubrmo'){ return "'Rubik', sans-serif";}
        if($font == 'rubrob'){ return "'Rubik Mono One', sans-serif";}
        if($font == 'rufsin'){ return "'Rufina', serif";}
        if($font == 'sacali'){ return "'Sacramento', cursive";}
        if($font == 'sankam'){ return "'Sansita One', cursive";}
        if($font == 'sharob'){ return "'Shadows Into Light', cursive";}
        if($font == 'sigope'){ return "'Signika', sans-serif";}
        if($font == 'sinssp'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'squall'){ return "'Squada One', cursive";}
        if($font == 'stalat'){ return "'Stardos Stencil', cursive";}
        if($font == 'staope'){ return "'Stardos Stencil', cursive";}
        if($font == 'staral'){ return "'Stardos Stencil', cursive";}
        if($font == 'stassp'){ return "'Stardos Stencil', cursive";}
        if($font == 'spaope'){ return "'Space Mono', monospace";}
        if($font == 'sparob'){ return "'Space Mono', monospace";}
        if($font == 'stipon'){ return "'Stint Ultra Expanded', cursive";}
        if($font == 'titlat'){ return "'Titillium Web', sans-serif";}
        if($font == 'titope'){ return "'Titillium Web', sans-serif";}
        if($font == 'titosw'){ return "'Titillium Web', sans-serif";}
        if($font == 'titral'){ return "'Titillium Web', sans-serif";}
        if($font == 'titrob'){ return "'Titillium Web', sans-serif";}
        if($font == 'ubucab'){ return "'Ubuntu', sans-serif";}
        if($font == 'ubudid'){ return "'Ubuntu', sans-serif";}
        if($font == 'ubuhin'){ return "'Ubuntu', sans-serif";}
        if($font == 'ubulat'){ return "'Ubuntu', sans-serif";}
        if($font == 'ubulor'){ return "'Ubuntu', sans-serif";}
        if($font == 'uburob'){ return "'Ubuntu', sans-serif";}
        if($font == 'ubusou'){ return "'Ubuntu', sans-serif";}
        if($font == 'ultsla'){ return "'Ultra', serif";}
        if($font == 'univol'){ return "'Unica One', cursive";}
        if($font == 'uncope'){ return "'Uncial Antiqua', cursive";}
        if($font == 'uncosw'){ return "'Uncial Antiqua', cursive";}
        if($font == 'vidrob'){ return "'Vidaloka', serif";}
        if($font == 'volral'){ return "'Vollkorn', serif";}
        if($font == 'volexo'){ return "'Vollkorn', serif";}
        if($font == 'walkre'){ return "'Walter Turncoat', cursive";}
        if($font == 'walmol'){ return "'Walter Turncoat', cursive";}
        if($font == 'walosw'){ return "'Walter Turncoat', cursive";}
        if($font == 'walvol'){ return "'Walter Turncoat', cursive";}
        if($font == 'worope'){ return "'Work Sans', sans-serif";}
        if($font == 'yanlat'){ return "'Yanone Kaffeesatz', sans-serif";}
        if($font == 'yanope'){ return "'Yanone Kaffeesatz', sans-serif";}
        if($font == 'yanosw'){ return "'Yanone Kaffeesatz', sans-serif";}
        if($font == 'yanrob'){ return "'Yanone Kaffeesatz', sans-serif";}
        if($font == 'yescri'){ return "'Yeseva One', cursive";}
        if($font == 'yesjos'){ return "'Yeseva One', cursive";}
        if($font == 'yeslor'){ return "'Yeseva One', cursive";}
        if($font == 'yesope'){ return "'Yeseva One', cursive";}
        if($font == 'yesphi'){ return "'Yeseva One', cursive";}
    }
}



if ( ! function_exists( 'sdc_font_preset_body' ) ) {
  /**
   * SDC Font Selector Body
   *
   * @since  1.0.0
   */
    function sdc_font_preset_body($font){
        if($font == 'sinmon'){ return "'Montserrat', sans-serif";}
        if($font == 'sinosw'){ return "'Oswald', sans-serif";}
        if($font == 'sinlat'){ return "'Lato', sans-serif";}
        if($font == 'sinope'){ return "'Open Sans', sans-serif";}
        if($font == 'abeubu'){ return "'Ubuntu', sans-serif";}
        if($font == 'abrcan'){ return "'Candal', sans-serif";}
        if($font == 'abrdro'){ return "'Droid Sans', sans-serif";}
        if($font == 'abrjos'){ return "'Josefin Sans', sans-serif";}
        if($font == 'abrlab'){ return "'La Belle Aurore', cursive";}
        if($font == 'abrlat'){ return "'Lato', sans-serif";}
        if($font == 'abrope'){ return "'Open Sans', sans-serif";}
        if($font == 'abrosw'){ return "'Oswald', sans-serif";}
        if($font == 'abrrob'){ return "'Roboto', sans-serif";}
        if($font == 'abrvol'){ return "'Vollkorn', serif";}
        if($font == 'aleope'){ return "'Open Sans', sans-serif";}
        if($font == 'alesou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'alesaant'){ return "'Antic Slab', serif";}
        if($font == 'alflor'){ return "'Lora', serif";}
        if($font == 'alfgen'){ return "'Gentium Book Basic', serif";}
        if($font == 'aliope'){ return "'Open Sans', sans-serif";}
        if($font == 'amatit'){ return "'Titillium Web', sans-serif";}
        if($font == 'amaand'){ return "'Andika', sans-serif";}
        if($font == 'amajos'){ return "'Josefin Sans', sans-serif";}
        if($font == 'antjur'){ return "'Jura', sans-serif";}
        if($font == 'aralat'){ return "'Lato', sans-serif";}
        if($font == 'aramon'){ return "'Montserrat', sans-serif";}
        if($font == 'araope'){ return "'Open Sans', sans-serif";}
        if($font == 'arcten'){ return "'Tenor Sans', sans-serif";}
        if($font == 'asalat'){ return "'Lato', sans-serif";}
        if($font == 'asaope'){ return "'Open Sans', sans-serif";}
        if($font == 'asaopc'){ return "'Open Sans Condensed', sans-serif";}
        if($font == 'asuchi'){ return "'Chivo', sans-serif";}
        if($font == 'bahlat'){ return "'Lato', sans-serif";}
        if($font == 'bahope'){ return "'Open Sans', sans-serif";}
        if($font == 'bahral'){ return "'Raleway', sans-serif";}
        if($font == 'banope'){ return "'Open Sans', sans-serif";}
        if($font == 'bevpon'){ return "'Pontano Sans', sans-serif";}
        if($font == 'bitsou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'bitral'){ return "'Raleway', sans-serif";}
        if($font == 'breimp'){ return "'Imprima', sans-serif";}
        if($font == 'brelor'){ return "'Lora', serif";}
        if($font == 'breope'){ return "'Open Sans', sans-serif";}
        if($font == 'canimp'){ return "'Imprima', sans-serif";}
        if($font == 'caralm'){ return "'Almendra Display', cursive";}
        if($font == 'carjos'){ return "'Josefin Sans', sans-serif";}
        if($font == 'carpgo'){ return "'Pathway Gothic One', sans-serif";}
        if($font == 'cliebg'){ return "'EB Garamond', serif";}
        if($font == 'comlat'){ return "'Lato', sans-serif";}
        if($font == 'comope'){ return "'Open Sans', sans-serif";}
        if($font == 'creabe'){ return "'ABeeZee', sans-serif";}
        if($font == 'crmrob'){ return "'Roboto', sans-serif";}
        if($font == 'danebg'){ return "'EB Garamond', serif";}
        if($font == 'danled'){ return "'Ledger', serif";}
        if($font == 'didari'){ return "'Arimo', sans-serif";}
        if($font == 'dosope'){ return "'Open Sans', sans-serif";}
        if($font == 'drocab'){ return "'Cabin', sans-serif";}
        if($font == 'drfosw'){ return "'Oswald', sans-serif";}
        if($font == 'eczwos'){ return "'Work Sans', sans-serif";}
        if($font == 'exolat'){ return "'Lato', sans-serif"; }
        if($font == 'exolor'){ return "'Lora', serif";}
        if($font == 'exoope'){ return "'Open Sans', sans-serif";}
        if($font == 'exoosw'){ return "'Oswald', sans-serif";}
        if($font == 'exorob'){ return "'Roboto', sans-serif";}
        if($font == 'exosou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'fjaave'){ return "'Average', serif";}
        if($font == 'fjacan'){ return "'Cantarell', sans-serif"; }
        if($font == 'flaasa'){ return "'Asap', sans-serif";}
        if($font == 'fradid'){ return "'Didact Gothic', sans-serif"; }
        if($font == 'fralat'){ return "'Lato', sans-serif"; }
        if($font == 'fraope'){ return "'Open Sans', sans-serif"; }
        if($font == 'genope'){ return "'Open Sans', sans-serif";}
        if($font == 'henope'){ return "'Open Sans', sans-serif";}
        if($font == 'henlat'){ return "'Lato', sans-serif";}
        if($font == 'hinope'){ return "'Open Sans', sans-serif"; }
        if($font == 'indlat'){ return "'Lato', sans-serif";}
        if($font == 'indosw'){ return "'Oswald', sans-serif";}
        if($font == 'indpop'){ return "'Poppins', sans-serif"; }
        if($font == 'josjos'){ return "'Josefin Sans', sans-serif"; }
        if($font == 'josplay'){ return "'Playfair Display', serif";}
        if($font == 'jobmav'){ return "'Maven Pro', sans-serif"; }
        if($font == 'jobosw'){ return "'Oswald', sans-serif";}
        if($font == 'kreubu'){ return "'Ubuntu', sans-serif"; }
        if($font == 'cabold'){ return "'Old Standard TT', serif";}
        if($font == 'istlor'){ return "'Lora', serif";}
        if($font == 'latmer'){ return "'Merriweather', serif";}
        if($font == 'latlib'){ return "'Libre Baskerville', serif";}
        if($font == 'libmon'){ return "'Montserrat', sans-serif";}
        if($font == 'libope'){ return "'Open Sans', sans-serif";}
        if($font == 'libubu'){ return "'Ubuntu', sans-serif"; }
        if($font == 'liljos'){ return "'Josefin Sans', sans-serif"; }
        if($font == 'lillat'){ return "'Lato', sans-serif";}
        if($font == 'lilope'){ return "'Open Sans', sans-serif"; }
        if($font == 'lilrob'){ return "'Roboto', sans-serif";}
        if($font == 'lobari'){ return "'Arimo', sans-serif";}
        if($font == 'lobcab'){ return "'Cabin', sans-serif";}
        if($font == 'lobmul'){ return "'Muli', sans-serif";}
        if($font == 'lobvol'){ return "'Vollkorn', serif";}
        if($font == 'lorope'){ return "'Open Sans', sans-serif";}
        if($font == 'lorsou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'luslat'){ return "'Lato', sans-serif";}
        if($font == 'lovcab'){ return "'Cabin Sketch', cursive";}
        if($font == 'lovfra'){ return "'Francois One', sans-serif";}
        if($font == 'lovope'){ return "'Open Sans', sans-serif";}
        if($font == 'lovosw'){ return "'Oswald', sans-serif";}
        if($font == 'medlat'){ return "'Lato', sans-serif";}
        if($font == 'merlat'){ return "'Lato', sans-serif";}
        if($font == 'merope'){ return "'Open Sans', sans-serif";}
        if($font == 'merosw'){ return "'Oswald', sans-serif";}
        if($font == 'mersou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'moncar'){ return "'Cardo', serif";}
        if($font == 'moncri'){ return "'Crimson Text', serif";}
        if($font == 'mondom'){ return "'Domine', serif";}
        if($font == 'monhin'){ return "'Hind', sans-serif"; }
        if($font == 'monist'){ return "'Istok Web', sans-serif";}
        if($font == 'monneu'){ return "'Neuton', serif";}
        if($font == 'monpla'){ return "'Playfair Display', serif";}
        if($font == 'monpon'){ return "'Pontano Sans', sans-serif";}
        if($font == 'monrob'){ return "'Roboto', sans-serif";}
        if($font == 'mulpla'){ return "'Playfair Display', serif";}
        if($font == 'nixled'){ return "'Ledger', serif";}
        if($font == 'nixlib'){ return "'Libre Baskerville', serif";}
        if($font == 'nunale'){ return "'Alegreya', serif";}
        if($font == 'nunlor'){ return "'Lora', serif";}
        if($font == 'nunope'){ return "'Open Sans', sans-serif";}
        if($font == 'oldque'){ return "'Questrial', sans-serif";}
        if($font == 'opegen'){ return "'Gentium Book Basic', serif";}
        if($font == 'opelat'){ return "'Lato', sans-serif"; }
        if($font == 'opelib'){ return "'Libre Baskerville', serif";}
        if($font == 'opelor'){ return "'Lora', serif";}
        if($font == 'opemon'){ return "'Montserrat', sans-serif";}
        if($font == 'openun'){ return "'Nunito', sans-serif";}
        if($font == 'opeosw'){ return "'Oswald', sans-serif";}
        if($font == 'opepla'){ return "'Playfair Display', serif";}
        if($font == 'operal'){ return "'Raleway', sans-serif";}
        if($font == 'operob'){ return "'Roboto', sans-serif";}
        if($font == 'opcosw'){ return "'Oswald', sans-serif";}
        if($font == 'opcope'){ return "'Open Sans', sans-serif";}
        if($font == 'opcrob'){ return "'Roboto', sans-serif";}
        if($font == 'oswdro'){ return "'Droid Serif', serif";}
        if($font == 'oswdom'){ return "'Domine', serif";}
        if($font == 'oswdrod'){ return "'Droid Sans', sans-serif";}
        if($font == 'oswmer'){ return "'Merriweather', serif";}
        if($font == 'oswmul'){ return "'Muli', sans-serif";}
        if($font == 'oswold'){ return "'Old Standard TT', serif";}
        if($font == 'oswope'){ return "'Open Sans', sans-serif"; }
        if($font == 'oswqua'){ return "'Quattrocento', serif";}
        if($font == 'ovomul'){ return "'Muli', sans-serif";}
        if($font == 'oxysou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'pacari'){ return "'Arimo', sans-serif";}
        if($font == 'patlor'){ return "'Lora', serif";}
        if($font == 'patosw'){ return "'Oswald', sans-serif";}
        if($font == 'paydro'){ return "'Droid Sans', sans-serif";}
        if($font == 'phimul'){ return "'Muli', sans-serif";}
        if($font == 'plaali'){ return "'Alice', serif";}
        if($font == 'placor'){ return "'Cormorant Garamond', serif";}
        if($font == 'placri'){ return "'Crimson Text', serif";}
        if($font == 'plafau'){ return "'Fauna One', serif";}
        if($font == 'plagle'){ return "'Glegoo', serif";}
        if($font == 'plalat'){ return "'Lato', sans-serif";}
        if($font == 'planoti'){ return "'Noticia Text', serif";}
        if($font == 'planot'){ return "'Noto Serif', serif";}
        if($font == 'plaope'){ return "'Open Sans', sans-serif"; }
        if($font == 'plapsc'){ return "'Playfair Display SC', serif"; }
        if($font == 'plakru'){ return "'Sree Krushnadevaraya', serif";}
        if($font == 'plavol'){ return "'Vollkorn', serif";}
        if($font == 'pscdos'){ return "'Dosis', sans-serif";}
        if($font == 'pscgra'){ return "'Gravitas One', cursive";}
        if($font == 'pscope'){ return "'Open Sans', sans-serif";}
        if($font == 'pscrob'){ return "'Roboto', sans-serif";}
        if($font == 'poiope'){ return "'Open Sans', sans-serif";}
        if($font == 'poilat'){ return "'Lato', sans-serif";}
        if($font == 'poplat'){ return "'Lato', sans-serif";}
        if($font == 'popope'){ return "'Open Sans', sans-serif"; }
        if($font == 'poposw'){ return "'Oswald', sans-serif";}
        if($font == 'popral'){ return "'Raleway', sans-serif";}
        if($font == 'poprob'){ return "'Roboto', sans-serif";}
        if($font == 'pralat'){ return "'Lato', sans-serif";}
        if($font == 'preope'){ return "'Open Sans', sans-serif";}
        if($font == 'preply'){ return "'Play', sans-serif";}
        if($font == 'ptscab'){ return "'Cabin', sans-serif";}
        if($font == 'ptsdid'){ return "'Didact Gothic', sans-serif";}
        if($font == 'ptslat'){ return "'Lato', sans-serif";}
        if($font == 'ptsptr'){ return "'PT Serif', serif";}
        if($font == 'ptsrob'){ return "'Roboto', sans-serif";}
        if($font == 'ptrnos'){ return "'Noto Sans', sans-serif";}
        if($font == 'ptrope'){ return "'Open Sans', sans-serif";}
        if($font == 'ptrpts'){ return "'PT Sans', sans-serif";}
        if($font == 'quajud'){ return "'Judson', serif";}
        if($font == 'qutfan'){ return "'Fanwood Text', serif";}
        if($font == 'qutqus'){ return "'Quattrocento Sans', sans-serif";}
        if($font == 'quiebg'){ return "'EB Garamond', serif";}
        if($font == 'raldros'){ return "'Droid Sans', sans-serif";}
        if($font == 'raldrof'){ return "'Droid Serif', serif";}
        if($font == 'rallat'){ return "'Lato', sans-serif";}
        if($font == 'rallob'){ return "'Lobster', cursive";}
        if($font == 'ralope'){ return "'Open Sans', sans-serif";}
        if($font == 'ralosw'){ return "'Oswald', sans-serif";}
        if($font == 'ralcab'){ return "'Cabin', sans-serif";}
        if($font == 'ralmer'){ return "'Merriweather', serif";}
        if($font == 'ralpop'){ return "'Poppins', sans-serif"; }
        if($font == 'ralrob'){ return "'Roboto', sans-serif";}
        if($font == 'rangud'){ return "'Gudea', sans-serif";}
        if($font == 'roboto'){ return "'Roboto', sans-serif";}
        if($font == 'robnun'){ return "'Nunito', sans-serif";}
        if($font == 'robnos'){ return "'Noto Serif', serif";}
        if($font == 'robope'){ return "'Open Sans', sans-serif";}
        if($font == 'rbccar'){ return "'Cabin', sans-serif";}
        if($font == 'roblor'){ return "'Lora', serif";}
        if($font == 'rosope'){ return "'Open Sans', sans-serif";}
        if($font == 'rosrob'){ return "'Roboto', sans-serif";}
        if($font == 'rokdros'){ return "'Droid Sans', sans-serif";}
        if($font == 'roklat'){ return "'Lato', sans-serif";}
        if($font == 'rokope'){ return "'Open Sans', sans-serif";}
        if($font == 'rokosw'){ return "'Oswald', sans-serif";}
        if($font == 'rokrob'){ return "'Roboto', sans-serif";}
        if($font == 'rokubu'){ return "'Ubuntu', sans-serif";}
        if($font == 'rubrmo'){ return "'Roboto Mono', monospace";}
        if($font == 'rubrob'){ return "'Roboto Condensed', sans-serif";}
        if($font == 'rufsin'){ return "'Sintony', sans-serif";}
        if($font == 'sacali'){ return "'Alice', serif";}
        if($font == 'sankam'){ return "'Kameron', serif";}
        if($font == 'sharob'){ return "'Roboto', sans-serif";}
        if($font == 'sigope'){ return "'Open Sans', sans-serif";}
        if($font == 'sinssp'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'spaope'){ return "'Open Sans', sans-serif"; }
        if($font == 'sparob'){ return "'Roboto', sans-serif";}
        if($font == 'squall'){ return "'Allerta', sans-serif";}
        if($font == 'stalat'){ return "'Lato', sans-serif"; }
        if($font == 'staope'){ return "'Open Sans', sans-serif"; }
        if($font == 'staral'){ return "'Raleway', sans-serif";}
        if($font == 'stassp'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'stipon'){ return "'Pontano Sans', sans-serif";}
        if($font == 'titlat'){ return "'Lato', sans-serif"; }
        if($font == 'titope'){ return "'Open Sans', sans-serif";}
        if($font == 'titosw'){ return "'Oswald', sans-serif";}
        if($font == 'titral'){ return "'Raleway', sans-serif";}
        if($font == 'titrob'){ return "'Roboto', sans-serif";}
        if($font == 'ubucab'){ return "'Cabin', sans-serif";}
        if($font == 'ubudid'){ return "'Didact Gothic', sans-serif"; }
        if($font == 'ubuhin'){ return "'Hind', sans-serif"; }
        if($font == 'ubulat'){ return "'Lato', sans-serif";}
        if($font == 'ubulor'){ return "'Lora', serif";}
        if($font == 'uburob'){ return "'Roboto Slab', serif";}
        if($font == 'ubusou'){ return "'Source Sans Pro', sans-serif";}
        if($font == 'ultsla'){ return "'Slabo 13px', serif";}
        if($font == 'univol'){ return "'Vollkorn', serif";}
        if($font == 'uncope'){ return "'Open Sans', sans-serif";}
        if($font == 'uncosw'){ return "'Oswald', sans-serif";}
        if($font == 'vidrob'){ return "'Roboto', sans-serif";}
        if($font == 'volral'){ return "'Raleway', sans-serif";}
        if($font == 'volexo'){ return "'Exo 2', sans-serif";}
        if($font == 'walkre'){ return "'Kreon', serif"; }
        if($font == 'walmol'){ return "'Molengo', sans-serif";}
        if($font == 'walosw'){ return "'Oswald', sans-serif";}
        if($font == 'walvol'){ return "'Vollkorn', serif";}
        if($font == 'worope'){ return "'Open Sans', sans-serif"; }
        if($font == 'yanlat'){ return "'Lato', sans-serif";}
        if($font == 'yanope'){ return "'Open Sans', sans-serif";}
        if($font == 'yanosw'){ return "'Oswald', sans-serif";}
        if($font == 'yanrob'){ return "'Roboto', sans-serif";}
        if($font == 'yescri'){ return "'Crimson Text', serif";}
        if($font == 'yesjos'){ return "'Josefin Sans', sans-serif"; }
        if($font == 'yeslor'){ return "'Lora', serif";}
        if($font == 'yesope'){ return "'Open Sans', sans-serif";}
        if($font == 'yesphi'){ return "'Philosopher', sans-serif";}
    }
}

if ( ! function_exists( 'sdc_font_script' ) ) {
  /**
   * SDC Font Selector Enqueue Google Fonts
   *
   * @since  1.0.0
   */
    function sdc_font_script(){

    $sdc_preset_font_url = get_theme_mod('sdc_preset_font', 'sinssp');

    if ( 'sinosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sinosw-title', '//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese');
    endif;

    if ( 'sinmon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sinmon-title', '//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese');
    endif;

    if ( 'sinlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-title', '//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext');
    endif;

    if ( 'sinope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-title', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'abeubu' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-title', '//fonts.googleapis.com/css?family=Abel|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext');
    endif;

    if ( 'abrcan' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrcan-title', '//fonts.googleapis.com/css?family=Abril+Fatface|Candal&amp;subset=latin-ext');
    endif;

    if ( 'abrope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrope-title', '//fonts.googleapis.com/css?family=Abril+Fatface|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'abrosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrosw-title', '//fonts.googleapis.com/css?family=Abril+Fatface|Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese');
    endif;

    if ( 'abrrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrrob-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-abrrob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'abrdro' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-abrdro-body', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
    endif;

    if ( 'abrjos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'abrlab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrlab-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-abrlab-title', '//fonts.googleapis.com/css?family=La+Belle+Aurore');
    endif;

    if ( 'abrlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'abrvol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
    endif;

    if ( 'aleope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'alesou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-alesou-title', '//fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-alesou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'alesaant' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-alesaant-title', '//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i|Antic+Slab&amp;subset=latin-ext,vietnamese');
    endif;

    if ( 'alflor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-alfgen-title', '//fonts.googleapis.com/css?family=Alfa+Slab+One');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'alfgen' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-alfgen-title', '//fonts.googleapis.com/css?family=Alfa+Slab+One');
        wp_enqueue_style('storefront-design-customizer-font-alfgen-body', '//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'aliope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Alike+Angular');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'amatit' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amatit-title', '//fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-amatit-body', '//fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext');
    endif;

    if ( 'amaand' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amaand-title', '//fonts.googleapis.com/css?family=Amatic+SC:400,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-amaand-body', '//fonts.googleapis.com/css?family=Andika&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'amajos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amaand-title', '//fonts.googleapis.com/css?family=Amatic+SC:400,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'antjur' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amaand-title', '//fonts.googleapis.com/css?family=Anton&amp;subset=latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Jura:300,400,500,600&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext');
    endif;

    if ( 'aralat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aralat-title', '//fonts.googleapis.com/css?family=Arapey:400,400i');
        wp_enqueue_style('storefront-design-customizer-font-aralat-body', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'aramon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aralat-title', '//fonts.googleapis.com/css?family=Arapey:400,400i');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    endif;

    if ( 'araope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aralat-title', '//fonts.googleapis.com/css?family=Arapey:400,400i');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'arcten' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-arcten-title', '//fonts.googleapis.com/css?family=Archivo+Black&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-arcten-title', '//fonts.googleapis.com/css?family=Tenor+Sans&amp;subset=cyrillic,latin-ext');
    endif;

    if ( 'asalat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-asuchi-title', '//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext,vietnamese');
    endif;

    if ( 'asaope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-asaope-title', '//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'asaopc' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-asaopc-title', '//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,600,600i,700,700i|Open+Sans+Condensed:300,300i,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'asuchi' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-asuchi-title', '//fonts.googleapis.com/css?family=Asul:400,700|Chivo:300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext');
    endif;

    if ( 'bahlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bahlat-title', '//fonts.googleapis.com/css?family=Bahiana&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-bahlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'bahope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bahope-title', '//fonts.googleapis.com/css?family=Bahiana&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-bahope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'bahral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bahral-title', '//fonts.googleapis.com/css?family=Bahiana&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-bahral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'banope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-banope-title', '//fonts.googleapis.com/css?family=Bangers&amp;subset=latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-banope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'bevpon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amaand-title', '//fonts.googleapis.com/css?family=Bevan');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext');
    endif;

    if ( 'bitsou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Bitter:400,400italic,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-alesou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'bitral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Bitter:400,400italic,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'breimp' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-canimp-title', '//fonts.googleapis.com/css?family=Imprima&subset=latin,latin-ext');
    endif;

    if ( 'brelor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'breope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Bree+Serif&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'canimp' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-canimp-title', '//fonts.googleapis.com/css?family=Cantata+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-canimp-title', '//fonts.googleapis.com/css?family=Imprima&subset=latin,latin-ext');
    endif;

    if ( 'caralm' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-caralm-title', '//fonts.googleapis.com/css?family=Cardo:400,400italic,700&subset=latin,latin-ext,greek-ext,greek');
        wp_enqueue_style('storefront-design-customizer-font-caralm-body', '//fonts.googleapis.com/css?family=Almendra+Display&subset=latin,latin-ext');
    endif;

    if ( 'carjos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Cardo:400,400italic,700&subset=latin,latin-ext,greek-ext,greek');
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'carpgo' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carpgo-title', '//fonts.googleapis.com/css?family=Cardo:400,400i,700|Pathway+Gothic+One&amp;subset=greek,greek-ext,latin-ext');
    endif;

    if ( 'cliebg' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Clicker+Script&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=EB+Garamond&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'comlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-comlat-title', '//fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-comlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'comope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-comope-title', '//fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'creabe' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Crete+Round:400,400italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=ABeeZee:400,400italic');
    endif;

    if ( 'crmrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'danebg' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Dancing+Script:400,700');
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=EB+Garamond&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'danled' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Dancing+Script:400,700');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Ledger&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'didari' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,greek-ext,greek,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic&subset=latin,greek-ext,greek,latin-ext,cyrillic,hebrew,vietnamese,cyrillic-ext');
    endif;

    if ( 'dosope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-dosope-title', '//fonts.googleapis.com/css?family=Dosis:200,300,500,400,600,700,800&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-dosope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'drocab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
        wp_enqueue_style('storefront-design-customizer-font-drocab-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
    endif;

    if ( 'drfosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'eczwos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-eczwos-title', '//fonts.googleapis.com/css?family=Eczar:400,500,600,700,800|Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext');
    endif;

    if ( 'exolat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'exolor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exolor-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-exolor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'exoope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exoope-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-exoope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'exoosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exoosw-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-exoosw-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'exorob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exoosw-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'exosou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exosou-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-exosou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'fjaave' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fjaave-title', '//fonts.googleapis.com/css?family=Fjalla+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fjaave-body', '//fonts.googleapis.com/css?family=Average&subset=latin,latin-ext');
    endif;

    if ( 'fjacan' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fjaave-title', '//fonts.googleapis.com/css?family=Fjalla+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fjaave-body', '//fonts.googleapis.com/css?family=Cantarell:400,400italic,700italic,700');
    endif;

    if ( 'flaasa' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fjaave-title', '//fonts.googleapis.com/css?family=Flamenco:400,300');
        wp_enqueue_style('storefront-design-customizer-font-fjaave-body', '//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext');
    endif;

    if ( 'fradid' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fjaave-title', '//fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,greek-ext,greek,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'fralat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fralat-title', '//fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'fraope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Francois+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'genope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'henope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Henny+Penny');
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'henlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Henny+Penny');
        wp_enqueue_style('storefront-design-customizer-font-indlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;


    if ( 'hinope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Hind:400,300,500,700,600&subset=latin,latin-ext,devanagari');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'indlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-indlat-title', '//fonts.googleapis.com/css?family=Indie+Flower');
        wp_enqueue_style('storefront-design-customizer-font-indlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'indosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-indlat-title', '//fonts.googleapis.com/css?family=Indie+Flower');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'indpop' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-indlat-title', '//fonts.googleapis.com/css?family=Indie+Flower');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
    endif;

    if ( 'josjos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josjos-title', '//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-josjos-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'josplay' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'jobmav' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josjos-title', '//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Maven+Pro:400,900,700,500');
    endif;

    if ( 'jobosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josjos-title', '//fonts.googleapis.com/css?family=Josefin+Slab:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'cabold' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-cabold-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-cabold-body', '//fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700');
    endif;

    if ( 'kreubu' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-kreubu-title', '//fonts.googleapis.com/css?family=Kreon:400,300,700');
        wp_enqueue_style('storefront-design-customizer-font-kreubu-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,500,400italic,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'latmer' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Merriweather:400,300italic,300,400italic,700italic,700,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'merlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Merriweather:400,300italic,300,400italic,700italic,700,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'latlib' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
    endif;

    if ( 'libmon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    endif;

    if ( 'libope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'libubu' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-kreubu-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,500,400italic,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'liljos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-liljos-title', '//fonts.googleapis.com/css?family=Lilita+One&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-liljos-body', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'lillat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lillat-title', '//fonts.googleapis.com/css?family=Lilita+One&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-lillat-body', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'lilope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lilope-title', '//fonts.googleapis.com/css?family=Lilita+One&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-lilope-body', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'lilrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-liljos-title', '//fonts.googleapis.com/css?family=Lilita+One&amp;subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'istlor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-istlor-title', '//fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'lobari' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic&subset=latin,greek,latin-ext,cyrillic,greek-ext,hebrew,vietnamese,cyrillic-ext');
    endif;

    if ( 'lobcab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lobcab-title', '//fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-lobcab-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
    endif;

    if ( 'lobmul' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lobcab-title', '//fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic');
    endif;

    if ( 'lobvol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lobcab-title', '//fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
    endif;

    if ( 'lorope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lorope-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-lorope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'lorsou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'lovcab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister');
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Cabin+Sketch:400,700');
    endif;

    if ( 'lovfra' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister');
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Francois+One&subset=latin-ext');
    endif;

    if ( 'lovope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lovope-body', '//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister');
        wp_enqueue_style('storefront-design-customizer-font-lovope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'lovosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-lovosw-body', '//fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister');
        wp_enqueue_style('storefront-design-customizer-font-lovosw-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'luslat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-luslat-body', '//fonts.googleapis.com/css?family=Lustria');
        wp_enqueue_style('storefront-design-customizer-font-luslat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'medlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-medlat-body', '//fonts.googleapis.com/css?family=Medula+One');
        wp_enqueue_style('storefront-design-customizer-font-medlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'merope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'merosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'mersou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-lorsou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'moncar' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-moncar-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-moncar-title', '//fonts.googleapis.com/css?family=Cardo:400,400italic,700&subset=latin,latin-ext,greek-ext,greek');
    endif;

    if ( 'moncri' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-moncri-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-moncri-title', '//fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic');
    endif;

    if ( 'mondom' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-moncri-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-moncri-title', '//fonts.googleapis.com/css?family=Domine:400,700&subset=latin,latin-ext');
    endif;

    if ( 'monhin' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monhin-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-monhin-title', '//fonts.googleapis.com/css?family=Hind:400,300,500,700,600&subset=latin,latin-ext,devanagari');
    endif;

    if ( 'monist' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monhin-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-istlor-title', '//fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
    endif;

    if ( 'monneu' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monneu-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-monneu-title', '//fonts.googleapis.com/css?family=Neuton:400,300,200,400italic,700,800&subset=latin,latin-ext');
    endif;

    if ( 'monpla' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-monpla-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'monpon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext');
    endif;

    if ( 'monrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'mulpla' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic');
        wp_enqueue_style('storefront-design-customizer-font-monpla-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'nixled' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nixled-title', '//fonts.googleapis.com/css?family=Nixie+One');
        wp_enqueue_style('storefront-design-customizer-font-nixled-title', '//fonts.googleapis.com/css?family=Ledger&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'nixlib' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nixlib-title', '//fonts.googleapis.com/css?family=Nixie+One');
        wp_enqueue_style('storefront-design-customizer-font-nixlib-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
    endif;

    if ( 'nunale' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Nunito:400,300,700');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Alegreya:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'nunlor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Nunito:400,300,700');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'nunope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Nunito:400,300,700');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'oldque' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-cabold-body', '//fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Questrial');
    endif;

    if ( 'opegen' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'opelib' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700&subset=latin,latin-ext');
    endif;

    if ( 'opelor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'openun' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Nunito:400,300,700');
    endif;

    if ( 'opeosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'opepla' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-monpla-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'operal' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-operal-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-operal-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'operob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-operob-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-operob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'opelat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-plalat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'opemon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-moncar-title', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    endif;

    if ( 'opcosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'opcope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'opcrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'oswdro' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic');
    endif;

    if ( 'oswdom' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswdom-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswdom-body', '//fonts.googleapis.com/css?family=Domine:400,700&subset=latin,latin-ext');
    endif;

    if ( 'oswdrod' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswdrod-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswdrod-title', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
    endif;

    if ( 'oswmer' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswdrod-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic-ext,cyrillic');
    endif;

    if ( 'oswmul' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswdrod-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic');
    endif;

    if ( 'oswold' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswold-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswold-body', '//fonts.googleapis.com/css?family=Old+Standard+TT:400,400italic,700');
    endif;

    if ( 'oswope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'oswqua' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext');
    endif;

    if ( 'ovomul' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ovomul-title', '//fonts.googleapis.com/css?family=Ovo');
        wp_enqueue_style('storefront-design-customizer-font-ovomul-title', '//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic');
    endif;

    if ( 'oxysou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oxysou-title', '//fonts.googleapis.com/css?family=Oxygen:400,700,300&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oxysou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'pacari' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Pacifico');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic&subset=latin,greek-ext,greek,latin-ext,cyrillic,hebrew,vietnamese,cyrillic-ext');
    endif;

    if ( 'patlor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Patua+One');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'patosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-patosw-title', '//fonts.googleapis.com/css?family=Patua+One');
        wp_enqueue_style('storefront-design-customizer-font-patosw-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'paydro' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-drocab-title', '//fonts.googleapis.com/css?family=Paytone+One');
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
    endif;

    if ( 'phimul' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic&subset=latin,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic');
    endif;

    if ( 'plaali' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Alice');
    endif;

    if ( 'placor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-placor-title', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-placor-body', '//fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese');
    endif;

    if ( 'placri' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-placri-title', '//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
    endif;

    if ( 'plafau' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Fauna+One&subset=latin,latin-ext');
    endif;

    if ( 'plagle' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-plagle-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-plagle-body', '//fonts.googleapis.com/css?family=Glegoo:400,700&amp;subset=devanagari,latin-ext');
    endif;

    if ( 'plalat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-plalat-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-plalat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'planoti' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-planoti-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-planoti-title', '//fonts.googleapis.com/css?family=Noticia+Text:400,400i,700,700i&amp;subset=latin-ext,vietnamese');
    endif;

    if ( 'planot' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-planot-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-planot-title', '//fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic&subset=latin,greek-ext,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic');
    endif;


    if ( 'plaope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'plapsc' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
    endif;

    if ( 'plakru' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Sree+Krushnadevaraya&subset=latin,telugu');
    endif;

    if ( 'plavol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
    endif;

    if ( 'pscdos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-dosope-title', '//fonts.googleapis.com/css?family=Dosis:200,300,500,400,600,700,800&subset=latin,latin-ext');
    endif;

    if ( 'pscgra' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-dosope-title', '//fonts.googleapis.com/css?family=Gravitas+One');
    endif;

    if ( 'pscope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'pscrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-pscrob-title', '//fonts.googleapis.com/css?family=Playfair+Display+SC:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-pscrob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'poiope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poilat-title', '//fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'poilat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poilat-title', '//fonts.googleapis.com/css?family=Poiret+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-poilat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'poplat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poplat-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
        wp_enqueue_style('storefront-design-customizer-font-poplat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'popope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-popope-title', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Poppins:300,400,500,600,700&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'poposw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poposw-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
        wp_enqueue_style('storefront-design-customizer-font-poposw-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'popral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poposw-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
        wp_enqueue_style('storefront-design-customizer-font-rallat-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'poprob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-poprob-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
        wp_enqueue_style('storefront-design-customizer-font-poprob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'pralat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-pralat-title', '//fonts.googleapis.com/css?family=Pragati+Narrow:400,700&amp;subset=devanagari,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-pralat-title', '//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext');
    endif;

    if ( 'preope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-preope-title', '//fonts.googleapis.com/css?family=Press+Start+2P&subset=cyrillic,greek,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-preope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'preply' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-preope-title', '//fonts.googleapis.com/css?family=Press+Start+2P&subset=cyrillic,greek,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-preope-title', '//fonts.googleapis.com/css?family=Play:400,700&subset=cyrillic,cyrillic-ext,greek,latin-ext');
    endif;

    if ( 'ptscab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-drocab-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
    endif;

    if ( 'ptsdid' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,greek-ext,greek,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'ptslat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ptslat-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-ptslat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'ptsptr' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'ptsrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ptslat-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'ptrnos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ptrnos-title', '//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i|PT+Serif:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'ptrope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'ptrpts' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'quajud' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-danled-title', '//fonts.googleapis.com/css?family=Quando&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-drocab-body', '//fonts.googleapis.com/css?family=Judson:400,400italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'qutfan' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Fanwood+Text:400,400italic');
    endif;

    if ( 'qutqus' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Quattrocento:400,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-oswope-title', '//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'quiebg' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=Quicksand:400,300,700');
        wp_enqueue_style('storefront-design-customizer-font-carjos-title', '//fonts.googleapis.com/css?family=EB+Garamond&subset=latin,vietnamese,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'raldros' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-raldrof-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-abrdro-body', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
    endif;

    if ( 'raldrof' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-raldrof-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-raldrof-body', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic');
    endif;

    if ( 'rallat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rallat-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-rallat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'rallob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rallob-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-rallob-body', '//fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese,latin-ext,cyrillic');
    endif;

    if ( 'ralope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-aleope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'ralosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'ralpop' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&subset=latin,latin-ext,devanagari');
    endif;

    if ( 'ralcab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-drocab-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
    endif;

    if ( 'ralmer' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Merriweather:400,300italic,300,400italic,700italic,700,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'ralrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rangud' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Rancho');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Gudea:400,400italic,700&subset=latin,latin-ext');
    endif;

    if ( 'roboto' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'robnun' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Nunito:400,300,700');
    endif;

    if ( 'robnos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-robnos-title', '//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'robope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-robope-title', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'rbccar' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rbccar-title', '//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i|Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'roblor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-roblor-title', '//fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'rosope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,greek-ext,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rosrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rosrob-title', '//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,greek-ext,greek,vietnamese,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-rosrob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rokdros' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-abrdro-body', '//fonts.googleapis.com/css?family=Droid+Sans:400,700');
    endif;

    if ( 'roklat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'rokope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-sigope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rokosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'rokrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-rokrob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rokubu' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rokrob-title', '//fonts.googleapis.com/css?family=Rokkitt:400,700');
        wp_enqueue_style('storefront-design-customizer-font-ubulat-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'rubrmo' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rufsin-title', '//fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,hebrew,latin-ext,vietnamese');
    endif;

    if ( 'rubrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rufsin-title', '//fonts.googleapis.com/css?family=Rubik+Mono+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-rufsin-body', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic&subset=latin,greek-ext,cyrillic,greek,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'rufsin' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-rufsin-title', '//fonts.googleapis.com/css?family=Rufina:400,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-rufsin-body', '//fonts.googleapis.com/css?family=Sintony:400,700&subset=latin,latin-ext');
    endif;

    if ( 'sacali' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Sacramento&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-josplay-body', '//fonts.googleapis.com/css?family=Alice');
    endif;

    if ( 'sankam' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sankam-title', '//fonts.googleapis.com/css?family=Sansita+One');
        wp_enqueue_style('storefront-design-customizer-font-sankam-body', '//fonts.googleapis.com/css?family=Kameron:400,700');
    endif;


    if ( 'sharob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sharob-title', '//fonts.googleapis.com/css?family=Shadows+Into+Light');
        wp_enqueue_style('storefront-design-customizer-font-sharob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'sigope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sigope-title', '//fonts.googleapis.com/css?family=Signika:400,300,600,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-sigope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'sinssp' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-sinssp-title', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese');
    endif;

    if ( 'spaope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-spaope-title', '//fonts.googleapis.com/css?family=Space+Mono:400,400i,700,700i&subset=latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-spaope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'sparob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-spaope-title', '//fonts.googleapis.com/css?family=Space+Mono:400,400i,700,700i&subset=latin-ext,vietnamese');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'squall' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-squall-title', '//fonts.googleapis.com/css?family=Squada+One');
        wp_enqueue_style('storefront-design-customizer-font-squall-title', '//fonts.googleapis.com/css?family=Allerta');
    endif;

    if ( 'stalat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-stalat-title', '//fonts.googleapis.com/css?family=Stardos+Stencil:400,700');
        wp_enqueue_style('storefront-design-customizer-font-stalat-body', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'staope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-staope-title', '//fonts.googleapis.com/css?family=Stardos+Stencil:400,700');
        wp_enqueue_style('storefront-design-customizer-font-staope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'staral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-staral-title', '//fonts.googleapis.com/css?family=Stardos+Stencil:400,700');
        wp_enqueue_style('storefront-design-customizer-font-staral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'stassp' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-stassp-title', '//fonts.googleapis.com/css?family=Stardos+Stencil:400,700');
        wp_enqueue_style('storefront-design-customizer-font-stassp-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'stipon' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-amaand-title', '//fonts.googleapis.com/css?family=Stint+Ultra+Expanded&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext');
    endif;

    if ( 'titlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-titlat-title', '//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-titlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'titope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-titope-title', '//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-titope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'titosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-titral-title', '//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'titral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-titral-title', '//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-titral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'titrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-titrob-title', '//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-titrob-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'ubucab' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ubudid-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-drocab-title', '//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic');
    endif;

    if ( 'ubudid' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ubudid-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-ubudid-title', '//fonts.googleapis.com/css?family=Didact+Gothic&subset=latin,greek-ext,greek,cyrillic-ext,latin-ext,cyrillic');
    endif;

    if ( 'ubuhin' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ubulat-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Hind:400,300,500,700,600&subset=latin,latin-ext,devanagari');
    endif;

    if ( 'ubulat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ubulat-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-ubulat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'ubulor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'uburob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'ubusou' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abeubu-body', '//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,greek,greek-ext,cyrillic-ext,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-alesou-body', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,900italic,900,200,200italic,300,300italic,400italic,600,600italic,700italic,700&subset=latin,vietnamese,latin-ext');
    endif;

    if ( 'ultsla' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-ultsla-title', '//fonts.googleapis.com/css?family=Ultra');
        wp_enqueue_style('storefront-design-customizer-font-ultsla-title', '//fonts.googleapis.com/css?family=Slabo+13px&subset=latin,latin-ext');
    endif;

    if ( 'univol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Unica+One&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
    endif;

    if ( 'uncope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Uncial+Antiqua');
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'uncosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-henope-title', '//fonts.googleapis.com/css?family=Uncial+Antiqua');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'vidrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exoosw-title', '//fonts.googleapis.com/css?family=Vidaloka');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'volral' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-bitral-title', '//fonts.googleapis.com/css?family=Raleway:400,100,200,100italic,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'volexo' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600italic,600,700,700italic,800,800italic,900,900italic&subset=latin,latin-ext,cyrillic');
    endif;

    if ( 'walkre' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Walter+Turncoat');
        wp_enqueue_style('storefront-design-customizer-font-kreubu-title', '//fonts.googleapis.com/css?family=Kreon:400,300,700');
    endif;

    if ( 'walmol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Walter+Turncoat');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Molengo&subset=latin,latin-ext');
    endif;

    if ( 'walosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Walter+Turncoat');
        wp_enqueue_style('storefront-design-customizer-font-nunale-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;

    if ( 'walvol' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-abrdro-title', '//fonts.googleapis.com/css?family=Walter+Turncoat');
        wp_enqueue_style('storefront-design-customizer-font-latmer-title', '//fonts.googleapis.com/css?family=Vollkorn:400,400italic,700,700italic');
    endif;

    if ( 'worope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-worope-title', '//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&subset=latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-worope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'yanlat' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-yanlat-title', '//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-yanlat-title', '//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,700,400italic,700italic,900,900italic&subset=latin,latin-ext');
    endif;

    if ( 'yanope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-yanosw-title', '//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'yanosw' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-yanosw-title', '//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-yanosw-title', '//fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext');
    endif;


    if ( 'yanrob' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-exoosw-title', '//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700&subset=latin,latin-ext');
        wp_enqueue_style('storefront-design-customizer-font-latmer-body', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,greek,cyrillic,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'yescri' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-yescri-title', '//fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-yescri-title', '//fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic');
    endif;

    if ( 'yesjos' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext');
    endif;

    if ( 'yeslor' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-istlor-body', '//fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic&subset=latin,cyrillic,latin-ext');
    endif;

    if ( 'yesope' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-fraope-title', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext');
    endif;

    if ( 'yesphi' == esc_attr($sdc_preset_font_url) ):
        wp_enqueue_style('storefront-design-customizer-font-josplay-title', '//fonts.googleapis.com/css?family=Yeseva+One&subset=latin,latin-ext,cyrillic');
        wp_enqueue_style('storefront-design-customizer-font-monpla-title', '//fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic&subset=latin,cyrillic');
    endif;

    }
}