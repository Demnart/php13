<?php

class DB
{

    private function connectToDB()
    {
        return mysqli_connect('localhost','root','death9393','php12');
    }

    public function querry($sql,$class = 'stdClass')
    {
        $resource = $this->connectToDB();
        mysqli_set_charset($resource,"utf8");
        $result = mysqli_query($resource,$sql);
        if (false === $result)
        {
            return false;
        }

        $temp = [];

        while (NULL !== $row = mysqli_fetch_object($result,$class))
        {
            $temp[]=$row;
        }
        return $temp;
    }
}