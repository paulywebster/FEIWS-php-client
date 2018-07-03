<?php

namespace FEIWebServicesClient\Horse;

use FEIWebServicesClient\Horse\Types\AddHorse;
use FEIWebServicesClient\Horse\Types\AddHorseNoviceQualification;
use FEIWebServicesClient\Horse\Types\AddHorseNoviceQualificationResponse;
use FEIWebServicesClient\Horse\Types\AddHorseResponse;
use FEIWebServicesClient\Horse\Types\AddTrainerToHorse;
use FEIWebServicesClient\Horse\Types\AddTrainerToHorseResponse;
use FEIWebServicesClient\Horse\Types\AssignHorseOwner;
use FEIWebServicesClient\Horse\Types\AssignHorseOwnerResponse;
use FEIWebServicesClient\Horse\Types\AssignHorseOwnership;
use FEIWebServicesClient\Horse\Types\AssignHorseOwnershipResponse;
use FEIWebServicesClient\Horse\Types\ChangeHorseName;
use FEIWebServicesClient\Horse\Types\ChangeHorseNameResponse;
use FEIWebServicesClient\Horse\Types\ConfirmAddHorse;
use FEIWebServicesClient\Horse\Types\ConfirmAddHorseResponse;
use FEIWebServicesClient\Horse\Types\ConfirmChangeHorseName;
use FEIWebServicesClient\Horse\Types\ConfirmChangeHorseNameResponse;
use FEIWebServicesClient\Horse\Types\ConfirmUpdateHorse;
use FEIWebServicesClient\Horse\Types\ConfirmUpdateHorseResponse;
use FEIWebServicesClient\Horse\Types\DeleteHorseNoviceQualification;
use FEIWebServicesClient\Horse\Types\DeleteHorseNoviceQualificationResponse;
use FEIWebServicesClient\Horse\Types\DownloadHorseDiagram;
use FEIWebServicesClient\Horse\Types\DownloadHorseDiagramResponse;
use FEIWebServicesClient\Horse\Types\DownloadHorseSticker;
use FEIWebServicesClient\Horse\Types\DownloadHorseStickerResponse;
use FEIWebServicesClient\Horse\Types\GetAdminChangeReasonList;
use FEIWebServicesClient\Horse\Types\GetAdminChangeReasonListResponse;
use FEIWebServicesClient\Horse\Types\GetAdminChangeStatusList;
use FEIWebServicesClient\Horse\Types\GetAdminChangeStatusListResponse;
use FEIWebServicesClient\Horse\Types\GetHorse;
use FEIWebServicesClient\Horse\Types\GetHorseColorList;
use FEIWebServicesClient\Horse\Types\GetHorseColorListResponse;
use FEIWebServicesClient\Horse\Types\GetHorseCurrentNoviceQualification;
use FEIWebServicesClient\Horse\Types\GetHorseCurrentNoviceQualificationResponse;
use FEIWebServicesClient\Horse\Types\GetHorseNameHistoryList;
use FEIWebServicesClient\Horse\Types\GetHorseNameHistoryListResponse;
use FEIWebServicesClient\Horse\Types\GetHorseOwner;
use FEIWebServicesClient\Horse\Types\GetHorseOwnerResponse;
use FEIWebServicesClient\Horse\Types\GetHorseOwnership;
use FEIWebServicesClient\Horse\Types\GetHorseOwnershipResponse;
use FEIWebServicesClient\Horse\Types\GetHorseRegistrationList;
use FEIWebServicesClient\Horse\Types\GetHorseRegistrationListResponse;
use FEIWebServicesClient\Horse\Types\GetHorseRegistrationYearList;
use FEIWebServicesClient\Horse\Types\GetHorseRegistrationYearListResponse;
use FEIWebServicesClient\Horse\Types\GetHorseResponse;
use FEIWebServicesClient\Horse\Types\GetHorses;
use FEIWebServicesClient\Horse\Types\GetHorsesResponse;
use FEIWebServicesClient\Horse\Types\GetStudBookList;
use FEIWebServicesClient\Horse\Types\GetStudBookListResponse;
use FEIWebServicesClient\Horse\Types\HorseFEICode;
use FEIWebServicesClient\Horse\Types\RegisterHorse;
use FEIWebServicesClient\Horse\Types\RegisterHorseResponse;
use FEIWebServicesClient\Horse\Types\RequestAdministrationChange;
use FEIWebServicesClient\Horse\Types\RequestAdministrationChangeResponse;
use FEIWebServicesClient\Horse\Types\SearchClassesHelper;
use FEIWebServicesClient\Horse\Types\SearchClassesHelperResponse;
use FEIWebServicesClient\Horse\Types\SearchForHorse;
use FEIWebServicesClient\Horse\Types\SearchForHorseAlt;
use FEIWebServicesClient\Horse\Types\SearchForHorseAltResponse;
use FEIWebServicesClient\Horse\Types\SearchForHorseResponse;
use FEIWebServicesClient\Horse\Types\SearchHorseTrainers;
use FEIWebServicesClient\Horse\Types\SearchHorseTrainersResponse;
use FEIWebServicesClient\Horse\Types\UpdateHorse;
use FEIWebServicesClient\Horse\Types\UpdateHorseNoviceQualification;
use FEIWebServicesClient\Horse\Types\UpdateHorseNoviceQualificationResponse;
use FEIWebServicesClient\Horse\Types\UpdateHorseResponse;
use FEIWebServicesClient\Horse\Types\UpgradeHorsePassport;
use FEIWebServicesClient\Horse\Types\UpgradeHorsePassportResponse;
use FEIWebServicesClient\Horse\Types\UpgradeHorseRecognitionCard;
use FEIWebServicesClient\Horse\Types\UpgradeHorseRecognitionCardResponse;
use FEIWebServicesClient\Horse\Types\UploadHorseDiagram;
use FEIWebServicesClient\Horse\Types\UploadHorseDiagramResponse;
use FEIWebServicesClient\Horse\Types\UploadHorseDocument;
use FEIWebServicesClient\Horse\Types\UploadHorseDocumentResponse;

class HorseClient extends \Phpro\SoapClient\Client
{
    /**
     * @param string $name
     * @param string $value
     */
    public function setCookie(string $name, string $value): void
    {
        $this->soapClient->__setCookie($name, $value);
    }

    /**
     * @return GetAdminChangeReasonListResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getAdminChangeReasonList(): getAdminChangeReasonListResponse
    {
        return $this->call('getAdminChangeReasonList', new getAdminChangeReasonList());
    }

    /**
     * @return GetAdminChangeStatusListResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getAdminChangeStatusList(): getAdminChangeStatusListResponse
    {
        return $this->call('getAdminChangeStatusList', new getAdminChangeStatusList());
    }

    /**
     * @return GetHorseColorListResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getHorseColorList(): getHorseColorListResponse
    {
        return $this->call('getHorseColorList', new getHorseColorList());
    }

    /**
     * @return GetStudBookListResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getStudBookList(): getStudBookListResponse
    {
        return $this->call('getStudBookList', new getStudBookList());
    }

    /**
     * @param string $HorseFEICode
     *
     * @return GetHorseResponse
     * @throws \InvalidArgumentException
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getHorse(string $HorseFEICode): getHorseResponse
    {
        return $this->call('getHorse', new getHorse(new HorseFEICode($HorseFEICode)));
    }

    /**
     * @param array $getHorses
     *
     * @return GetHorsesResponse
     * @throws \InvalidArgumentException
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function getHorses(array $getHorses): getHorsesResponse
    {
        return $this->call('getHorses', new getHorses($getHorses));
    }

    /**
     * @param array $searchForHorseAlt
     *
     * @return SearchForHorseAltResponse
     * @throws \InvalidArgumentException
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function searchForHorseAlt(array $searchForHorseAlt): searchForHorseAltResponse
    {
        return $this->call('searchForHorseAlt', new searchForHorseAlt($searchForHorseAlt));
    }

    /**
     * @param array $searchForHorse
     *
     * @return SearchForHorseResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function searchForHorse(array $searchForHorse): searchForHorseResponse
    {
        return $this->call('searchForHorse', new searchForHorse($searchForHorse));
    }

    public function searchHorseTrainers(searchHorseTrainers $searchHorseTrainers): searchHorseTrainersResponse
    {
        return $this->call('searchHorseTrainers', $searchHorseTrainers);
    }

    /**
     * @param array $addHorse
     *
     * @return AddHorseResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function addHorse(array $addHorse): addHorseResponse
    {
        return $this->call('addHorse', new addHorse($addHorse));
    }

    public function updateHorse(updateHorse $updateHorse): updateHorseResponse
    {
        return $this->call('updateHorse', $updateHorse);
    }

    public function addHorseNoviceQualification(addHorseNoviceQualification $addHorseNoviceQualification): addHorseNoviceQualificationResponse
    {
        return $this->call('addHorseNoviceQualification', $addHorseNoviceQualification);
    }

    public function updateHorseNoviceQualification(updateHorseNoviceQualification $updateHorseNoviceQualification): updateHorseNoviceQualificationResponse
    {
        return $this->call('updateHorseNoviceQualification', $updateHorseNoviceQualification);
    }

    public function deleteHorseNoviceQualification(deleteHorseNoviceQualification $deleteHorseNoviceQualification): deleteHorseNoviceQualificationResponse
    {
        return $this->call('deleteHorseNoviceQualification', $deleteHorseNoviceQualification);
    }

    public function getHorseCurrentNoviceQualification(getHorseCurrentNoviceQualification $getHorseCurrentNoviceQualification): getHorseCurrentNoviceQualificationResponse
    {
        return $this->call('getHorseCurrentNoviceQualification', $getHorseCurrentNoviceQualification);
    }

    public function getHorseNameHistoryList(getHorseNameHistoryList $getHorseNameHistoryList): getHorseNameHistoryListResponse
    {
        return $this->call('getHorseNameHistoryList', $getHorseNameHistoryList);
    }

    public function changeHorseName(changeHorseName $changeHorseName): changeHorseNameResponse
    {
        return $this->call('changeHorseName', $changeHorseName);
    }

    public function getHorseRegistrationList(getHorseRegistrationList $getHorseRegistrationList): getHorseRegistrationListResponse
    {
        return $this->call('getHorseRegistrationList', $getHorseRegistrationList);
    }

    public function getHorseRegistrationYearList(getHorseRegistrationYearList $getHorseRegistrationYearList): getHorseRegistrationYearListResponse
    {
        return $this->call('getHorseRegistrationYearList', $getHorseRegistrationYearList);
    }

    public function registerHorse(registerHorse $registerHorse): registerHorseResponse
    {
        return $this->call('registerHorse', $registerHorse);
    }

    public function addTrainerToHorse(addTrainerToHorse $addTrainerToHorse): addTrainerToHorseResponse
    {
        return $this->call('addTrainerToHorse', $addTrainerToHorse);
    }

    public function upgradeHorsePassport(upgradeHorsePassport $upgradeHorsePassport): upgradeHorsePassportResponse
    {
        return $this->call('upgradeHorsePassport', $upgradeHorsePassport);
    }

    public function upgradeHorseRecognitionCard(upgradeHorseRecognitionCard $upgradeHorseRecognitionCard): upgradeHorseRecognitionCardResponse
    {
        return $this->call('upgradeHorseRecognitionCard', $upgradeHorseRecognitionCard);
    }

    public function requestAdministrationChange(requestAdministrationChange $requestAdministrationChange): requestAdministrationChangeResponse
    {
        return $this->call('requestAdministrationChange', $requestAdministrationChange);
    }

    public function uploadHorseDiagram(uploadHorseDiagram $uploadHorseDiagram): uploadHorseDiagramResponse
    {
        return $this->call('uploadHorseDiagram', $uploadHorseDiagram);
    }

    public function uploadHorseDocument(uploadHorseDocument $uploadHorseDocument): uploadHorseDocumentResponse
    {
        return $this->call('uploadHorseDocument', $uploadHorseDocument);
    }

    public function downloadHorseDiagram(downloadHorseDiagram $downloadHorseDiagram): downloadHorseDiagramResponse
    {
        return $this->call('downloadHorseDiagram', $downloadHorseDiagram);
    }

    public function downloadHorseSticker(downloadHorseSticker $downloadHorseSticker): downloadHorseStickerResponse
    {
        return $this->call('downloadHorseSticker', $downloadHorseSticker);
    }

    /**
     * @param string $ticketNumber
     *
     * @return ConfirmAddHorseResponse
     * @throws \Phpro\SoapClient\Exception\SoapException
     */
    public function confirmAddHorse(string $ticketNumber): confirmAddHorseResponse
    {
        return $this->call('confirmAddHorse', new confirmAddHorse($ticketNumber));
    }

    public function confirmUpdateHorse(confirmUpdateHorse $confirmUpdateHorse): confirmUpdateHorseResponse
    {
        return $this->call('confirmUpdateHorse', $confirmUpdateHorse);
    }

    public function confirmChangeHorseName(confirmChangeHorseName $confirmChangeHorseName): confirmChangeHorseNameResponse
    {
        return $this->call('confirmChangeHorseName', $confirmChangeHorseName);
    }

    public function getHorseOwner(string $HorseFEICode): getHorseOwnerResponse
    {
        return $this->call('getHorseOwner', new getHorseOwner(new HorseFEICode($HorseFEICode)));
    }

    public function assignHorseOwner(assignHorseOwner $assignHorseOwner): assignHorseOwnerResponse
    {
        return $this->call('assignHorseOwner', $assignHorseOwner);
    }

    public function getHorseOwnership(getHorseOwnership $getHorseOwnership): getHorseOwnershipResponse
    {
        return $this->call('getHorseOwnership', $getHorseOwnership);
    }

    public function assignHorseOwnership(assignHorseOwnership $assignHorseOwnership): assignHorseOwnershipResponse
    {
        return $this->call('assignHorseOwnership', $assignHorseOwnership);
    }

    public function searchClassesHelper(SearchClassesHelper $SearchClassesHelper): SearchClassesHelperResponse
    {
        return $this->call('SearchClassesHelper', $SearchClassesHelper);
    }
}
