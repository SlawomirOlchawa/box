<?php
/**
 * @author Sławomir Olchawa <slawooo@gmail.com>
 */

/**
 * Class Box_Base
 */
class Box_Base extends Tag_Block
{
    /**
     * @param Component $content
     * @param string|null $caption
     * @param string|null $anchor
     */
    public function __construct(Component $content, $caption = null, $anchor = null)
    {
        parent::__construct();

        $this->addCSSClass('box');

        if (!empty($anchor))
        {
            $anchor = new Tag_Anchor($anchor);
            $this->add($anchor);
        }

        if (!empty($caption))
        {
            $caption = new Tag_Header($caption, 2);
            $this->add($caption);
        }

        $this->add($content);

        Helper_Includer::addCSS('media/mod/box/css/main.css');
    }
}
