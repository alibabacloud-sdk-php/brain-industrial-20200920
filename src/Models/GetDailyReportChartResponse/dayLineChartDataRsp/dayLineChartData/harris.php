<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportChartResponse\dayLineChartDataRsp\dayLineChartData;

use AlibabaCloud\Tea\Model;

class harris extends Model
{
    /**
     * @var float
     */
    public $xlabel;

    /**
     * @var float
     */
    public $ylabel;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'xlabel' => 'Xlabel',
        'ylabel' => 'Ylabel',
        'name'   => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('xlabel', $this->xlabel, true);
        Model::validateRequired('ylabel', $this->ylabel, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xlabel) {
            $res['Xlabel'] = $this->xlabel;
        }
        if (null !== $this->ylabel) {
            $res['Ylabel'] = $this->ylabel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return harris
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Xlabel'])) {
            $model->xlabel = $map['Xlabel'];
        }
        if (isset($map['Ylabel'])) {
            $model->ylabel = $map['Ylabel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
