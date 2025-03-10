<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class LoadBalancerLeaveSecurityGroupRequest extends Model
{
    /**
     * @description The task result.
     *
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     * > If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the ALB instance.
     *
     * This parameter is required.
     * @example alb-iv9gj3lpak6fbj****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The security IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dryRun'           => 'DryRun',
        'loadBalancerId'   => 'LoadBalancerId',
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LoadBalancerLeaveSecurityGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }

        return $model;
    }
}
