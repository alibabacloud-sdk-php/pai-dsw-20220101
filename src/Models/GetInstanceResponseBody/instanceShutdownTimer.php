<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instanceShutdownTimer extends Model
{
    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $dueTime;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3600000
     *
     * @var int
     */
    public $remainingTimeInMs;
    protected $_name = [
        'dueTime'           => 'DueTime',
        'gmtCreateTime'     => 'GmtCreateTime',
        'gmtModifiedTime'   => 'GmtModifiedTime',
        'instanceId'        => 'InstanceId',
        'remainingTimeInMs' => 'RemainingTimeInMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remainingTimeInMs) {
            $res['RemainingTimeInMs'] = $this->remainingTimeInMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceShutdownTimer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RemainingTimeInMs'])) {
            $model->remainingTimeInMs = $map['RemainingTimeInMs'];
        }

        return $model;
    }
}
