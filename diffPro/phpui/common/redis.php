<?php
/*
 * redis ����ʹ��
 * author:wangleisong 
 * 2014/03/11
 * ��ĿǰΪֹ�����漰����ȡ�������ʲ����������֣�
 *
 */
class Common_Redis
{
 
    /**
     * ��������
     */
    private static $r_con = false;

    /**
     * PHP5���캯��
     */
    function __construct()
    {
        if ( !class_exists('Redis') ) {
            $this->logData('new','redis not exist');        
            return FALSE;
        }
    }
    /**
     * ����redis����
     */
   private static function setup($retry=1){
        $r_config = Common_Conf::get('redis'); 
        if (empty($r_config['machine'])){
            self::logData('config','not fetch redis server config',$r_config);        
            return FALSE;
        }
        $connect_timeout = isset($r_config['timeout'])?$r_config['timeout']:1;
        if((! self::$r_con)){
            $r_con = new Redis();
            if(count($r_config['machine'])>1){
                $machine_key = array_rand($r_config['machine']);
            }else{
                $machine_key = 0;
            }
            $machine = $r_config['machine'][$machine_key];
            $r = $r_con->connect($machine['host'],$machine['port'],$connect_timeout);
            if(!$r){
                self::logData('connect','redis connect error',$machine);
                return $retry ? self::setup($retry-1) : -1;
            }
            self::$r_con = $r_con;
        }
        return 0;
    }

    /**
     * ���ݲ������͵��ö�Ӧ����
     * @param unknown_type $method
     * @param unknown_type $params
     */
    function __call($method, $params)
    {
        $denyMethod = array('setOption' => '', 'bgrewriteaof' => '', 'bgsave' => '', 'flushDB' => '', 'flushAll' => '');
        if ( array_key_exists(strtolower($method), $denyMethod) ) {
            return FALSE;
        }
        try {
            $slave_method = array('get' => '', 'exists' => '','mget' =>'');
            if ( array_key_exists(strtolower($method), $slave_method) ) {
                return ($this->setup()>-1) ? call_user_func_array(array(self::$r_con, $method), $params) : FALSE;
            }
        } catch ( Exception $e ) {
            $this->logData($method,"redis operation error " . $e->getMessage(), $params);
            return FALSE;
        }
    }

    /**
     * �ر�����
     * Enter description here ...
     */
    function close()
    {
        if (self::$r_con) {
            if ( method_exists(self::$r_con, 'close') ) {
                self::$r_con->close();
            }
        }
        self::$r_con = FALSE;
    }

    /**
     * ��������
     * Enter description here ...
     */
    function __destruct()
    {
        $this->close();
    }
    /**
     * log��¼
     *
     */
    static static function LogData($sontype,$message,$param=''){
        $logobj = new Common_Log();
        $message = is_array($message)?json_encode($message):$message;
        $param   = is_array($param)?json_encode($param):$param;
        $logobj->write('FATAL', 'redis',
            array(
                'sontype'=>$sontype,
                'param'=>$param,
                'message'=>$message, 
                'file'=>__FILE__,
                'line'=>__LINE__,
            )
        );
    }
}

?>
