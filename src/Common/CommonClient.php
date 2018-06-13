<?php

namespace FEIWebServicesClient\Common;

use FEIWebServicesClient\Common\Types\GetAdditionalRoleList;
use FEIWebServicesClient\Common\Types\GetAdditionalRoleListResponse;
use FEIWebServicesClient\Common\Types\GetAddressNameList;
use FEIWebServicesClient\Common\Types\GetAddressNameListResponse;
use FEIWebServicesClient\Common\Types\GetCategoryList;
use FEIWebServicesClient\Common\Types\GetCategoryListResponse;
use FEIWebServicesClient\Common\Types\GetCountryList;
use FEIWebServicesClient\Common\Types\GetCountryListResponse;
use FEIWebServicesClient\Common\Types\GetDisciplineList;
use FEIWebServicesClient\Common\Types\GetDisciplineListResponse;
use FEIWebServicesClient\Common\Types\GetDocIssuingBodyList;
use FEIWebServicesClient\Common\Types\GetDocIssuingBodyListResponse;
use FEIWebServicesClient\Common\Types\GetDocumentTypeList;
use FEIWebServicesClient\Common\Types\GetDocumentTypeListResponse;
use FEIWebServicesClient\Common\Types\GetHorseFEIIDTypeList;
use FEIWebServicesClient\Common\Types\GetHorseFEIIDTypeListResponse;
use FEIWebServicesClient\Common\Types\GetHorseGenderList;
use FEIWebServicesClient\Common\Types\GetHorseGenderListResponse;
use FEIWebServicesClient\Common\Types\GetHorseNameKindChangeList;
use FEIWebServicesClient\Common\Types\GetHorseNameKindChangeListResponse;
use FEIWebServicesClient\Common\Types\GetLanguageList;
use FEIWebServicesClient\Common\Types\GetLanguageListResponse;
use FEIWebServicesClient\Common\Types\GetLeagueList;
use FEIWebServicesClient\Common\Types\GetLeagueListResponse;
use FEIWebServicesClient\Common\Types\GetLookupDateList;
use FEIWebServicesClient\Common\Types\GetLookupDateListResponse;
use FEIWebServicesClient\Common\Types\GetMessageTypeList;
use FEIWebServicesClient\Common\Types\GetMessageTypeListResponse;
use FEIWebServicesClient\Common\Types\GetNationalFederationList;
use FEIWebServicesClient\Common\Types\GetNationalFederationListResponse;
use FEIWebServicesClient\Common\Types\GetOfficialFunctionList;
use FEIWebServicesClient\Common\Types\GetOfficialFunctionListResponse;
use FEIWebServicesClient\Common\Types\GetOfficialStatusList;
use FEIWebServicesClient\Common\Types\GetOfficialStatusListResponse;
use FEIWebServicesClient\Common\Types\GetPersonCivilityList;
use FEIWebServicesClient\Common\Types\GetPersonCivilityListResponse;
use FEIWebServicesClient\Common\Types\GetPersonGenderList;
use FEIWebServicesClient\Common\Types\GetPersonGenderListResponse;
use FEIWebServicesClient\Common\Types\GetSeasonList;
use FEIWebServicesClient\Common\Types\GetSeasonListResponse;
use FEIWebServicesClient\Common\Types\GetVersion;
use FEIWebServicesClient\Common\Types\GetVersionResponse;

class CommonClient extends \Phpro\SoapClient\Client
{
    public function setCookie(string $name, string $value): void
    {
        $this->soapClient->__setCookie($name, $value);
    }

    public function getVersion(): getVersionResponse
    {
        return $this->call('getVersion', new GetVersion());
    }

    public function getLookupDateList(): getLookupDateListResponse
    {
        return $this->call('getLookupDateList', new getLookupDateList());
    }

    public function getCountryList(): getCountryListResponse
    {
        return $this->call('getCountryList', new getCountryList());
    }

    public function getDisciplineList(): getDisciplineListResponse
    {
        return $this->call('getDisciplineList', new getDisciplineList());
    }

    public function getDocIssuingBodyList(): getDocIssuingBodyListResponse
    {
        return $this->call('getDocIssuingBodyList', new getDocIssuingBodyList());
    }

    public function getNationalFederationList(): getNationalFederationListResponse
    {
        return $this->call('getNationalFederationList', new getNationalFederationList());
    }

    public function getDocumentTypeList(): getDocumentTypeListResponse
    {
        return $this->call('getDocumentTypeList', new getDocumentTypeList());
    }

    public function getHorseNameKindChangeList(): getHorseNameKindChangeListResponse
    {
        return $this->call('getHorseNameKindChangeList', new getHorseNameKindChangeList());
    }

    public function getLanguageList(): getLanguageListResponse
    {
        return $this->call('getLanguageList', new getLanguageList());
    }

    public function getCategoryList(): getCategoryListResponse
    {
        return $this->call('getCategoryList', new getCategoryList());
    }

    public function getAddressNameList(): getAddressNameListResponse
    {
        return $this->call('getAddressNameList', new getAddressNameList());
    }

    public function getHorseGenderList(): getHorseGenderListResponse
    {
        return $this->call('getHorseGenderList', new getHorseGenderList());
    }

    public function getHorseFEIIDTypeList(): getHorseFEIIDTypeListResponse
    {
        return $this->call('getHorseFEIIDTypeList', new getHorseFEIIDTypeList());
    }

    public function getMessageTypeList(): getMessageTypeListResponse
    {
        return $this->call('getMessageTypeList', new getMessageTypeList());
    }

    public function getAdditionalRoleList(): getAdditionalRoleListResponse
    {
        return $this->call('getAdditionalRoleList', new getAdditionalRoleList());
    }

    public function getOfficialFunctionList(): getOfficialFunctionListResponse
    {
        return $this->call('getOfficialFunctionList', new getOfficialFunctionList());
    }

    public function getOfficialStatusList(): getOfficialStatusListResponse
    {
        return $this->call('getOfficialStatusList', new getOfficialStatusList());
    }

    public function getPersonGenderList(): getPersonGenderListResponse
    {
        return $this->call('getPersonGenderList', new getPersonGenderList());
    }

    public function getPersonCivilityList(): getPersonCivilityListResponse
    {
        return $this->call('getPersonCivilityList', new getPersonCivilityList());
    }

    public function getSeasonList(): getSeasonListResponse
    {
        return $this->call('getSeasonList', new getSeasonList());
    }

    public function getLeagueList(): getLeagueListResponse
    {
        return $this->call('getLeagueList', new getLeagueList());
    }
}
