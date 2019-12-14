<?php

namespace RandomData;

class RandomCompany
{
    public function getRandomCompany() {

        $company = array(
            'name' => '',
            'adress' => array(
                'street' => '',
                'buildingNumber' => '',
                'zipCode' => '',
                'city' => ''
            ),
            'ustId' => ''
        );

        $name = RandomName::getSirName();
        $job = self::$jobs[random_int(0, count(self::$jobs) -1)];
        $legalForm = self::$legalForms[random_int(0, count(self::$legalForms) -1)];
        if (\random_int(0, 1) == 1)
            $company['name'] = "$name $job $legalForm";
        else
            $company['name'] = "$name $job $legalForm";

        $company['adress'] = RandomAdress::getAdress();

        $ustId = \random_int(0, 999999999);
        str_pad($ustId, 9, '0', STR_PAD_LEFT);
        $company['ustId'] = 'DE' . $ustId;
        
        return $company;
    }

    private static $legalForms = array(
        'GbR',
        'GmbH',
        'AG',
        '',
        'UG',
        'e.V.'
    );

    private static $jobs = array(
        'Alarmanlagen',
        'Altenheimbetreiber',
        'Apotheke',
        'Appartements Velden',
        'Arbeitsbekleidung und Arbeitsschutz',
        'Architektur - Planung, Bauprojekte bis Generalunternehmung',
        'Armbanduhren (Schweizer Marke)',
        'Auto- und Klimakühler, Reparatur',
        'Autohandel Kfz-Werkstätte Havariedienst Lackierung Tuning',
        'Autohandel  Neu- und Gebrauchtfahrzeuge',
        'Autovermietung',
        'Baggerunternehmen',
        'Balkone',
        'Baudienstleistungen',
        'Baumaschinen Verkauf',
        'Baumaterial Düngemittelhandel Lagerhaus',
        'Baumeisterleistungen',
        'Baustoffhandel',
        'Bauunternehmen Hochbau Tiefbau',
        'Bauträger',
        'Befestigungsmaterial Großhandel',
        'Beratung in wirtschaftlichen Angelegenheiten',
        'Beton/Kies/Sand',
        'Betonfertigteile',
        'Blumen, Gartenpflanzen, Hochzeits- u. Trauerfloristik',
        'Bodenbeläge, Parkett- und Industrieböden',
        'Bodenverlegung',
        'Büromöbel,',
        'Bürodienstleistungen',
        'Büroservice, Teilzeitbüros, Bürovermietung',
        'Buchbinderei',
        'Buschenschank (Weststmk.)',
        'Busunternehmen',
        'Call-Center',
        'Catering - Partyservice',
        'Computer Hard- und Software',
        'Coaching',
        'Copy Shop',
        'Cordial Hotels in Österreich und in der Toskana',
        'Chrysler, Jeep Neu- u. Gebrauchtwagen',
        'Dachdeckerei, Flachdächer, Dachstühle',
        'Dachleitern',
        'Daewoo Neu- und Gebrauchtwagen',
        'Datenbanksysteme',
        'Dessousfachgeschäft',
        'Digitaldruck, Druckerei, Graphik, Repro, Siebdruck',
        'Druckerei, Offset, Buchdruck, Laserdruck, Buchbinderei',
        'Druckluftgeräte',
        'EDV-Dienstleistungen',
        'EDV-Netzwerkkonzeption, -erstellung u. -betreuung',
        'EDV-Simulationsmodelle',
        'Elektro-Weiß- und Braunware',
        'Elektroinstallationen',
        'Entkalkungs- und Entkeimungsanlagen für Haushalt u. Gastronomie',
        'Erdbau',
        'Esoterik-Artikel',
        'Esoterik-Zeitschriften',
        'Estrichverlegung',
        'Eventmarketing Seminar- und Veranstaltungsorganisation',
        'Fahnenerzeugung, Fahnenmasten',
        'Faxgeräte',
        'Feng-Shui-Beratung',
        'Fenster und Türenerzeugung und Montage',
        'Fernseh Video Satellitenanlagen Verkauf Service',
        'Fertigteil-Elemente, Fertigteilhäuser',
        'Feuerlauf-Seminare',
        'Feuershow',
        'Feuerzeuge',
        'Fischspezialitäten Frisch-, Tiefkühl- u. Dosenfisch, Kaviar ...',
        'Fliesenhandel und -verlegung, Sanitärhandel',
        'Folien, Foliendruck',
        'Fotoapparate',
        'Fotoausarbeitung,',
        'Fotographen: Studio u. Pressefotographen',
        'Gabelstapler Neu und Gebrauchtgeräte',
        'Garderoben',
        'Gastronomie, Restaurants',
        'Gastronomiegeräte und Großküchen',
        'Gastronomiebedarf (Gläser, Besteck ...)',
        'Gas-Wasser-Heizungs-Installationen',
        'Gebäudeservice und -management',
        'Gemälde in verschiedenen Größen',
        'Gesundheitsberatung',
        'Gesundheitshotels',
        'Gesundheitsprodukte',
        'Getränkegroßhandel',
        'Glaserei',
        'Gravuren und Schilder',
        'Grünanlagenbetreuung',
        'Gutscheine für diverse Hotels',
        'Handarbeitsbedarf-Fachgeschäft',
        'Handwerkliche Arbeiten aller Art im Raum Wien und Graz',
        'Handys',
        'Haushaltsgeräte und Haushaltsprodukte',
        'Heizungsmaterial-Großhandel',
        'HiFi-Geräte für Wohnung, Auto, Beruf',
        'Hobelwerk',
        'Hobbyzoo',
        'Hoch- u. Tiefbau',
        'Holzbau',
        'Holzfachmarkt',
        'Holzfenster und Innentüren',
        'Holztreppen',
        'Homepage-Erstellung, -Wartung und -Aktualisierungen',
        'Honda Neu- und Gebrauchtwagen',
        'Hotel',
        'Hotelausstattung',
        'Hotelgutscheine',
        'Hupfburgen, Kletterwände, Erlebnisspielgeräte ...',
        'Industrie- und Gebäudereinigung',
        'Infrarotkabinen',
        'Innenausbau- und Innenausbaustoffe',
        'Innenputze und Außenputze',
        'Innenraumgestaltung',
        'Inserate im KLIPP (Steir. Wirtschaftsmagazin)',
        'Internet-Homepage-Erstellung; Internet-Werbung',
        'Internet-Provider; Internet-Promotions',
        'Internet-Schulungen, Internet-Beratung u. Betreuung',
        'Immobilienmakler',
        'Import - Export',
        'Isoliermaterial - Platten- und Rollenware',
        'Isolierungen',
        'Keramikgefäße und Kunstkeramik',
        'KFZ Handel u. Reparatur für verschiedene Marken',
        'KFZ-Havariedienst',
        'KFZ Neu- und Gebrauchtwagen',
        'Kies, Sand',
        'Kinder-Erlebnisprogramme',
        'Kinder-Betreuungsprogramme',
        'Kipper-Transporte',
        'Klebefolien',
        'Kosmetikprodukte, Kosmetikbehandlungen',
        'Kräuterextrakte',
        'Kräutertees aus biologischem Anbau',
        'Kunst - Malerei, Gemälde, Grafiken',
        'Kunst- und Malereikurse',
        'Künstlerische Auftritte: Akrobatik Performances',
        'Kuvertieren',
        'Lagerregale',
        'Lebensmittel',
        'Magnetresonanzgeräte',
        'Malermeister',
        'Mentaltraining und NLP',
        'Metallbau-Schlosserei, Alu-Portale, Fassaden, Stahlkonstruktonen',
        'Mineralöl-Großhandel',
        'Möbel, alte Weichholz- und Bauernmöbel',
        'Naturkost Einzel- und Großhandel',
        'Netzwerkbetreuung',
        'Objektreinigungen',
        'Optiker-Einzelhandel sowie Optikgroßhandel',
        'Orientteppiche',
        'Parfumerie',
        'Parkettboden - Lieferung - Verlegung - Sanierung',
        'Pellettsheizungen',
        'Pelze Lederjacken und Mäntel, Aufbewahrung, Änderungen, Reinigung',
        'Personalberatung, Personalbereitstellung',
        'Personaltraining und Schulungen',
        'Personalvermittlung',
        'Pflegeheim-Administration',
        'Planungsbüro',
        'Privat TV (Einschaltungen, Werbung etc.)',
        'Radiosender',
        'Raumausstattung',
        'Rechtsanwalt, Rechtsberatung',
        'Reinigungsprodukte Erzeugung und Handel',
        'Reinigungsprodukte, Spezialreiniger für Computer und Elektronik',
        'Reisebüro',
        'Restaurants',
        'Sanitärinstallationen',
        'Sauna',
        'Schilder für Werbung und Ankündigung',
        'Schraubengroßhandel',
        'Seminarhotels',
        'Seminarraum-Ausstattung',
        'Sicherheitsleitern',
        'Simulationsmodelle (EDV)',
        'Skoda Neu- und Gebrauchtwagen',
        'Solaranlagen',
        'Sonnenschutz, Markisen, Rollos',
        'Spenglerei',
        'Sportfachgeschäft',
        'Sporthotels',
        'Spritzkabinen',
        'Stahlbau, Schlosserarbeiten',
        'Stahlhallen',
        'Stapler',
        'Stempel in verschiedenen Größen',
        'Steuerberatung, Sanierungen, Finanzierungsberatung',
        'Stukkateur',
        'Tanzbar Wels',
        'Telefone - Mobiltelefone',
        'Telefonmarketing',
        'Textilgroßhandel',
        'Tischlerei',
        'Transparente',
        'Transporte',
        'Trockenausbau',
        'Uhren, Armbanduhren',
        'Unternehmensberatung - Erstellung ökonomischer Simulationsmodelle',
        'Übersetzungen in mehr als 20 Sprachen',
        'Veranstaltungsorganisation',
        'Vermietung von Ausstattung für Seminare - PC- u. Videoprojektoren...',
        'Vermietung von Kfz und Baumaschinen',
        'Vermietung von Erlebnisspielgeräten, Hupfburgen, Kletterwänden...',
        'Vermietung von Seminarräumlichkeiten und Veranstaltungsräumen',
        'Verpacken von Werbeartikeln',
        'Verpackungsmaterial, Verpackungstechnik',
        'Versteigerungen von Firmen, Maschinen und Anlagen',
        'Vorhänge',
        'Wäsche und Dessousfachgeschäft',
        'Waffen',
        'Wasseraufbereitung, Wasserentkalkung',
        'Wasserskulpturen aus Stein',
        'Webpelze - Mäntel und Jacken',
        'Weingut Wein Sekt Eigenbrände',
        'Werbeagentur, Werbekonzeptionen',
        'Werbeartikel, Werbegeschenke',
        'Werbeeinschaltungen',
        'Werbung, Design, Grafik',
        'Whirl Pools',
        'Winterdienst',
        'Wintergärten',
        'Wochenzeitung inkl. Einschaltungen',
        'Zeitschriftenverlag',
        'Zimmerbrunnen',
        'Zimmerei'
    );


}