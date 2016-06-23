<?php

class Mysql
{
    var $db;

    /**
     * webhost000Mysql2 constructor.
     */
    function __construct()
    {
        // 调用mysqli的构造函数建立连接，同时选择使用数据库'test'
        $config = require 'conf/mysqlconfig.php';
        $host = $config['master']['host'];
        $user = $config['master']['user'];
        $pwd = $config['master']['pwd'];
        $dbname = $config['master']['dbname'];

        $this->db = new mysqli($host, $user, $pwd, $dbname);
        // 检查数据库连接
        if ($this->db->connect_errno) {
            echo '数据库连接失败!<br>\n';
            die('Connect Error: ' . $this->db->connect_errno);// 退出程序，后面的所有语句将不再执行
        }
        $SetCharacterSetSql = "SET NAMES 'utf8'";
        $this->db->query($SetCharacterSetSql) or die('$SetCharacterSetSql Error: ' . $this->db->connect_errno);
        //echo '数据库连接成功!<br>\n';
        //printf('Host information:%s <br/><br/>\n', $this->db->host_info);
    }

    function getData($sql)
    {
        $data = $this->db->query($sql);
        $result = array();
        if (!empty($data)) {
            while ($row = $data->fetch_array(MYSQLI_BOTH)) {//遍历读取数据
                $result[] = $row;
                //print 'one time';
                //var_dump($row);
                //printf ("ID: %s  Name: %s\n", $row['ID1'], $row['content1']);
            }
        }
        return $result;
    }

    function Update($sql){
        $bool = $this->db->query($sql);
        //var_dump($data);
        return $bool;
    }

    function __destruct()
    {
        // 关闭数据库连接
        $this->db->close();
    }

}

