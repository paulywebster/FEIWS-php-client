<?php

namespace FEIWebServicesClient\Shared\Types;

use Assert\Assert;
use Symfony\Component\Intl\Intl;
use Symfony\Component\Intl\Locale;

class Country
{
    private $isoAlpha2Code;
    private $feiCode;

    private function __construct(string $isoAlpha2Code)
    {
        Assert::that($isoAlpha2Code)->inArray(array_keys(Intl::getRegionBundle()->getCountryNames()));
        $this->isoAlpha2Code = $isoAlpha2Code;
        $this->feiCode = self::getFEICodeFromISO3166_1Alpha_2Format()[$isoAlpha2Code];
    }

    public static function fromString(string $countryString): self
    {
        if(\strlen($countryString) === 2){
            return self::fromISO3166_1Alpha_2Format($countryString);
        }
        if(\strlen($countryString) === 3){
            return self::fromFEICode($countryString);
        }

        $countryList = Intl::getRegionBundle()->getCountryNames();
        Assert::that($countryString)->inArray($countryList);

        return self::fromISO3166_1Alpha_2Format(array_search($countryString, $countryList));
    }

    public static function fromISO3166_1Alpha_2Format(string $isoAlpha2Code): self
    {
        Assert::that($isoAlpha2Code)->regex('#[A-Z]{2}#');

        return new self($isoAlpha2Code);
    }

    public static function fromFEICode(string $feiCode): self
    {
        Assert::that($feiCode)
            ->regex('#[A-Z]{3}#')
            ->inArray(self::getFEICodeFromISO3166_1Alpha_2Format())
        ;
        $flipped = array_flip(self::getFEICodeFromISO3166_1Alpha_2Format());

        return new self($flipped[$feiCode]);
    }

    public function ISO3166_1Alpha_2Code(): string
    {
        return $this->isoAlpha2Code;
    }

    public function FEIcode(): string
    {
        return $this->feiCode;
    }

    public function name($locale = 'en'): string
    {
        return Intl::getRegionBundle()->getCountryName($this->isoAlpha2Code, $locale);
    }

    private static function getFEICodeFromISO3166_1Alpha_2Format(): array
    {
        return [
                'AF' => 'AFG',
                'AL' => 'ALB',
                'DZ' => 'ALG',
                'AD' => 'AND',
                'AO' => 'ANG',
                'AG' => 'ANT',
                'AR' => 'ARG',
                'AM' => 'ARM',
                'AW' => 'ARU',
                'AS' => 'ASA',
                'AU' => 'AUS',
                'AT' => 'AUT',
                'AZ' => 'AZE',
                'BS' => 'BAH',
                'BD' => 'BAN',
                'BB' => 'BAR',
                'BI' => 'BDI',
                'BE' => 'BEL',
                'BJ' => 'BEN',
                'BM' => 'BER',
                'BT' => 'BHU',
                'BA' => 'BIH',
                'BZ' => 'BIZ',
                'BY' => 'BLR',
                'BO' => 'BOL',
                'BW' => 'BOT',
                'BR' => 'BRA',
                'BH' => 'BRN',
                'BN' => 'BRU',
                'BG' => 'BUL',
                'BF' => 'BUR',
                'CF' => 'CAF',
                'KH' => 'CAM',
                'CA' => 'CAN',
                'KY' => 'CAY',
                'CG' => 'CGO',
                'TD' => 'CHA',
                'CL' => 'CHI',
                'CN' => 'CHN',
                'CI' => 'CIV',
                'CM' => 'CMR',
                'CD' => 'COD',
                'CK' => 'COK',
                'CO' => 'COL',
                'KM' => 'COM',
                'CV' => 'CPV',
                'CR' => 'CRC',
                'HR' => 'CRO',
                'CU' => 'CUB',
                'CY' => 'CYP',
                'CZ' => 'CZE',
                'DK' => 'DEN',
                'DJ' => 'DJI',
                'DM' => 'DMA',
                'DO' => 'DOM',
                'EC' => 'ECU',
                'EG' => 'EGY',
                'ER' => 'ERI',
                'SV' => 'ESA',
                'ES' => 'ESP',
                'EE' => 'EST',
                'ET' => 'ETH',
                'FJ' => 'FIJ',
                'FI' => 'FIN',
                'FR' => 'FRA',
                'FM' => 'FSM',
                'GA' => 'GAB',
                'GM' => 'GAM',
                'GB' => 'GBR',
                'GW' => 'GBS',
                'GE' => 'GEO',
                'GQ' => 'GEQ',
                'DE' => 'GER',
                'GH' => 'GHA',
                'GR' => 'GRE',
                'GD' => 'GRN',
                'GT' => 'GUA',
                'GN' => 'GUI',
                'GU' => 'GUM',
                'GY' => 'GUY',
                'HT' => 'HAI',
                'HK' => 'HKG',
                'HN' => 'HON',
                'HU' => 'HUN',
                'ID' => 'INA',
                'IN' => 'IND',
                'IR' => 'IRI',
                'IE' => 'IRL',
                'IQ' => 'IRQ',
                'IS' => 'ISL',
                'IL' => 'ISR',
                'VI' => 'ISV',
                'IT' => 'ITA',
                'VG' => 'IVB',
                'JM' => 'JAM',
                'JO' => 'JOR',
                'JP' => 'JPN',
                'KZ' => 'KAZ',
                'KE' => 'KEN',
                'KG' => 'KGZ',
                'KI' => 'KIR',
                'KR' => 'KOR',
                'SA' => 'KSA',
                'KW' => 'KUW',
                'LA' => 'LAO',
                'LV' => 'LAT',
                'LY' => 'LBA',
                'LB' => 'LBN',
                'LR' => 'LBR',
                'LC' => 'LCA',
                'LS' => 'LES',
                'LI' => 'LIE',
                'LT' => 'LTU',
                'LU' => 'LUX',
                'MG' => 'MAD',
                'MA' => 'MAR',
                'MY' => 'MAS',
                'MW' => 'MAW',
                'MD' => 'MDA',
                'MV' => 'MDV',
                'MX' => 'MEX',
                'MN' => 'MGL',
                'MH' => 'MHL',
                'MK' => 'MKD',
                'ML' => 'MLI',
                'MT' => 'MLT',
                'ME' => 'MNE',
                'MC' => 'MON',
                'MZ' => 'MOZ',
                'MU' => 'MRI',
                'MR' => 'MTN',
                'MM' => 'MYA',
                'NA' => 'NAM',
                'NI' => 'NCA',
                'NL' => 'NED',
                'NP' => 'NEP',
                'NG' => 'NGR',
                'NE' => 'NIG',
                'NO' => 'NOR',
                'NR' => 'NRU',
                'NZ' => 'NZL',
                'OM' => 'OMA',
                'PK' => 'PAK',
                'PA' => 'PAN',
                'PY' => 'PAR',
                'PE' => 'PER',
                'PH' => 'PHI',
                'PS' => 'PLE',
                'PW' => 'PLW',
                'PG' => 'PNG',
                'PL' => 'POL',
                'PT' => 'POR',
                'KP' => 'PRK',
                'PR' => 'PUR',
                'QA' => 'QAT',
                'RO' => 'ROU',
                'ZA' => 'RSA',
                'RU' => 'RUS',
                'RW' => 'RWA',
                'WS' => 'SAM',
                'SN' => 'SEN',
                'SC' => 'SEY',
                'SG' => 'SGP',
                'KN' => 'SKN',
                'SL' => 'SLE',
                'SI' => 'SLO',
                'SM' => 'SMR',
                'SB' => 'SOL',
                'SO' => 'SOM',
                'RS' => 'SRB',
                'LK' => 'SRI',
                'ST' => 'STP',
                'SD' => 'SUD',
                'CH' => 'SUI',
                'SR' => 'SUR',
                'SK' => 'SVK',
                'SE' => 'SWE',
                'SZ' => 'SWZ',
                'SY' => 'SYR',
                'TZ' => 'TAN',
                'TO' => 'TGA',
                'TH' => 'THA',
                'TJ' => 'TJK',
                'TM' => 'TKM',
                'TL' => 'TLS',
                'TG' => 'TOG',
                'TW' => 'TPE',
                'TT' => 'TRI',
                'TN' => 'TUN',
                'TR' => 'TUR',
                'TV' => 'TUV',
                'AE' => 'UAE',
                'UG' => 'UGA',
                'UA' => 'UKR',
                'UY' => 'URU',
                'US' => 'USA',
                'UZ' => 'UZB',
                'VU' => 'VAN',
                'VE' => 'VEN',
                'VN' => 'VIE',
                'VC' => 'VIN',
                'YE' => 'YEM',
                'ZM' => 'ZAM',
                'ZW' => 'ZIM',
        ];
    }
}
