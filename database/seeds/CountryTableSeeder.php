<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
        [
    		[ 
				"id" => "1",
				"name" => "Afghanistan",
				"iso3" => "AFG",
				"iso2" => "AF",
				"countrycode" => "4",
				"phonecode" => "93",
				"capital" => "Kabul",
				"currency" => "AFN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "2",
				"name" => "Aland Islands",
				"iso3" => "ALA",
				"iso2" => "AX",
				"countrycode" => "248",
				"phonecode" => "+358-18",
				"capital" => "Mariehamn",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "3",
				"name" => "Albania",
				"iso3" => "ALB",
				"iso2" => "AL",
				"countrycode" => "8",
				"phonecode" => "355",
				"capital" => "Tirana",
				"currency" => "ALL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "4",
				"name" => "Algeria",
				"iso3" => "DZA",
				"iso2" => "DZ",
				"countrycode" => "12",
				"phonecode" => "213",
				"capital" => "Algiers",
				"currency" => "DZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "5",
				"name" => "American Samoa",
				"iso3" => "ASM",
				"iso2" => "AS",
				"countrycode" => "16",
				"phonecode" => "+1-684",
				"capital" => "Pago Pago",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "6",
				"name" => "Andorra",
				"iso3" => "AND",
				"iso2" => "AD",
				"countrycode" => "20",
				"phonecode" => "376",
				"capital" => "Andorra la Vella",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "7",
				"name" => "Angola",
				"iso3" => "AGO",
				"iso2" => "AO",
				"countrycode" => "24",
				"phonecode" => "244",
				"capital" => "Luanda",
				"currency" => "AOA",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "8",
				"name" => "Anguilla",
				"iso3" => "AIA",
				"iso2" => "AI",
				"countrycode" => "660",
				"phonecode" => "+1-264",
				"capital" => "The Valley",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "9",
				"name" => "Antarctica",
				"iso3" => "ATA",
				"iso2" => "AQ",
				"countrycode" => "10",
				"phonecode" => "",
				"capital" => "",
				"currency" => "",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "10",
				"name" => "Antigua And Barbuda",
				"iso3" => "ATG",
				"iso2" => "AG",
				"countrycode" => "28",
				"phonecode" => "+1-268",
				"capital" => "St. John's",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "11",
				"name" => "Argentina",
				"iso3" => "ARG",
				"iso2" => "AR",
				"countrycode" => "32",
				"phonecode" => "54",
				"capital" => "Buenos Aires",
				"currency" => "ARS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "12",
				"name" => "Armenia",
				"iso3" => "ARM",
				"iso2" => "AM",
				"countrycode" => "51",
				"phonecode" => "374",
				"capital" => "Yerevan",
				"currency" => "AMD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "13",
				"name" => "Aruba",
				"iso3" => "ABW",
				"iso2" => "AW",
				"countrycode" => "533",
				"phonecode" => "297",
				"capital" => "Oranjestad",
				"currency" => "AWG",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "14",
				"name" => "Australia",
				"iso3" => "AUS",
				"iso2" => "AU",
				"countrycode" => "36",
				"phonecode" => "61",
				"capital" => "Canberra",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "15",
				"name" => "Austria",
				"iso3" => "AUT",
				"iso2" => "AT",
				"countrycode" => "40",
				"phonecode" => "43",
				"capital" => "Vienna",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "16",
				"name" => "Azerbaijan",
				"iso3" => "AZE",
				"iso2" => "AZ",
				"countrycode" => "31",
				"phonecode" => "994",
				"capital" => "Baku",
				"currency" => "AZN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "17",
				"name" => "Bahamas The",
				"iso3" => "BHS",
				"iso2" => "BS",
				"countrycode" => "44",
				"phonecode" => "+1-242",
				"capital" => "Nassau",
				"currency" => "BSD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "18",
				"name" => "Bahrain",
				"iso3" => "BHR",
				"iso2" => "BH",
				"countrycode" => "48",
				"phonecode" => "973",
				"capital" => "Manama",
				"currency" => "BHD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "19",
				"name" => "Bangladesh",
				"iso3" => "BGD",
				"iso2" => "BD",
				"countrycode" => "50",
				"phonecode" => "880",
				"capital" => "Dhaka",
				"currency" => "BDT",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "20",
				"name" => "Barbados",
				"iso3" => "BRB",
				"iso2" => "BB",
				"countrycode" => "52",
				"phonecode" => "+1-246",
				"capital" => "Bridgetown",
				"currency" => "BBD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "21",
				"name" => "Belarus",
				"iso3" => "BLR",
				"iso2" => "BY",
				"countrycode" => "112",
				"phonecode" => "375",
				"capital" => "Minsk",
				"currency" => "BYR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "22",
				"name" => "Belgium",
				"iso3" => "BEL",
				"iso2" => "BE",
				"countrycode" => "56",
				"phonecode" => "32",
				"capital" => "Brussels",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "23",
				"name" => "Belize",
				"iso3" => "BLZ",
				"iso2" => "BZ",
				"countrycode" => "84",
				"phonecode" => "501",
				"capital" => "Belmopan",
				"currency" => "BZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "24",
				"name" => "Benin",
				"iso3" => "BEN",
				"iso2" => "BJ",
				"countrycode" => "204",
				"phonecode" => "229",
				"capital" => "Porto-Novo",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "25",
				"name" => "Bermuda",
				"iso3" => "BMU",
				"iso2" => "BM",
				"countrycode" => "60",
				"phonecode" => "+1-441",
				"capital" => "Hamilton",
				"currency" => "BMD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "26",
				"name" => "Bhutan",
				"iso3" => "BTN",
				"iso2" => "BT",
				"countrycode" => "64",
				"phonecode" => "975",
				"capital" => "Thimphu",
				"currency" => "BTN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "27",
				"name" => "Bolivia",
				"iso3" => "BOL",
				"iso2" => "BO",
				"countrycode" => "68",
				"phonecode" => "591",
				"capital" => "Sucre",
				"currency" => "BOB",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "28",
				"name" => "Bosnia and Herzegovina",
				"iso3" => "BIH",
				"iso2" => "BA",
				"countrycode" => "70",
				"phonecode" => "387",
				"capital" => "Sarajevo",
				"currency" => "BAM",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "29",
				"name" => "Botswana",
				"iso3" => "BWA",
				"iso2" => "BW",
				"countrycode" => "72",
				"phonecode" => "267",
				"capital" => "Gaborone",
				"currency" => "BWP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "30",
				"name" => "Bouvet Island",
				"iso3" => "BVT",
				"iso2" => "BV",
				"countrycode" => "74",
				"phonecode" => "",
				"capital" => "",
				"currency" => "NOK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "31",
				"name" => "Brazil",
				"iso3" => "BRA",
				"iso2" => "BR",
				"countrycode" => "76",
				"phonecode" => "55",
				"capital" => "Brasilia",
				"currency" => "BRL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "32",
				"name" => "British Indian Ocean Territory",
				"iso3" => "IOT",
				"iso2" => "IO",
				"countrycode" => "86",
				"phonecode" => "246",
				"capital" => "Diego Garcia",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "33",
				"name" => "Brunei",
				"iso3" => "BRN",
				"iso2" => "BN",
				"countrycode" => "96",
				"phonecode" => "673",
				"capital" => "Bandar Seri Begawan",
				"currency" => "BND",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "34",
				"name" => "Bulgaria",
				"iso3" => "BGR",
				"iso2" => "BG",
				"countrycode" => "100",
				"phonecode" => "359",
				"capital" => "Sofia",
				"currency" => "BGN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "35",
				"name" => "Burkina Faso",
				"iso3" => "BFA",
				"iso2" => "BF",
				"countrycode" => "854",
				"phonecode" => "226",
				"capital" => "Ouagadougou",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "36",
				"name" => "Burundi",
				"iso3" => "BDI",
				"iso2" => "BI",
				"countrycode" => "108",
				"phonecode" => "257",
				"capital" => "Bujumbura",
				"currency" => "BIF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "37",
				"name" => "Cambodia",
				"iso3" => "KHM",
				"iso2" => "KH",
				"countrycode" => "116",
				"phonecode" => "855",
				"capital" => "Phnom Penh",
				"currency" => "KHR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "38",
				"name" => "Cameroon",
				"iso3" => "CMR",
				"iso2" => "CM",
				"countrycode" => "120",
				"phonecode" => "237",
				"capital" => "Yaounde",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "39",
				"name" => "Canada",
				"iso3" => "CAN",
				"iso2" => "CA",
				"countrycode" => "124",
				"phonecode" => "1",
				"capital" => "Ottawa",
				"currency" => "CAD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "40",
				"name" => "Cape Verde",
				"iso3" => "CPV",
				"iso2" => "CV",
				"countrycode" => "132",
				"phonecode" => "238",
				"capital" => "Praia",
				"currency" => "CVE",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "41",
				"name" => "Cayman Islands",
				"iso3" => "CYM",
				"iso2" => "KY",
				"countrycode" => "136",
				"phonecode" => "+1-345",
				"capital" => "George Town",
				"currency" => "KYD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "42",
				"name" => "Central African Republic",
				"iso3" => "CAF",
				"iso2" => "CF",
				"countrycode" => "140",
				"phonecode" => "236",
				"capital" => "Bangui",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "43",
				"name" => "Chad",
				"iso3" => "TCD",
				"iso2" => "TD",
				"countrycode" => "148",
				"phonecode" => "235",
				"capital" => "N'Djamena",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "44",
				"name" => "Chile",
				"iso3" => "CHL",
				"iso2" => "CL",
				"countrycode" => "152",
				"phonecode" => "56",
				"capital" => "Santiago",
				"currency" => "CLP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "45",
				"name" => "China",
				"iso3" => "CHN",
				"iso2" => "CN",
				"countrycode" => "156",
				"phonecode" => "86",
				"capital" => "Beijing",
				"currency" => "CNY",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "46",
				"name" => "Christmas Island",
				"iso3" => "CXR",
				"iso2" => "CX",
				"countrycode" => "162",
				"phonecode" => "61",
				"capital" => "Flying Fish Cove",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "47",
				"name" => "Cocos (Keeling) Islands",
				"iso3" => "CCK",
				"iso2" => "CC",
				"countrycode" => "166",
				"phonecode" => "61",
				"capital" => "West Island",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "48",
				"name" => "Colombia",
				"iso3" => "COL",
				"iso2" => "CO",
				"countrycode" => "170",
				"phonecode" => "57",
				"capital" => "Bogota",
				"currency" => "COP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "49",
				"name" => "Comoros",
				"iso3" => "COM",
				"iso2" => "KM",
				"countrycode" => "174",
				"phonecode" => "269",
				"capital" => "Moroni",
				"currency" => "KMF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "50",
				"name" => "Congo",
				"iso3" => "COG",
				"iso2" => "CG",
				"countrycode" => "178",
				"phonecode" => "242",
				"capital" => "Brazzaville",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "51",
				"name" => "Congo The Democratic Republic Of The",
				"iso3" => "COD",
				"iso2" => "CD",
				"countrycode" => "180",
				"phonecode" => "243",
				"capital" => "Kinshasa",
				"currency" => "CDF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "52",
				"name" => "Cook Islands",
				"iso3" => "COK",
				"iso2" => "CK",
				"countrycode" => "184",
				"phonecode" => "682",
				"capital" => "Avarua",
				"currency" => "NZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "53",
				"name" => "Costa Rica",
				"iso3" => "CRI",
				"iso2" => "CR",
				"countrycode" => "188",
				"phonecode" => "506",
				"capital" => "San Jose",
				"currency" => "CRC",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "54",
				"name" => "Cote D'Ivoire (Ivory Coast)",
				"iso3" => "CIV",
				"iso2" => "CI",
				"countrycode" => "384",
				"phonecode" => "225",
				"capital" => "Yamoussoukro",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "55",
				"name" => "Croatia (Hrvatska)",
				"iso3" => "HRV",
				"iso2" => "HR",
				"countrycode" => "191",
				"phonecode" => "385",
				"capital" => "Zagreb",
				"currency" => "HRK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "56",
				"name" => "Cuba",
				"iso3" => "CUB",
				"iso2" => "CU",
				"countrycode" => "192",
				"phonecode" => "53",
				"capital" => "Havana",
				"currency" => "CUP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "57",
				"name" => "Cyprus",
				"iso3" => "CYP",
				"iso2" => "CY",
				"countrycode" => "196",
				"phonecode" => "357",
				"capital" => "Nicosia",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "58",
				"name" => "Czech Republic",
				"iso3" => "CZE",
				"iso2" => "CZ",
				"countrycode" => "203",
				"phonecode" => "420",
				"capital" => "Prague",
				"currency" => "CZK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "59",
				"name" => "Denmark",
				"iso3" => "DNK",
				"iso2" => "DK",
				"countrycode" => "208",
				"phonecode" => "45",
				"capital" => "Copenhagen",
				"currency" => "DKK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "60",
				"name" => "Djibouti",
				"iso3" => "DJI",
				"iso2" => "DJ",
				"countrycode" => "262",
				"phonecode" => "253",
				"capital" => "Djibouti",
				"currency" => "DJF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "61",
				"name" => "Dominica",
				"iso3" => "DMA",
				"iso2" => "DM",
				"countrycode" => "212",
				"phonecode" => "+1-767",
				"capital" => "Roseau",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "62",
				"name" => "Dominican Republic",
				"iso3" => "DOM",
				"iso2" => "DO",
				"countrycode" => "214",
				"phonecode" => "+1-809 and 1-829",
				"capital" => "Santo Domingo",
				"currency" => "DOP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "63",
				"name" => "East Timor",
				"iso3" => "TLS",
				"iso2" => "TL",
				"countrycode" => "626",
				"phonecode" => "670",
				"capital" => "Dili",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "64",
				"name" => "Ecuador",
				"iso3" => "ECU",
				"iso2" => "EC",
				"countrycode" => "218",
				"phonecode" => "593",
				"capital" => "Quito",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "65",
				"name" => "Egypt",
				"iso3" => "EGY",
				"iso2" => "EG",
				"countrycode" => "818",
				"phonecode" => "20",
				"capital" => "Cairo",
				"currency" => "EGP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "66",
				"name" => "El Salvador",
				"iso3" => "SLV",
				"iso2" => "SV",
				"countrycode" => "222",
				"phonecode" => "503",
				"capital" => "San Salvador",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "67",
				"name" => "Equatorial Guinea",
				"iso3" => "GNQ",
				"iso2" => "GQ",
				"countrycode" => "226",
				"phonecode" => "240",
				"capital" => "Malabo",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "68",
				"name" => "Eritrea",
				"iso3" => "ERI",
				"iso2" => "ER",
				"countrycode" => "232",
				"phonecode" => "291",
				"capital" => "Asmara",
				"currency" => "ERN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "69",
				"name" => "Estonia",
				"iso3" => "EST",
				"iso2" => "EE",
				"countrycode" => "233",
				"phonecode" => "372",
				"capital" => "Tallinn",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "70",
				"name" => "Ethiopia",
				"iso3" => "ETH",
				"iso2" => "ET",
				"countrycode" => "231",
				"phonecode" => "251",
				"capital" => "Addis Ababa",
				"currency" => "ETB",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "71",
				"name" => "Falkland Islands",
				"iso3" => "FLK",
				"iso2" => "FK",
				"countrycode" => "238",
				"phonecode" => "500",
				"capital" => "Stanley",
				"currency" => "FKP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "72",
				"name" => "Faroe Islands",
				"iso3" => "FRO",
				"iso2" => "FO",
				"countrycode" => "234",
				"phonecode" => "298",
				"capital" => "Torshavn",
				"currency" => "DKK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "73",
				"name" => "Fiji Islands",
				"iso3" => "FJI",
				"iso2" => "FJ",
				"countrycode" => "242",
				"phonecode" => "679",
				"capital" => "Suva",
				"currency" => "FJD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "74",
				"name" => "Finland",
				"iso3" => "FIN",
				"iso2" => "FI",
				"countrycode" => "246",
				"phonecode" => "358",
				"capital" => "Helsinki",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "75",
				"name" => "France",
				"iso3" => "FRA",
				"iso2" => "FR",
				"countrycode" => "250",
				"phonecode" => "33",
				"capital" => "Paris",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "76",
				"name" => "French Guiana",
				"iso3" => "GUF",
				"iso2" => "GF",
				"countrycode" => "254",
				"phonecode" => "594",
				"capital" => "Cayenne",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "77",
				"name" => "French Polynesia",
				"iso3" => "PYF",
				"iso2" => "PF",
				"countrycode" => "258",
				"phonecode" => "689",
				"capital" => "Papeete",
				"currency" => "XPF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "78",
				"name" => "French Southern Territories",
				"iso3" => "ATF",
				"iso2" => "TF",
				"countrycode" => "260",
				"phonecode" => "",
				"capital" => "Port-aux-Francais",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "79",
				"name" => "Gabon",
				"iso3" => "GAB",
				"iso2" => "GA",
				"countrycode" => "266",
				"phonecode" => "241",
				"capital" => "Libreville",
				"currency" => "XAF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "80",
				"name" => "Gambia The",
				"iso3" => "GMB",
				"iso2" => "GM",
				"countrycode" => "270",
				"phonecode" => "220",
				"capital" => "Banjul",
				"currency" => "GMD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "81",
				"name" => "Georgia",
				"iso3" => "GEO",
				"iso2" => "GE",
				"countrycode" => "268",
				"phonecode" => "995",
				"capital" => "Tbilisi",
				"currency" => "GEL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "82",
				"name" => "Germany",
				"iso3" => "DEU",
				"iso2" => "DE",
				"countrycode" => "276",
				"phonecode" => "49",
				"capital" => "Berlin",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "83",
				"name" => "Ghana",
				"iso3" => "GHA",
				"iso2" => "GH",
				"countrycode" => "288",
				"phonecode" => "233",
				"capital" => "Accra",
				"currency" => "GHS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "84",
				"name" => "Gibraltar",
				"iso3" => "GIB",
				"iso2" => "GI",
				"countrycode" => "292",
				"phonecode" => "350",
				"capital" => "Gibraltar",
				"currency" => "GIP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "85",
				"name" => "Greece",
				"iso3" => "GRC",
				"iso2" => "GR",
				"countrycode" => "300",
				"phonecode" => "30",
				"capital" => "Athens",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "86",
				"name" => "Greenland",
				"iso3" => "GRL",
				"iso2" => "GL",
				"countrycode" => "304",
				"phonecode" => "299",
				"capital" => "Nuuk",
				"currency" => "DKK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "87",
				"name" => "Grenada",
				"iso3" => "GRD",
				"iso2" => "GD",
				"countrycode" => "308",
				"phonecode" => "+1-473",
				"capital" => "St. George's",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "88",
				"name" => "Guadeloupe",
				"iso3" => "GLP",
				"iso2" => "GP",
				"countrycode" => "312",
				"phonecode" => "590",
				"capital" => "Basse-Terre",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "89",
				"name" => "Guam",
				"iso3" => "GUM",
				"iso2" => "GU",
				"countrycode" => "316",
				"phonecode" => "+1-671",
				"capital" => "Hagatna",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "90",
				"name" => "Guatemala",
				"iso3" => "GTM",
				"iso2" => "GT",
				"countrycode" => "320",
				"phonecode" => "502",
				"capital" => "Guatemala City",
				"currency" => "GTQ",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "91",
				"name" => "Guernsey and Alderney",
				"iso3" => "GGY",
				"iso2" => "GG",
				"countrycode" => "831",
				"phonecode" => "+44-1481",
				"capital" => "St Peter Port",
				"currency" => "GBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "92",
				"name" => "Guinea",
				"iso3" => "GIN",
				"iso2" => "GN",
				"countrycode" => "324",
				"phonecode" => "224",
				"capital" => "Conakry",
				"currency" => "GNF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "93",
				"name" => "Guinea-Bissau",
				"iso3" => "GNB",
				"iso2" => "GW",
				"countrycode" => "624",
				"phonecode" => "245",
				"capital" => "Bissau",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "94",
				"name" => "Guyana",
				"iso3" => "GUY",
				"iso2" => "GY",
				"countrycode" => "328",
				"phonecode" => "592",
				"capital" => "Georgetown",
				"currency" => "GYD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "95",
				"name" => "Haiti",
				"iso3" => "HTI",
				"iso2" => "HT",
				"countrycode" => "332",
				"phonecode" => "509",
				"capital" => "Port-au-Prince",
				"currency" => "HTG",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "96",
				"name" => "Heard and McDonald Islands",
				"iso3" => "HMD",
				"iso2" => "HM",
				"countrycode" => "334",
				"phonecode" => " ",
				"capital" => "",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "97",
				"name" => "Honduras",
				"iso3" => "HND",
				"iso2" => "HN",
				"countrycode" => "340",
				"phonecode" => "504",
				"capital" => "Tegucigalpa",
				"currency" => "HNL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "98",
				"name" => "Hong Kong S.A.R.",
				"iso3" => "HKG",
				"iso2" => "HK",
				"countrycode" => "344",
				"phonecode" => "852",
				"capital" => "Hong Kong",
				"currency" => "HKD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "99",
				"name" => "Hungary",
				"iso3" => "HUN",
				"iso2" => "HU",
				"countrycode" => "348",
				"phonecode" => "36",
				"capital" => "Budapest",
				"currency" => "HUF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "100",
				"name" => "Iceland",
				"iso3" => "ISL",
				"iso2" => "IS",
				"countrycode" => "352",
				"phonecode" => "354",
				"capital" => "Reykjavik",
				"currency" => "ISK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "101",
				"name" => "India",
				"iso3" => "IND",
				"iso2" => "IN",
				"countrycode" => "356",
				"phonecode" => "91",
				"capital" => "New Delhi",
				"currency" => "INR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "102",
				"name" => "Indonesia",
				"iso3" => "IDN",
				"iso2" => "ID",
				"countrycode" => "360",
				"phonecode" => "62",
				"capital" => "Jakarta",
				"currency" => "IDR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "103",
				"name" => "Iran",
				"iso3" => "IRN",
				"iso2" => "IR",
				"countrycode" => "364",
				"phonecode" => "98",
				"capital" => "Tehran",
				"currency" => "IRR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "104",
				"name" => "Iraq",
				"iso3" => "IRQ",
				"iso2" => "IQ",
				"countrycode" => "368",
				"phonecode" => "964",
				"capital" => "Baghdad",
				"currency" => "IQD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "105",
				"name" => "Ireland",
				"iso3" => "IRL",
				"iso2" => "IE",
				"countrycode" => "372",
				"phonecode" => "353",
				"capital" => "Dublin",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "106",
				"name" => "Israel",
				"iso3" => "ISR",
				"iso2" => "IL",
				"countrycode" => "376",
				"phonecode" => "972",
				"capital" => "Jerusalem",
				"currency" => "ILS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "107",
				"name" => "Italy",
				"iso3" => "ITA",
				"iso2" => "IT",
				"countrycode" => "380",
				"phonecode" => "39",
				"capital" => "Rome",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "108",
				"name" => "Jamaica",
				"iso3" => "JAM",
				"iso2" => "JM",
				"countrycode" => "388",
				"phonecode" => "+1-876",
				"capital" => "Kingston",
				"currency" => "JMD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "109",
				"name" => "Japan",
				"iso3" => "JPN",
				"iso2" => "JP",
				"countrycode" => "392",
				"phonecode" => "81",
				"capital" => "Tokyo",
				"currency" => "JPY",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "110",
				"name" => "Jersey",
				"iso3" => "JEY",
				"iso2" => "JE",
				"countrycode" => "832",
				"phonecode" => "+44-1534",
				"capital" => "Saint Helier",
				"currency" => "GBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "111",
				"name" => "Jordan",
				"iso3" => "JOR",
				"iso2" => "JO",
				"countrycode" => "400",
				"phonecode" => "962",
				"capital" => "Amman",
				"currency" => "JOD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "112",
				"name" => "Kazakhstan",
				"iso3" => "KAZ",
				"iso2" => "KZ",
				"countrycode" => "398",
				"phonecode" => "7",
				"capital" => "Astana",
				"currency" => "KZT",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "113",
				"name" => "Kenya",
				"iso3" => "KEN",
				"iso2" => "KE",
				"countrycode" => "404",
				"phonecode" => "254",
				"capital" => "Nairobi",
				"currency" => "KES",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "114",
				"name" => "Kiribati",
				"iso3" => "KIR",
				"iso2" => "KI",
				"countrycode" => "296",
				"phonecode" => "686",
				"capital" => "Tarawa",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "115",
				"name" => "Korea North",
				"iso3" => "PRK",
				"iso2" => "KP",
				"countrycode" => "408",
				"phonecode" => "850",
				"capital" => "Pyongyang",
				"currency" => "KPW",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "116",
				"name" => "Korea South",
				"iso3" => "KOR",
				"iso2" => "KR",
				"countrycode" => "410",
				"phonecode" => "82",
				"capital" => "Seoul",
				"currency" => "KRW",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "117",
				"name" => "Kuwait",
				"iso3" => "KWT",
				"iso2" => "KW",
				"countrycode" => "414",
				"phonecode" => "965",
				"capital" => "Kuwait City",
				"currency" => "KWD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "118",
				"name" => "Kyrgyzstan",
				"iso3" => "KGZ",
				"iso2" => "KG",
				"countrycode" => "417",
				"phonecode" => "996",
				"capital" => "Bishkek",
				"currency" => "KGS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "119",
				"name" => "Laos",
				"iso3" => "LAO",
				"iso2" => "LA",
				"countrycode" => "418",
				"phonecode" => "856",
				"capital" => "Vientiane",
				"currency" => "LAK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "120",
				"name" => "Latvia",
				"iso3" => "LVA",
				"iso2" => "LV",
				"countrycode" => "428",
				"phonecode" => "371",
				"capital" => "Riga",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "121",
				"name" => "Lebanon",
				"iso3" => "LBN",
				"iso2" => "LB",
				"countrycode" => "422",
				"phonecode" => "961",
				"capital" => "Beirut",
				"currency" => "LBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "122",
				"name" => "Lesotho",
				"iso3" => "LSO",
				"iso2" => "LS",
				"countrycode" => "426",
				"phonecode" => "266",
				"capital" => "Maseru",
				"currency" => "LSL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "123",
				"name" => "Liberia",
				"iso3" => "LBR",
				"iso2" => "LR",
				"countrycode" => "430",
				"phonecode" => "231",
				"capital" => "Monrovia",
				"currency" => "LRD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "124",
				"name" => "Libya",
				"iso3" => "LBY",
				"iso2" => "LY",
				"countrycode" => "434",
				"phonecode" => "218",
				"capital" => "Tripolis",
				"currency" => "LYD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "125",
				"name" => "Liechtenstein",
				"iso3" => "LIE",
				"iso2" => "LI",
				"countrycode" => "438",
				"phonecode" => "423",
				"capital" => "Vaduz",
				"currency" => "CHF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "126",
				"name" => "Lithuania",
				"iso3" => "LTU",
				"iso2" => "LT",
				"countrycode" => "440",
				"phonecode" => "370",
				"capital" => "Vilnius",
				"currency" => "LTL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "127",
				"name" => "Luxembourg",
				"iso3" => "LUX",
				"iso2" => "LU",
				"countrycode" => "442",
				"phonecode" => "352",
				"capital" => "Luxembourg",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "128",
				"name" => "Macau S.A.R.",
				"iso3" => "MAC",
				"iso2" => "MO",
				"countrycode" => "446",
				"phonecode" => "853",
				"capital" => "Macao",
				"currency" => "MOP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "129",
				"name" => "Macedonia",
				"iso3" => "MKD",
				"iso2" => "MK",
				"countrycode" => "807",
				"phonecode" => "389",
				"capital" => "Skopje",
				"currency" => "MKD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "130",
				"name" => "Madagascar",
				"iso3" => "MDG",
				"iso2" => "MG",
				"countrycode" => "450",
				"phonecode" => "261",
				"capital" => "Antananarivo",
				"currency" => "MGA",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "131",
				"name" => "Malawi",
				"iso3" => "MWI",
				"iso2" => "MW",
				"countrycode" => "454",
				"phonecode" => "265",
				"capital" => "Lilongwe",
				"currency" => "MWK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "132",
				"name" => "Malaysia",
				"iso3" => "MYS",
				"iso2" => "MY",
				"countrycode" => "458",
				"phonecode" => "60",
				"capital" => "Kuala Lumpur",
				"currency" => "MYR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "133",
				"name" => "Maldives",
				"iso3" => "MDV",
				"iso2" => "MV",
				"countrycode" => "462",
				"phonecode" => "960",
				"capital" => "Male",
				"currency" => "MVR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "134",
				"name" => "Mali",
				"iso3" => "MLI",
				"iso2" => "ML",
				"countrycode" => "466",
				"phonecode" => "223",
				"capital" => "Bamako",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "135",
				"name" => "Malta",
				"iso3" => "MLT",
				"iso2" => "MT",
				"countrycode" => "470",
				"phonecode" => "356",
				"capital" => "Valletta",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "136",
				"name" => "Man (Isle of)",
				"iso3" => "IMN",
				"iso2" => "IM",
				"countrycode" => "833",
				"phonecode" => "+44-1624",
				"capital" => "Douglas, Isle of Man",
				"currency" => "GBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "137",
				"name" => "Marshall Islands",
				"iso3" => "MHL",
				"iso2" => "MH",
				"countrycode" => "584",
				"phonecode" => "692",
				"capital" => "Majuro",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "138",
				"name" => "Martinique",
				"iso3" => "MTQ",
				"iso2" => "MQ",
				"countrycode" => "474",
				"phonecode" => "596",
				"capital" => "Fort-de-France",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "139",
				"name" => "Mauritania",
				"iso3" => "MRT",
				"iso2" => "MR",
				"countrycode" => "478",
				"phonecode" => "222",
				"capital" => "Nouakchott",
				"currency" => "MRO",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "140",
				"name" => "Mauritius",
				"iso3" => "MUS",
				"iso2" => "MU",
				"countrycode" => "480",
				"phonecode" => "230",
				"capital" => "Port Louis",
				"currency" => "MUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "141",
				"name" => "Mayotte",
				"iso3" => "MYT",
				"iso2" => "YT",
				"countrycode" => "175",
				"phonecode" => "262",
				"capital" => "Mamoudzou",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "142",
				"name" => "Mexico",
				"iso3" => "MEX",
				"iso2" => "MX",
				"countrycode" => "484",
				"phonecode" => "52",
				"capital" => "Mexico City",
				"currency" => "MXN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "143",
				"name" => "Micronesia",
				"iso3" => "FSM",
				"iso2" => "FM",
				"countrycode" => "583",
				"phonecode" => "691",
				"capital" => "Palikir",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "144",
				"name" => "Moldova",
				"iso3" => "MDA",
				"iso2" => "MD",
				"countrycode" => "498",
				"phonecode" => "373",
				"capital" => "Chisinau",
				"currency" => "MDL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "145",
				"name" => "Monaco",
				"iso3" => "MCO",
				"iso2" => "MC",
				"countrycode" => "492",
				"phonecode" => "377",
				"capital" => "Monaco",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "146",
				"name" => "Mongolia",
				"iso3" => "MNG",
				"iso2" => "MN",
				"countrycode" => "496",
				"phonecode" => "976",
				"capital" => "Ulan Bator",
				"currency" => "MNT",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "147",
				"name" => "Montenegro",
				"iso3" => "MNE",
				"iso2" => "ME",
				"countrycode" => "499",
				"phonecode" => "382",
				"capital" => "Podgorica",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "148",
				"name" => "Montserrat",
				"iso3" => "MSR",
				"iso2" => "MS",
				"countrycode" => "500",
				"phonecode" => "+1-664",
				"capital" => "Plymouth",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "149",
				"name" => "Morocco",
				"iso3" => "MAR",
				"iso2" => "MA",
				"countrycode" => "504",
				"phonecode" => "212",
				"capital" => "Rabat",
				"currency" => "MAD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "150",
				"name" => "Mozambique",
				"iso3" => "MOZ",
				"iso2" => "MZ",
				"countrycode" => "508",
				"phonecode" => "258",
				"capital" => "Maputo",
				"currency" => "MZN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "151",
				"name" => "Myanmar",
				"iso3" => "MMR",
				"iso2" => "MM",
				"countrycode" => "104",
				"phonecode" => "95",
				"capital" => "Nay Pyi Taw",
				"currency" => "MMK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "152",
				"name" => "Namibia",
				"iso3" => "NAM",
				"iso2" => "NA",
				"countrycode" => "516",
				"phonecode" => "264",
				"capital" => "Windhoek",
				"currency" => "NAD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "153",
				"name" => "Nauru",
				"iso3" => "NRU",
				"iso2" => "NR",
				"countrycode" => "520",
				"phonecode" => "674",
				"capital" => "Yaren",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "154",
				"name" => "Nepal",
				"iso3" => "NPL",
				"iso2" => "NP",
				"countrycode" => "524",
				"phonecode" => "977",
				"capital" => "Kathmandu",
				"currency" => "NPR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "155",
				"name" => "Netherlands Antilles",
				"iso3" => "ANT",
				"iso2" => "AN",
				"countrycode" => "530",
				"phonecode" => "",
				"capital" => "",
				"currency" => "",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "156",
				"name" => "Netherlands The",
				"iso3" => "NLD",
				"iso2" => "NL",
				"countrycode" => "528",
				"phonecode" => "31",
				"capital" => "Amsterdam",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "157",
				"name" => "New Caledonia",
				"iso3" => "NCL",
				"iso2" => "NC",
				"countrycode" => "540",
				"phonecode" => "687",
				"capital" => "Noumea",
				"currency" => "XPF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "158",
				"name" => "New Zealand",
				"iso3" => "NZL",
				"iso2" => "NZ",
				"countrycode" => "554",
				"phonecode" => "64",
				"capital" => "Wellington",
				"currency" => "NZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "159",
				"name" => "Nicaragua",
				"iso3" => "NIC",
				"iso2" => "NI",
				"countrycode" => "558",
				"phonecode" => "505",
				"capital" => "Managua",
				"currency" => "NIO",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "160",
				"name" => "Niger",
				"iso3" => "NER",
				"iso2" => "NE",
				"countrycode" => "562",
				"phonecode" => "227",
				"capital" => "Niamey",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "161",
				"name" => "Nigeria",
				"iso3" => "NGA",
				"iso2" => "NG",
				"countrycode" => "566",
				"phonecode" => "234",
				"capital" => "Abuja",
				"currency" => "NGN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "162",
				"name" => "Niue",
				"iso3" => "NIU",
				"iso2" => "NU",
				"countrycode" => "570",
				"phonecode" => "683",
				"capital" => "Alofi",
				"currency" => "NZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "163",
				"name" => "Norfolk Island",
				"iso3" => "NFK",
				"iso2" => "NF",
				"countrycode" => "574",
				"phonecode" => "672",
				"capital" => "Kingston",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "164",
				"name" => "Northern Mariana Islands",
				"iso3" => "MNP",
				"iso2" => "MP",
				"countrycode" => "580",
				"phonecode" => "+1-670",
				"capital" => "Saipan",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "165",
				"name" => "Norway",
				"iso3" => "NOR",
				"iso2" => "NO",
				"countrycode" => "578",
				"phonecode" => "47",
				"capital" => "Oslo",
				"currency" => "NOK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "166",
				"name" => "Oman",
				"iso3" => "OMN",
				"iso2" => "OM",
				"countrycode" => "512",
				"phonecode" => "968",
				"capital" => "Muscat",
				"currency" => "OMR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "167",
				"name" => "Pakistan",
				"iso3" => "PAK",
				"iso2" => "PK",
				"countrycode" => "586",
				"phonecode" => "92",
				"capital" => "Islamabad",
				"currency" => "PKR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "168",
				"name" => "Palau",
				"iso3" => "PLW",
				"iso2" => "PW",
				"countrycode" => "585",
				"phonecode" => "680",
				"capital" => "Melekeok",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "169",
				"name" => "Palestinian Territory Occupied",
				"iso3" => "PSE",
				"iso2" => "PS",
				"countrycode" => "275",
				"phonecode" => "970",
				"capital" => "East Jerusalem",
				"currency" => "ILS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "170",
				"name" => "Panama",
				"iso3" => "PAN",
				"iso2" => "PA",
				"countrycode" => "591",
				"phonecode" => "507",
				"capital" => "Panama City",
				"currency" => "PAB",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "171",
				"name" => "Papua new Guinea",
				"iso3" => "PNG",
				"iso2" => "PG",
				"countrycode" => "598",
				"phonecode" => "675",
				"capital" => "Port Moresby",
				"currency" => "PGK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "172",
				"name" => "Paraguay",
				"iso3" => "PRY",
				"iso2" => "PY",
				"countrycode" => "600",
				"phonecode" => "595",
				"capital" => "Asuncion",
				"currency" => "PYG",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "173",
				"name" => "Peru",
				"iso3" => "PER",
				"iso2" => "PE",
				"countrycode" => "604",
				"phonecode" => "51",
				"capital" => "Lima",
				"currency" => "PEN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "174",
				"name" => "Philippines",
				"iso3" => "PHL",
				"iso2" => "PH",
				"countrycode" => "608",
				"phonecode" => "63",
				"capital" => "Manila",
				"currency" => "PHP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "175",
				"name" => "Pitcairn Island",
				"iso3" => "PCN",
				"iso2" => "PN",
				"countrycode" => "612",
				"phonecode" => "870",
				"capital" => "Adamstown",
				"currency" => "NZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "176",
				"name" => "Poland",
				"iso3" => "POL",
				"iso2" => "PL",
				"countrycode" => "616",
				"phonecode" => "48",
				"capital" => "Warsaw",
				"currency" => "PLN",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "177",
				"name" => "Portugal",
				"iso3" => "PRT",
				"iso2" => "PT",
				"countrycode" => "620",
				"phonecode" => "351",
				"capital" => "Lisbon",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "178",
				"name" => "Puerto Rico",
				"iso3" => "PRI",
				"iso2" => "PR",
				"countrycode" => "630",
				"phonecode" => "+1-787 and 1-939",
				"capital" => "San Juan",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "179",
				"name" => "Qatar",
				"iso3" => "QAT",
				"iso2" => "QA",
				"countrycode" => "634",
				"phonecode" => "974",
				"capital" => "Doha",
				"currency" => "QAR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "180",
				"name" => "Reunion",
				"iso3" => "REU",
				"iso2" => "RE",
				"countrycode" => "638",
				"phonecode" => "262",
				"capital" => "Saint-Denis",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "181",
				"name" => "Romania",
				"iso3" => "ROU",
				"iso2" => "RO",
				"countrycode" => "642",
				"phonecode" => "40",
				"capital" => "Bucharest",
				"currency" => "RON",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "182",
				"name" => "Russia",
				"iso3" => "RUS",
				"iso2" => "RU",
				"countrycode" => "643",
				"phonecode" => "7",
				"capital" => "Moscow",
				"currency" => "RUB",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "183",
				"name" => "Rwanda",
				"iso3" => "RWA",
				"iso2" => "RW",
				"countrycode" => "646",
				"phonecode" => "250",
				"capital" => "Kigali",
				"currency" => "RWF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "184",
				"name" => "Saint Helena",
				"iso3" => "SHN",
				"iso2" => "SH",
				"countrycode" => "654",
				"phonecode" => "290",
				"capital" => "Jamestown",
				"currency" => "SHP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "185",
				"name" => "Saint Kitts And Nevis",
				"iso3" => "KNA",
				"iso2" => "KN",
				"countrycode" => "659",
				"phonecode" => "+1-869",
				"capital" => "Basseterre",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "186",
				"name" => "Saint Lucia",
				"iso3" => "LCA",
				"iso2" => "LC",
				"countrycode" => "662",
				"phonecode" => "+1-758",
				"capital" => "Castries",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "187",
				"name" => "Saint Pierre and Miquelon",
				"iso3" => "SPM",
				"iso2" => "PM",
				"countrycode" => "666",
				"phonecode" => "508",
				"capital" => "Saint-Pierre",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "188",
				"name" => "Saint Vincent And The Grenadines",
				"iso3" => "VCT",
				"iso2" => "VC",
				"countrycode" => "670",
				"phonecode" => "+1-784",
				"capital" => "Kingstown",
				"currency" => "XCD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "189",
				"name" => "Saint-Barthelemy",
				"iso3" => "BLM",
				"iso2" => "BL",
				"countrycode" => "652",
				"phonecode" => "590",
				"capital" => "Gustavia",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "190",
				"name" => "Saint-Martin (French part)",
				"iso3" => "MAF",
				"iso2" => "MF",
				"countrycode" => "663",
				"phonecode" => "590",
				"capital" => "Marigot",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "191",
				"name" => "Samoa",
				"iso3" => "WSM",
				"iso2" => "WS",
				"countrycode" => "882",
				"phonecode" => "685",
				"capital" => "Apia",
				"currency" => "WST",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "192",
				"name" => "San Marino",
				"iso3" => "SMR",
				"iso2" => "SM",
				"countrycode" => "674",
				"phonecode" => "378",
				"capital" => "San Marino",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "193",
				"name" => "Sao Tome and Principe",
				"iso3" => "STP",
				"iso2" => "ST",
				"countrycode" => "678",
				"phonecode" => "239",
				"capital" => "Sao Tome",
				"currency" => "STD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "194",
				"name" => "Saudi Arabia",
				"iso3" => "SAU",
				"iso2" => "SA",
				"countrycode" => "682",
				"phonecode" => "966",
				"capital" => "Riyadh",
				"currency" => "SAR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "195",
				"name" => "Senegal",
				"iso3" => "SEN",
				"iso2" => "SN",
				"countrycode" => "686",
				"phonecode" => "221",
				"capital" => "Dakar",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "196",
				"name" => "Serbia",
				"iso3" => "SRB",
				"iso2" => "RS",
				"countrycode" => "688",
				"phonecode" => "381",
				"capital" => "Belgrade",
				"currency" => "RSD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "197",
				"name" => "Seychelles",
				"iso3" => "SYC",
				"iso2" => "SC",
				"countrycode" => "690",
				"phonecode" => "248",
				"capital" => "Victoria",
				"currency" => "SCR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "198",
				"name" => "Sierra Leone",
				"iso3" => "SLE",
				"iso2" => "SL",
				"countrycode" => "694",
				"phonecode" => "232",
				"capital" => "Freetown",
				"currency" => "SLL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "199",
				"name" => "Singapore",
				"iso3" => "SGP",
				"iso2" => "SG",
				"countrycode" => "702",
				"phonecode" => "65",
				"capital" => "Singapur",
				"currency" => "SGD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "200",
				"name" => "Slovakia",
				"iso3" => "SVK",
				"iso2" => "SK",
				"countrycode" => "703",
				"phonecode" => "421",
				"capital" => "Bratislava",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "201",
				"name" => "Slovenia",
				"iso3" => "SVN",
				"iso2" => "SI",
				"countrycode" => "705",
				"phonecode" => "386",
				"capital" => "Ljubljana",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "202",
				"name" => "Solomon Islands",
				"iso3" => "SLB",
				"iso2" => "SB",
				"countrycode" => "90",
				"phonecode" => "677",
				"capital" => "Honiara",
				"currency" => "SBD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "203",
				"name" => "Somalia",
				"iso3" => "SOM",
				"iso2" => "SO",
				"countrycode" => "706",
				"phonecode" => "252",
				"capital" => "Mogadishu",
				"currency" => "SOS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "204",
				"name" => "South Africa",
				"iso3" => "ZAF",
				"iso2" => "ZA",
				"countrycode" => "710",
				"phonecode" => "27",
				"capital" => "Pretoria",
				"currency" => "ZAR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "205",
				"name" => "South Georgia",
				"iso3" => "SGS",
				"iso2" => "GS",
				"countrycode" => "239",
				"phonecode" => "",
				"capital" => "Grytviken",
				"currency" => "GBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "206",
				"name" => "South Sudan",
				"iso3" => "SSD",
				"iso2" => "SS",
				"countrycode" => "728",
				"phonecode" => "211",
				"capital" => "Juba",
				"currency" => "SSP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "207",
				"name" => "Spain",
				"iso3" => "ESP",
				"iso2" => "ES",
				"countrycode" => "724",
				"phonecode" => "34",
				"capital" => "Madrid",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "208",
				"name" => "Sri Lanka",
				"iso3" => "LKA",
				"iso2" => "LK",
				"countrycode" => "144",
				"phonecode" => "94",
				"capital" => "Colombo",
				"currency" => "LKR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "209",
				"name" => "Sudan",
				"iso3" => "SDN",
				"iso2" => "SD",
				"countrycode" => "736",
				"phonecode" => "249",
				"capital" => "Khartoum",
				"currency" => "SDG",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "210",
				"name" => "Suriname",
				"iso3" => "SUR",
				"iso2" => "SR",
				"countrycode" => "740",
				"phonecode" => "597",
				"capital" => "Paramaribo",
				"currency" => "SRD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "211",
				"name" => "Svalbard And Jan Mayen Islands",
				"iso3" => "SJM",
				"iso2" => "SJ",
				"countrycode" => "744",
				"phonecode" => "47",
				"capital" => "Longyearbyen",
				"currency" => "NOK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "212",
				"name" => "Swaziland",
				"iso3" => "SWZ",
				"iso2" => "SZ",
				"countrycode" => "748",
				"phonecode" => "268",
				"capital" => "Mbabane",
				"currency" => "SZL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "213",
				"name" => "Sweden",
				"iso3" => "SWE",
				"iso2" => "SE",
				"countrycode" => "752",
				"phonecode" => "46",
				"capital" => "Stockholm",
				"currency" => "SEK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "214",
				"name" => "Switzerland",
				"iso3" => "CHE",
				"iso2" => "CH",
				"countrycode" => "756",
				"phonecode" => "41",
				"capital" => "Berne",
				"currency" => "CHF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "215",
				"name" => "Syria",
				"iso3" => "SYR",
				"iso2" => "SY",
				"countrycode" => "760",
				"phonecode" => "963",
				"capital" => "Damascus",
				"currency" => "SYP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "216",
				"name" => "Taiwan",
				"iso3" => "TWN",
				"iso2" => "TW",
				"countrycode" => "158",
				"phonecode" => "886",
				"capital" => "Taipei",
				"currency" => "TWD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "217",
				"name" => "Tajikistan",
				"iso3" => "TJK",
				"iso2" => "TJ",
				"countrycode" => "762",
				"phonecode" => "992",
				"capital" => "Dushanbe",
				"currency" => "TJS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "218",
				"name" => "Tanzania",
				"iso3" => "TZA",
				"iso2" => "TZ",
				"countrycode" => "834",
				"phonecode" => "255",
				"capital" => "Dodoma",
				"currency" => "TZS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "219",
				"name" => "Thailand",
				"iso3" => "THA",
				"iso2" => "TH",
				"countrycode" => "764",
				"phonecode" => "66",
				"capital" => "Bangkok",
				"currency" => "THB",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "220",
				"name" => "Togo",
				"iso3" => "TGO",
				"iso2" => "TG",
				"countrycode" => "768",
				"phonecode" => "228",
				"capital" => "Lome",
				"currency" => "XOF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "221",
				"name" => "Tokelau",
				"iso3" => "TKL",
				"iso2" => "TK",
				"countrycode" => "772",
				"phonecode" => "690",
				"capital" => "",
				"currency" => "NZD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "222",
				"name" => "Tonga",
				"iso3" => "TON",
				"iso2" => "TO",
				"countrycode" => "776",
				"phonecode" => "676",
				"capital" => "Nuku'alofa",
				"currency" => "TOP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "223",
				"name" => "Trinidad And Tobago",
				"iso3" => "TTO",
				"iso2" => "TT",
				"countrycode" => "780",
				"phonecode" => "+1-868",
				"capital" => "Port of Spain",
				"currency" => "TTD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "224",
				"name" => "Tunisia",
				"iso3" => "TUN",
				"iso2" => "TN",
				"countrycode" => "788",
				"phonecode" => "216",
				"capital" => "Tunis",
				"currency" => "TND",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "225",
				"name" => "Turkey",
				"iso3" => "TUR",
				"iso2" => "TR",
				"countrycode" => "792",
				"phonecode" => "90",
				"capital" => "Ankara",
				"currency" => "TRY",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "226",
				"name" => "Turkmenistan",
				"iso3" => "TKM",
				"iso2" => "TM",
				"countrycode" => "795",
				"phonecode" => "993",
				"capital" => "Ashgabat",
				"currency" => "TMT",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "227",
				"name" => "Turks And Caicos Islands",
				"iso3" => "TCA",
				"iso2" => "TC",
				"countrycode" => "796",
				"phonecode" => "+1-649",
				"capital" => "Cockburn Town",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "228",
				"name" => "Tuvalu",
				"iso3" => "TUV",
				"iso2" => "TV",
				"countrycode" => "798",
				"phonecode" => "688",
				"capital" => "Funafuti",
				"currency" => "AUD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "229",
				"name" => "Uganda",
				"iso3" => "UGA",
				"iso2" => "UG",
				"countrycode" => "800",
				"phonecode" => "256",
				"capital" => "Kampala",
				"currency" => "UGX",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "230",
				"name" => "Ukraine",
				"iso3" => "UKR",
				"iso2" => "UA",
				"countrycode" => "804",
				"phonecode" => "380",
				"capital" => "Kiev",
				"currency" => "UAH",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "231",
				"name" => "United Arab Emirates",
				"iso3" => "ARE",
				"iso2" => "AE",
				"countrycode" => "784",
				"phonecode" => "971",
				"capital" => "Abu Dhabi",
				"currency" => "AED",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "232",
				"name" => "United Kingdom",
				"iso3" => "GBR",
				"iso2" => "GB",
				"countrycode" => "826",
				"phonecode" => "44",
				"capital" => "London",
				"currency" => "GBP",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "233",
				"name" => "United States",
				"iso3" => "USA",
				"iso2" => "US",
				"countrycode" => "840",
				"phonecode" => "1",
				"capital" => "Washington",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "234",
				"name" => "United States Minor Outlying Islands",
				"iso3" => "UMI",
				"iso2" => "UM",
				"countrycode" => "581",
				"phonecode" => "1",
				"capital" => "",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "235",
				"name" => "Uruguay",
				"iso3" => "URY",
				"iso2" => "UY",
				"countrycode" => "858",
				"phonecode" => "598",
				"capital" => "Montevideo",
				"currency" => "UYU",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "236",
				"name" => "Uzbekistan",
				"iso3" => "UZB",
				"iso2" => "UZ",
				"countrycode" => "860",
				"phonecode" => "998",
				"capital" => "Tashkent",
				"currency" => "UZS",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "237",
				"name" => "Vanuatu",
				"iso3" => "VUT",
				"iso2" => "VU",
				"countrycode" => "548",
				"phonecode" => "678",
				"capital" => "Port Vila",
				"currency" => "VUV",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "238",
				"name" => "Vatican City State (Holy See)",
				"iso3" => "VAT",
				"iso2" => "VA",
				"countrycode" => "336",
				"phonecode" => "379",
				"capital" => "Vatican City",
				"currency" => "EUR",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "239",
				"name" => "Venezuela",
				"iso3" => "VEN",
				"iso2" => "VE",
				"countrycode" => "862",
				"phonecode" => "58",
				"capital" => "Caracas",
				"currency" => "VEF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "240",
				"name" => "Vietnam",
				"iso3" => "VNM",
				"iso2" => "VN",
				"countrycode" => "704",
				"phonecode" => "84",
				"capital" => "Hanoi",
				"currency" => "VND",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "241",
				"name" => "Virgin Islands (British)",
				"iso3" => "VGB",
				"iso2" => "VG",
				"countrycode" => "92",
				"phonecode" => "+1-284",
				"capital" => "Road Town",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "242",
				"name" => "Virgin Islands (US)",
				"iso3" => "VIR",
				"iso2" => "VI",
				"countrycode" => "850",
				"phonecode" => "+1-340",
				"capital" => "Charlotte Amalie",
				"currency" => "USD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "243",
				"name" => "Wallis And Futuna Islands",
				"iso3" => "WLF",
				"iso2" => "WF",
				"countrycode" => "876",
				"phonecode" => "681",
				"capital" => "Mata Utu",
				"currency" => "XPF",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "244",
				"name" => "Western Sahara",
				"iso3" => "ESH",
				"iso2" => "EH",
				"countrycode" => "732",
				"phonecode" => "212",
				"capital" => "El-Aaiun",
				"currency" => "MAD",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "245",
				"name" => "Yemen",
				"iso3" => "YEM",
				"iso2" => "YE",
				"countrycode" => "887",
				"phonecode" => "967",
				"capital" => "Sanaa",
				"currency" => "YER",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "246",
				"name" => "Zambia",
				"iso3" => "ZMB",
				"iso2" => "ZM",
				"countrycode" => "894",
				"phonecode" => "260",
				"capital" => "Lusaka",
				"currency" => "ZMK",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			],[ 
				"id" => "247",
				"name" => "Zimbabwe",
				"iso3" => "ZWE",
				"iso2" => "ZW",
				"countrycode" => "716",
				"phonecode" => "263",
				"capital" => "Harare",
				"currency" => "ZWL",
				"flag" => "1",
				"created_by" => "system",
				"updated_by" => "",
				"is_active" => "1"
				
			]
		]);
		DB::table('countries')->update(['created_at'=>date('Y-m-d H:i:s')]);
	    
    }
}
