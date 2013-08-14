<?php


namespace dszymczuk;


class Calendar
{

    private $name_days = array(
        'Mon' => 'Mon',
        'Tue' => 'Tue',
        'Wed' => 'Wed',
        'Thu' => 'Thu',
        'Fri' => 'Fri',
        'Sat' => 'Sat',
        'Sun' => 'Sun'
    );

    private $name_months = array(
        'Jan' => 'Jan',
        'Feb' => 'Feb',
        'Mar' => 'Mar',
        'Apr' => 'Apr',
        'May' => 'May',
        'Jun' => 'Jun',
        'Jul' => 'Jul',
        'Aug' => 'Aug',
        'Sep' => 'Sep',
        'Oct' => 'Oct',
        'Nov' => 'Nov',
        'Dec' => 'Dec'
    );

    private $month;
    private $year;
    private $title;

    public function __construct()
    {
        $this->month = date('m', time());
        $this->year = date('Y', time());
        $this->refreshTitle();
    }

    private function refreshTitle()
    {
        $first_day = mktime(0, 0, 0, $this->month, 1, $this->year);
        $this->title = $this->name_months[date('M', $first_day)] . " " . $this->year;
    }


    /**
     * Number from 1 to 12
     *
     * @param $month
     * @throws \Exception
     */
    public function setMonth($month)
    {

        if($month >= 1 && $month <= 12 && is_numeric($month))
        {
            $this->month = $month;
            $this->refreshTitle();
        }
        else
        {
            throw new \Exception('Invalid month number');
        }
    }


    /**
     * @param array $name_days
     */
    public function setNameDays(array $name_days)
    {
        $this->name_days = $name_days;
    }


    public function setNameMonth(array $name_month)
    {
        $this->name_months = $name_month;
    }


    /**
     * Generate calendar based on:
     * @link http://php.about.com/od/finishedphp1/ss/php_calendar.htm
     */
    public function generateCalendar()
    {
        $calendar = "";

        $date = time();
        $day = date('d', $date);
        $month = $this->month;
        $year = $this->year;
        $first_day = mktime(0, 0, 0, $month, 1, $year);
        $day_of_week = date('D', $first_day);

        switch ($day_of_week)
        {
            case "Mon":
                $blank = 0;
                break;
            case "Tue":
                $blank = 1;
                break;
            case "Wed":
                $blank = 2;
                break;
            case "Thu":
                $blank = 3;
                break;
            case "Fri":
                $blank = 4;
                break;
            case "Sat":
                $blank = 5;
                break;
            case "Sun":
                $blank = 6;
                break;
        }

        $days_in_month = cal_days_in_month(0, $month, $year);

        $calendar .= '<table class="ec_main" border=1>';

        $calendar .= "<tr><th colspan=7> $this->title </th></tr>";

        $calendar .= '<tr>';

        $calendar .= '<td class="ec_column">' . $this->name_days['Mon'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Tue'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Wed'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Thu'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Fri'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Sat'] . '</td>';
        $calendar .= '<td class="ec_column">' . $this->name_days['Sun'] . '</td>';

        $calendar .= '</tr>';

        $day_count = 1;


        $calendar .= "<tr>";
        while ($blank > 0)

        {

            $calendar .= "<td></td>";

            $blank = $blank - 1;

            $day_count++;

        }

        $day_num = 1;

        while ($day_num <= $days_in_month)
        {
            $calendar .= "<td> $day_num </td>";
            $day_num++;
            $day_count++;

            if ($day_count > 7)
            {
                $calendar .= "</tr><tr>";

                $day_count = 1;
            }
        }

        while ($day_count > 1 && $day_count <= 7)
        {

            $calendar .= "<td> </td>";

            $day_count++;

        }
        $calendar .= "</tr></table>";

        return $calendar;
    }
}