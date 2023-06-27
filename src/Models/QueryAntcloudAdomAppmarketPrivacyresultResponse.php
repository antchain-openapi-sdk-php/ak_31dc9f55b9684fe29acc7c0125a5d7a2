<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_31dc9f55b9684fe29acc7c0125a5d7a2\Models;

use AlibabaCloud\Tea\Model;

class QueryAntcloudAdomAppmarketPrivacyresultResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 隐私计算模型执行状态
    /**
     * @var string
     */
    public $status;

    // 结果文件路径
    /**
     * @var string
     */
    public $resultUrl;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'status'     => 'status',
        'resultUrl'  => 'result_url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->resultUrl) {
            $res['result_url'] = $this->resultUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAntcloudAdomAppmarketPrivacyresultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['result_url'])) {
            $model->resultUrl = $map['result_url'];
        }

        return $model;
    }
}
