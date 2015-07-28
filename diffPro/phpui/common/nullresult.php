<?php
/****
**
*/

class Common_NullResult{

   /**
    * 设置返回的空结果，包含current_city和result两个节点数据
    * 当$data.result没有error,type字段时，默认为type:11, error: -1
    * @param string $data: 传入的结果参数，优选其中对应作为返回
    * @return array $response : 返回的结果
    */
    public static function set_null_result($data = "") {
        $wd = @$_GET["wd"];
        $response = array();
        if (isset($data['current_city'])) {
            $response['current_city'] = $data['current_city'];
        } else {
            $response['current_city']['sup_bus'] = 0;
            $response['current_city']['sup_business_area'] = 0;
            $response['current_city']['sup_lukuang'] = 0;
            $response['current_city']['sup_subway'] = 0;
        }
        if (empty($data['result'])) {
            $data['result'] = array();
        }
        $result['error'] = -1;
        $result['catalogID'] = 0;
        $result['count'] = 0;
        $result['current_null'] = 1;
        $result['db'] = 0;
        $result['jump_back'] = 0;
        $result['op_gel'] = 0;
        $result['requery'] = "";
        $result['res_l'] = -1;
        $result['res_x'] = "0.000000";
        $result['res_y'] = "0.000000";
        $result['return_query'] = $wd;
        $result['spec_dispnum'] = 0;
        $result['time'] = 0;
        $result['total'] = 0;
        $result['tp'] = 0;
        $result['type'] = 11;
        $result['wd'] = $wd;
        $result['wd2'] = "";
        $result['what'] = $wd;
        $result['where'] = "";
        $response['result'] = array_merge($result,$data['result']);
        return $response;
    }
}
