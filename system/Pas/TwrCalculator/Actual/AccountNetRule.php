<?php

namespace Pas\TwrCalculator\Actual;

use Model\Pas\Repository\AccountTwrValueRepository as AccountTwrValueRepo;

class AccountNetRule extends Rule
{
    /**
     * @param int $identificator
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     */
    public function __construct($identificator, \DateTime $dateFrom = null, \DateTime $dateTo = null)
    {
        $this->key = 'net';
        $this->valueRepo = new AccountTwrValueRepo();

        parent::__construct($identificator, $dateFrom, $dateTo);
    }
}