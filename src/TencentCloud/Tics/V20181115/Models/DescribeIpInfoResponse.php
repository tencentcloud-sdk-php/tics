<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tics\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpInfo返回参数结构体
 *
 * @method integer getReturnCode() 获取是否有数据，0代表有数据，1代表没有数据
 * @method void setReturnCode(integer $ReturnCode) 设置是否有数据，0代表有数据，1代表没有数据
 * @method string getResult() 获取判定结果，如：black、white、grey
 * @method void setResult(string $Result) 设置判定结果，如：black、white、grey
 * @method integer getConfidence() 获取置信度，取值0-100
 * @method void setConfidence(integer $Confidence) 设置置信度，取值0-100
 * @method array getThreatTypes() 获取威胁类型。
botnet = 僵尸网络
trojan = 木马
ransomware = 勒索软件
worm = 蠕虫
dga = 域名生成算法
c2 = c&c
compromised = 失陷主机
dynamicIP = 动态IP
proxy = 代理
idc = idc 机房
whitelist = 白名单
tor = 暗网
miner = 挖矿
maleware site = 恶意站点
malware IP = 恶意IP
等等
 * @method void setThreatTypes(array $ThreatTypes) 设置威胁类型。
botnet = 僵尸网络
trojan = 木马
ransomware = 勒索软件
worm = 蠕虫
dga = 域名生成算法
c2 = c&c
compromised = 失陷主机
dynamicIP = 动态IP
proxy = 代理
idc = idc 机房
whitelist = 白名单
tor = 暗网
miner = 挖矿
maleware site = 恶意站点
malware IP = 恶意IP
等等
 * @method array getTags() 获取恶意标签，对应的团伙，家族等信息。
 * @method void setTags(array $Tags) 设置恶意标签，对应的团伙，家族等信息。
 * @method array getIntelligences() 获取对应的历史上的威胁情报事件
 * @method void setIntelligences(array $Intelligences) 设置对应的历史上的威胁情报事件
 * @method string getContext() 获取情报相关的上下文
 * @method void setContext(string $Context) 设置情报相关的上下文
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIpInfoResponse extends AbstractModel
{
    /**
     * @var integer 是否有数据，0代表有数据，1代表没有数据
     */
    public $ReturnCode;

    /**
     * @var string 判定结果，如：black、white、grey
     */
    public $Result;

    /**
     * @var integer 置信度，取值0-100
     */
    public $Confidence;

    /**
     * @var array 威胁类型。
botnet = 僵尸网络
trojan = 木马
ransomware = 勒索软件
worm = 蠕虫
dga = 域名生成算法
c2 = c&c
compromised = 失陷主机
dynamicIP = 动态IP
proxy = 代理
idc = idc 机房
whitelist = 白名单
tor = 暗网
miner = 挖矿
maleware site = 恶意站点
malware IP = 恶意IP
等等
     */
    public $ThreatTypes;

    /**
     * @var array 恶意标签，对应的团伙，家族等信息。
     */
    public $Tags;

    /**
     * @var array 对应的历史上的威胁情报事件
     */
    public $Intelligences;

    /**
     * @var string 情报相关的上下文
     */
    public $Context;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReturnCode 是否有数据，0代表有数据，1代表没有数据
     * @param string $Result 判定结果，如：black、white、grey
     * @param integer $Confidence 置信度，取值0-100
     * @param array $ThreatTypes 威胁类型。
botnet = 僵尸网络
trojan = 木马
ransomware = 勒索软件
worm = 蠕虫
dga = 域名生成算法
c2 = c&c
compromised = 失陷主机
dynamicIP = 动态IP
proxy = 代理
idc = idc 机房
whitelist = 白名单
tor = 暗网
miner = 挖矿
maleware site = 恶意站点
malware IP = 恶意IP
等等
     * @param array $Tags 恶意标签，对应的团伙，家族等信息。
     * @param array $Intelligences 对应的历史上的威胁情报事件
     * @param string $Context 情报相关的上下文
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("ThreatTypes",$param) and $param["ThreatTypes"] !== null) {
            $this->ThreatTypes = $param["ThreatTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagType();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Intelligences",$param) and $param["Intelligences"] !== null) {
            $this->Intelligences = [];
            foreach ($param["Intelligences"] as $key => $value){
                $obj = new IntelligenceType();
                $obj->deserialize($value);
                array_push($this->Intelligences, $obj);
            }
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
