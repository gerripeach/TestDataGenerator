<?php

namespace RandomData;

class RandomInvoice {

    public static function getInvoice() {

        $invoiceData = array(
            'id' => '',
            'date' => '',
            'name' => ''
        );

        $lastYear = strtotime('-1 year');
        $now = time();
        $randomDate = date('d.m.Y', random_int($lastYear, $now));

        $invoiceData['id'] = random_int(6000, 60000);
        $invoiceData['date'] = $randomDate;
        $invoiceData['contact'] = \RandomData\RandomName::getFullName();

        return $invoiceData;
    }
}