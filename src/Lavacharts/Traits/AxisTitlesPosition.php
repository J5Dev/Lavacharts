<?php namespace Lavacharts\Traits;

use Lavacharts\Helpers\Helpers as H;
use Lavacharts\Exceptions\InvalidConfigValue;

trait AxisTitlesPosition
{
    /**
     * Where to place the axis titles, compared to the chart area. Supported values:
     * in   - Draw the axis titles inside the the chart area.
     * out  - Draw the axis titles outside the chart area.
     * none - Omit the axis titles.
     *
     * @param string $p The position of the axis titles
     *
     * @return Chart
     */
    public function axisTitlesPosition($p)
    {
        $v = ['in', 'out', 'none'];

        if (H::nonEmptyString($p) && in_array($p, $v)) {
            $this->addOption(array(__FUNCTION__ => $p));
        } else {
            throw new InvalidConfigValue(
                __FUNCTION__,
                'string',
                'with a value of ' . H::arrayToPipedString($v)
            );
        }

        return $this;
    }
}
