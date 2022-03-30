<?php
header("Cache-Control: no-cache, no-stire, must-revalidate, max-age=0");
header('Content-Type: application/json; charset=utf-8');
$languages = Array ("aa" => "Qafár af", "ab" => "Аҧсшәа", "abs" => "bahasa ambon", "ace" => "Acèh", "acf" => "kwéyòl", "ady" => "адыгабзэ", "ady-cyrl" => "адыгабзэ", "aeb" => "تونسي/Tûnsî", "aeb-arab" => "تونسي", "aeb-latn" => "Tûnsî", "af" => "Afrikaans", "ahr" => "अहिराणी", "ak" => "Akan", "akz" => "Albaamo innaaɬiilka", "aln" => "Gegë", "als" => "Tosk", "alt" => "тÿштÿк алтай тил", "am" => "አማርኛ", "ami" => "Pangcah", "an" => "aragonés", "ang" => "Ænglisc", "ann" => "Obolo", "anp" => "अङ्गिका", "ar" => "العربية", "arc" => "ܐܪܡܝܐ", "arn" => "mapudungun", "aro" => "Araona", "arq" => "جازايرية", "ary" => "الدارجة", "arz" => "مصرى", "as" => "অসমীয়া", "ase" => "American sign language", "ast" => "asturianu", "atj" => "Atikamekw", "atv" => "тÿндÿк алтай", "av" => "авар", "avk" => "Kotava", "awa" => "अवधी", "ay" => "Aymar aru", "az" => "azərbaycanca", "azb" => "تۆرکجه", "ba" => "башҡортса", "ban" => "Bali", "bar" => "Boarisch", "bat-smg" => "žemaitėška", "bbc" => "Batak Toba", "bbc-latn" => "Batak Toba", "bcc" => "جهلسری بلوچی", "bci" => "Wawle", "bcl" => "Bikol Central", "be" => "беларуская", "be-tarask" => "беларуская (тарашкевіца)‎", "be-x-old" => "беларуская (тарашкевіца)‎", "bew" => "Bahasa Betawi", "bfq" => "படகா", "bft" => "بلتی", "bg" => "български", "bgn" => "روچ کپتین بلوچی", "bh" => "भोजपुरी", "bho" => "भोजपुरी", "bi" => "Bislama", "bjn" => "Banjar", "blc" => "ItNuxalkmc", "bm" => "bamanankan", "bn" => "বাংলা", "bo" => "བོད་ཡིག", "bpy" => "বিষ্ণুপ্রিয়া মণিপুরী", "bqi" => "بختیاری", "br" => "brezhoneg", "brh" => "Bráhuí", "brx" => "बर'", "bs" => "bosanski", "btm" => "Batak Mandailing", "bto" => "Iriga Bicolano", "bug" => "ᨅᨔ ᨕᨘᨁᨗ", "bxr" => "буряад", "ca" => "català", "cak" => "Kaqchikel", "cbk-zam" => "Chavacano de Zamboanga", "ccp" => "𑄌𑄋𑄴𑄟𑄳𑄦", "cdo" => "Mìng-dĕ̤ng-ngṳ̄", "cdo-latin" => "Mìng-dĕ̤ng-ngṳ̄ Bàng-uâ-cê", "cdo-hani" => "閩東語（漢字）", "ce" => "нохчийн", "ceb" => "Cebuano", "ch" => "Chamoru", "cho" => "Choctaw", "chr" => "ᏣᎳᎩ", "chy" => "Tsetsêhestâhese", "ojb" => "Ojibwemowin", "cja-latn" => "Cham Gah Pai", "cjm-latn" => "Cham Gah Pur", "cjy" => "晉語", "cjy-hans" => "晋语（简化字）", "cjy-hant" => "晉語（正字）", "ckb" => "کوردی", "cnh" => "Lai holh", "cnr-cyrl" => "црногорски", "cnr-latn" => "crnogorski", "co" => "corsu", "cop" => "ϯⲙⲉⲧⲣⲉⲙⲛ̀ⲭⲏⲙⲓ", "cps" => "Capiceño", "cpx" => "Pó-sing-gṳ̂", "cr" => "Nēhiyawēwin / ᓀᐦᐃᔭᐍᐏᐣ", "crh" => "qırımtatarca", "crh-cyrl" => "къырымтатарджа (Кирилл)‎", "crh-latn" => "qırımtatarca (Latin)‎", "cs" => "čeština", "csb" => "kaszëbsczi", "cu" => "словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ", "cv" => "Чӑвашла", "cy" => "Cymraeg", "da" => "dansk", "dag" => "dagbanli", "de" => "Deutsch", "de-at" => "Österreichisches Deutsch", "de-ch" => "Schweizer Hochdeutsch", "de-formal" => "Deutsch (Sie-Form)‎", "din" => "Thuɔŋjäŋ", "diq" => "Zazaki", "dsb" => "dolnoserbski", "dtp" => "Dusun Bundu-liwan", "dty" => "डोटेली", "dv" => "ދިވެހިބަސް", "dz" => "ཇོང་ཁ", "ee" => "eʋegbe", "egl" => "Emiliàn", "el" => "Ελληνικά", "elm" => "Eleme", "eml" => "emiliàn e rumagnòl", "en" => "English", "en-ca" => "Canadian English", "en-gb" => "British English", "eo" => "Esperanto", "es" => "español", "es-419" => "español de América Latina", "es-formal" => "español (formal)", "esu" => "Yup'ik", "et" => "eesti", "eu" => "euskara", "ext" => "estremeñu", "fa" => "فارسی", "fax" => "Fala", "ff" => "Fulfulde", "fi" => "suomi", "fit" => "meänkieli", "fiu-vro" => "Võro", "fj" => "Na Vosa Vakaviti", "fo" => "føroyskt", "fon" => "Fon", "fr" => "français", "frc" => "français cadien", "frp" => "arpetan", "frr" => "Nordfriisk", "fur" => "furlan", "fy" => "Frysk", "ga" => "Gaeilge", "gaa" => "Ga", "gag" => "Gagauz", "gah" => "Alekano", "gan" => "贛語", "gan-hans" => "赣语（简体）‎", "gan-hant" => "贛語（繁體）‎", "gbm" => "गढ़वळि", "gbz" => "Dari-e Mazdeyasnā", "gcf" => "Guadeloupean Creole French", "gcr" => "kriyòl gwiyannen", "gd" => "Gàidhlig", "gl" => "galego", "gld" => "на̄ни", "glk" => "گیلکی", "gn" => "Avañe'ẽ", "gom" => "गोंयची कोंकणी / Gõychi Konknni", "gom-deva" => "गोंयची कोंकणी", "gom-latn" => "Gõychi Konknni", "gor" => "Bahasa Hulontalo", "got" => "𐌲𐌿𐍄𐌹𐍃𐌺", "grc" => "Ἀρχαία ἑλληνικὴ", "gsw" => "Alemannisch", "gu" => "ગુજરાતી", "guc" => "wayuunaiki", "gum" => "Namtrik", "gur" => "Gurenɛ", "guw" => "gungbe", "gv" => "Gaelg", "ha" => "Hausa", "hak" => "客家語/Hak-kâ-ngî", "hak-hans" => "客家语（简体）", "hak-hant" => "客家語（繁體）", "haw" => "Hawaiʻi", "he" => "עברית", "hi" => "हिन्दी", "hif" => "Fiji Hindi", "hif-deva" => "फ़ीजी हिन्दी", "hif-latn" => "Fiji Hindi", "hil" => "Ilonggo", "hne" => "छत्तीसगढ़ी", "ho" => "Hiri Motu", "hoc" => "𑢹𑣉𑣉", "hr" => "hrvatski", "hrx" => "Hunsrik", "hsb" => "hornjoserbsce", "hsn" => "湘语", "ht" => "Kreyòl ayisyen", "hu" => "magyar", "hu-formal" => "Magyar (magázó)", "hy" => "հայերեն", "hyw" => "Արեւմտահայերէն", "hz" => "Otsiherero", "ia" => "interlingua", "id" => "Bahasa Indonesia", "ie" => "Interlingue", "ig" => "Igbo", "ii" => "ꆇꉙ", "ik" => "Iñupiak", "ike-cans" => "ᐃᓄᒃᑎᑐᑦ", "ike-latn" => "inuktitut", "ilo" => "Ilokano", "inh" => "ГӀалгӀай", "io" => "Ido", "is" => "íslenska", "it" => "italiano", "iu" => "ᐃᓄᒃᑎᑐᑦ/inuktitut", "izh" => "ižoran keel", "ja" => "日本語", "jam" => "Patois", "jbo" => "la .lojban.", "jdt-cyrl" => "жугьури", "jut" => "jysk", "jv" => "Jawa", "ka" => "ქართული", "kaa" => "Qaraqalpaqsha", "kab" => "Taqbaylit", "kac" => "Jinghpaw", "kbd" => "Адыгэбзэ", "kbd-cyrl" => "Адыгэбзэ", "kbd-latn" => "Qabardjajəbza", "kbp" => "Kabɩyɛ", "kea" => "Kabuverdianu", "kg" => "Kongo", "kgp" => "Kaingáng", "khw" => "کھوار", "ki" => "Gĩkũyũ", "kip" => "शेषी पाङ", "kiu" => "Kırmancki", "kj" => "Kwanyama", "kjh" => "хакас", "kjp" => "ဖၠုံလိက်", "kk" => "қазақша", "kk-arab" => "قازاقشا (تٴوتە)‏", "kk-cn" => "قازاقشا (جۇنگو)‏", "kk-cyrl" => "қазақша (кирил)‎", "kk-kz" => "қазақша (Қазақстан)‎", "kk-latn" => "qazaqşa (latın)‎", "kk-tr" => "qazaqşa (Türkïya)‎", "kl" => "kalaallisut", "km" => "ភាសាខ្មែរ", "kcg" => "Tyap", "kn" => "ಕನ್ನಡ", "knn" => "महाराष्ट्रीय कोंकणी", "ko" => "한국어", "ko-kp" => "조선말", "koi" => "перем коми", "kr" => "Kanuri", "krc" => "къарачай-малкъар", "kri" => "Krio", "krj" => "Kinaray-a", "krl" => "karjal", "ks" => "कॉशुर / کٲشُر", "ks-arab" => "کٲشُر", "ks-deva" => "कॉशुर", "ksf" => "Bafia", "ksh" => "Ripoarisch", "ksw" => "စှီၤ ကညီကျိာ်", "ku" => "kurdî", "ku-arab" => "كوردي (عەرەبی)‏", "ku-latn" => "kurdî (latînî)‎", "kum" => "къумукъ", "kv" => "коми", "kw" => "kernowek", "ky" => "Кыргызча", "la" => "Latina", "lad" => "Ladino", "lad-hebr" => "לאדינו", "lag" => "Kilaangi", "lb" => "Lëtzebuergesch", "lbe" => "лакку", "lez" => "лезги", "lfn" => "Lingua Franca Nova", "lg" => "Luganda", "li" => "Limburgs", "lij" => "Ligure", "liv" => "Līvõ kēļ", "lki" => "لەکی", "lkt" => "Lakȟótiyapi", "lld" => "Ladin", "lmo" => "lumbaart", "ln" => "lingála", "lo" => "ລາວ", "lou" => "kréyol la lwizyàn", "loz" => "Silozi", "lrc" => "لۊری شومالی", "lt" => "lietuvių", "ltg" => "latgaļu", "lus" => "Mizo ţawng", "luz" => "لئری دوٙمینی", "lv" => "latviešu", "lzh" => "文言", "lzz" => "Lazuri", "mad" => "Madhurâ", "mai" => "मैथिली", "map-bms" => "Basa Banyumasan", "mdf" => "мокшень", "mfe" => "Morisyen", "mg" => "Malagasy", "mh" => "Ebon", "mhr" => "олык марий", "mi" => "Māori", "mic" => "Mi'kmaq", "min" => "Minangkabau", "miq" => "Mískitu", "mk" => "македонски", "ml" => "മലയാളം", "mn" => "монгол", "mnc" => "ᠮᠠᠨᠵᡠ ᡤᡳᠰᡠᠨ", "mni" => "ꯃꯤꯇꯩ ꯂꯣꯟ", "mnw" => "ဘာသာ မန်", "mo" => "молдовеняскэ", "moe" => "innu-aimun", "mr" => "मराठी", "mrh" => "Mara", "mrj" => "кырык мары", "mrv" => "Magareva", "ms" => "Bahasa Melayu", "mt" => "Malti", "mui" => "Musi", "mus" => "Mvskoke", "mvf" => "ᠮᠣᠩᠭᠣᠯ", "mwl" => "Mirandés", "mwv" => "Behase Mentawei", "mww-latn" => "Hmoob Dawb", "my" => "မြန်မာဘာသာ", "myv" => "эрзянь", "mzn" => "مازِرونی", "na" => "Dorerin Naoero", "nah" => "Nāhuatl", "nan" => "Bân-lâm-gú", "nan-hani" => "閩南語（漢字）", "nap" => "Napulitano", "nb" => "norsk bokmål", "nds" => "Plattdüütsch", "nds-nl" => "Nedersaksies", "ne" => "नेपाली", "new" => "नेपाल भाषा", "ng" => "Oshiwambo", "nia" => "Li Niha", "niu" => "Niuē", "njo" => "Ao", "nl" => "Nederlands", "nl-informal" => "Nederlands (informeel)‎", "nn" => "norsk nynorsk", "no" => "norsk", "nod" => "คำเมือง", "nog" => "Ногайша", "nov" => "Novial", "nqo" => "ߒߞߏ", "nrm" => "Nouormand", "nso" => "Sesotho sa Leboa", "nv" => "Diné bizaad", "nus" => "Thok Naath", "ny" => "Chi-Chewa", "nys" => "Nyungar", "oc" => "occitan", "oka" => "n̓səl̓xcin̓", "olo" => "livvinkarjala", "om" => "Oromoo", "or" => "ଓଡ଼ିଆ", "os" => "Ирон", "osi" => "Using", "ovd" => "övdalsk", "pa" => "ਪੰਜਾਬੀ", "pag" => "Pangasinan", "pam" => "Kapampangan", "pap" => "Papiamentu", "pap-aw" => "Papiamento", "pbb" => "Nasa Yuwe", "pcd" => "Picard", "pdc" => "Deitsch", "pdt" => "Plautdietsch", "pfl" => "Pälzisch", "pi" => "पालि", "pih" => "Norfuk / Pitkern", "pis" => "Pijin", "pko" => "Pökoot", "pl" => "polski", "pms" => "Piemontèis", "pnb" => "پنجابی", "pnt" => "Ποντιακά", "pov" => "guinensi", "ppl" => "Nawat", "prg" => "Prūsiskan", "prs" => "دری", "pru" => "Prūsiskan", "ps" => "پښتو", "pt" => "português", "pt-br" => "português do Brasil", "qqq" => "Message documentation", "qu" => "Runa Simi", "qug" => "Runa shimi", "qwh" => "anqash qichwa", "rap" => "arero rapa nui", "rcf" => "Kreol Réyoné", "rej" => "Jang", "rgn" => "Rumagnôl", "rhg" => "Rohingya", "rif" => "Tarifit", "rki" => "ရခိုင်", "rm" => "rumantsch", "rmc" => "romaňi čhib", "rmf" => "kaalengo tšimb", "rmy" => "romani čhib", "rn" => "Kirundi", "ro" => "română", "roa-rup" => "armãneashti", "roa-tara" => "tarandíne", "rtm" => "Faeag Rotuma", "ru" => "русский", "rue" => "русиньскый", "rup" => "armãneashti", "ruq" => "Vlăheşte", "ruq-cyrl" => "Влахесте", "ruq-grek" => "Megleno-Romanian (Greek script)", "ruq-latn" => "Vlăheşte", "rut" => "мыхӀабишды", "rw" => "Kinyarwanda", "ryu" => "ʔucināguci", "sa" => "संस्कृतम्", "sah" => "саха тыла", "sat" => "ᱥᱟᱱᱛᱟᱲᱤ", "saz" => "ꢱꣃꢬꢵꢯ꣄ꢡ꣄ꢬꢵ", "sc" => "sardu", "scn" => "sicilianu", "sco" => "Scots", "sd" => "سنڌي", "sdc" => "Sassaresu", "sdh" => "کوردی خوارگ", "se" => "davvisámegiella", "sei" => "Cmique Itom", "ses" => "Koyraboro Senni", "sg" => "Sängö", "sgs" => "žemaitėška", "sh" => "srpskohrvatski / српскохрватски", "shi" => "Tašlḥiyt/ⵜⴰⵛⵍⵃⵉⵜ", "shi-latn" => "Taclḥit", "shi-tfng" => "ⵜⴰⵛⵍⵃⵉⵜ", "shn" => "လိၵ်ႈတႆး", "shy-latn" => "Tacawit", "si" => "සිංහල", "simple" => "Simple English", "sjd" => "кӣллт са̄мь кӣлл", "sk" => "slovenčina", "skr" => "سرائیکی", "skr-arab" => "سرائیکی", "sl" => "slovenščina", "sli" => "Schläsch", "slr" => "Salırça", "sly" => "Bahasa Selayar", "sm" => "Gagana Samoa", "sma" => "åarjelsaemien", "smj" => "julevsámegiella", "smn" => "anarâškielâ", "sms" => "nuõrttsääʹmǩiõll", "sn" => "chiShona", "so" => "Soomaaliga", "sq" => "shqip", "sr" => "српски / srpski", "sr-ec" => "српски (ћирилица)‎", "sr-el" => "srpski (latinica)‎", "srn" => "Sranantongo", "ss" => "SiSwati", "st" => "Sesotho", "stq" => "Seeltersk", "sty" => "Себертатар", "su" => "Sunda", "sv" => "svenska", "sw" => "Kiswahili", "swb" => "Shikomoro", "sxu" => "Säggssch", "syl" => "ꠍꠤꠟꠐꠤ", "szl" => "ślůnski", "szy" => "Sakizaya", "ta" => "தமிழ்", "tay" => "Tayal", "tcy" => "ತುಳು", "te" => "తెలుగు", "tet" => "tetun", "tg" => "тоҷикӣ", "tg-cyrl" => "тоҷикӣ", "tg-latn" => "tojikī", "th" => "ไทย", "ti" => "ትግርኛ", "tji" => "pi tsi kha", "tk" => "Türkmençe", "tkr" => "ЦӀаӀхна миз", "tl" => "Tagalog", "tly" => "tolışi", "tly-cyrl" => "", "tn" => "Setswana", "to" => "lea faka-Tonga", "tpi" => "Tok Pisin", "tr" => "Türkçe", "trp" => "Kokborok (Tripuri)", "tru" => "Ṫuroyo", "trv" => "Seediq", "ts" => "Xitsonga", "tsd" => "Τσακωνικά", "tt" => "татарча/tatarça", "tt-cyrl" => "татарча", "tt-latn" => "tatarça", "ttt" => "Tati", "tum" => "chiTumbuka", "tw" => "Twi", "twd" => "Tweants", "ty" => "reo tahiti", "tyv" => "тыва дыл", "tzm" => "ⵜⴰⵎⴰⵣⵉⵖⵜ", "udm" => "удмурт", "ug" => "ئۇيغۇرچە / Uyghurche", "ug-arab" => "ئۇيغۇرچە", "ug-latn" => "Uyghurche", "uk" => "українська", "ur" => "اردو", "uz" => "oʻzbekcha/ўзбекча", "uz-cyrl" => "ўзбекча", "uz-latn" => "oʻzbekcha", "vai" => "ꕙꔤ", "ve" => "Tshivenda", "vec" => "vèneto", "vep" => "vepsän kel’", "vi" => "Tiếng Việt", "vls" => "West-Vlams", "vmf" => "Mainfränkisch", "vo" => "Volapük", "vot" => "Vaďďa", "vro" => "võro", "wa" => "walon", "war" => "Winaray", "wls" => "Faka'uvea", "wo" => "Wolof", "wuu" => "吴语", "xal" => "хальмг", "xh" => "isiXhosa", "xmf" => "მარგალური", "xsy" => "saisiyat", "ydd" => "Eastern Yiddish", "yi" => "ייִדיש", "yo" => "Yorùbá", "yrk" => "Ненэцяʼ вада", "yrl" => "ñe'engatú", "yua" => "Maaya T'aan", "yue" => "粵語", "za" => "Vahcuengh", "zea" => "Zeêuws", "zgh" => "ⵜⴰⵎⴰⵣⵉⵖⵜ ⵜⴰⵏⴰⵡⴰⵢⵜ", "zh" => "中文", "zh-classical" => "文言", "zh-cn" => "中文（中国大陆）‎", "zh-hans" => "中文（简体）‎", "zh-hant" => "中文（繁體）‎", "zh-hk" => "中文（香港）‎", "zh-min-nan" => "Bân-lâm-gú", "zh-mo" => "中文（澳門）‎", "zh-my" => "中文（马来西亚）‎", "zh-sg" => "中文（新加坡）‎", "zh-tw" => "中文（台灣）‎", "zh-yue" => "粵語", "zu" => "isiZulu");
$rtl = Array ("dv", "nqo", "syc", "arc", "yi", "ydd", "tmr", "lad-hebr", "he", "ur", "ug-arab", "skr-arab", "sdh", "sd", "ps", "prs", "pnb", "ota", "mzn", "ms-arab", "lrc", "luz", "lki", "ku-arab", "ks-arab", "kk-arab", "khw", "ha-arab", "glk", "fa", "ckb", "bqi", "bgn", "bft", "bcc", "azb", "az-arab", "arz", "ary", "arq", "ar", "aeb-arab");
$language_exists = array();

if (isset($_GET["init"])) {
    $files = scandir(__DIR__ . '/../i18n/');
    foreach ($files as $value) {
        $code = str_replace(".json", "", $value);
        if (strstr($value, ".json") && $code !== "qqq" && array_key_exists($code, $languages)) {
            $isRtl = (in_array($code, $rtl)) ? "rtl" : "ltr";
            $language_exists[$code] = [$languages[$code], $isRtl];
        }
    }
    echo json_encode($language_exists);
}

if (isset($_GET["mycode"])) {
    $files = scandir(__DIR__ . '/../i18n/');
    foreach ($files as $value) {
        $code = str_replace(".json", "", $value);
        if (strstr($value, ".json") && $code !== "qqq" && array_key_exists($code, $languages)) {
            $isRtl = (in_array($code, $rtl)) ? "rtl" : "ltr";
            $language_exists[$code] = [$languages[$code], $isRtl];
        }
    }
    if (isset($language_exists[$_GET["mycode"]])) {
        $isRtl = (in_array($_GET["mycode"], $rtl)) ? "rtl" : "ltr";
        $result = ["code" => $_GET["mycode"], "dir" => $isRtl, "name" => $language_exists[$_GET["mycode"]][0]];
        echo json_encode($result);
    } else {
        $result = ["code" => "en", "dir" => "ltr", "name" => "English"];
        echo json_encode($result);
    }
}

?>