<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\UpdateInstanceLabelsRequest\labels;
use AlibabaCloud\Tea\Model;

class UpdateInstanceLabelsRequest extends Model
{
    /**
     * @description The tags that you want to update.
     *
     * This parameter is required.
     *
     * @var labels[]
     */
    public $labels;
    protected $_name = [
        'labels' => 'Labels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceLabelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
