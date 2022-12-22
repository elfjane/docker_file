#!/bin/sh
tar -xzvf Smarty-2.6.28.tar.gz
sed -i 's/    function Smarty_Compiler()/    function __construct()/g' ./Smarty-2.6.28/libs/Smarty_Compiler.class.php
sed -i 's/    function Smarty()/    function __construct()/g' ./Smarty-2.6.28/libs/Smarty.class.php
