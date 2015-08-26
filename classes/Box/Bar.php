<?php
/**
 * @author Sławomir Olchawa <slawooo@gmail.com>
 */

/**
 * Class Box_Bar
 */
class Box_Bar extends Box_Base
{
    /**
     * @param string $caption
     */
    public function __construct($caption)
    {
        parent::__construct(new Tag_Header($caption, 2));

        $this->addCSSClass('box_bar');
    }
}
