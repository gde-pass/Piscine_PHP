<?php
include_once('IFighter.class.php');

class NightsWatch implements IFighter
{
    private $fighter = array();
    public function recruit($someone)
    {
        $this->fighter[] = $someone;
    }
    public function fight()
    {
        foreach ($this->fighter as $guy)
        {
            if ($guy instanceof IFighter)
                $guy->fight();
        }
    }
}
?>
