<?php

namespace FEIWebServicesClient\Horse\Types;


use Phpro\SoapClient\Type\ResultInterface;

class UploadHorseDiagramResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $uploadHorseDiagramResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return bool
     */
    public function isUploadHorseDiagramResult() : bool
    {
        return $this->uploadHorseDiagramResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages() : \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }


}

