<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('countries')->delete();
	$countries = array(
		array('id' => 1,'Country_code' => 'AF' ,'name' => "Afghanistan",'phone_code' => 93),
		array('id' => 2,'Country_code' => 'AL' ,'name' => "Albania",'phone_code' => 355),
		array('id' => 3,'Country_code' => 'DZ' ,'name' => "Algeria",'phone_code' => 213),
		array('id' => 4,'Country_code' => 'AS' ,'name' => "American Samoa",'phone_code' => 1684),
		array('id' => 5,'Country_code' => 'AD' ,'name' => "Andorra",'phone_code' => 376),
		array('id' => 6,'Country_code' => 'AO' ,'name' => "Angola",'phone_code' => 244),
		array('id' => 7,'Country_code' => 'AI' ,'name' => "Anguilla",'phone_code' => 1264),
		array('id' => 8,'Country_code' => 'AQ' ,'name' => "Antarctica",'phone_code' => 0),
		array('id' => 9,'Country_code' => 'AG' ,'name' => "Antigua And Barbuda",'phone_code' => 1268),
		array('id' => 10,'Country_code' => 'AR','name' => "Argentina",'phone_code' => 54),
		array('id' => 11,'Country_code' => 'AM','name' => "Armenia",'phone_code' => 374),
		array('id' => 12,'Country_code' => 'AW','name' => "Aruba",'phone_code' => 297),
		array('id' => 13,'Country_code' => 'AU','name' => "Australia",'phone_code' => 61),
		array('id' => 14,'Country_code' => 'AT','name' => "Austria",'phone_code' => 43),
		array('id' => 15,'Country_code' => 'AZ','name' => "Azerbaijan",'phone_code' => 994),
		array('id' => 16,'Country_code' => 'BS','name' => "Bahamas The",'phone_code' => 1242),
		array('id' => 17,'Country_code' => 'BH','name' => "Bahrain",'phone_code' => 973),
		array('id' => 18,'Country_code' => 'BD','name' => "Bangladesh",'phone_code' => 880),
		array('id' => 19,'Country_code' => 'BB','name' => "Barbados",'phone_code' => 1246),
		array('id' => 20,'Country_code' => 'BY','name' => "Belarus",'phone_code' => 375),
		array('id' => 21,'Country_code' => 'BE','name' => "Belgium",'phone_code' => 32),
		array('id' => 22,'Country_code' => 'BZ','name' => "Belize",'phone_code' => 501),
		array('id' => 23,'Country_code' => 'BJ','name' => "Benin",'phone_code' => 229),
		array('id' => 24,'Country_code' => 'BM','name' => "Bermuda",'phone_code' => 1441),
		array('id' => 25,'Country_code' => 'BT','name' => "Bhutan",'phone_code' => 975),
		array('id' => 26,'Country_code' => 'BO','name' => "Bolivia",'phone_code' => 591),
		array('id' => 27,'Country_code' => 'BA','name' => "Bosnia and Herzegovina",'phone_code' => 387),
		array('id' => 28,'Country_code' => 'BW','name' => "Botswana",'phone_code' => 267),
		array('id' => 29,'Country_code' => 'BV','name' => "Bouvet Island",'phone_code' => 0),
		array('id' => 30,'Country_code' => 'BR','name' => "Brazil",'phone_code' => 55),
		array('id' => 31,'Country_code' => 'IO','name' => "British Indian Ocean Territory",'phone_code' => 246),
	
		array('id' => 54,'Country_code' => 'HR','name' => "Croatia (Hrvatska)",'phone_code' => 385),
		array('id' => 55,'Country_code' => 'CU','name' => "Cuba",'phone_code' => 53),
		array('id' => 56,'Country_code' => 'CY','name' => "Cyprus",'phone_code' => 357),
		array('id' => 57,'Country_code' => 'CZ','name' => "Czech Republic",'phone_code' => 420),
		array('id' => 58,'Country_code' => 'DK','name' => "Denmark",'phone_code' => 45),
		array('id' => 59,'Country_code' => 'DJ','name' => "Djibouti",'phone_code' => 253),
		array('id' => 60,'Country_code' => 'DM','name' => "Dominica",'phone_code' => 1767),
		array('id' => 61,'Country_code' => 'DO','name' => "Dominican Republic",'phone_code' => 1809),
		array('id' => 62,'Country_code' => 'TP','name' => "East Timor",'phone_code' => 670),
		array('id' => 63,'Country_code' => 'EC','name' => "Ecuador",'phone_code' => 593),
		array('id' => 64,'Country_code' => 'EG','name' => "Egypt",'phone_code' => 20),
		array('id' => 65,'Country_code' => 'SV','name' => "El Salvador",'phone_code' => 503),
		array('id' => 66,'Country_code' => 'GQ','name' => "Equatorial Guinea",'phone_code' => 240),
		array('id' => 67,'Country_code' => 'ER','name' => "Eritrea",'phone_code' => 291),
		array('id' => 68,'Country_code' => 'EE','name' => "Estonia",'phone_code' => 372),
		array('id' => 69,'Country_code' => 'ET','name' => "Ethiopia",'phone_code' => 251),
		array('id' => 70,'Country_code' => 'XA','name' => "External Territories of Australia",'phone_code' => 61),
		array('id' => 71,'Country_code' => 'FK','name' => "Falkland Islands",'phone_code' => 500),
		array('id' => 72,'Country_code' => 'FO','name' => "Faroe Islands",'phone_code' => 298),
		array('id' => 73,'Country_code' => 'FJ','name' => "Fiji Islands",'phone_code' => 679),
		array('id' => 74,'Country_code' => 'FI','name' => "Finland",'phone_code' => 358),
		array('id' => 75,'Country_code' => 'FR','name' => "France",'phone_code' => 33),
		array('id' => 76,'Country_code' => 'GF','name' => "French Guiana",'phone_code' => 594),
		array('id' => 77,'Country_code' => 'PF','name' => "French Polynesia",'phone_code' => 689),
		array('id' => 78,'Country_code' => 'TF','name' => "French Southern Territories",'phone_code' => 0),
		array('id' => 79,'Country_code' => 'GA','name' => "Gabon",'phone_code' => 241),
		array('id' => 80,'Country_code' => 'GM','name' => "Gambia The",'phone_code' => 220),
		array('id' => 81,'Country_code' => 'GE','name' => "Georgia",'phone_code' => 995),
		array('id' => 82,'Country_code' => 'DE','name' => "Germany",'phone_code' => 49),
		array('id' => 83,'Country_code' => 'GH','name' => "Ghana",'phone_code' => 233),
		array('id' => 84,'Country_code' => 'GI','name' => "Gibraltar",'phone_code' => 350),
		array('id' => 85,'Country_code' => 'GR','name' => "Greece",'phone_code' => 30),
		array('id' => 86,'Country_code' => 'GL','name' => "Greenland",'phone_code' => 299),
		array('id' => 87,'Country_code' => 'GD','name' => "Grenada",'phone_code' => 1473),
		array('id' => 88,'Country_code' => 'GP','name' => "Guadeloupe",'phone_code' => 590),
		array('id' => 89,'Country_code' => 'GU','name' => "Guam",'phone_code' => 1671),
		array('id' => 90,'Country_code' => 'GT','name' => "Guatemala",'phone_code' => 502),
		array('id' => 91,'Country_code' => 'XU','name' => "Guernsey and Alderney",'phone_code' => 44),
		array('id' => 92,'Country_code' => 'GN','name' => "Guinea",'phone_code' => 224),
		array('id' => 93,'Country_code' => 'GW','name' => "Guinea-Bissau",'phone_code' => 245),
		array('id' => 94,'Country_code' => 'GY','name' => "Guyana",'phone_code' => 592),
		array('id' => 95,'Country_code' => 'HT','name' => "Haiti",'phone_code' => 509),
		array('id' => 96,'Country_code' => 'HM','name' => "Heard and McDonald Islands",'phone_code' => 0),
		array('id' => 97,'Country_code' => 'HN','name' => "Honduras",'phone_code' => 504),
		array('id' => 98,'Country_code' => 'HK','name' => "Hong Kong S.A.R.",'phone_code' => 852),
		array('id' => 99,'Country_code' => 'HU','name' => "Hungary",'phone_code' => 36),
		array('id' => 100,'Country_code' => 'IS','name' => "Iceland",'phone_code' => 354),
		array('id' => 101,'Country_code' => 'IN','name' => "India",'phone_code' => 91),
		array('id' => 102,'Country_code' => 'ID','name' => "Indonesia",'phone_code' => 62),
		array('id' => 103,'Country_code' => 'IR','name' => "Iran",'phone_code' => 98),
		array('id' => 104,'Country_code' => 'IQ','name' => "Iraq",'phone_code' => 964),
		array('id' => 105,'Country_code' => 'IE','name' => "Ireland",'phone_code' => 353),
		array('id' => 106,'Country_code' => 'IL','name' => "Israel",'phone_code' => 972),
		array('id' => 107,'Country_code' => 'IT','name' => "Italy",'phone_code' => 39),
		array('id' => 108,'Country_code' => 'JM','name' => "Jamaica",'phone_code' => 1876),
		array('id' => 109,'Country_code' => 'JP','name' => "Japan",'phone_code' => 81),
		array('id' => 110,'Country_code' => 'XJ','name' => "Jersey",'phone_code' => 44),
		array('id' => 111,'Country_code' => 'JO','name' => "Jordan",'phone_code' => 962),
		array('id' => 112,'Country_code' => 'KZ','name' => "Kazakhstan",'phone_code' => 7),
		array('id' => 113,'Country_code' => 'KE','name' => "Kenya",'phone_code' => 254),
		array('id' => 114,'Country_code' => 'KI','name' => "Kiribati",'phone_code' => 686),
		array('id' => 115,'Country_code' => 'KP','name' => "Korea North",'phone_code' => 850),
		array('id' => 116,'Country_code' => 'KR','name' => "Korea South",'phone_code' => 82),
		array('id' => 117,'Country_code' => 'KW','name' => "Kuwait",'phone_code' => 965),
		array('id' => 118,'Country_code' => 'KG','name' => "Kyrgyzstan",'phone_code' => 996),
		array('id' => 119,'Country_code' => 'LA','name' => "Laos",'phone_code' => 856),
		array('id' => 120,'Country_code' => 'LV','name' => "Latvia",'phone_code' => 371),
		array('id' => 121,'Country_code' => 'LB','name' => "Lebanon",'phone_code' => 961),
		array('id' => 122,'Country_code' => 'LS','name' => "Lesotho",'phone_code' => 266),
		array('id' => 123,'Country_code' => 'LR','name' => "Liberia",'phone_code' => 231),
		array('id' => 124,'Country_code' => 'LY','name' => "Libya",'phone_code' => 218),
		array('id' => 125,'Country_code' => 'LI','name' => "Liechtenstein",'phone_code' => 423),
	
		array('id' => 169,'Country_code' => 'PA','name' => "Panama",'phone_code' => 507),
		array('id' => 170,'Country_code' => 'PG','name' => "Papua new Guinea",'phone_code' => 675),
		array('id' => 171,'Country_code' => 'PY','name' => "Paraguay",'phone_code' => 595),
		array('id' => 172,'Country_code' => 'PE','name' => "Peru",'phone_code' => 51),
		array('id' => 173,'Country_code' => 'PH','name' => "Philippines",'phone_code' => 63),
		array('id' => 174,'Country_code' => 'PN','name' => "Pitcairn Island",'phone_code' => 0),
		array('id' => 175,'Country_code' => 'PL','name' => "Poland",'phone_code' => 48),
		array('id' => 176,'Country_code' => 'PT','name' => "Portugal",'phone_code' => 351),
		array('id' => 177,'Country_code' => 'PR','name' => "Puerto Rico",'phone_code' => 1787),
		array('id' => 178,'Country_code' => 'QA','name' => "Qatar",'phone_code' => 974),
		array('id' => 179,'Country_code' => 'RE','name' => "Reunion",'phone_code' => 262),
		array('id' => 180,'Country_code' => 'RO','name' => "Romania",'phone_code' => 40),
		array('id' => 181,'Country_code' => 'RU','name' => "Russia",'phone_code' => 70),
		array('id' => 182,'Country_code' => 'RW','name' => "Rwanda",'phone_code' => 250),
		array('id' => 183,'Country_code' => 'SH','name' => "Saint Helena",'phone_code' => 290),
		array('id' => 184,'Country_code' => 'KN','name' => "Saint Kitts And Nevis",'phone_code' => 1869),
		array('id' => 185,'Country_code' => 'LC','name' => "Saint Lucia",'phone_code' => 1758),
		array('id' => 186,'Country_code' => 'PM','name' => "Saint Pierre and Miquelon",'phone_code' => 508),
		array('id' => 187,'Country_code' => 'VC','name' => "Saint Vincent And The Grenadines",'phone_code' => 1784),
		
		array('id' => 237,'Country_code' => 'VE','name' => "Venezuela",'phone_code' => 58),
		array('id' => 238,'Country_code' => 'VN','name' => "Vietnam",'phone_code' => 84),
		array('id' => 239,'Country_code' => 'VG','name' => "Virgin Islands (British)",'phone_code' => 1284),
		array('id' => 240,'Country_code' => 'VI','name' => "Virgin Islands (US)",'phone_code' => 1340),
		array('id' => 241,'Country_code' => 'WF','name' => "Wallis And Futuna Islands",'phone_code' => 681),
		array('id' => 242,'Country_code' => 'EH','name' => "Western Sahara",'phone_code' => 212),
		array('id' => 243,'Country_code' => 'YE','name' => "Yemen",'phone_code' => 967),
		array('id' => 244,'Country_code' => 'YU','name' => "Yugoslavia",'phone_code' => 38),
		array('id' => 245,'Country_code' => 'ZM','name' => "Zambia",'phone_code' => 260),
		array('id' => 246,'Country_code' => 'ZW','name' => "Zimbabwe",'phone_code' => 263),
		);
		DB::table('countries')->insert($countries);
	
    }
}