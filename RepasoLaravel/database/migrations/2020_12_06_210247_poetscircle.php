<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Poetscircle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP TABLE IF EXISTS costumers");
        DB::statement("CREATE TABLE costumers (
            `custom_id` INT(11) NOT NULL AUTO_INCREMENT,
            `fName` CHAR(30) NULL DEFAULT NULL,
            `lName` CHAR(40) NULL DEFAULT NULL,
            `address` CHAR(100) NULL DEFAULT NULL,
            `postcode` CHAR(20) NULL DEFAULT NULL,
            `phoneNum` CHAR(30) NULL DEFAULT NULL,
            PRIMARY KEY (custom_id)
        )");

        DB::statement("DROP TABLE IF EXISTS poems");
        DB::statement("CREATE TABLE poems (
            `poem_id` INT(11) NOT NULL AUTO_INCREMENT,
            `title` VARCHAR(50) NULL DEFAULT NULL,
            `content` TEXT NULL,
            `poet_id` INT(11) NOT NULL,
            PRIMARY KEY (poem_id)
        )");

         DB::statement("DROP TABLE IF EXISTS poemspubli");
         DB::statement("CREATE TABLE poemspubli (
            `poem_id` INT(11) NOT NULL,
            `publi_id` INT(11) NOT NULL

        )");

            DB::statement("DROP TABLE IF EXISTS poets");
            DB::statement("CREATE TABLE poets (
                `poet_id` INT(11) NOT NULL AUTO_INCREMENT,
                `fName` CHAR(30) NULL DEFAULT NULL,
                `surname` CHAR(40) NULL DEFAULT NULL,
                `address` CHAR(100) NULL DEFAULT NULL,
                `postcode` CHAR(20) NULL DEFAULT NULL,
                `phoneNum` CHAR(30) NULL DEFAULT NULL,
                PRIMARY KEY (poet_id)
            )");

            DB::statement("DROP TABLE IF EXISTS publications");
            DB::statement("CREATE TABLE publications (
                `publi_id` INT(11) NOT NULL AUTO_INCREMENT,
                `title` CHAR(100) NULL DEFAULT NULL,
                `price` FLOAT(5,2) NULL DEFAULT NULL,
                PRIMARY KEY (publi_id)

            )");
            DB::statement("DROP TABLE IF EXISTS sales");
            DB::statement("CREATE TABLE sales (
                `sale_id` INT(11) NOT NULL AUTO_INCREMENT,
                `sDate` DATE NULL DEFAULT NULL,
                `amount` FLOAT(5,2) NULL DEFAULT NULL,
                `custom_id` INT(11) NOT NULL,
                PRIMARY KEY (sale_id)
            )");
            DB::statement("DROP TABLE IF EXISTS salespubli");
            DB::statement("CREATE TABLE salespubli (
                `sale_id` INT(11) NOT NULL,
                `publi_id` INT(11) NOT NULL

            )");


 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
