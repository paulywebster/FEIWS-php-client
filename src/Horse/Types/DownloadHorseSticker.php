<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\RequestInterface;

class DownloadHorseSticker implements RequestInterface
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var HorseStickerTypeEnums
     */
    private $StickerType;

    /**
     * @return string
     */
    public function getHorseFEICode(): string
    {
        return $this->HorseFEICode;
    }

    /**
     * @return HorseStickerTypeEnums
     */
    public function getStickerType(): HorseStickerTypeEnums
    {
        return $this->StickerType;
    }
}
