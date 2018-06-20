<?php

namespace FEIWebServicesClient\Horse\Types;

class DownloadHorseSticker
{
    /**
     * @var string
     */
    private $HorseFEICode;

    /**
     * @var \FEIWebServicesClient\Horse\Types\HorseStickerTypeEnums
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
     * @return \FEIWebServicesClient\Horse\Types\HorseStickerTypeEnums
     */
    public function getStickerType(): \FEIWebServicesClient\Horse\Types\HorseStickerTypeEnums
    {
        return $this->StickerType;
    }
}
