<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleConditions;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\tag;

class rules extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var int
     */
    public $priority;
    /**
     * @var ruleActions[]
     */
    public $ruleActions;
    /**
     * @var ruleConditions[]
     */
    public $ruleConditions;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'direction'      => 'Direction',
        'priority'       => 'Priority',
        'ruleActions'    => 'RuleActions',
        'ruleConditions' => 'RuleConditions',
        'ruleName'       => 'RuleName',
        'tag'            => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->ruleActions)) {
            Model::validateArray($this->ruleActions);
        }
        if (\is_array($this->ruleConditions)) {
            Model::validateArray($this->ruleConditions);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->ruleActions) {
            if (\is_array($this->ruleActions)) {
                $res['RuleActions'] = [];
                $n1                 = 0;
                foreach ($this->ruleActions as $item1) {
                    $res['RuleActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ruleConditions) {
            if (\is_array($this->ruleConditions)) {
                $res['RuleConditions'] = [];
                $n1                    = 0;
                foreach ($this->ruleConditions as $item1) {
                    $res['RuleConditions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n1                 = 0;
                foreach ($map['RuleActions'] as $item1) {
                    $model->ruleActions[$n1++] = ruleActions::fromMap($item1);
                }
            }
        }

        if (isset($map['RuleConditions'])) {
            if (!empty($map['RuleConditions'])) {
                $model->ruleConditions = [];
                $n1                    = 0;
                foreach ($map['RuleConditions'] as $item1) {
                    $model->ruleConditions[$n1++] = ruleConditions::fromMap($item1);
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
