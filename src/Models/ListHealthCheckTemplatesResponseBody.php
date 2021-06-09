<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListHealthCheckTemplatesResponseBody\healthCheckTemplates;
use AlibabaCloud\Tea\Model;

class ListHealthCheckTemplatesResponseBody extends Model
{
    /**
     * @description 健康检查模板
     *
     * @var healthCheckTemplates[]
     */
    public $healthCheckTemplates;

    /**
     * @description 本次查询返回记录数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页查询标识
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总记录数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'healthCheckTemplates' => 'HealthCheckTemplates',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheckTemplates) {
            $res['HealthCheckTemplates'] = [];
            if (null !== $this->healthCheckTemplates && \is_array($this->healthCheckTemplates)) {
                $n = 0;
                foreach ($this->healthCheckTemplates as $item) {
                    $res['HealthCheckTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHealthCheckTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheckTemplates'])) {
            if (!empty($map['HealthCheckTemplates'])) {
                $model->healthCheckTemplates = [];
                $n                           = 0;
                foreach ($map['HealthCheckTemplates'] as $item) {
                    $model->healthCheckTemplates[$n++] = null !== $item ? healthCheckTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
