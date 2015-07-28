<?php

class Common_Slimdata{

    public $qt;

    public function __construct($qt, $filter='default'){
        $this->qt = $qt;
        $this->filter = $filter;
        $filename = $qt;
        if($qt=='con'){
            $filename = 'fk'.$filename;
        }
        $conf = Common_Conf::get('slim/'.$filename);
        $filter = isset($conf[$filter]) ? $filter : 'default';
        $this->conf = Common_Func::array_merge_rec($conf['comm'],$conf[$filter]);       
        unset($conf);
    }

    public function doslim($data){
        $return = $this->commslim($data, $this->conf);
        return $return;
    }

    //这个暂时写成递归吧
    public function commslim($data, $format){
        $return = array();
        if(is_array($format) && count($format)>0){
            foreach($format as $fk=>$fv){
                if(@array_key_exists($fk,$data)){
                    $k = $fk;
                    if(is_array($fv) && is_array($data[$k])){
                        $return[$k] = $this->commslim($data[$k], $fv);
                    }else{
                        $return[$k] = $this->cutByVal($data[$k],$fv);
                    }
                }
                if(strstr($fk, '.*')!==false){
                    $k = trim($fk, '.*');
                    if(isset($return[$k]) && is_array($return[$k]) && count($return[$k])>0){
                        foreach($return[$k] as $dkk=>$dvv){
                            $return[$k][$dkk] = array();
                            if(is_array($fv)){
                                $return[$k][$dkk] = $this->commslim($dvv, $fv);
                            }else{
                                $return[$k][$dkk] = $this->cutByVal($dvv, $fv);
                            }
                        }
                    }
                }
            }
        }
        return $return;
    }

    /**
     * cut data by slim
     *
     * @param data array
     * @param len  * | intval(string)
     */
    private function cutByVal($data, $lenth){
        if($lenth == '*' || !isset($data)){
            $return = $data;
        }else{
            if(is_array($data)){
                $return = array_slice($data, 0, intval($lenth));
            }else{
                $return = mb_substr($data, 0, intval($lenth), 'utf-8');
            }
        }
        return $return;
    }
}
