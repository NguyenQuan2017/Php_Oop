<?php

class Java  implements DotSyntax, Compiled {

    public function __construct()
    {
        echo "java was created<br/>";
        $this->UsesDotSyntax();
    }

    public function UsesDotSyntax()
    {
        echo  "Yes";
    }

    public function isCompiled()
    {
        // TODO: Implement isCompiled() method.
    }
}