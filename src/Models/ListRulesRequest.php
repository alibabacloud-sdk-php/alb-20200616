<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Tea\Model;

class ListRulesRequest extends Model
{
    /**
     * @description 监听ID列表
     *
     * @var string[]
     */
    public $listenerIds;

    /**
     * @description 实例ID列表
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description 本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 用来标记当前开始读取的位置，置空表示从头开始。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 转发规则ID列表，N最大支持20
     *
     * @var string[]
     */
    public $ruleIds;
    protected $_name = [
        'listenerIds'     => 'ListenerIds',
        'loadBalancerIds' => 'LoadBalancerIds',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'ruleIds'         => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerIds) {
            $res['ListenerIds'] = $this->listenerIds;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = $this->ruleIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerIds'])) {
            if (!empty($map['ListenerIds'])) {
                $model->listenerIds = $map['ListenerIds'];
            }
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = $map['RuleIds'];
            }
        }

        return $model;
    }
}
