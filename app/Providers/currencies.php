<?php
$currencies = array(
	// ── North America ────────────────────────────────────────────────
	'USD' => '&#36;',           // US Dollar
	'CAD' => 'CA&#36;',         // Canadian Dollar
	'MXN' => '&#36;',           // Mexican Peso
	'GTQ' => 'Q',               // Guatemalan Quetzal
	'BZD' => 'BZ&#36;',         // Belize Dollar
	'HNL' => 'L',               // Honduran Lempira
	'NIO' => 'C&#36;',          // Nicaraguan Córdoba
	'CRC' => '&#8353;',         // Costa Rican Colón
	'PAB' => 'B/.',             // Panamanian Balboa
	'CUP' => '&#36;',           // Cuban Peso
	'DOP' => 'RD&#36;',         // Dominican Peso
	'HTG' => 'G',               // Haitian Gourde
	'JMD' => 'J&#36;',          // Jamaican Dollar
	'TTD' => 'TT&#36;',         // Trinidad & Tobago Dollar
	'BBD' => 'Bds&#36;',        // Barbadian Dollar
	'XCD' => 'EC&#36;',         // East Caribbean Dollar
	'BSD' => 'B&#36;',          // Bahamian Dollar
	'KYD' => 'CI&#36;',         // Cayman Islands Dollar
	'AWG' => '&#402;',          // Aruban Florin
	'ANG' => '&#402;',          // Netherlands Antillean Guilder
	'BMD' => 'BD&#36;',         // Bermudian Dollar
	'CUC' => '&#36;',           // Cuban Convertible Peso

	// ── South America ────────────────────────────────────────────────
	'BRL' => 'R&#36;',          // Brazilian Real
	'ARS' => '&#36;',           // Argentine Peso
	'CLP' => '&#36;',           // Chilean Peso
	'COP' => '&#36;',           // Colombian Peso
	'PEN' => 'S/.',             // Peruvian Sol
	'VES' => 'Bs.S',            // Venezuelan Bolívar Soberano
	'BOB' => 'Bs.',             // Bolivian Boliviano
	'PYG' => '&#8370;',         // Paraguayan Guaraní
	'UYU' => '&#36;U',          // Uruguayan Peso
	'GYD' => 'G&#36;',          // Guyanese Dollar
	'SRD' => 'SR&#36;',         // Surinamese Dollar
	'FKP' => '&#163;',          // Falkland Islands Pound

	// ── Europe ───────────────────────────────────────────────────────
	'EUR' => '&#8364;',         // Euro
	'GBP' => '&#163;',          // British Pound
	'CHF' => 'Fr',              // Swiss Franc
	'NOK' => 'kr',              // Norwegian Krone
	'SEK' => 'kr',              // Swedish Krona
	'DKK' => 'kr',              // Danish Krone
	'PLN' => 'z&#322;',         // Polish Zloty
	'CZK' => 'K&#269;',         // Czech Koruna
	'HUF' => 'Ft',              // Hungarian Forint
	'RON' => 'lei',             // Romanian Leu
	'BGN' => '&#1083;&#1074;',  // Bulgarian Lev
	'HRK' => 'kn',              // Croatian Kuna
	'RSD' => 'din',             // Serbian Dinar
	'BAM' => 'KM',              // Bosnia-Herzegovina Mark
	'MKD' => '&#1076;&#1077;&#1085;', // Macedonian Denar
	'ALL' => 'L',               // Albanian Lek
	'RUB' => '&#8381;',         // Russian Ruble
	'UAH' => '&#8372;',         // Ukrainian Hryvnia
	'BYN' => 'Br',              // Belarusian Ruble
	'GEL' => '&#8382;',         // Georgian Lari
	'AMD' => '&#1423;',         // Armenian Dram
	'AZN' => '&#8371;',         // Azerbaijani Manat
	'MDL' => 'L',               // Moldovan Leu
	'ISK' => 'kr',              // Icelandic Króna
	'HKD' => 'HK&#36;',         // (listed under Asia too; canonical entry here)
	'TRY' => '&#8378;',         // Turkish Lira
	'GIP' => '&#163;',          // Gibraltar Pound
	'JEP' => '&#163;',          // Jersey Pound
	'GGP' => '&#163;',          // Guernsey Pound
	'IMP' => '&#163;',          // Isle of Man Pound
	'SHP' => '&#163;',          // Saint Helena Pound

	// ── Middle East ──────────────────────────────────────────────────
	'AED' => '&#1583;.&#1573;', // UAE Dirham
	'SAR' => '&#65020;',        // Saudi Riyal
	'QAR' => '&#65020;',        // Qatari Riyal
	'KWD' => '&#1583;.&#1603;', // Kuwaiti Dinar
	'BHD' => '&#1583;.&#1576;', // Bahraini Dinar
	'OMR' => '&#65020;',        // Omani Rial
	'JOD' => '&#1583;.&#1575;', // Jordanian Dinar
	'ILS' => '&#8362;',         // Israeli New Shekel
	'IQD' => '&#1593;.&#1583;', // Iraqi Dinar
	'IRR' => '&#65020;',        // Iranian Rial
	'YER' => '&#65020;',        // Yemeni Rial
	'SYP' => '&#163;',          // Syrian Pound
	'LBP' => '&#163;',          // Lebanese Pound

	// ── Asia – East & South-East ─────────────────────────────────────
	'CNY' => '&#165;',          // Chinese Yuan
	'JPY' => '&#165;',          // Japanese Yen
	'KRW' => '&#8361;',         // South Korean Won
	'SGD' => 'S&#36;',          // Singapore Dollar
	'HKD' => 'HK&#36;',         // Hong Kong Dollar
	'TWD' => 'NT&#36;',         // New Taiwan Dollar
	'MYR' => 'RM',              // Malaysian Ringgit
	'THB' => '&#3647;',         // Thai Baht
	'PHP' => '&#8369;',         // Philippine Peso
	'IDR' => 'Rp',              // Indonesian Rupiah
	'VND' => '&#8363;',         // Vietnamese Dong
	'MMK' => 'K',               // Myanmar Kyat
	'KHR' => '&#6107;',         // Cambodian Riel
	'LAK' => '&#8365;',         // Lao Kip
	'BND' => 'B&#36;',          // Brunei Dollar
	'MOP' => 'P',               // Macanese Pataca
	'MNT' => '&#8366;',         // Mongolian Tögrög
	'KPW' => '&#8361;',         // North Korean Won

	// ── Asia – South ─────────────────────────────────────────────────
	'INR' => '&#8377;',         // Indian Rupee
	'PKR' => '&#8360;',         // Pakistani Rupee
	'BDT' => '&#2547;',         // Bangladeshi Taka
	'LKR' => '&#8360;',         // Sri Lankan Rupee
	'NPR' => '&#8360;',         // Nepalese Rupee
	'MVR' => 'Rf',              // Maldivian Rufiyaa
	'BTN' => 'Nu',              // Bhutanese Ngultrum

	// ── Asia – Central ───────────────────────────────────────────────
	'KZT' => '&#8376;',         // Kazakhstani Tenge
	'UZS' => '&#1083;&#1074;',  // Uzbekistani Sum
	'TJS' => 'SM',              // Tajikistani Somoni
	'KGS' => '&#1083;&#1074;',  // Kyrgystani Som
	'TMT' => 'T',               // Turkmenistani Manat
	'AFN' => '&#1547;',         // Afghan Afghani

	// ── Oceania ──────────────────────────────────────────────────────
	'AUD' => 'A&#36;',          // Australian Dollar
	'NZD' => 'NZ&#36;',         // New Zealand Dollar
	'PGK' => 'K',               // Papua New Guinean Kina
	'FJD' => 'FJ&#36;',         // Fijian Dollar
	'SBD' => 'SI&#36;',         // Solomon Islands Dollar
	'VUV' => 'Vt',              // Vanuatu Vatu
	'WST' => 'T',               // Samoan Tālā
	'TOP' => 'T&#36;',          // Tongan Paʻanga
	'XPF' => 'Fr',              // CFP Franc (French Polynesia / New Caledonia)

	// ── Africa – Southern ────────────────────────────────────────────
	'ZAR' => 'R',               // South African Rand
	'BWP' => 'P',               // Botswana Pula  ★
	'ZMW' => 'ZK',              // Zambian Kwacha
	'MWK' => 'MK',              // Malawian Kwacha
	'ZWL' => 'Z&#36;',          // Zimbabwean Dollar
	'NAD' => 'N&#36;',          // Namibian Dollar
	'LSL' => 'L',               // Lesotho Loti
	'SZL' => 'L',               // Swazi Lilangeni (Eswatini)
	'MZN' => 'MT',              // Mozambican Metical
	'AOA' => 'Kz',              // Angolan Kwanza
	'ZMW' => 'ZK',              // Zambian Kwacha (canonical)

	// ── Africa – East ────────────────────────────────────────────────
	'KES' => 'KSh',             // Kenyan Shilling
	'TZS' => 'TSh',             // Tanzanian Shilling
	'UGX' => 'USh',             // Ugandan Shilling
	'ETB' => 'Br',              // Ethiopian Birr
	'RWF' => 'RF',              // Rwandan Franc
	'BIF' => 'Fr',              // Burundian Franc
	'DJF' => 'Fr',              // Djiboutian Franc
	'SOS' => 'Sh',              // Somali Shilling
	'ERN' => 'Nfk',             // Eritrean Nakfa
	'SSP' => '&#163;',          // South Sudanese Pound
	'MGA' => 'Ar',              // Malagasy Ariary
	'SCR' => '&#8360;',         // Seychellois Rupee
	'KMF' => 'Fr',              // Comorian Franc
	'MUR' => '&#8360;',         // Mauritian Rupee

	// ── Africa – West ─────────────────────────────────────────────────
	'NGN' => '&#8358;',         // Nigerian Naira
	'GHS' => 'GH&#162;',        // Ghanaian Cedi
	'XOF' => 'Fr',              // West African CFA Franc (Senegal, Mali, Ivory Coast, Burkina Faso, Benin, Niger, Togo, Guinea-Bissau)
	'GMD' => 'D',               // Gambian Dalasi
	'GNF' => 'Fr',              // Guinean Franc
	'SLL' => 'Le',              // Sierra Leonean Leone
	'LRD' => 'L&#36;',          // Liberian Dollar
	'CVE' => '&#36;',           // Cape Verdean Escudo
	'SLE' => 'Le',              // Sierra Leonean Leone (redenominated)

	// ── Africa – Central ─────────────────────────────────────────────
	'XAF' => 'Fr',              // Central African CFA Franc (Cameroon, CAR, Chad, Congo-Brazzaville, Equatorial Guinea, Gabon)
	'CDF' => 'Fr',              // Congolese Franc (DRC)
	'STN' => 'Db',              // São Tomé & Príncipe Dobra

	// ── Africa – North ───────────────────────────────────────────────
	'EGP' => '&#163;',          // Egyptian Pound
	'MAD' => 'MAD',             // Moroccan Dirham
	'TND' => 'DT',              // Tunisian Dinar
	'DZD' => 'دج',              // Algerian Dinar
	'LYD' => 'LD',              // Libyan Dinar
	'SDG' => '&#163;',          // Sudanese Pound
	'MRU' => 'UM',              // Mauritanian Ouguiya

	// ── Cryptocurrencies ─────────────────────────────────────────────
	'BTC' => 'BTC',             // Bitcoin
	'ETH' => 'ETH',             // Ethereum
	'USDT' => 'USDT',           // Tether
);
?>
