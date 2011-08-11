<?php

/**
 * @property string|PHPParser_Expr_Name $class Class name
 * @property string                     $name  Constant name
 */
class PHPParser_Node_Expr_ClassConstFetch extends PHPParser_Node_Expr
{
    /**
     * Constructs a class const fetch node.
     *
     * @param string|PHPParser_Expr_Name $class      Class name
     * @param string                     $name       Constant name
     * @param int                        $line       Line
     * @param null|string                $docComment Nearest doc comment
     */
    public function __construct($class, $name, $line = -1, $docComment = null) {
        parent::__construct(
            array(
                'class' => $class,
                'name'  => $name
            ),
            $line, $docComment
        );
    }
}