<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Dara\Model;

class CreateEssOptJobShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $elecPriceShrink;

    /**
     * @var string
     */
    public $freq;

    /**
     * @var string
     */
    public $genPriceShrink;

    /**
     * @var string
     */
    public $locationShrink;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $runDate;

    /**
     * @var string
     */
    public $systemDataShrink;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $topoType;
    protected $_name = [
        'duration' => 'Duration',
        'elecPriceShrink' => 'ElecPrice',
        'freq' => 'Freq',
        'genPriceShrink' => 'GenPrice',
        'locationShrink' => 'Location',
        'modelVersion' => 'ModelVersion',
        'runDate' => 'RunDate',
        'systemDataShrink' => 'SystemData',
        'timeZone' => 'TimeZone',
        'topoType' => 'TopoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->elecPriceShrink) {
            $res['ElecPrice'] = $this->elecPriceShrink;
        }

        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }

        if (null !== $this->genPriceShrink) {
            $res['GenPrice'] = $this->genPriceShrink;
        }

        if (null !== $this->locationShrink) {
            $res['Location'] = $this->locationShrink;
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        if (null !== $this->runDate) {
            $res['RunDate'] = $this->runDate;
        }

        if (null !== $this->systemDataShrink) {
            $res['SystemData'] = $this->systemDataShrink;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->topoType) {
            $res['TopoType'] = $this->topoType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ElecPrice'])) {
            $model->elecPriceShrink = $map['ElecPrice'];
        }

        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }

        if (isset($map['GenPrice'])) {
            $model->genPriceShrink = $map['GenPrice'];
        }

        if (isset($map['Location'])) {
            $model->locationShrink = $map['Location'];
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        if (isset($map['RunDate'])) {
            $model->runDate = $map['RunDate'];
        }

        if (isset($map['SystemData'])) {
            $model->systemDataShrink = $map['SystemData'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['TopoType'])) {
            $model->topoType = $map['TopoType'];
        }

        return $model;
    }
}
