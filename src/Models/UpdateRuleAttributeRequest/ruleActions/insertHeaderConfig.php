<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateRuleAttributeRequest\ruleActions;

use AlibabaCloud\Tea\Model;

class insertHeaderConfig extends Model
{
    /**
     * @description Specifies whether to overwrite the request header values. Valid values:
     *
     *   **true**: overwrites the request header.
     *   **false** (default): does not overwrite the request header.
     *
     * @example false
     *
     * @var bool
     */
    public $coverEnabled;

    /**
     * @description The key of the header. The key must be 1 to 40 characters in length, and can contain letters, digits, underscores (_), and hyphens (-). The header keys specified by **InsertHeaderConfig** must be unique.
     *
     * > The following header keys are not supported: `slb-id`, `slb-ip`, `x-forwarded-for`, `x-forwarded-proto`, `x-forwarded-eip`, `x-forwarded-port`, `x-forwarded-client-srcport`, `connection`, `upgrade`, `content-length`, `transfer-encoding`, `keep-alive`, `te`, `host`, `cookie`, `remoteip`, and `authority`. The header keys are not case-sensitive.
     * @example key
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the header.
     *
     *   If **ValueType** is set to **SystemDefined**, you can set the Value parameter to one of the following values:
     *
     *   **ClientSrcPort**: the client port.
     *   **ClientSrcIp**: the IP address of the client.
     *   **Protocol**: the request protocol (HTTP or HTTPS).
     *   **SLBId**: the ID of the ALB instance.
     *   **SLBPort**: the listener port of the ALB instance.
     *
     *   If **ValueType** is set to **UserDefined**, you can specify a custom value. The value must be 1 to 128 characters in length, and can contain asterisks (\\*), question marks (?), and printable characters whose ASCII values are `larger than or equal to 32 and smaller than 127`. It cannot start or end with a space character.
     *
     *   If **ValueType** is set to **ReferenceHeader**, you can reference a value from request headers. The value must be 1 to 128 characters in length, and can contain lowercase letters, digits, hyphens (-), and underscores (_).
     *
     * @example UserDefined
     *
     * @var string
     */
    public $value;

    /**
     * @description The type of the header. Valid values:
     *
     *   **UserDefined**: a custom header.
     *   **ReferenceHeader**: a header that references one of the request headers.
     *   **SystemDefined**: a system-defined header value.
     *
     * @example UserDefined
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'coverEnabled' => 'CoverEnabled',
        'key'          => 'Key',
        'value'        => 'Value',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverEnabled) {
            $res['CoverEnabled'] = $this->coverEnabled;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insertHeaderConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverEnabled'])) {
            $model->coverEnabled = $map['CoverEnabled'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
