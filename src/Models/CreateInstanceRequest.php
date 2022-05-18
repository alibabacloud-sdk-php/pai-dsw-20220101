<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\requestedResource;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\userVpc;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description 工作空间内是否他人可见
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description 数据集集合
     *
     * @var datasets[]
     */
    public $datasets;

    /**
     * @description 实例对应的Ecs规格
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @description 环境变量
     *
     * @var string[]
     */
    public $environmentVariables;

    /**
     * @description 镜像Id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像地址
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 优先级，在分配资源给实例时，优先级越高的实例越优先
     *
     * @var int
     */
    public $priority;

    /**
     * @description 资源配置，弹内或者轻量化时使用
     *
     * @var requestedResource
     */
    public $requestedResource;

    /**
     * @description 资源Id,预付费时填写
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description user vpc配置
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description 工作空间Id
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'        => 'Accessibility',
        'datasets'             => 'Datasets',
        'ecsSpec'              => 'EcsSpec',
        'environmentVariables' => 'EnvironmentVariables',
        'imageId'              => 'ImageId',
        'imageUrl'             => 'ImageUrl',
        'instanceName'         => 'InstanceName',
        'priority'             => 'Priority',
        'requestedResource'    => 'RequestedResource',
        'resourceId'           => 'ResourceId',
        'userVpc'              => 'UserVpc',
        'workspaceId'          => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->datasets) {
            $res['Datasets'] = [];
            if (null !== $this->datasets && \is_array($this->datasets)) {
                $n = 0;
                foreach ($this->datasets as $item) {
                    $res['Datasets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->environmentVariables) {
            $res['EnvironmentVariables'] = $this->environmentVariables;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->requestedResource) {
            $res['RequestedResource'] = null !== $this->requestedResource ? $this->requestedResource->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Datasets'])) {
            if (!empty($map['Datasets'])) {
                $model->datasets = [];
                $n               = 0;
                foreach ($map['Datasets'] as $item) {
                    $model->datasets[$n++] = null !== $item ? datasets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['EnvironmentVariables'])) {
            $model->environmentVariables = $map['EnvironmentVariables'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RequestedResource'])) {
            $model->requestedResource = requestedResource::fromMap($map['RequestedResource']);
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
