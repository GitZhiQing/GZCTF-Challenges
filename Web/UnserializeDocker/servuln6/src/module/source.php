<?php

class Virgo
{
    private $comm;

    public function __construct($com)
    {
        $this->comm = $com;
    }

    function __destruct()
    {
        echo "触发了魔术方法__destruct()\n";
        echo eval($this->comm);
    }
}

if (isset($_REQUEST['Virgo'])) {
    $param = str_replace("%", "replaced", $_REQUEST['Virgo']);
    unserialize($param);
} else {
    echo "系统检测发现该处漏洞，进行攻击测试\n";
}
?>