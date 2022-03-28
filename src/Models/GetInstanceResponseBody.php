<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\datasets;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\instanceShutdownTimer;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\latestSnapshot;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody\userVpc;
use AlibabaCloud\Tea\Model;

class GetInstanceResponseBody extends Model
{
    /**
     * @description 实例计算类型
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description 工作空间内是否他人可见
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description 累计运行时间（ms）
     *
     * @var int
     */
    public $accumulatedRunningTimeInMs;

    /**
     * @description 状态码
     *
     * @var string
     */
    public $code;

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
     * @description 实例创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 实例修改时间
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description http状态码
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description 镜像Id
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 镜像名称
     *
     * @var string
     */
    public $imageName;

    /**
     * @description 镜像地址
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description 实例Id
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 定时关机任务
     *
     * @var instanceShutdownTimer
     */
    public $instanceShutdownTimer;

    /**
     * @description 实例Url
     *
     * @var string
     */
    public $instanceUrl;

    /**
     * @description Jupyterlab Url
     *
     * @var string
     */
    public $jupyterlabUrl;

    /**
     * @description 最新保存的用户镜像
     *
     * @var latestSnapshot
     */
    public $latestSnapshot;

    /**
     * @description 说明
     *
     * @var string
     */
    public $message;

    /**
     * @description 支付类型
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description 实例错误代码
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @description 实例错误原因
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 成功标志
     *
     * @var bool
     */
    public $success;

    /**
     * @description 终端url
     *
     * @var string
     */
    public $terminalUrl;

    /**
     * @description 用户Id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户名称
     *
     * @var string
     */
    public $userName;

    /**
     * @description user vpc配置
     *
     * @var userVpc
     */
    public $userVpc;

    /**
     * @description Web IDE url
     *
     * @var string
     */
    public $webIDEUrl;

    /**
     * @description 工作空间Id
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description 工作空间名称
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'acceleratorType'            => 'AcceleratorType',
        'accessibility'              => 'Accessibility',
        'accumulatedRunningTimeInMs' => 'AccumulatedRunningTimeInMs',
        'code'                       => 'Code',
        'datasets'                   => 'Datasets',
        'ecsSpec'                    => 'EcsSpec',
        'environmentVariables'       => 'EnvironmentVariables',
        'gmtCreateTime'              => 'GmtCreateTime',
        'gmtModifiedTime'            => 'GmtModifiedTime',
        'httpStatusCode'             => 'HttpStatusCode',
        'imageId'                    => 'ImageId',
        'imageName'                  => 'ImageName',
        'imageUrl'                   => 'ImageUrl',
        'instanceId'                 => 'InstanceId',
        'instanceName'               => 'InstanceName',
        'instanceShutdownTimer'      => 'InstanceShutdownTimer',
        'instanceUrl'                => 'InstanceUrl',
        'jupyterlabUrl'              => 'JupyterlabUrl',
        'latestSnapshot'             => 'LatestSnapshot',
        'message'                    => 'Message',
        'paymentType'                => 'PaymentType',
        'reasonCode'                 => 'ReasonCode',
        'reasonMessage'              => 'ReasonMessage',
        'requestId'                  => 'RequestId',
        'status'                     => 'Status',
        'success'                    => 'Success',
        'terminalUrl'                => 'TerminalUrl',
        'userId'                     => 'UserId',
        'userName'                   => 'UserName',
        'userVpc'                    => 'UserVpc',
        'webIDEUrl'                  => 'WebIDEUrl',
        'workspaceId'                => 'WorkspaceId',
        'workspaceName'              => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->accumulatedRunningTimeInMs) {
            $res['AccumulatedRunningTimeInMs'] = $this->accumulatedRunningTimeInMs;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceShutdownTimer) {
            $res['InstanceShutdownTimer'] = null !== $this->instanceShutdownTimer ? $this->instanceShutdownTimer->toMap() : null;
        }
        if (null !== $this->instanceUrl) {
            $res['InstanceUrl'] = $this->instanceUrl;
        }
        if (null !== $this->jupyterlabUrl) {
            $res['JupyterlabUrl'] = $this->jupyterlabUrl;
        }
        if (null !== $this->latestSnapshot) {
            $res['LatestSnapshot'] = null !== $this->latestSnapshot ? $this->latestSnapshot->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->terminalUrl) {
            $res['TerminalUrl'] = $this->terminalUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->webIDEUrl) {
            $res['WebIDEUrl'] = $this->webIDEUrl;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['AccumulatedRunningTimeInMs'])) {
            $model->accumulatedRunningTimeInMs = $map['AccumulatedRunningTimeInMs'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceShutdownTimer'])) {
            $model->instanceShutdownTimer = instanceShutdownTimer::fromMap($map['InstanceShutdownTimer']);
        }
        if (isset($map['InstanceUrl'])) {
            $model->instanceUrl = $map['InstanceUrl'];
        }
        if (isset($map['JupyterlabUrl'])) {
            $model->jupyterlabUrl = $map['JupyterlabUrl'];
        }
        if (isset($map['LatestSnapshot'])) {
            $model->latestSnapshot = latestSnapshot::fromMap($map['LatestSnapshot']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TerminalUrl'])) {
            $model->terminalUrl = $map['TerminalUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = userVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WebIDEUrl'])) {
            $model->webIDEUrl = $map['WebIDEUrl'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
