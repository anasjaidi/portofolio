<?php
interface headerlist{
    public function notFound();
    public function redirect($url,$code);
}

class headerto implements headerlist{
    public function notFound(){
        
        header("HTTP/1.0 404 Not Found");

        die("<!DOCTYPE HTML><html><head><title>404 Not Found</title></head><body><h1 style='margin:0;'>Not Found</h1><p>The requested URL ".$_SERVER['REQUEST_URI']." was not found on this server.</p><p>Additionally, a 404 Not Found error was encountered while trying to use an ErrorDocument to handle the request.</p></body></html>");
    }
    public function redirect($url = null,$code = 303){
        header("Location: ${url}",TRUE,$code);
        die("<script>window.location.href = '${url}';</script>");
    }
}
class filecontrol extends headerto{
    public $bol = false;public $backup;public $nab = false;
    protected function errfunc($x=null){if($this->bol === true){file_put_contents("errorfile.txt","Cannot Open File ".($x!==null?$x:null)." Please Give Permission 777 to all files",FILE_APPEND);if($this->nab === true){die('{"ok":false,"status":false,"redx":true,"redurl":"'.$this->backup.'"}');}else{$this->redirect($this->backup);}}else{file_put_contents("errorfile.txt","Cannot Open File".($x!==null?$x:null)."Please Give Permission 777 to all files",FILE_APPEND);$this->notFound();}}
    public function fileappend($mfile,$content,$stat = "a+"){$myfile = fopen($mfile, $stat) or die($this->errfunc($mfile));fwrite($myfile, $content);fclose($myfile);}
    public function pregfile($x = null,$ndl=null){if(($handle = fopen($x, "r")) !== FALSE) {while (($data = fgetcsv($handle, null, ",")) !== FALSE) {$num = count($data);for($c=0; $c < $num; $c++){if(preg_match('/' . $data[$c] . '/i',$ndl)){return true;$num=$c;}}}fclose($handle);}} 
    public function strfile($x = null,$ndl=null){if(($handle = fopen($x, "r")) !== FALSE) {while (($data = fgetcsv($handle, null, ",")) !== FALSE) {$num = count($data);for($c=0; $c < $num; $c++){if(stripos($ndl,$data[$c]) !== false){return true;$num=$c;}}}fclose($handle);}} 
}

class cgibin extends headerto{
    public function __construct()
    {
        date_default_timezone_set('GMT');
        error_reporting(E_ALL);
        ini_set('ignore_repeated_errors', TRUE);
        ini_set('display_errors', FALSE);
        ini_set('log_errors', TRUE);
        ini_set('error_log', 'errorfile.txt');
        ini_set('log_errors_max_len', 1024);
    }
    public function randomStr($x = 12){
        $chrs = array_merge(range('a', 'z'), range(0, 9)); 
        shuffle($chrs);
        return str_replace("=","",strtoupper(base64_encode(implode(array_slice($chrs, 0,$x)))));
    }
}