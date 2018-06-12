<?php

namespace FEIWebServicesClient\Common\ClassMap;

use FEIWebServicesClient\Common\Types as Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class CommonWSClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('getVersion', Type\GetVersion::class),
            new ClassMap('getVersionResponse', Type\GetVersionResponse::class),
            new ClassMap('AuthHeader', Type\AuthHeader::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('getLookupDateList', Type\GetLookupDateList::class),
            new ClassMap('getLookupDateListResponse', Type\GetLookupDateListResponse::class),
            new ClassMap('ArrayOfLookupDate', Type\ArrayOfLookupDate::class),
            new ClassMap('LookupDate', Type\LookupDate::class),
            new ClassMap('getCountryList', Type\GetCountryList::class),
            new ClassMap('getCountryListResponse', Type\GetCountryListResponse::class),
            new ClassMap('ArrayOfCountry', Type\ArrayOfCountry::class),
            new ClassMap('Country', Type\Country::class),
            new ClassMap('getDisciplineList', Type\GetDisciplineList::class),
            new ClassMap('getDisciplineListResponse', Type\GetDisciplineListResponse::class),
            new ClassMap('ArrayOfDiscipline', Type\ArrayOfDiscipline::class),
            new ClassMap('Discipline', Type\Discipline::class),
            new ClassMap('getDocIssuingBodyList', Type\GetDocIssuingBodyList::class),
            new ClassMap('getDocIssuingBodyListResponse', Type\GetDocIssuingBodyListResponse::class),
            new ClassMap('ArrayOfDocIssuingBody', Type\ArrayOfDocIssuingBody::class),
            new ClassMap('DocIssuingBody', Type\DocIssuingBody::class),
            new ClassMap('getNationalFederationList', Type\GetNationalFederationList::class),
            new ClassMap('getNationalFederationListResponse', Type\GetNationalFederationListResponse::class),
            new ClassMap('ArrayOfNationalFederation', Type\ArrayOfNationalFederation::class),
            new ClassMap('NationalFederation', Type\NationalFederation::class),
            new ClassMap('getDocumentTypeList', Type\GetDocumentTypeList::class),
            new ClassMap('getDocumentTypeListResponse', Type\GetDocumentTypeListResponse::class),
            new ClassMap('ArrayOfDocumentType', Type\ArrayOfDocumentType::class),
            new ClassMap('DocumentType', Type\DocumentType::class),
            new ClassMap('getHorseNameKindChangeList', Type\GetHorseNameKindChangeList::class),
            new ClassMap('getHorseNameKindChangeListResponse', Type\GetHorseNameKindChangeListResponse::class),
            new ClassMap('ArrayOfKindChange', Type\ArrayOfKindChange::class),
            new ClassMap('KindChange', Type\KindChange::class),
            new ClassMap('getLanguageList', Type\GetLanguageList::class),
            new ClassMap('getLanguageListResponse', Type\GetLanguageListResponse::class),
            new ClassMap('ArrayOfLanguage', Type\ArrayOfLanguage::class),
            new ClassMap('Language', Type\Language::class),
            new ClassMap('getCategoryList', Type\GetCategoryList::class),
            new ClassMap('getCategoryListResponse', Type\GetCategoryListResponse::class),
            new ClassMap('ArrayOfCategory', Type\ArrayOfCategory::class),
            new ClassMap('Category', Type\Category::class),
            new ClassMap('getAddressNameList', Type\GetAddressNameList::class),
            new ClassMap('getAddressNameListResponse', Type\GetAddressNameListResponse::class),
            new ClassMap('ArrayOfAddressName', Type\ArrayOfAddressName::class),
            new ClassMap('AddressName', Type\AddressName::class),
            new ClassMap('getHorseGenderList', Type\GetHorseGenderList::class),
            new ClassMap('getHorseGenderListResponse', Type\GetHorseGenderListResponse::class),
            new ClassMap('ArrayOfGender', Type\ArrayOfGender::class),
            new ClassMap('Gender', Type\Gender::class),
            new ClassMap('getHorseFEIIDTypeList', Type\GetHorseFEIIDTypeList::class),
            new ClassMap('getHorseFEIIDTypeListResponse', Type\GetHorseFEIIDTypeListResponse::class),
            new ClassMap('ArrayOfFEIIDType', Type\ArrayOfFEIIDType::class),
            new ClassMap('FEIIDType', Type\FEIIDType::class),
            new ClassMap('getMessageTypeList', Type\GetMessageTypeList::class),
            new ClassMap('getMessageTypeListResponse', Type\GetMessageTypeListResponse::class),
            new ClassMap('ArrayOfMessageType', Type\ArrayOfMessageType::class),
            new ClassMap('MessageType', Type\MessageType::class),
            new ClassMap('getAdditionalRoleList', Type\GetAdditionalRoleList::class),
            new ClassMap('getAdditionalRoleListResponse', Type\GetAdditionalRoleListResponse::class),
            new ClassMap('ArrayOfAdditionalRole', Type\ArrayOfAdditionalRole::class),
            new ClassMap('AdditionalRole', Type\AdditionalRole::class),
            new ClassMap('getOfficialFunctionList', Type\GetOfficialFunctionList::class),
            new ClassMap('getOfficialFunctionListResponse', Type\GetOfficialFunctionListResponse::class),
            new ClassMap('ArrayOfOfficialFunction', Type\ArrayOfOfficialFunction::class),
            new ClassMap('OfficialFunction', Type\OfficialFunction::class),
            new ClassMap('getOfficialStatusList', Type\GetOfficialStatusList::class),
            new ClassMap('getOfficialStatusListResponse', Type\GetOfficialStatusListResponse::class),
            new ClassMap('ArrayOfOfficialStatus', Type\ArrayOfOfficialStatus::class),
            new ClassMap('OfficialStatus', Type\OfficialStatus::class),
            new ClassMap('getPersonGenderList', Type\GetPersonGenderList::class),
            new ClassMap('getPersonGenderListResponse', Type\GetPersonGenderListResponse::class),
            new ClassMap('getPersonCivilityList', Type\GetPersonCivilityList::class),
            new ClassMap('getPersonCivilityListResponse', Type\GetPersonCivilityListResponse::class),
            new ClassMap('ArrayOfCivility', Type\ArrayOfCivility::class),
            new ClassMap('Civility', Type\Civility::class),
            new ClassMap('getSeasonList', Type\GetSeasonList::class),
            new ClassMap('getSeasonListResponse', Type\GetSeasonListResponse::class),
            new ClassMap('ArrayOfMessage', Type\ArrayOfMessage::class),
            new ClassMap('Message', Type\Message::class),
            new ClassMap('getLeagueList', Type\GetLeagueList::class),
            new ClassMap('getLeagueListResponse', Type\GetLeagueListResponse::class),
            new ClassMap('ArrayOfLeague', Type\ArrayOfLeague::class),
            new ClassMap('League', Type\League::class),
        ]);
    }


}

