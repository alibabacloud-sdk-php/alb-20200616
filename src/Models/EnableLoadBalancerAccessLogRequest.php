<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class EnableLoadBalancerAccessLogRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 593B0448-D13E-4C56-AC0D-FDF0FDE0E9A3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ALB instance ID.
     *
     * This parameter is required.
     * @example alb-bd6oylbckp6k9x****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The project to which the access log is shipped.
     *
     * This parameter is required.
     * @example sls-setter
     *
     * @var string
     */
    public $logProject;

    /**
     * @description The Logstore to which the access log is shipped.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $logStore;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'dryRun'         => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'logProject'     => 'LogProject',
        'logStore'       => 'LogStore',
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
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableLoadBalancerAccessLogRequest
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
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        return $model;
    }
}
