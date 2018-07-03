<?php

namespace FEIWebServicesClient\Horse\Types;

use Phpro\SoapClient\Type\ResultInterface;

class DownloadHorseDiagramResponse implements ResultInterface
{
    /**
     * @var base64Binary
     */
    private $downloadHorseDiagramResult;

    /**
     * @var ArrayOfMessage
     */
    private $Messages;

    /**
     * @return base64Binary
     */
    public function result(): base64Binary
    {
        return $this->downloadHorseDiagramResult;
    }

    /**
     * @return ArrayOfMessage
     */
    public function getMessages(): ArrayOfMessage
    {
        return $this->Messages;
    }
}
