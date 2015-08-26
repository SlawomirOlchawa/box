<?php
/**
 * @author Sławomir Olchawa <slawooo@gmail.com>
 */

/**
 * Class Box_EqualRow - nested div blocks styled as table and table-row
 */
class Box_EqualRow extends Tag_Block
{
    /**
     * @var Tag_Block
     */
    protected $_row;

    /**
     * @param Component[] $boxes
     */
    public function __construct($boxes = array())
    {
        parent::__construct();

        $this->addCSSClass('equal_height');
        $this->_row = new Tag_Block();
        $this->_row->addCSSClass('table_row');

        foreach ($boxes as $box)
        {
            $this->add($box);
        }

        parent::add($this->_row);

        Helper_Includer::addCSS('media/mod/box/css/main.css');
    }

    /**
     * @param Component $component
     * @return $this
     */
    public function add(Component $component = null)
    {
        return $this->_row->add($component);
    }
}
