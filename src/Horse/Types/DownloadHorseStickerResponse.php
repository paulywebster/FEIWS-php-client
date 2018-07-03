<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DownloadHorseStickerResponse implements ResultInterface
{
    /**
     * @var base64Binary
     */
    private $downloadHorseStickerResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return base64Binary
     */
    public function result(): base64Binary
    {
        return $this->downloadHorseStickerResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
