<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DownloadHorseStickerResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\base64Binary
     */
    private $downloadHorseStickerResult;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages;

    /**
     * @return \FEIWebServicesClient\Horse\Types\base64Binary
     */
    public function getDownloadHorseStickerResult(): \FEIWebServicesClient\Horse\Types\base64Binary
    {
        return $this->downloadHorseStickerResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
