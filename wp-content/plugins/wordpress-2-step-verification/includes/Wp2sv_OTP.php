<?php
class Wp2sv_OTP{
    var $secret_key;
    var $wp2sv;
    var $secret_key_length=32;
    function __construct(Wordpress2StepVerification $wp2sv){
        if($wp2sv){
            $this->wp2sv=$wp2sv;
        }
        if(!$wp2sv->model()->secret_key){
            $wp2sv->model()->secret_key=$this->generateSecretKey();
        }
        $this->setSecretKey($wp2sv->model()->secret_key);
        date_default_timezone_set('UTC');
        if(!get_site_option('wp2sv_time_synced')){
            update_site_option('wp2sv_time_synced',time());
            $this->syncTime();
        }
    }
    
    function check($otp,$scale=1,$secret=''){
        $scale=intval($scale);
        if($scale<1)$scale=1;
        $otp_pass=$this->generate($scale,$secret);
        foreach($otp_pass as $pass){
            if($otp==$pass)
                return true;
        }
        return false;
    }
    function time(){
        $wp2sv_local_diff_utc=get_site_option('wp2sv_local_diff_utc');
        $time=time()-$wp2sv_local_diff_utc;
        return $time;
    }
    function localTime(){
        $gmt=$this->time();
        return $gmt+( get_option( 'gmt_offset' ) * HOUR_IN_SECONDS );
    }
    function syncTime(){
        $utc=$this->getInternetTime();
        if(!$utc){
            return false;
        }
        if($utc) {
            $wp2sv_local_diff_utc = time() - $utc;
            update_site_option( 'wp2sv_local_diff_utc', $wp2sv_local_diff_utc );
            return true;
        }
        return false;
    }
    function getInternetTime(){
        return wp2sv_get_time_ntp();
    }
    function generate($scale=1,$secret_key=''){
        $scale=abs(intval($scale));
		$from = -$scale;
		$to =  $scale; 
    	$timer = floor( $this->time() / 30 );
    	$this->setSecretKey($secret_key);
    	$secret_key=$this->getDecodedSecretKey();
        $result=array();
    	for ($i=$from; $i<=$to; $i++) {
    		$time=chr(0).chr(0).chr(0).chr(0).pack('N*',$timer+$i);
    		$hm = hash_hmac( 'SHA1', $time, $secret_key, true );
    		$offset = ord(substr($hm,-1)) & 0x0F;
    		$hashpart=substr($hm,$offset,4);
    		$value=unpack("N",$hashpart);
    		$value=$value[1];
    		$value = $value & 0x7FFFFFFF;
    		$value = $value % 1000000;
    		$result[]=$value;	
    	}
    	return $result;
    }
    function getSecretKey(){
        return $this->secret_key;
    }
    function getDecodedSecretKey(){
        return $this->base32Decode($this->getSecretKey());
    }
    function setSecretKey($key){
        if(!$key){
            return ;
        }
        $this->secret_key=$key;
    }
    function generateSecretKey(){
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567'; // allowed characters in Base32
        $secret = '';
        for ( $i = 0; $i < $this->secret_key_length; $i++ ) {
            $secret .= substr( $chars, rand( 0, strlen( $chars ) - 1 ), 1 );
        }
        return strtolower($secret);
    }
    function base32Decode($input){
        $input=strtoupper($input);
        $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZ234567="; 
        $buffer = 0;
        $bitsLeft = 0;
        $output = array();
        $i = 0;
        $count = 0;
        $stop=strlen($input);
        while ($i < $stop) {
            $val =$input{$i++};
            $val=strpos($keyStr,$val);
            if ($val >= 0 && $val < 32) {
                $buffer <<= 5;
                $buffer |= $val;
                $bitsLeft += 5;
                if ($bitsLeft >= 8) {
                    $output[$count++] = ($buffer >> ($bitsLeft - 8)) & 0xFF;
                    $bitsLeft -= 8;
                }
            }
        }
        if ($bitsLeft > 0) {
            $buffer <<= 5;
            $output[$count++] = ($buffer >> ($bitsLeft - 3)) & 0xFF;
        }
        unset($count);
        $output=array_map('chr',$output);
        $output=implode('',$output);
        return $output;
    }
    function is64bit(){
        if(PHP_INT_SIZE==8){
            return true;
        }
        return false;
    }
    function randomPassword($length=16){
        $chars = 'abcdefghijklmnopqrstuvwxyz';
        $password = '';
        for ( $i = 0; $i < $length; $i++ ) {
            $password .= substr($chars, wp_rand(0, strlen($chars) - 1), 1);
        }
        return $password;
    }
}