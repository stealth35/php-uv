<?php

$pipe = uv_pipe_init(1,1);
uv_pipe_open($pipe, 1);
//uv_pipe_bind($pipe,"/tmp/hoge.sock");

uv_write($pipe, "Hello",function($s,$b){
    echo 1;
    uv_close($b);
});

uv_run();
