<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DownloadHorseDiagramResponse implements ResultInterface
{
    /**
     * @var \FEIWebServicesClient\Horse\Types\base64Binary
     */
    private $downloadHorseDiagramResult = null;

    /**
     * @var \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    private $Messages = null;

    /**
     * @return \FEIWebServicesClient\Horse\Types\base64Binary
     */
    public function getDownloadHorseDiagramResult(): \FEIWebServicesClient\Horse\Types\base64Binary
    {
        return $this->downloadHorseDiagramResult;
    }

    /**
     * @return \FEIWebServicesClient\Horse\Types\ArrayOfMessage
     */
    public function getMessages(): \FEIWebServicesClient\Horse\Types\ArrayOfMessage
    {
        return $this->Messages;
    }
}
