<?php

namespace Joy\VoyagerWidgets\Events;

use Illuminate\Queue\SerializesModels;
use TCG\Voyager\Models\DataType;

class BreadDataWidgetsed
{
    use SerializesModels;

    public $dataType;

    public $data;

    public function __construct(DataType $dataType, $data)
    {
        $this->dataType = $dataType;

        $this->data = $data;

        // event(new BreadDataChanged($dataType, $data, 'Widgetsed'));
    }
}
