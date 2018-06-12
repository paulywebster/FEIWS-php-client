<?php

namespace FEIWebServicesClient\Horse;

class HorseClient extends \Phpro\SoapClient\Client
{

    public function getAdminChangeReasonList(\FEIWebServicesClient\Horse\Types\getAdminChangeReasonList $getAdminChangeReasonList) : \FEIWebServicesClient\Horse\Types\getAdminChangeReasonListResponse
    {
        return $this->call('getAdminChangeReasonList', $getAdminChangeReasonList);
    }

    public function getAdminChangeStatusList(\FEIWebServicesClient\Horse\Types\getAdminChangeStatusList $getAdminChangeStatusList) : \FEIWebServicesClient\Horse\Types\getAdminChangeStatusListResponse
    {
        return $this->call('getAdminChangeStatusList', $getAdminChangeStatusList);
    }

    public function getHorseColorList(\FEIWebServicesClient\Horse\Types\getHorseColorList $getHorseColorList) : \FEIWebServicesClient\Horse\Types\getHorseColorListResponse
    {
        return $this->call('getHorseColorList', $getHorseColorList);
    }

    public function getStudBookList(\FEIWebServicesClient\Horse\Types\getStudBookList $getStudBookList) : \FEIWebServicesClient\Horse\Types\getStudBookListResponse
    {
        return $this->call('getStudBookList', $getStudBookList);
    }

    public function getHorse(\FEIWebServicesClient\Horse\Types\getHorse $getHorse) : \FEIWebServicesClient\Horse\Types\getHorseResponse
    {
        return $this->call('getHorse', $getHorse);
    }

    public function getHorses(\FEIWebServicesClient\Horse\Types\getHorses $getHorses) : \FEIWebServicesClient\Horse\Types\getHorsesResponse
    {
        return $this->call('getHorses', $getHorses);
    }

    public function searchForHorseAlt(\FEIWebServicesClient\Horse\Types\searchForHorseAlt $searchForHorseAlt) : \FEIWebServicesClient\Horse\Types\searchForHorseAltResponse
    {
        return $this->call('searchForHorseAlt', $searchForHorseAlt);
    }

    public function searchForHorse(\FEIWebServicesClient\Horse\Types\searchForHorse $searchForHorse) : \FEIWebServicesClient\Horse\Types\searchForHorseResponse
    {
        return $this->call('searchForHorse', $searchForHorse);
    }

    public function searchHorseTrainers(\FEIWebServicesClient\Horse\Types\searchHorseTrainers $searchHorseTrainers) : \FEIWebServicesClient\Horse\Types\searchHorseTrainersResponse
    {
        return $this->call('searchHorseTrainers', $searchHorseTrainers);
    }

    public function addHorse(\FEIWebServicesClient\Horse\Types\addHorse $addHorse) : \FEIWebServicesClient\Horse\Types\addHorseResponse
    {
        return $this->call('addHorse', $addHorse);
    }

    public function updateHorse(\FEIWebServicesClient\Horse\Types\updateHorse $updateHorse) : \FEIWebServicesClient\Horse\Types\updateHorseResponse
    {
        return $this->call('updateHorse', $updateHorse);
    }

    public function addHorseNoviceQualification(\FEIWebServicesClient\Horse\Types\addHorseNoviceQualification $addHorseNoviceQualification) : \FEIWebServicesClient\Horse\Types\addHorseNoviceQualificationResponse
    {
        return $this->call('addHorseNoviceQualification', $addHorseNoviceQualification);
    }

    public function updateHorseNoviceQualification(\FEIWebServicesClient\Horse\Types\updateHorseNoviceQualification $updateHorseNoviceQualification) : \FEIWebServicesClient\Horse\Types\updateHorseNoviceQualificationResponse
    {
        return $this->call('updateHorseNoviceQualification', $updateHorseNoviceQualification);
    }

    public function deleteHorseNoviceQualification(\FEIWebServicesClient\Horse\Types\deleteHorseNoviceQualification $deleteHorseNoviceQualification) : \FEIWebServicesClient\Horse\Types\deleteHorseNoviceQualificationResponse
    {
        return $this->call('deleteHorseNoviceQualification', $deleteHorseNoviceQualification);
    }

    public function getHorseCurrentNoviceQualification(\FEIWebServicesClient\Horse\Types\getHorseCurrentNoviceQualification $getHorseCurrentNoviceQualification) : \FEIWebServicesClient\Horse\Types\getHorseCurrentNoviceQualificationResponse
    {
        return $this->call('getHorseCurrentNoviceQualification', $getHorseCurrentNoviceQualification);
    }

    public function getHorseNameHistoryList(\FEIWebServicesClient\Horse\Types\getHorseNameHistoryList $getHorseNameHistoryList) : \FEIWebServicesClient\Horse\Types\getHorseNameHistoryListResponse
    {
        return $this->call('getHorseNameHistoryList', $getHorseNameHistoryList);
    }

    public function changeHorseName(\FEIWebServicesClient\Horse\Types\changeHorseName $changeHorseName) : \FEIWebServicesClient\Horse\Types\changeHorseNameResponse
    {
        return $this->call('changeHorseName', $changeHorseName);
    }

    public function getHorseRegistrationList(\FEIWebServicesClient\Horse\Types\getHorseRegistrationList $getHorseRegistrationList) : \FEIWebServicesClient\Horse\Types\getHorseRegistrationListResponse
    {
        return $this->call('getHorseRegistrationList', $getHorseRegistrationList);
    }

    public function getHorseRegistrationYearList(\FEIWebServicesClient\Horse\Types\getHorseRegistrationYearList $getHorseRegistrationYearList) : \FEIWebServicesClient\Horse\Types\getHorseRegistrationYearListResponse
    {
        return $this->call('getHorseRegistrationYearList', $getHorseRegistrationYearList);
    }

    public function registerHorse(\FEIWebServicesClient\Horse\Types\registerHorse $registerHorse) : \FEIWebServicesClient\Horse\Types\registerHorseResponse
    {
        return $this->call('registerHorse', $registerHorse);
    }

    public function addTrainerToHorse(\FEIWebServicesClient\Horse\Types\addTrainerToHorse $addTrainerToHorse) : \FEIWebServicesClient\Horse\Types\addTrainerToHorseResponse
    {
        return $this->call('addTrainerToHorse', $addTrainerToHorse);
    }

    public function upgradeHorsePassport(\FEIWebServicesClient\Horse\Types\upgradeHorsePassport $upgradeHorsePassport) : \FEIWebServicesClient\Horse\Types\upgradeHorsePassportResponse
    {
        return $this->call('upgradeHorsePassport', $upgradeHorsePassport);
    }

    public function upgradeHorseRecognitionCard(\FEIWebServicesClient\Horse\Types\upgradeHorseRecognitionCard $upgradeHorseRecognitionCard) : \FEIWebServicesClient\Horse\Types\upgradeHorseRecognitionCardResponse
    {
        return $this->call('upgradeHorseRecognitionCard', $upgradeHorseRecognitionCard);
    }

    public function requestAdministrationChange(\FEIWebServicesClient\Horse\Types\requestAdministrationChange $requestAdministrationChange) : \FEIWebServicesClient\Horse\Types\requestAdministrationChangeResponse
    {
        return $this->call('requestAdministrationChange', $requestAdministrationChange);
    }

    public function uploadHorseDiagram(\FEIWebServicesClient\Horse\Types\uploadHorseDiagram $uploadHorseDiagram) : \FEIWebServicesClient\Horse\Types\uploadHorseDiagramResponse
    {
        return $this->call('uploadHorseDiagram', $uploadHorseDiagram);
    }

    public function uploadHorseDocument(\FEIWebServicesClient\Horse\Types\uploadHorseDocument $uploadHorseDocument) : \FEIWebServicesClient\Horse\Types\uploadHorseDocumentResponse
    {
        return $this->call('uploadHorseDocument', $uploadHorseDocument);
    }

    public function downloadHorseDiagram(\FEIWebServicesClient\Horse\Types\downloadHorseDiagram $downloadHorseDiagram) : \FEIWebServicesClient\Horse\Types\downloadHorseDiagramResponse
    {
        return $this->call('downloadHorseDiagram', $downloadHorseDiagram);
    }

    public function downloadHorseSticker(\FEIWebServicesClient\Horse\Types\downloadHorseSticker $downloadHorseSticker) : \FEIWebServicesClient\Horse\Types\downloadHorseStickerResponse
    {
        return $this->call('downloadHorseSticker', $downloadHorseSticker);
    }

    public function confirmAddHorse(\FEIWebServicesClient\Horse\Types\confirmAddHorse $confirmAddHorse) : \FEIWebServicesClient\Horse\Types\confirmAddHorseResponse
    {
        return $this->call('confirmAddHorse', $confirmAddHorse);
    }

    public function confirmUpdateHorse(\FEIWebServicesClient\Horse\Types\confirmUpdateHorse $confirmUpdateHorse) : \FEIWebServicesClient\Horse\Types\confirmUpdateHorseResponse
    {
        return $this->call('confirmUpdateHorse', $confirmUpdateHorse);
    }

    public function confirmChangeHorseName(\FEIWebServicesClient\Horse\Types\confirmChangeHorseName $confirmChangeHorseName) : \FEIWebServicesClient\Horse\Types\confirmChangeHorseNameResponse
    {
        return $this->call('confirmChangeHorseName', $confirmChangeHorseName);
    }

    public function getHorseOwner(\FEIWebServicesClient\Horse\Types\getHorseOwner $getHorseOwner) : \FEIWebServicesClient\Horse\Types\getHorseOwnerResponse
    {
        return $this->call('getHorseOwner', $getHorseOwner);
    }

    public function assignHorseOwner(\FEIWebServicesClient\Horse\Types\assignHorseOwner $assignHorseOwner) : \FEIWebServicesClient\Horse\Types\assignHorseOwnerResponse
    {
        return $this->call('assignHorseOwner', $assignHorseOwner);
    }

    public function getHorseOwnership(\FEIWebServicesClient\Horse\Types\getHorseOwnership $getHorseOwnership) : \FEIWebServicesClient\Horse\Types\getHorseOwnershipResponse
    {
        return $this->call('getHorseOwnership', $getHorseOwnership);
    }

    public function assignHorseOwnership(\FEIWebServicesClient\Horse\Types\assignHorseOwnership $assignHorseOwnership) : \FEIWebServicesClient\Horse\Types\assignHorseOwnershipResponse
    {
        return $this->call('assignHorseOwnership', $assignHorseOwnership);
    }

    public function searchClassesHelper(\FEIWebServicesClient\Horse\Types\SearchClassesHelper $SearchClassesHelper) : \FEIWebServicesClient\Horse\Types\SearchClassesHelperResponse
    {
        return $this->call('SearchClassesHelper', $SearchClassesHelper);
    }


}

