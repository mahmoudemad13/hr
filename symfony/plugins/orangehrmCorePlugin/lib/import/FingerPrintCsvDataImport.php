<?php

/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 *
 */
class FingerPrintCsvDataImport extends CsvDataImport
{

    private $attendanceDao;

    public function import($data)
    {

        if ($data[0] == "") {
            return false;
        }

        $punchRecord = new AttendanceRecord();
        $this->attendanceDao = new AttendanceDao();

        $punchRecord->setEmployeeId($data[0]);

//        $punchRecord->setPunchinutctime($data[1] ? $data[1] : "");
//        $punchRecord->setPunchinnote($data[2] ? $data[2] : "");
//        $punchRecord->setPunchintimeoffset($data[3] ? $data[3] : "");
//        $punchRecord->setPunchinusertime($data[4] ? $data[4] : "");
//
//        $punchRecord->setPunchoututctime($data[5] ? $data[5] : "");
//        $punchRecord->setPunchoutnote($data[6] ? $data[6] : "");
//        $punchRecord->setPunchouttimeoffset($data[7] ? $data[7] : "");
//        $punchRecord->setPunchoutusertime($data[8] ? $data[8] : "");

        $punchRecord->setState($data[9]);

        $this->attendanceDao->savePunchRecord($punchRecord);



        return true;
    }


}

?>
