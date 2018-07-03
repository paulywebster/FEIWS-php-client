<?php

namespace FEIWebServicesClient\Horse\Types;

use FEIWebServicesClient\Shared\Types\Country;

class IssuingBody
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var Country
     */
    private $country;

    public function __construct(string $code)
    {
        $foundCode = array_filter(
            $this->getList(),
            function ($item) use ($code) {
                return $item['Code'] === $code;
            }
        );

        if (empty($foundCode)) {
            throw new \InvalidArgumentException(
                sprintf('The code you provide "%s" is not a valid issuing body code', $code)
            );
        }

        $this->code = end($foundCode)['Code'];
        $this->name = end($foundCode)['Name'];
        $this->country = Country::fromFEICode(end($foundCode)['CountryCode']);
    }

    public function code(): string
    {
        return $this->code;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function country(): Country
    {
        return $this->country;
    }

    public function getList(): array
    {
        return [
            [
                'Code' => 'ARG-FEA',
                'Name' => 'Federacion Ecuestre Argentina',
                'CountryCode' => 'ARG',
            ],
            [
                'Code' => 'AUS-ACEG',
                'Name' => 'Australian Continental Equestrian Group Inc.',
                'CountryCode' => 'AUS',
            ],
            [
                'Code' => 'AUS-EA',
                'Name' => 'Equestrian Australia (issued since 25/11/2016)',
                'CountryCode' => 'AUS',
            ],
            [
                'Code' => 'AUS-EFA',
                'Name' => 'Equestrian Federation of Australia Inc.',
                'CountryCode' => 'AUS',
            ],
            [
                'Code' => 'AUT-ABL',
                'Name' => 'Amt der Burgenländischen Landesregierung',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-ANL',
                'Name' => 'Amt der Niederösterreichischen Landesregierung',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-AQHG',
                'Name' => 'Austrian Quarter HorseAssociation Geschäftsstelle NÖ',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-BF',
                'Name' => 'Bundesfachverband fürReiten und Fahren',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-BP',
                'Name' => 'Bundergestüt Piber',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-BPFERD',
                'Name' => 'Burgenländischer Pferdezuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-BRFO',
                'Name' => 'Österreichischer Pferdesportverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-DGVO',
                'Name' => 'Direktorium für Galopp-rennsport une Vollblutzucht in Österreich',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-HPT',
                'Name' => 'Haflinger Pferdezuchtverband Tirol',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-HPV',
                'Name' => 'Haflinger PferdezuchtvereinVorarlberg',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-HS',
                'Name' => 'Haflingerpferdezuchtverband Salzburg',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-LK',
                'Name' => 'Landespferdezuchtverband Kärnten',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-LPO',
                'Name' => 'Landesverband der Pferdezüchter Oberösterreichs',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-LS',
                'Name' => 'Landespferdezuchtverban Salzburg',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-Lstein',
                'Name' => 'LandespferdezuchtverbandSteiermark',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-NI',
                'Name' => 'Niederösterreichischer Islandpferdezuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-NÖ',
                'Name' => 'Verband der Züchter des Araber Haflinger Pferdes, Geschäftsstelle NÖ',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-OA',
                'Name' => 'Österreichischer Araberzuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-ÖIZV',
                'Name' => 'Österreichischer Islandpferdezuchtverband (ÖIZV)',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-OL',
                'Name' => 'Österreichische LipizzanerUnion',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-OZ',
                'Name' => 'ÖsterreichischerShetlandpony- Zuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-OZP',
                'Name' => 'Österreichischer Zuchtverband für Ponys, Kleinpferde und Spezialrassen',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-TNP',
                'Name' => 'Tiroler Noriker Pferdezuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VLO',
                'Name' => 'Verband der Lipizzanerzüchter in Österreich',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VNP',
                'Name' => 'Verband Niederösterreichischer Pferdezüchter',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VP',
                'Name' => 'Vorarlberger pferdezuchtverband',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VPPÖ',
                'Name' => 'Verband für Pferderassenund Ponys in Österreich (VPPÖ)',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VSW',
                'Name' => 'Verein der Salzburger Warmblutpferdezüchter',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VVO',
                'Name' => 'Verband der Vollblutaraberzüchter Österreichs',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VVWZ',
                'Name' => 'Verein der Vorarlberger Warmblutpferde-Züchter',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VVZ',
                'Name' => 'Verein der VorarlbergerNoriker-Züchter',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VWL',
                'Name' => 'Verein der Warmblut-pferdezüchter des Landes Tirol',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-VZO',
                'Name' => 'Verband der Züchter desHuzulenpferdes in Osterreich',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'AUT-ZTRO',
                'Name' => 'Zentrale für Traberzucht und Rennen in Österreich',
                'CountryCode' => 'AUT',
            ],
            [
                'Code' => 'BEL-A',
                'Name' => 'Adodane a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-ABCA',
                'Name' => 'Association belge du Cheval barbe a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-ABE',
                'Name' => 'Association belge des Eleveurs de Chevaux lusitaniens (ABEL) a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-AEW',
                'Name' => 'Association des Eleveurs wallons du Cheval de Trait belge a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BCPA',
                'Name' => 'Belgian Connemara Pony Association (BCPA)',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BEV',
                'Name' => 'Belgische Ezel Vrienden vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BFMA',
                'Name' => 'Belgian Franches-Montagnes Association (BFMA)',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BHPS',
                'Name' => 'Belgian Highlaned Pony Society vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BHV',
                'Name' => 'Belgische Haflinger Vereniging vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BMS',
                'Name' => 'Belgisch Mérens Stamboek vzw – le Studbook belge du Mérens asbl',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BNFPS',
                'Name' => 'Belgian New Forest Pony Studbook vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BQHA',
                'Name' => 'Belgian Quarter Horse Association vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BSF',
                'Name' => 'Belgish Stamboek voor Fjordenpaarden-vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BSFP',
                'Name' => 'Belgisch Stamboek van het Friese Paard vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BSIP',
                'Name' => 'Belgisch Stamboek voor Ijslandse Paarden, vereniging voor de bevordering van het Ijslands paardenras',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BSL',
                'Name' => 'Belgisch Stamboek van de Lipizzaner vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BSSP',
                'Name' => 'Belgisch Studbook van de Shetland Pony vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BTS',
                'Name' => 'Belgisch Tinker Stamboek vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-BWPS',
                'Name' => 'Belgisch Welsh Pony Stamboek vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-CBC',
                'Name' => 'Belgiche confederatie van het paard ‘BCP’- Confédération Belge du Cheval  ‘CBC’',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-CWBC',
                'Name' => 'Confédération Wallonie-Bruxelles du cheval ‘ CWBC’',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-EAFV',
                'Name' => 'Europese Arabo-Friezen Vereniging – Belgium',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-EFRBSE',
                'Name' => 'Equipas, Fédération Royale Belge des Sports Equestres',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-FNBCPE',
                'Name' => 'Fédération Nationale Belge du Cheval de Pure Race Espagnole a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-FRBSE',
                'Name' => 'Fédération Royale Belge des Sports Equestres',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-HBAP',
                'Name' => 'Het Belgisch Arabisch Paardenstamboek vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-HBSM',
                'Name' => 'Het Belgisch Stamboek voor het Miniatuurpaard vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-HBW',
                'Name' => 'Het Belgisch Warmbloedpaard, Belgium',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-HVP',
                'Name' => 'Het Vlaams Paard – Belgium',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-ICSB',
                'Name' => 'Irish Cob Society België vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-KMHBT',
                'Name' => 'Koninklijke Maatschappij Het Belgisch Trekpaard – Belgium',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-RBP',
                'Name' => 'Royal Belgian Palomino a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-SCSB',
                'Name' => 'Studbook du Cheval de Sang Belge',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-SRCSB',
                'Name' => 'Société royale "Le Cheval de Sport belge" a.s.b.l. (sBS)',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-StbBF',
                'Name' => 'Stud-Book Belge du Fjording a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-SZ',
                'Name' => 'Société royale "Le Cheval de Trait ardennais" a.s.b.l.',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-Szan',
                'Name' => 'Studbook Zangersheide, Belgium',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-VCP',
                'Name' => 'Vlaamse Confederatie van het Paard ‘VCP’',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BEL-VFP',
                'Name' => 'Vlaamse Federatie voor Paardenwedrennen vzw',
                'CountryCode' => 'BEL',
            ],
            [
                'Code' => 'BLR-BEF',
                'Name' => 'Byelorussian Equestrian Federation',
                'CountryCode' => 'BLR',
            ],
            [
                'Code' => 'BOL-FBDE',
                'Name' => 'Federacion Boliviana de Deportes Ecuestres',
                'CountryCode' => 'BOL',
            ],
            [
                'Code' => 'BRA-CBH',
                'Name' => 'C.B.H. Confederaçao Brasileira de Hipismo',
                'CountryCode' => 'BRA',
            ],
            [
                'Code' => 'BRN-RASB',
                'Name' => 'Royal Arabian Stud of Bahrain',
                'CountryCode' => 'BRN',
            ],
            [
                'Code' => 'BUL-BHBS',
                'Name' => 'Bulgarian Horse Breeding Society',
                'CountryCode' => 'BUL',
            ],
            [
                'Code' => 'BUL-NVS',
                'Name' => 'National Veterinary Service',
                'CountryCode' => 'BUL',
            ],
            [
                'Code' => 'CAN-ECE',
                'Name' => 'Equestrian Canada Équestre',
                'CountryCode' => 'CAN',
            ],
            [
                'Code' => 'CHI-FEC',
                'Name' => 'Federacion Ecuestre de Chile',
                'CountryCode' => 'CHI',
            ],
            [
                'Code' => 'CHN-CEA',
                'Name' => 'CEA Chinese Equestrian Association',
                'CountryCode' => 'CHN',
            ],
            [
                'Code' => 'COL-FEC',
                'Name' => 'Federación Ecuestre de Colombia',
                'CountryCode' => 'COL',
            ],
            [
                'Code' => 'CRC-FECR',
                'Name' => 'Federación Ecuestre de Costa Rica',
                'CountryCode' => 'CRC',
            ],
            [
                'Code' => 'CRO-HC',
                'Name' => 'Hrvatski Centar Za Konjogojstvo - Drzavna ergela Lipik',
                'CountryCode' => 'CRO',
            ],
            [
                'Code' => 'CRO-HPA',
                'Name' => 'Hrvatska Poljoprivredna Agencija',
                'CountryCode' => 'CRO',
            ],
            [
                'Code' => 'CYP-CTC',
                'Name' => 'Cyprus Turf Club',
                'CountryCode' => 'CYP',
            ],
            [
                'Code' => 'CYP-VSAHWD',
                'Name' => 'Veterinary Services Animal Health and Welfare Division',
                'CountryCode' => 'CYP',
            ],
            [
                'Code' => 'CZE-ASCK',
                'Name' => 'Asociace svazu chovatelu koní CR o.s.',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-CEF',
                'Name' => 'Czech Equestrian Federation',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-CKA',
                'Name' => 'Ceská klusácká asociace',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-JCC',
                'Name' => 'Jockey Club CR',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-MACR',
                'Name' => 'Ministry of Agriculture of the Czech Republic',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-NHKL',
                'Name' => 'Národní hrebcín Kladruby nad Labem, s.p.',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-SCCT',
                'Name' => 'Svaz chovatelu ceského teplokrevníka',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-SCPMT',
                'Name' => 'Svaz chovatelu a príznivcu moravského teplokrevníka o.s.',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-SCSA',
                'Name' => 'Svaz chovatelu Shagya-araba v CR',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-SCST',
                'Name' => 'Svaz chovatelu slovenského teplokrevníka v CR',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'CZE-UEKC',
                'Name' => 'Ceskomoravská spolecnost chovatelu, a.s. ÚSTREDNÍ EVIDENCE KONÍ CR',
                'CountryCode' => 'CZE',
            ],
            [
                'Code' => 'DEN-AA',
                'Name' => 'Anglo-Arabians',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-BA',
                'Name' => 'Belgian Ardenne',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-CP',
                'Name' => 'Connemara Pony',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DF',
                'Name' => 'DanishFjordHorse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DHA',
                'Name' => 'Danish Holsteinier Association',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DIH',
                'Name' => 'Danish Islandic Horse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DJC',
                'Name' => 'Thoroughbred - DanishJockeyClub',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DJH',
                'Name' => 'Danish Jutland Horse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-Dlip',
                'Name' => 'Danish Lipizzan',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DPF',
                'Name' => 'Dansk Pinto Forening',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DQHA',
                'Name' => 'Danish Quarter Horse Association',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DSP',
                'Name' => 'DanishSportsPony',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-DW',
                'Name' => 'Danish Warmblod',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-FH',
                'Name' => 'FrederiksborgHorse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-Fri',
                'Name' => 'Danish Frieser',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-Haf',
                'Name' => 'Haflinger',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-KH',
                'Name' => 'Knabstrup Horse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-LFH',
                'Name' => 'Landsudvalget for Heste',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-NFP',
                'Name' => 'NewForestPony',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-OH',
                'Name' => 'Oldenburg Horse',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-P',
                'Name' => 'Palomino',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-PA',
                'Name' => 'Purebred Arabians',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-ShA',
                'Name' => 'Shagya-Arabians',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-SP',
                'Name' => 'Shetlands Pony',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-SpoA',
                'Name' => 'Sport-Arabians',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-T',
                'Name' => 'Trotter',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-Trak',
                'Name' => 'Trakehner',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'DEN-WPC',
                'Name' => 'Welsh Pony&Cob',
                'CountryCode' => 'DEN',
            ],
            [
                'Code' => 'ECU-FEDE',
                'Name' => 'Federacion Ecuatoriana de Deportes Ecuestres',
                'CountryCode' => 'ECU',
            ],
            [
                'Code' => 'EGY-EEF',
                'Name' => 'E.E.F. Egyptian Equestrian Federation',
                'CountryCode' => 'EGY',
            ],
            [
                'Code' => 'ESP-AAC',
                'Name' => 'Asociación para el fomento de la raza Asnal Catalana',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ACCPRRG',
                'Name' => 'Asociacion de Criadores de Cabalo de Pura Raza Galega',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ACGEHBC',
                'Name' => 'Asociación de Criadores de Ganado Equino de la raza Hispano Bretona en Cantabria "Manadas"',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ACPCRMe',
                'Name' => 'Asociación de Criadores y Propietarios de Caballos de Raza Menorquina (A.C.P.C.R.Me)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ACPRA',
                'Name' => 'Asociación de Criadores de Ponis de Raza Asturcón (ACPRA)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ACPSIE',
                'Name' => 'Asociación de Criadores de Pura Sangre Inglés de España (ACPSIE)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-AECABMa',
                'Name' => 'Asociación de Criadores y Propietarios de Caballos de Raza Mallorquina (A.E.CAB.Ma)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-AECCA',
                'Name' => 'Asociación Española de Criadores de Caballos Arabes (AECCA)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-AECCAa',
                'Name' => 'Asociación Española de Criadores de caballos Angloárabes (AECCAá)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ANCADES',
                'Name' => 'Asociación Nacional de Criadores de Caballos de Deporte Español (ANCADES)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ANCCE',
                'Name' => 'Asociación Nacional de Criadores de Caballos de Pura Raza Española (ANCCE)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ANCGM',
                'Name' => 'Asociación Nacional de Criadores de Ganado Marismeño (ANCGM)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ASCANA',
                'Name' => 'Asociación de criadores de la raza Burguete de Navarra (ASCANA)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ASTROT',
                'Name' => 'Asociación de Criadores y Propietarios de Caballos Trotadores (ASTROT)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ASZAL',
                'Name' => 'Asociación Nacional de Criadores de Ganado Selecto de Raza Asnal Zamorano-Leonés (ASZAL)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-CGAP',
                'Name' => 'Consejería de Ganadería,Agricuctura y Pesca/Asociación Regional Criadores GanadoEquino Raza Monchina',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-CM',
                'Name' => 'Comunidad de Madrid',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-CV',
                'Name' => 'Consell Valencia',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-DAPGV',
                'Name' => 'Departamento de Agricultura y Pesca del Govierno Vasco',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-DCLM',
                'Name' => 'De Castilla-La Mancha',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-DGPA',
                'Name' => 'Dirección General. Produccion Agropecuaria. Junta Castilla-León',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-FECAPI',
                'Name' => 'Federacio d\'Asociacions de Criadors del Cavall Pirinenc Català (FECAPI)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-FHE',
                'Name' => 'Federacion Hipica Espanola',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-FNT',
                'Name' => 'Federación nacional de trote',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GCFBM',
                'Name' => 'Grupo para la Conservación y Fomento del Burro Majorero',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDA',
                'Name' => 'Gobierno de Aragón',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDAs',
                'Name' => 'Gobierno del Principado de Asturias',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDC',
                'Name' => 'Generalitat de Catalunya',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDCa',
                'Name' => 'Gobierno de Canarias',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDCan',
                'Name' => 'Gobierno de Cantabria',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDE',
                'Name' => 'Gobierno de Extremadura',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-GDN',
                'Name' => 'Gobierno de Navarra',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-ITGG',
                'Name' => 'Instituto Técnico de Gestión Ganadero SA',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-JCL',
                'Name' => 'Junta de Castilla y León',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-LRMCCMD',
                'Name' => 'Libro Registro - Matricula Cría Caballar Ministerio de Defensa',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-PV',
                'Name' => 'Pais Vasco',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-RM',
                'Name' => 'Región de Murcia',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-SPG',
                'Name' => 'Servicio de Producción Ganadera',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-UEGHa',
                'Name' => 'Unión Española de Ganaderos de Caballos de Raza Hispano-árabe (UEGHá)',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-UGRAA',
                'Name' => 'Unión de Ganaderos de la Raza Asnal Andaluza',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'ESP-XDG',
                'Name' => 'Xunta de Galicia',
                'CountryCode' => 'ESP',
            ],
            [
                'Code' => 'EST-EHBS',
                'Name' => 'Estonian Horse Breeders Society (Eesti Hobusekasvatajate Selts)',
                'CountryCode' => 'EST',
            ],
            [
                'Code' => 'EST-ESHBS',
                'Name' => 'Estonian Sport Horse Breeders Society (Eesti Sporthobuste Kasvatajate Selts)',
                'CountryCode' => 'EST',
            ],
            [
                'Code' => 'EST-ETA',
                'Name' => 'Estonian Trotters Association (Eesti Traaviliit)',
                'CountryCode' => 'EST',
            ],
            [
                'Code' => 'FEI',
                'Name' => 'FEI - Childrens Classics',
                'CountryCode' => 'SUI',
            ],
            [
                'Code' => 'FIN-SHFTBA',
                'Name' => 'Suomen Hippos ry Finnish Trotting and Breeding Association',
                'CountryCode' => 'FIN',
            ],
            [
                'Code' => 'FRA-IFCE',
                'Name' => 'IFCE',
                'CountryCode' => 'FRA',
            ],
            [
                'Code' => 'FRA-MASH',
                'Name' => 'Ministère de l\'Agriculture, Service des Haras',
                'CountryCode' => 'FRA',
            ],
            [
                'Code' => 'GBR-AES',
                'Name' => 'Anglo-European Studbook Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-AHS',
                'Name' => 'Arab Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-AMHC',
                'Name' => 'American Miniature Horse Club GB',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ApHC',
                'Name' => 'Appaloosa Horse Club (ApHC) UK Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-AQHA',
                'Name' => 'American Quarter Horse Association UK',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ASAG',
                'Name' => 'American Saddlebred Association of Great Britai',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ASAGB',
                'Name' => 'American Saddlebred Association of Great Britain',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ASPSH',
                'Name' => 'British Association for the purebred Spanish Horse Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BAS',
                'Name' => 'British Appaloosa Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BCHS',
                'Name' => 'British Camargue Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BCPS',
                'Name' => 'British Connemara Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BDS',
                'Name' => 'British Driving Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BEF',
                'Name' => 'British Equestrian Federation',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BFS',
                'Name' => 'British Falabella Studbook',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BGS',
                'Name' => 'British Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BHD',
                'Name' => 'British Horse Database',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BHHS',
                'Name' => 'British Hanovarian Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BHRC',
                'Name' => 'British Harness Racing Club',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BMHS',
                'Name' => 'British Miniature Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BMorHS',
                'Name' => 'British Morgan Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BPHS',
                'Name' => 'British Percheron Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BPS',
                'Name' => 'British Palomino Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BSHA',
                'Name' => 'The British Show Horse Association',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BSJA',
                'Name' => 'British Show Jumping Association',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BSPA',
                'Name' => 'British Skewbald & Piebald Association',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BSPS',
                'Name' => 'British Spotted Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-BWS',
                'Name' => 'British Warmblood Society and British Sports Horse Registry',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-CBHS',
                'Name' => 'Cleveland Bay Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-CBS',
                'Name' => 'The Caspian Breed Societ(UK)',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-CHPS',
                'Name' => 'Coloured Horse and Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-CHS',
                'Name' => 'The Caspian Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ClyHS',
                'Name' => 'The Clydesdale Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-DarPS',
                'Name' => 'Dartmoor Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-DB',
                'Name' => 'Donkey Breed',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-DPS',
                'Name' => 'Dales Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-EBS',
                'Name' => 'Breeders Elit Studbook',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-EP',
                'Name' => 'Eriskay Pony (Mother Society) - Comann Each nan Eilean Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-EriPS',
                'Name' => 'Eriskay Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-ExmPS',
                'Name' => 'Exmoor Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-F',
                'Name' => 'Farmkey',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-FHAGBI',
                'Name' => 'Friesian Horse Association of Great Britain and Ireland Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-FHSSL',
                'Name' => 'Fjord Horse Studbook Society Limited',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-FPS',
                'Name' => 'Fell Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-GCS',
                'Name' => 'The Gypsy Cob Society Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HHS',
                'Name' => 'Hackney Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HPA',
                'Name' => 'Horse Passports Agency Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HPAss',
                'Name' => 'Hurlingham Polo Association',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HPLtd',
                'Name' => 'Horse Passports Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HPS',
                'Name' => 'Highland Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-HSGB',
                'Name' => 'Haflinger Society of Great Britain',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-IDHS',
                'Name' => 'The Irish Draught Horse Society (GB)',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-IHSGB',
                'Name' => 'Icelandic Horse Society Of Great Britian',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-IMH',
                'Name' => 'International Miniature Horse and Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-LBSGB',
                'Name' => 'Lusitano Breed Society of Great Britain est 1984',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-LNSA',
                'Name' => 'Lipizzaner National Studbook Association of Great Britain',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-LSGB',
                'Name' => 'Lipizzaner Society of Great Britain',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-NFPB',
                'Name' => 'New Forest Pony Breeding & Cattle Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-NIHBCS',
                'Name' => 'Northern Ireland Horse Board Co-op Society Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-NPS',
                'Name' => 'National Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-O',
                'Name' => 'Oakdale (NI) Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-Oak',
                'Name' => 'Pet ID Equine',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-PHS',
                'Name' => 'The Pleasure Horse Society Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SAI',
                'Name' => 'Showjumping Association of Ireland - Ulster Region',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SF',
                'Name' => 'Selle Francais/EquiCour',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SHBGB',
                'Name' => 'Sport Horse Breeding of Great Britain',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SHS',
                'Name' => 'Shire Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SpoPSS',
                'Name' => 'The Sports Pony Studbook Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SPS',
                'Name' => 'Spotted Pony Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SPSS',
                'Name' => 'Shetland Pony Stud-Book Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SSH',
                'Name' => 'The Scottish Sports Horse',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-STHA',
                'Name' => 'The Standard and Trotting Horse Association of ?Great Britain and Ireland',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-SuffHS',
                'Name' => 'Suffolk Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-TBF',
                'Name' => 'Trakehner Breeders Fraternity',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-UKKA',
                'Name' => 'UK Knabstrupper Association',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-USAUK',
                'Name' => 'United Saddlebred Association UK Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-VHS',
                'Name' => 'Veteran Horse Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-W',
                'Name' => 'Weatherbys main GSB NTR',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-WLtd',
                'Name' => 'Weatherbys (Ireland) Ltd',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-WP',
                'Name' => 'Weatherbys ID passports',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GBR-WPCS',
                'Name' => 'Welsh Pony & Cob Society',
                'CountryCode' => 'GBR',
            ],
            [
                'Code' => 'GER-AHCG',
                'Name' => 'Appaloosa Horse ClubGermany e. V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ASVL',
                'Name' => 'Altmarkkreis Salzwedel, Veterinär-und Lebensmittelüberwachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-BB',
                'Name' => 'Pferdezuchtverband Brandenburg-Anhalt e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-BZKS',
                'Name' => 'Bayerischer Zuchtverbandfür Kleinpferde und Spezialpferderassen e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-DPZV',
                'Name' => 'DPZV Deutscher Pinto Zuchtverband',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-DQHA',
                'Name' => 'Deutsche Quarter HorseAssociation',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-DRV',
                'Name' => 'Deutsche Reiterliche Vereinigung e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-DVR',
                'Name' => 'Direktorium für Vollblutzucht und Rennen',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ECHA/ESV',
                'Name' => 'Europäischer Scheckenzuchtverband (ECHA/ESV)',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-FZ',
                'Name' => 'Friesenpferde Zuchtverband',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-GQHA',
                'Name' => 'German Quarab Horse Association GQHA',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-HLM',
                'Name' => 'Haupt und Landgestüt Marbach',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-HRF',
                'Name' => 'Hessischer Reit- und Fahrverband e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-HT',
                'Name' => 'Hauptverband für Traber-Zucht e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-HV',
                'Name' => 'Hannoveraner Verband e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-HVLQT',
                'Name' => 'Hessischer Verband für Leistungs- und Qualitätsprüfungen in der Tierzucht',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LABV',
                'Name' => 'Landkreis Anhalt-Bitterfeld Veterinäramt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LBP',
                'Name' => 'Landesverband Bayerischer Pferdezüchter e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LBVLU',
                'Name' => 'Landkreis Börde Veterinär- und Lebensmittel-überwachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LBWLT',
                'Name' => 'Landesverband Baden-Württemberg für Leistungsprüfungen in der Tierzucht',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LHAVL',
                'Name' => 'Landkreis Harz Amt für Veterinärwesen und Lebensmittelüberwachung',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LJLFBGV',
                'Name' => 'Landkreis Jerichower Land FB Gesundheits-und Verbraucherschutz',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LMGV',
                'Name' => 'Landeshauptstadt Magdeburg Gesundheits- und Veterinäramt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LMSVL',
                'Name' => 'Landkreis Mansfeld-Südharz Veterinär- u. Lebensmittelüber-wachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LSaaVL',
                'Name' => 'Landkreis Saalekreis Veterinär- und Lebensmittelüberwachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LSVL',
                'Name' => 'Landkreis Stendal Veterinär- und Lebensmittelüberwachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LWFVV',
                'Name' => 'Landkreis Wittenberg Fachdienst Veterinärwesen und Verbraucherschutz',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-LZD',
                'Name' => 'Lipizzaner Zuchtverband Deutschland',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-Pferde',
                'Name' => 'Pferdezuchtverband Baden-Württemberg e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PH',
                'Name' => 'Pferdesportverband Hessen e.V',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PHCG',
                'Name' => 'Paint Horse Club Germany',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PRPS',
                'Name' => 'Pferdezuchtverband Rheinland-Pfalz-Saar e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-Psaar',
                'Name' => 'Pferdesportverband Saar',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PSAn',
                'Name' => 'Pferdzuchtverband Sachsen-Anhalt e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PSHH',
                'Name' => 'Pferdestammbuch Schleswig-Holstein/Hamburg e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PST',
                'Name' => 'Pferdezuchtverband Sachsen-Thüringen e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-PWE',
                'Name' => 'Pferdestammbuch Weser-Ems e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-RP',
                'Name' => 'Rheinisches Pferdestammbuch e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-SDRGVV',
                'Name' => 'Stadt Dessau-Roßlau Gesundheitsamt, Veterinärwesen und Verbraucherschutz',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-SHRGVVL',
                'Name' => 'Stadt Halle Ressort Gesundheitlicher Verbraucherschutz-Veterinär und Lebensmittelüberwachung Kreuzer',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-SKN',
                'Name' => 'Stammbuch für Kaltblutpferde Niedersachsen e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-SOI',
                'Name' => 'Springpferdezuchtverband Oldenburg-International e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-SVLU',
                'Name' => 'Salzlandkreis Veterinär- und Lebensmittel- Überwachungsamt',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-TV',
                'Name' => 'Trakehner Verband/ d.Züchter u.Freunde des Ostpreußischen Warmblutpferdes Trakehner Abstammung e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VFZB',
                'Name' => 'Verein der Freunde und Züchter des Berberpferdes',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VHP',
                'Name' => 'Verband Hessischer Pferdezüchter e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VIT',
                'Name' => 'vit-Vereinigte Informationssysteme Tierhaltung',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VPH',
                'Name' => 'Verband der Pony- und Pferdezüchter Hessen e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VPKH',
                'Name' => 'Verband der Pony- und Kleinpferdezüchter Hannover e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VPMV',
                'Name' => 'Verband der Pferdezüchter Mecklenburg-Vorpommern e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VZFAP',
                'Name' => 'Verband der Züchter und Freunde des Arabischen Pferdes e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VZFDIP',
                'Name' => 'Verband der Züchter und Freunde Deutscher und Internationaler Pferderassen',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VZHP',
                'Name' => 'Verband der Züchter des Holsteiner Pferdes e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-VZOP',
                'Name' => 'Verband der Züchter des Oldenburger Pferdes e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-WP',
                'Name' => 'Westfälisches Pferdestammbuch e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ZDP',
                'Name' => 'Zuchtverband für Deutsche Pferde e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ZOAOP',
                'Name' => 'Zuchtverband für das Ostfriesische und Alt-Oldenburger Pferd e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ZSA',
                'Name' => 'Zuchtverband für Sportpferde Arabischer Abstammung e.V.',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GER-ZSP',
                'Name' => 'Zuchtverband für Senner Pferde',
                'CountryCode' => 'GER',
            ],
            [
                'Code' => 'GRE-HEF',
                'Name' => 'E.O.I. Hellenic Equestrian Federation',
                'CountryCode' => 'GRE',
            ],
            [
                'Code' => 'HUN-HEF',
                'Name' => 'Hungarian Equestrian Federation (until 13.04.2017)',
                'CountryCode' => 'HUN',
            ],
            [
                'Code' => 'HUN-MSHK',
                'Name' => 'Mezogazdasági Szakigazgatási Hivatal Központ (Central Agricultural Office)',
                'CountryCode' => 'HUN',
            ],
            [
                'Code' => 'HUN-NEBH',
                'Name' => 'Nemzeti Élelmiszerlánc-Biztonsági Hivatal (National Food Chain Safety Office)',
                'CountryCode' => 'HUN',
            ],
            [
                'Code' => 'HUN-OMMI',
                'Name' => 'Országos Mezogazdasági Minosíto Intézet (National Institute for Agricultural Quality Control)',
                'CountryCode' => 'HUN',
            ],
            [
                'Code' => 'INA- EFI',
                'Name' => 'Equestrian Federation of Indonesia',
                'CountryCode' => 'INA',
            ],
            [
                'Code' => 'INA-ECI',
                'Name' => 'Equestrian Commission of Indonesia',
                'CountryCode' => 'INA',
            ],
            [
                'Code' => 'IND-EFI',
                'Name' => 'Equestrian Federation of India',
                'CountryCode' => 'IND',
            ],
            [
                'Code' => 'IRL-BES',
                'Name' => 'Breeders Elite Studbook for Irish and European Sport Horses',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-CPBS',
                'Name' => 'Connemara PonyBreeders Society Ltd',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-HPA',
                'Name' => 'Horse PassportAgency Ltd',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-HSI',
                'Name' => 'Horse Sport Ireland',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-ICSL',
                'Name' => 'The Irish Cob Society Limited',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-IHR',
                'Name' => 'Irish Horse Register',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-IPS',
                'Name' => 'The Irish Pony Society',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-IPSA',
                'Name' => 'Irish Piebald & Skewbald Assoc',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-IWS',
                'Name' => 'Warmblood Studbook of Ireland',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-KBPC',
                'Name' => 'Kerry Bog Pony Co -operative Society',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-MHPSI',
                'Name' => 'Miniature Horse andPony Society of Ireland',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'IRL-WILtd',
                'Name' => 'Weatherbys Ireland Ltd',
                'CountryCode' => 'IRL',
            ],
            [
                'Code' => 'ITA-AIA-RAR',
                'Name' => 'AIA-Associazione Italiana Allevatori',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-AIA/LGCL',
                'Name' => 'AIA-Associazione Italiana Allevatori / Libro genealogico cavallo lipizzano',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-ANACAITPR',
                'Name' => 'ANACAITPR-Associazione Nazionale Allevatori del Cavallo Agricolo Italiano da Tiro Pesante Rapido',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-ANACRHAI',
                'Name' => 'ANACRHAI-Associazione Nazionale Allevatori Cavalli di Razza Haflinger',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-ANAM',
                'Name' => 'ANAM-Associazione Nazionale Allevatori Cavallo di Razza Maremmana',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-ANICA',
                'Name' => 'ANICA-Associazione Nazionale Italiana Cavallo Arabo',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-APA',
                'Name' => 'Associazione Provinciale Allevatori (Cavallo bardigiano)',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-ASSI',
                'Name' => 'ASSI - Area Sella',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-FISE',
                'Name' => 'Federazione Italiana Sport Equestri',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-MiPAAF',
                'Name' => 'Ministero Delle Politiche Agricole Alimentari E Forestali',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'ITA-UNIRE',
                'Name' => 'UNIRE–Unione Nazionale Incremento Razze Equine',
                'CountryCode' => 'ITA',
            ],
            [
                'Code' => 'JOR-RJEF',
                'Name' => 'Royal Jordanian Equestrian Federation',
                'CountryCode' => 'JOR',
            ],
            [
                'Code' => 'KOR-KEF',
                'Name' => 'Korean Equestrian Federation',
                'CountryCode' => 'KOR',
            ],
            [
                'Code' => 'KSA-SAEF',
                'Name' => 'Saudi Arabian Equestrian Federation',
                'CountryCode' => 'KSA',
            ],
            [
                'Code' => 'LAT-BLS',
                'Name' => 'Biedriba “Latvijas Škirnes zirgu audzetaju asociacija” Society/“Latvian Horse Breeders Association”',
                'CountryCode' => 'LAT',
            ],
            [
                'Code' => 'LAT-LZB',
                'Name' => 'Latvijas Zirgaudzetaju biedriba / Latvian Horse Breeder Society',
                'CountryCode' => 'LAT',
            ],
            [
                'Code' => 'LTU-BHHSA',
                'Name' => 'The Baltic Hanover Horses Breeders Association/ Baltijos hanoveriu žirgu augintoju asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LAHBA',
                'Name' => 'The Lithuanian Arabian Horse Breeders Association/ Lietuvos arabu arkliu augintoju asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LEA',
                'Name' => 'Lithuanian Equestrian Federation/ Lietuvos žirginio sporto federacija (issued until 2009)',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LHBA',
                'Name' => 'The Lithuanian Horse Breeders Association/ Lietuvos arkliu augintoju asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LHDHBA',
                'Name' => 'The Lithuanian Heavy Draught Horse Breeders Association/Lietuvos sunkiuju arkliu veisles augintoju a',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LTBA',
                'Name' => 'The Lithuanian Trakehner Breeders Association/ Lietuvos trakenu žirgu augintoju asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-LTSA',
                'Name' => 'The Lithuanian Trotter Sport Association/ Lietuvos ristunu sporto asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-NHC',
                'Name' => 'National Horseracing Club/ Nacionalinis žirgu lenktyniu klubas',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-RRHL',
                'Name' => 'The Republic Racing Horse League/ Respublikine ristuniniu žirgu lyga',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-SABSSMA',
                'Name' => 'State Animal Breeding Supervision Service under the Min. of Agriculture/Valstybine gyv. veislin. Pri',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-SECAIRB',
                'Name' => 'SE Center of Agriculture Information and Rural Business/ Žemes ukio informacijos ir kaimo verslo cen',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LTU-ZBA',
                'Name' => 'Zemaitukas Breeders Association/ Žemaituku arkliu augintoju asociacija',
                'CountryCode' => 'LTU',
            ],
            [
                'Code' => 'LUX-ASBL',
                'Name' => 'Lëtzebuerger Ardenner Studbook a.s.b.l.',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-CONVIS',
                'Name' => 'CONVIS Herdbuch Service Elevage et Génétique',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-FLSE',
                'Name' => 'Fédération Luxembourgeoise des Sports Equestres',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-LL',
                'Name' => 'Ieselsfrënn Lëtzebuerg',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-QHAL',
                'Name' => 'Quarter Horse Association Luxembourg',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-SBLCH',
                'Name' => 'Stud-Book Luxembourgeois pour chevaux Haflinger',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-SCSL',
                'Name' => 'Stud-Book du Cheval de Selle Luxembourgeois a.s.b.l. (S.C.S.L.)',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-SLCPS',
                'Name' => 'Studbook luxembourgeois pour chevaux de taille moyenne, poneys et races spéciales',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'LUX-SLCS',
                'Name' => 'Studbook luxembourgeois du cheval de sang',
                'CountryCode' => 'LUX',
            ],
            [
                'Code' => 'MAS-PKPEM',
                'Name' => 'Pasport Kuda Persatuan Ekuestrian Malaysia',
                'CountryCode' => 'MAS',
            ],
            [
                'Code' => 'MEX-FEM',
                'Name' => 'Federacion Ecuestre Mexicana',
                'CountryCode' => 'MEX',
            ],
            [
                'Code' => 'NAM-NEF',
                'Name' => 'FEI Group IX, Namibian Equestrian Federation',
                'CountryCode' => 'NAM',
            ],
            [
                'Code' => 'NED-AVSN',
                'Name' => 'Arabische Volbloedpaarden Stamboek in Nederland',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-EUSAM',
                'Name' => 'Europees Stamboek Amerikaans Miniatuur Paard (EUSAM)',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-FS',
                'Name' => 'Falabella Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-GCDHA',
                'Name' => 'Gypsy Cob and Drum Horse Association-NL',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-HNFS',
                'Name' => 'Het Nederlandse Fjordenpaarden Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-ICS',
                'Name' => 'Irish Cob Society',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-ICSL',
                'Name' => 'The Irish Cob Society Limited',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-IHBAHW',
                'Name' => 'International Horse Breeders Association Heavy Warmbloods',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-KNHS',
                'Name' => 'KNHS Koninklijke Nederlandse Hippische Sportfederatie',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-KVFP',
                'Name' => 'Koninklijke Vereniging het Friesch Paardenstamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-KVHNTH',
                'Name' => 'Koninklijke Vereniging Het Nederlandse Trekpaard en de Haflinger',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-KVWPN',
                'Name' => 'Koninklijke Vereniging Warmbloed Paardenstamboek Nederland',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-LVN',
                'Name' => 'Lipizzanerstamboek Vereniging Nederland (LVN)',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-MSN',
                'Name' => 'Merens Stamboek Nederland',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-NDPS',
                'Name' => 'Nederlands Dartmoor Pony Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-NMPRS',
                'Name' => 'Nederlands Mini Paarden Registratie Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-NQHA',
                'Name' => 'Nederlandse Quarter Horse Association',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-NRP',
                'Name' => 'Nederlands Rijpaarden en-Ponystamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-PSVN',
                'Name' => 'PRE Stamboek Vereniging Nederland',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VGP',
                'Name' => 'Vereniging het Groninger Paard',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNAS',
                'Name' => 'Vereniging het Nederlandse Appaloosa Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNCPS',
                'Name' => 'Vereniging het Nederlands Connemara Pony Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNDR',
                'Name' => 'Vereniging Nederlandse Draf- en Rensport',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNE',
                'Name' => 'Vereniging het Nederlands Ezelstamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNFPS',
                'Name' => 'Vereniging het Nederlands Fell Pony Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNHS',
                'Name' => 'Vereniging het Nederlands Hackney Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNNFPS',
                'Name' => 'Vereniging Nederlands New Forest Pony Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNSIP',
                'Name' => 'Vereniging Nederlands Stamboek voor IJslandse Paarden',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNSPS',
                'Name' => 'Vereniging Nederlands Shetland Pony Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNST',
                'Name' => 'Vereniging het Nederlandse Stamboek voor Tinkers',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-VNWPCS',
                'Name' => 'Vereniging het Nederlandse Welsh Pony en Cob Stamboek',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NED-WPCV',
                'Name' => 'Welsh Pony & Cob Vereniging',
                'CountryCode' => 'NED',
            ],
            [
                'Code' => 'NOR-DNT',
                'Name' => 'Det Norske Travselskap /Norwegian standard breed Norwegian coldblooded trotter',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NA',
                'Name' => 'Norsk Araberhestforening /Arabian horses',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NAHF',
                'Name' => 'NAHFs Shagyaavdeling /Shagya - Arabian horse',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NH',
                'Name' => 'Norsk Hestesenter / Norwegian warmblood,Norwegian Fjord horse,Døle horse, Nordlands-/Lyngshorse',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NI',
                'Name' => 'Norsk Islandshestforening /Icelandic horse',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NJ',
                'Name' => 'Norsk Jockeyklub / English Thoroughbred',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NL',
                'Name' => 'Norsk Lipizzanerforening',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NOR-NP',
                'Name' => 'Norsk Ponniavlsforening/British pony,Welsh Part Bred,Gotland,Sportspony,Miniatyrhest, Spotted Pony',
                'CountryCode' => 'NOR',
            ],
            [
                'Code' => 'NZL-ESNZ',
                'Name' => 'Equestrian Sports New Zealand',
                'CountryCode' => 'NZL',
            ],
            [
                'Code' => 'OMA-OEF',
                'Name' => 'Oman Equestrian Federation',
                'CountryCode' => 'OMA',
            ],
            [
                'Code' => 'PAN-OEP',
                'Name' => 'Organizacion Ecuestre de Panama',
                'CountryCode' => 'PAN',
            ],
            [
                'Code' => 'PAR-FDEP',
                'Name' => 'Federacion de Depotes Ecuestres del Paraguay',
                'CountryCode' => 'PAR',
            ],
            [
                'Code' => 'PER-FPDE',
                'Name' => 'Federacion Peruana de Deportes Ecuestres',
                'CountryCode' => 'PER',
            ],
            [
                'Code' => 'POL-CKA',
                'Name' => 'czysta kre arabska (Pure Breed Arabian) - Polski Klub Wyscigow Konnych (Polish Jockey Club)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-H',
                'Name' => 'huculski - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-K',
                'Name' => 'klusaki-Stowarzyszenie Hodowcow i Uzytkownikow Klusakow (Association Breeders and Users of Trotters)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-KK',
                'Name' => 'kuce i konie male (ponies) - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-KP',
                'Name' => 'konik polski - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-M',
                'Name' => 'malopolska - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-PEF',
                'Name' => 'Polish Equestrian Federation',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-PK',
                'Name' => 'Polish Horse Breeders Association',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-PKA',
                'Name' => 'pelna krew angielska (Thoroughbred) - Polski Klub Wyscigow Konnych (Polish Jockey Club)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-PKSP',
                'Name' => 'polski kon szlachetny polkrwi - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-PKZ',
                'Name' => 'polski kon zimnokrwisty - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-S',
                'Name' => 'slaska - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-SPSI',
                'Name' => 'Shetland pony-Polskie Towarzystwo Kuce Szetlandzkie w Imnie',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-T',
                'Name' => 'Trakehner-Polski Zwiazek Hodowcow i Przyjaciol Wschodniopruskiego Konia Pochodzenia Trakenskiego w',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POL-W',
                'Name' => 'wielkopolska - Polski Zwiazek Hodowcow Koni (Polish Horse Breeders Association)',
                'CountryCode' => 'POL',
            ],
            [
                'Code' => 'POR-MA',
                'Name' => 'Ministério da Agricultura',
                'CountryCode' => 'POR',
            ],
            [
                'Code' => 'QAT-QAHR',
                'Name' => 'Qatar Arabian Horse Registry',
                'CountryCode' => 'QAT',
            ],
            [
                'Code' => 'QAT-QHR',
                'Name' => 'Qatar Horse Registry – Racing & Equestrian Club',
                'CountryCode' => 'QAT',
            ],
            [
                'Code' => 'QAT-QTSB',
                'Name' => 'Qatar Thoroughbred Stud Book – Racing & Equestrian Club',
                'CountryCode' => 'QAT',
            ],
            [
                'Code' => 'ROM- GALATI',
                'Name' => 'OARZ GALATI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-ALBA',
                'Name' => 'OARZ* ALBA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-ARAD',
                'Name' => 'OARZ ARAD',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-ARGES',
                'Name' => 'OARZ ARGES',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BACAU',
                'Name' => 'OARZ BACAU',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BIHOR',
                'Name' => 'OARZ BIHOR',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BISTRIT',
                'Name' => 'OARZ BISTRITANASAUD',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BOTOSANI',
                'Name' => 'OARZ BOTOSANI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BRAILA',
                'Name' => 'OARZ BRAILA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BRASOV',
                'Name' => 'OARZ BRASOV',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BUCURESTI',
                'Name' => 'OARZ BUCURESTI-ILFOV',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-BUZAU',
                'Name' => 'OARZ BUZAU',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-CALARASI',
                'Name' => 'OARZ CALARASI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-CARAS',
                'Name' => 'OARZ CARAS-SEVERIN',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-CLUJ',
                'Name' => 'OARZ CLUJ',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-CONSTANTA',
                'Name' => 'OARZ CONSTANTA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-COVASNA',
                'Name' => 'OARZ COVASNA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-DÂMBOVITA',
                'Name' => 'OARZ DÂMBOVITA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-DOLJ',
                'Name' => 'OARZ DOLJ',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-GIURGIU',
                'Name' => 'OARZ GIURGIU',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-GORJ',
                'Name' => 'OARZ GORJ',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-HARGHITA',
                'Name' => 'OARZ HARGHITA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-HUNEDOARA',
                'Name' => 'OARZ HUNEDOARA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-IALOMITA',
                'Name' => 'OARZ IALOMITA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-IASI',
                'Name' => 'OARZ IASI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-MARAMURES',
                'Name' => 'OARZ MARAMURES',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-MEHEDINTI',
                'Name' => 'OARZ MEHEDINTI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-MURES',
                'Name' => 'OARZ MURES',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-NEAMT',
                'Name' => 'OARZ NEAMT',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-OLT',
                'Name' => 'OARZ OLT',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-PRAHOVA',
                'Name' => 'OARZ PRAHOVA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-SALAJ',
                'Name' => 'OARZ SALAJ',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-SATU-MARE',
                'Name' => 'OARZ SATU-MARE',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-SIBIU',
                'Name' => 'OARZ SIBIU',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-SUCEAVA',
                'Name' => 'OARZ SUCEAVA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-TELEORMAN',
                'Name' => 'OARZ TELEORMAN',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-TIMIS',
                'Name' => 'OARZ TIMIS',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-TULCEA',
                'Name' => 'OARZ TULCEA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-VÂLCEA',
                'Name' => 'OARZ VÂLCEA',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'ROM-VASLUI',
                'Name' => 'OARZ VASLUI',
                'CountryCode' => 'ROU',
            ],
            [
                'Code' => 'RSA-RSA',
                'Name' => 'Southern Africa, FEI Group IX',
                'CountryCode' => 'RSA',
            ],
            [
                'Code' => 'RUS-RASB',
                'Name' => 'Russian Arabian Stud Book',
                'CountryCode' => 'RUS',
            ],
            [
                'Code' => 'RUS-REF',
                'Name' => 'Russian Equestrian Federation (issued since 16/06/2016)',
                'CountryCode' => 'RUS',
            ],
            [
                'Code' => 'RUS-REFO',
                'Name' => 'Russian Equestrian Federation (issued between 01/04/2015 - 16/06/2016)',
                'CountryCode' => 'RUS',
            ],
            [
                'Code' => 'RUS-ROTS',
                'Name' => 'Russian Orlov Trotter Stud Book',
                'CountryCode' => 'RUS',
            ],
            [
                'Code' => 'SLO-LBKL',
                'Name' => 'The Lipizzaner bred - Kobilarna Lipica',
                'CountryCode' => 'SLO',
            ],
            [
                'Code' => 'SLO-VFUL',
                'Name' => 'Veterinarska fakulteta Univerze v Ljubljani',
                'CountryCode' => 'SLO',
            ],
            [
                'Code' => 'SMR-FIS',
                'Name' => 'Federazione Ippica Sammarinese',
                'CountryCode' => 'SMR',
            ],
            [
                'Code' => 'SUI-FM',
                'Name' => 'CH - Franches Montagnes',
                'CountryCode' => 'SUI',
            ],
            [
                'Code' => 'SUI-FSSE',
                'Name' => 'Fédération Suisse des Sports Equestres (updated 1987)',
                'CountryCode' => 'SUI',
            ],
            [
                'Code' => 'SUI-SPE',
                'Name' => 'Swiss passport for Equidae',
                'CountryCode' => 'SUI',
            ],
            [
                'Code' => 'SVK-NZT',
                'Name' => 'Národný žrebcín Topolcianky, š.p. – National stud Topolcianky',
                'CountryCode' => 'SVK',
            ],
            [
                'Code' => 'SVK-SEF',
                'Name' => 'Slovak Equestrian Federation',
                'CountryCode' => 'SVK',
            ],
            [
                'Code' => 'SVK-SHBU',
                'Name' => 'Slovak Horse Breeders Union',
                'CountryCode' => 'SVK',
            ],
            [
                'Code' => 'SVK-ZTD',
                'Name' => 'Závodisko, š.p. – Turf Directorium',
                'CountryCode' => 'SVK',
            ],
            [
                'Code' => 'SWE-AB',
                'Name' => 'Svenska Arabhästregistraturen AB',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-ASA',
                'Name' => 'Avelsföreningen Svenska Ardennerhästen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-ASR',
                'Name' => 'Avelsföreningen för Svensk Ridponny',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-ASVH',
                'Name' => 'Swedish Warmblood Association ASVH',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-FN',
                'Name' => 'Föreningen Nordsvenska Hästen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-RS',
                'Name' => 'Rid- och Sportponnyföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SA',
                'Name' => 'Svenska Åsneföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SACF',
                'Name' => 'Svenska American Curlyhorse-föreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-Sach',
                'Name' => 'Svenska Achaltekeerföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-Sang',
                'Name' => 'Svenska Angloarabföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-Sapp',
                'Name' => 'Svenska Appaloosaföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SASadd',
                'Name' => 'Svenska American Saddlebredföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SB',
                'Name' => 'Svenska Basjkirhästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SCHA',
                'Name' => 'Swedish Caspian Horse Association',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SCS',
                'Name' => 'Svenska Connemara Sällskapet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SD',
                'Name' => 'Svenska Dartmoorsällskapet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SEF',
                'Name' => 'Svenska Exmooravels-föreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SF',
                'Name' => 'Svenska Fjordhästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SFE',
                'Name' => 'Svenska Föreningen för Edelbluthaflinger',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SFIC',
                'Name' => 'Svenska föreningen för Irish Cob',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SG',
                'Name' => 'Svensk Galopp',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SH',
                'Name' => 'Svenska Hästavelsförbundet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-Shafl',
                'Name' => 'Svenska Haflingerföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SI',
                'Name' => 'Svenska Islandshästförbundet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SKF',
                'Name' => 'Svenska Knabstrupper-föreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SL',
                'Name' => 'Svenska Lipizzanerföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-Slusit',
                'Name' => 'Svenska Lusitanosällskapet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SM',
                'Name' => 'Svenska Morganhästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SNF',
                'Name' => 'Svenska New Forestföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SP',
                'Name' => 'Svenska Painthästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SQ',
                'Name' => 'Svenska Quarterhästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SR',
                'Name' => 'Svenska Russavelsföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SS',
                'Name' => 'Sveriges Shetlandssällskap',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SSA',
                'Name' => 'Svenska Shagya-arabföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SSh',
                'Name' => 'Svenska Shirehästföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-ST',
                'Name' => 'Svenska Tinkerhästsällskapet',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-STC',
                'Name' => 'Svenska Travsportens Centralförbund',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-STH',
                'Name' => 'Svensk Tyroler-Haflingeravel',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SWE-SWC',
                'Name' => 'Svenska Welshponny- och Cobföreningen',
                'CountryCode' => 'SWE',
            ],
            [
                'Code' => 'SYR-SEF',
                'Name' => 'Syrian Equestrian Federation',
                'CountryCode' => 'SYR',
            ],
            [
                'Code' => 'THA-TEF',
                'Name' => 'T.E.F. Thailand Equestrian Federation',
                'CountryCode' => 'THA',
            ],
            [
                'Code' => 'TUN-RTMA',
                'Name' => 'Republique Tunisienne Ministere de l’Agriculture (issued since 29/03/2017)',
                'CountryCode' => 'TUN',
            ],
            [
                'Code' => 'TUR-NF',
                'Name' => 'Turkish Equestrian Federation (issued since 08/06/2016)',
                'CountryCode' => 'TUR',
            ],
            [
                'Code' => 'UAE-EAHS',
                'Name' => 'Emirates Arabian Horse Society',
                'CountryCode' => 'UAE',
            ],
            [
                'Code' => 'UAE-EEF',
                'Name' => 'EMIRATES EQUESTRIAN FEDERATION',
                'CountryCode' => 'UAE',
            ],
            [
                'Code' => 'UKR-UEF',
                'Name' => 'Ukrainian Equestrian Federation',
                'CountryCode' => 'UKR',
            ],
            [
                'Code' => 'UKR-UHBA',
                'Name' => 'Ukrainian Horse Breeders Association',
                'CountryCode' => 'UKR',
            ],
            [
                'Code' => 'URU-FUDE',
                'Name' => 'Federacion Uruguaya de Deportes Ecuestres',
                'CountryCode' => 'URU',
            ],
            [
                'Code' => 'USA-USAE',
                'Name' => 'USA Equestrian',
                'CountryCode' => 'USA',
            ],
            [
                'Code' => 'VEN-FVDE',
                'Name' => 'Federacion Venezolana de Deportes Ecuestres',
                'CountryCode' => 'VEN',
            ],
            [
                'Code' => 'ZAM-NEF',
                'Name' => 'FEI Group IX, Zambia National Equestrian Federation',
                'CountryCode' => 'ZAM',
            ],
            [
                'Code' => 'ZIM-NEF',
                'Name' => 'FEI Group IX, Zimbabwe Equestrian Federation',
                'CountryCode' => 'ZIM',
            ],
        ];
    }
}
