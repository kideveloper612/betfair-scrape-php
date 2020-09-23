<?php
echo "TEST111";
 $dir = 'myFolder';
 if ( !file_exists($dir) )
   mkdir ($dir, 0777);
@file_put_contents('/test.json', 'test content');
$data = @file_get_contents('/test.json');
echo getcwd();
echo $data;