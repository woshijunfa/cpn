
@extends('layout.flowpage')
@section('title', 'shareapi')
@section('content')

<style type="text/css">
    .section {
        width: 100%;
        margin-left: 40px;
        margin-right: 40px;
    }

    .api_intro .pic{
        width: 120px;
        height: 100%;
        margin-right: 20px;
        float:left;
    }
    .api_intro .text{
        width: 800px;
        padding: 20px;
        height: 100%;
    }

    .clear {
        clear: both;
    }
    
    .aps_handle span{
        display:inline-block;
        width:105px;
        height:47px;
        float:left;
        line-height:47px;
        text-align:center;
        font-size:14px; 
        cursor:pointer;
    }
    .aps_handle .hover{
        font-weight:bold;
        background:url("/images/api_create_handle.png");    
    }

.plan {
  float: left;
  width: 300px;
  margin: 20px 2px;
  padding: 15px 25px;
  text-align: center;
  background: white;
  background-clip: padding-box;
  border: 2px solid #e5ded6;
  border-color: rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

.plan-title {
  margin-bottom: 2px;
  font-size: 21px;
    height: 46px;
    line-height: 23px;
    overflow: hidden;
  color: #36bce6;
}

.plan-price {
  margin-bottom: 20px;
  line-height: 1;
  font-size: 28px;
  font-weight: bold;
  color: #fd935a;
}

.plan-unit {
  display: block;
  margin-top: 5px;
  font-size: 13px;
  font-weight: normal;
  color: #aaa;
}

.plan-features {
  width: 120px;
  margin: 20px auto 15px;
  padding: 15px 0 0 15px;
  border-top: 1px solid #e5ded6;
  text-align: left;
}
.plan-price:before{
    content:'¥'
}
.plan-feature {
    height: 21px;
  line-height: 20px;
  font-size: 15px;
  font-weight: 500;
  color: #444;
  margin-right:5px;
}
.plan-feature + .plan-feature {
  margin-top: 5px;
}

.plan-feature-unit {
  margin-left: 2px;
  font-size: 16px;
}

.plan-feature-name {
  font-size: 13px;
  font-weight: normal;
  color: #aaa;
}

.plan-button {
  position: relative;
  display: block;
  line-height: 40px;
  font-size: 16px;
  font-weight: 500;
  color: white;
  text-align: center;
  text-decoration: none;
  text-shadow: 0 1px rgba(0, 0, 0, 0.1);
  background: #fd935c;
  border-bottom: 2px solid #cf7e3b;
  border-color: rgba(0, 0, 0, 0.15);
  border-radius: 4px;
}
.plan-button:hover{
    color: #FFF;
}
.plan-button:active {
  top: 2px;
  margin-bottom: 2px;
  border-bottom: 0;
}

.plan-highlight {
  margin-top: 0;
  margin-bottom: 0;
  padding-left: 15px;
  padding-right: 15px;
  width: 170px;
  border: 4px solid #37bbe6;
}
.plan-highlight .plan-button {
  font-size: 18px;
  line-height: 49px;
  background: #37bce5;
  border-color: #3996b3;
  border-color: rgba(0, 0, 0, 0.15);
}

.plan-recommended {
  margin: -15px auto 15px;
  padding-bottom: 2px;
  line-height: 22px;
  font-size: 14px;
  font-weight: bold;
  color: white;
  text-shadow: 0 1px rgba(0, 0, 0, 0.05);
  background: #37bbe6;
  border-radius: 0 0 4px 4px;
}



    div {
        /*border:1px solid red;*/
    }
</style>

<div class="section">
    <div class="api_intro">
        <div class="pic">
            <img style="border:1px solid #000" src="https://www.showapi.com/images/apiLogo/20150623/5588421c6e36222a36ef7a1e_2c639346907143179264c464de132268.jpg" style="max-width:110px;max-height:110px">
        </div>
        <div class="text" style="margin-bottom:4px;">
            <h6>图形验证码识别</h6>    
            <p style="font-size:14px;text-align:left;">本验证码提供英文、数字、中文或混合型验证码的识别。本验证码仅为残障人士提供验证码识别服务，并不针对任何网站或个人。</p>
        </div>
    </div>
    <div class="clear"></div>
    <div>
        <div class="aps_handle">
            <span class="hover" id="docDiv">文档</span>
            <span id="pricetable" class="">价格一览表</span>
        </div>
    </div>
</div>

<div class="section" id = 'api_detial' style="background:rgb(242, 242, 242);">
    <div name="docDiv">    
     <form id="rightForm" style="padding:20px;">
                <div class="section_list" id="idurl">
                    <h2>请求URL地址</h2>
                    <div class="url" style="font-size:18px;" id="forCopyUrl">http://www.shareapi.com/imgrec</div>
                    <div class="tip">注意：接口支持https，更安全，但稍慢一些，你懂的。请根据自己的情况进行选择。</div>
                    
                </div>
                
                <div class="section_list" id="idreq">
                    <h3>请求参数</h3>
                    <div class="tip">HTTP协议，支持GET/POST方法。</div>
                    <div class="tip">1.系统级参数：</div>
                    <table class="charge_data db_color  " style="word-break: break-all; font-size: 14px;">
                        <tbody>
                        <tr>
                            <th style="width:25%">参数名称</th>
                            <th style="width:10%">类型</th>
                            <th style="width:15%">示例值</th>
                            <th style="width:7%">必须</th>
                            <th class="ms">描述</th>
                        </tr>   
                                  <tr class="db">
                            <td>shareapi_appid</td>  
                            <td>String</td>
                            <td>100</td>
                            <td>是</td>
                            <td>易源应用id</td>
                        </tr>
                        <tr>
                            <td>shareapi_sign</td>   
                            <td>String</td>
                            <td>698d51a19d8a121ce581499d7b701668</td>
                            <td>是</td>
                            <td>为了验证用户身份，以及确保参数不被中间人篡改，需要传递调用者的数字签名。<br>
                            </td>
                        </tr>
                        <tr class="db">
                            <td>shareapi_timestamp</td>  
                            <td>String</td>
                            <td>20141114142239</td>
                            <td>否</td>
                            <td>客户端时间。  
                             <br>格式yyyyMMddHHmmss,如20141114142239 <br>
                             为了在一定程度上防止“重放攻击”，平台只接受在10分钟之内的请求。如果不传或传空串，则系统不会10分钟的检测。
                             </td>
                        </tr>
                        <tr>
                            <td>shareapi_sign_method</td>    
                            <td>String</td>
                            <td>md5</td>
                            <td>否</td>
                            <td>签名生成方式，其值可选为"md5"或"hmac"。如果不传入则默认"md5"。</td>
                        </tr>
                        <tr class="db">
                            <td>shareapi_res_gzip</td>   
                            <td>String</td>
                            <td>1或0</td>
                            <td>否</td>
                            <td>返回值是否用gzip方式压缩。此值为1时将压缩，其他值不压缩。</td>
                        </tr>
                        </tbody>                            
                    </table>
                    
                    <div class="tip">2.应用级参数</div>
                    <table class="charge_data db_color  " style="word-break:break-all;font-size:14px;">
                        <tbody id="inModelTrTbody">
                        <tr>
                            <th style="width:15%">参数名称</th>
                            <th style="width:10%">类型</th>
                            <th style="width:10%">默认值</th>
                            <th style="width:15%">示例值</th>
                            <th style="width:7%">必须</th>
                            <th class="ms">描述</th>
                        </tr>   
                                        <tr class="inModelTr db">
                                <td key="pname" value="image">image</td>    
                                <td key="type" data="{'String':'String','byte[]':'byte[]'}" value="byte[]">byte[]</td>
                                <td key="default" value=""></td>
                                <td key="example" value=""></td>
                                <td key="must" data="{'是':'是','否':'否'}" value="是">是</td>
                                <td key="remark" value="以表单提交形式上的图片文件。">以表单提交形式上的图片文件。</td>
                                </tr>
                                        <tr class="inModelTr">
                                <td key="pname" value="typeId">typeId</td>  
                                <td key="type" data="{'String':'String','byte[]':'byte[]'}" value="String">String</td>
                                <td key="default" value="1040">1040</td>
                                <td key="example" value="1040">1040</td>
                                <td key="must" data="{'是':'是','否':'否'}" value="是">是</td>
                                <td key="remark" value="1.纯数字<br />typeId=1000 任意长度数字，识别率会降低<br />typeId=1010 1位数字<br />typeId=1020 2位数字<br />...<br />typeId=1100 10位数字<br /><br />2.纯英文<br />typeId=2000 任意长度英文，识别率会降低<br />typeId=2010 1位英文<br />typeId=2020 2位英文<br />...<br />typeId=2100 10位英文<br /><br />3.英文数字混合<br />typeId=3000 任意长度英数混合，识别率会降低<br />typeId=3010 1位英数<br />typeId=3020 2位英数混合<br />...<br />typeId=3100 10位英数混合<br /><br />4.纯汉字<br />typeId=4000 任意长度汉字混合，识别率会降低<br />typeId=4010 1位汉字<br />typeId=4020 2位汉字<br />...<br />typeId=4100 10位汉字<br /><br />5.数字英文汉字混合<br />typeId=5000 任意长度中英数三混">1.纯数字<br>typeId=1000 任意长度数字，识别率会降低<br>typeId=1010 1位数字<br>typeId=1020 2位数字<br>...<br>typeId=1100 10位数字<br><br>2.纯英文<br>typeId=2000 任意长度英文，识别率会降低<br>typeId=2010 1位英文<br>typeId=2020 2位英文<br>...<br>typeId=2100 10位英文<br><br>3.英文数字混合<br>typeId=3000 任意长度英数混合，识别率会降低<br>typeId=3010 1位英数<br>typeId=3020 2位英数混合<br>...<br>typeId=3100 10位英数混合<br><br>4.纯汉字<br>typeId=4000 任意长度汉字混合，识别率会降低<br>typeId=4010 1位汉字<br>typeId=4020 2位汉字<br>...<br>typeId=4100 10位汉字<br><br>5.数字英文汉字混合<br>typeId=5000 任意长度中英数三混</td>
                                </tr>
                        </tbody>                            
                    </table>
                        
                        
                </div>
                
                <div class="section_list" id="idres">
                    <h3>返回参数</h3>
                    <div class="tip">以JSON格式返回结果。</div>
                    <div class="tip">1.系统级参数：</div>
                    <table class="charge_data db_color" style="word-break: break-all; font-size: 14px;">
                        <tbody>
                        <tr>
                            <th style="width:20%">名称</th>
                            <th style="width:15%">类型</th>
                            <th style="width:30%">示例值</th>
                            <th class="ms">描述</th>
                        </tr>   
                            <tr class="db">
                            <td>shareapi_res_code</td>   
                            <td>int</td>
                            <td>0</td>
                            <td>易源返回标志，0为成功，其他为失败。</td>
                        </tr>
                        <tr>
                            <td>shareapi_res_error</td>  
                            <td>String</td>
                            <td>用户输入有误!</td>
                            <td>错误信息的展示</td>
                        </tr>
                        <tr class="db">
                            <td>shareapi_res_body</td>   
                            <td>String</td>
                            <td>{"city":"昆明","prov":"云南"}</td>
                            <td>消息体的JSON封装，所有应用级的返回参数将嵌入此对象 。</td>
                        </tr>
                        </tbody>                        
                    </table>
                    
                    <div class="tip">2.应用级参数：</div>
                    <table class="charge_data db_color" style="word-break:break-all;font-size:14px;"> 
                        <tbody id="outModelTrTbody">
                        <tr>
                            <th style="width:20%">名称</th>
                            <th style="width:15%">类型</th>
                            <th style="width:15%">示例值</th>
                            <th class="ms">描述</th>
                        </tr>   
                                    <tr class="outModelTr db">
                                <td key="pname">Result</td> 
                                <td key="type">String</td>
                                <td key="example">6nr9a </td>
                                <td key="remark">识别出来的字符。 </td>
                            </tr>
                            
                        </tbody>                        
                    </table>
                        
                </div>
                
                
                
                <br><br><br><br>
                </form>
    </div>

    <div name="pricetable"  style="display:none;with:620px;padding-left:240px;">
        
        <div>
            <div class="plan first-gift">
                <h3 class="plan-title">一次性礼包</h3>
                <p class="plan-price">0.01<span class="plan-unit">时间：180天</span></p>
                <ul class="plan-features">
                    <li class="plan-feature">50次<span class="plan-feature-name">调用 </span></li>
                    <li class="plan-feature">不限<span class="plan-feature-name">调用频率</span> </li>
                </ul>
                <a href="/buy?id=1">订购套餐</a>
            </div>
                    <div class="plan">
                        <h3 class="plan-title">30元/1200次</h3>
                        <p class="plan-price">30 <span class="plan-unit">时间：180天</span></p>
                        <ul class="plan-features">
                            <li class="plan-feature">1200次<span class="plan-feature-name">调用 </span></li>
                            <li class="plan-feature">不限<span class="plan-feature-name">调用频率</span> </li>
                        </ul>
                        <a href="/buy?id=2">订购套餐</a>
                    </div>
        </div>

    </div>
</div>
<div class="section">
    
</div>

<script type="text/javascript">
    $(".aps_handle span").click(function(){
        $('.aps_handle span').removeClass("hover")
        $(this).addClass("hover");
        $("#api_detial>div").hide();
        $("#api_detial div[name='"+$(this).attr("id")+"']").show();
    });

</script>
@stop



