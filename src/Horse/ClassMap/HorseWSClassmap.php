<?php

namespace FEIWebServicesClient\Horse\ClassMap;

use FEIWebServicesClient\Horse\Types as Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class HorseWSClassmap
{
    public static function getCollection(): \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('getAdminChangeReasonList', Type\GetAdminChangeReasonList::class),
            new ClassMap('getAdminChangeReasonListResponse', Type\GetAdminChangeReasonListResponse::class),
            new ClassMap('ArrayOfAdminChangeReasonHorse', Type\ArrayOfAdminChangeReasonHorse::class),
            new ClassMap('AdminChangeReasonHorse', Type\AdminChangeReasonHorse::class),
            new ClassMap('AuthHeader', Type\AuthHeader::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('getAdminChangeStatusList', Type\GetAdminChangeStatusList::class),
            new ClassMap('getAdminChangeStatusListResponse', Type\GetAdminChangeStatusListResponse::class),
            new ClassMap('ArrayOfAdminChangeStatusHorse', Type\ArrayOfAdminChangeStatusHorse::class),
            new ClassMap('AdminChangeStatusHorse', Type\AdminChangeStatusHorse::class),
            new ClassMap('getHorseColorList', Type\GetHorseColorList::class),
            new ClassMap('getHorseColorListResponse', Type\GetHorseColorListResponse::class),
            new ClassMap('ArrayOfHorseColor', Type\ArrayOfHorseColor::class),
            new ClassMap('HorseColor', Type\HorseColor::class),
            new ClassMap('getStudBookList', Type\GetStudBookList::class),
            new ClassMap('getStudBookListResponse', Type\GetStudBookListResponse::class),
            new ClassMap('ArrayOfStudBook', Type\ArrayOfStudBook::class),
            new ClassMap('StudBook', Type\StudBook::class),
            new ClassMap('getHorse', Type\GetHorse::class),
            new ClassMap('getHorseResponse', Type\GetHorseResponse::class),
            new ClassMap('Horse', Type\Horse::class),
            new ClassMap('HorseTrainer', Type\HorseTrainer::class),
            new ClassMap('ArrayOfMessage', Type\ArrayOfMessage::class),
            new ClassMap('Message', Type\Message::class),
            new ClassMap('getHorses', Type\GetHorses::class),
            new ClassMap('getHorsesResponse', Type\GetHorsesResponse::class),
            new ClassMap('ArrayOfHorse', Type\ArrayOfHorse::class),
            new ClassMap('searchForHorseAlt', Type\SearchForHorseAlt::class),
            new ClassMap('ArrayOfSearchCriteria', Type\ArrayOfSearchCriteria::class),
            new ClassMap('SearchCriteria', Type\SearchCriteria::class),
            new ClassMap('searchForHorseAltResponse', Type\SearchForHorseAltResponse::class),
            new ClassMap('searchForHorse', Type\SearchForHorse::class),
            new ClassMap('ArrayOfSCBase', Type\ArrayOfSCBase::class),
            new ClassMap('SCBase', Type\SCBase::class),
            new ClassMap('searchForHorseResponse', Type\SearchForHorseResponse::class),
            new ClassMap('searchHorseTrainers', Type\SearchHorseTrainers::class),
            new ClassMap('searchHorseTrainersResponse', Type\SearchHorseTrainersResponse::class),
            new ClassMap('ArrayOfHorseTrainer', Type\ArrayOfHorseTrainer::class),
            new ClassMap('addHorse', Type\AddHorse::class),
            new ClassMap('HorseNew', Type\HorseNew::class),
            new ClassMap('HorseOwnership', Type\HorseOwnership::class),
            new ClassMap('ValidatableEntityFacadeOfHORSE_OWNER', Type\ValidatableEntityFacadeOfHORSE_OWNER::class),
            new ClassMap('BaseEntityFacadeOfHORSE_OWNER', Type\BaseEntityFacadeOfHORSE_OWNER::class),
            new ClassMap('ArrayOfHorseOwnershipMember', Type\ArrayOfHorseOwnershipMember::class),
            new ClassMap('HorseOwnershipMember', Type\HorseOwnershipMember::class),
            new ClassMap('ValidatableEntityFacadeOfHORSE_OWNER_MEMBER', Type\ValidatableEntityFacadeOfHORSE_OWNER_MEMBER::class),
            new ClassMap('BaseEntityFacadeOfHORSE_OWNER_MEMBER', Type\BaseEntityFacadeOfHORSE_OWNER_MEMBER::class),
            new ClassMap('Address', Type\Address::class),
            new ClassMap('ValidatableEntityFacadeOfADDRESS', Type\ValidatableEntityFacadeOfADDRESS::class),
            new ClassMap('BaseEntityFacadeOfADDRESS', Type\BaseEntityFacadeOfADDRESS::class),
            new ClassMap('addHorseResponse', Type\AddHorseResponse::class),
            new ClassMap('ArrayOfHorseDuplicate', Type\ArrayOfHorseDuplicate::class),
            new ClassMap('HorseDuplicate', Type\HorseDuplicate::class),
            new ClassMap('updateHorse', Type\UpdateHorse::class),
            new ClassMap('updateHorseResponse', Type\UpdateHorseResponse::class),
            new ClassMap('addHorseNoviceQualification', Type\AddHorseNoviceQualification::class),
            new ClassMap('ArrayOfEnduranceNationalResult', Type\ArrayOfEnduranceNationalResult::class),
            new ClassMap('EnduranceNationalResult', Type\EnduranceNationalResult::class),
            new ClassMap('ValidatableEntityFacadeOfENDURANCE_NATIONAL_RESULT', Type\ValidatableEntityFacadeOfENDURANCE_NATIONAL_RESULT::class),
            new ClassMap('BaseEntityFacadeOfENDURANCE_NATIONAL_RESULT', Type\BaseEntityFacadeOfENDURANCE_NATIONAL_RESULT::class),
            new ClassMap('addHorseNoviceQualificationResponse', Type\AddHorseNoviceQualificationResponse::class),
            new ClassMap('updateHorseNoviceQualification', Type\UpdateHorseNoviceQualification::class),
            new ClassMap('updateHorseNoviceQualificationResponse', Type\UpdateHorseNoviceQualificationResponse::class),
            new ClassMap('deleteHorseNoviceQualification', Type\DeleteHorseNoviceQualification::class),
            new ClassMap('deleteHorseNoviceQualificationResponse', Type\DeleteHorseNoviceQualificationResponse::class),
            new ClassMap('getHorseCurrentNoviceQualification', Type\GetHorseCurrentNoviceQualification::class),
            new ClassMap('getHorseCurrentNoviceQualificationResponse', Type\GetHorseCurrentNoviceQualificationResponse::class),
            new ClassMap('getHorseNameHistoryList', Type\GetHorseNameHistoryList::class),
            new ClassMap('getHorseNameHistoryListResponse', Type\GetHorseNameHistoryListResponse::class),
            new ClassMap('ArrayOfHorseName', Type\ArrayOfHorseName::class),
            new ClassMap('HorseName', Type\HorseName::class),
            new ClassMap('changeHorseName', Type\ChangeHorseName::class),
            new ClassMap('changeHorseNameResponse', Type\ChangeHorseNameResponse::class),
            new ClassMap('getHorseRegistrationList', Type\GetHorseRegistrationList::class),
            new ClassMap('getHorseRegistrationListResponse', Type\GetHorseRegistrationListResponse::class),
            new ClassMap('ArrayOfHorseRegistration', Type\ArrayOfHorseRegistration::class),
            new ClassMap('HorseRegistration', Type\HorseRegistration::class),
            new ClassMap('getHorseRegistrationYearList', Type\GetHorseRegistrationYearList::class),
            new ClassMap('getHorseRegistrationYearListResponse', Type\GetHorseRegistrationYearListResponse::class),
            new ClassMap('registerHorse', Type\RegisterHorse::class),
            new ClassMap('registerHorseResponse', Type\RegisterHorseResponse::class),
            new ClassMap('addTrainerToHorse', Type\AddTrainerToHorse::class),
            new ClassMap('addTrainerToHorseResponse', Type\AddTrainerToHorseResponse::class),
            new ClassMap('upgradeHorsePassport', Type\UpgradeHorsePassport::class),
            new ClassMap('upgradeHorsePassportResponse', Type\UpgradeHorsePassportResponse::class),
            new ClassMap('upgradeHorseRecognitionCard', Type\UpgradeHorseRecognitionCard::class),
            new ClassMap('upgradeHorseRecognitionCardResponse', Type\UpgradeHorseRecognitionCardResponse::class),
            new ClassMap('requestAdministrationChange', Type\RequestAdministrationChange::class),
            new ClassMap('requestAdministrationChangeResponse', Type\RequestAdministrationChangeResponse::class),
            new ClassMap('uploadHorseDiagram', Type\UploadHorseDiagram::class),
            new ClassMap('uploadHorseDiagramResponse', Type\UploadHorseDiagramResponse::class),
            new ClassMap('uploadHorseDocument', Type\UploadHorseDocument::class),
            new ClassMap('uploadHorseDocumentResponse', Type\UploadHorseDocumentResponse::class),
            new ClassMap('downloadHorseDiagram', Type\DownloadHorseDiagram::class),
            new ClassMap('downloadHorseDiagramResponse', Type\DownloadHorseDiagramResponse::class),
            new ClassMap('downloadHorseSticker', Type\DownloadHorseSticker::class),
            new ClassMap('downloadHorseStickerResponse', Type\DownloadHorseStickerResponse::class),
            new ClassMap('confirmAddHorse', Type\ConfirmAddHorse::class),
            new ClassMap('confirmAddHorseResponse', Type\ConfirmAddHorseResponse::class),
            new ClassMap('confirmUpdateHorse', Type\ConfirmUpdateHorse::class),
            new ClassMap('confirmUpdateHorseResponse', Type\ConfirmUpdateHorseResponse::class),
            new ClassMap('confirmChangeHorseName', Type\ConfirmChangeHorseName::class),
            new ClassMap('confirmChangeHorseNameResponse', Type\ConfirmChangeHorseNameResponse::class),
            new ClassMap('getHorseOwner', Type\GetHorseOwner::class),
            new ClassMap('getHorseOwnerResponse', Type\GetHorseOwnerResponse::class),
            new ClassMap('HorseOwner', Type\HorseOwner::class),
            new ClassMap('assignHorseOwner', Type\AssignHorseOwner::class),
            new ClassMap('assignHorseOwnerResponse', Type\AssignHorseOwnerResponse::class),
            new ClassMap('getHorseOwnership', Type\GetHorseOwnership::class),
            new ClassMap('getHorseOwnershipResponse', Type\GetHorseOwnershipResponse::class),
            new ClassMap('assignHorseOwnership', Type\AssignHorseOwnership::class),
            new ClassMap('assignHorseOwnershipResponse', Type\AssignHorseOwnershipResponse::class),
            new ClassMap('SearchClassesHelper', Type\SearchClassesHelper::class),
            new ClassMap('SearchClasses', Type\SearchClasses::class),
            new ClassMap('SCHorseAnyID', Type\SCHorseAnyID::class),
            new ClassMap('SCHorseName', Type\SCHorseName::class),
            new ClassMap('SCHorseInclHistNames', Type\SCHorseInclHistNames::class),
            new ClassMap('SCHorsePony', Type\SCHorsePony::class),
            new ClassMap('SCHorseCurrentOwner', Type\SCHorseCurrentOwner::class),
            new ClassMap('SCHorseHorseStatus', Type\SCHorseHorseStatus::class),
            new ClassMap('SCHorseAdminNF', Type\SCHorseAdminNF::class),
            new ClassMap('SCHorsePendAdmNFReq', Type\SCHorsePendAdmNFReq::class),
            new ClassMap('SCHorseRegistration', Type\SCHorseRegistration::class),
            new ClassMap('SCHorseRegDiscipline', Type\SCHorseRegDiscipline::class),
            new ClassMap('SCHorseRegDateFrom', Type\SCHorseRegDateFrom::class),
            new ClassMap('SCHorseRegDateTo', Type\SCHorseRegDateTo::class),
            new ClassMap('SCHorseStudbook', Type\SCHorseStudbook::class),
            new ClassMap('SearchClassesHelperResponse', Type\SearchClassesHelperResponse::class),
        ]);
    }
}
