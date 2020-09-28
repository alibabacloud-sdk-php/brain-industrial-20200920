<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetPidLoopRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;
    protected $_name = [
        'pidLoopId' => 'PidLoopId',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPidLoopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }

        return $model;
    }
}
