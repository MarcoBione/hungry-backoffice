<?php
return [
    "orders" => [
        [
            "receiver" => "Francesco",
            "phone_number" => "5163497403",
            "status" => "Confermato",
            "notes" => "Il campanello è rotto, urlare quando si è dal cancello",
            "total_price" => 20.5,
            "address" => "Giuseppe Sacconi, 5",
            "dishes" => [
                [
                    "dish_id" => 1,
                    "quantity" => 2,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 2,
                    "quantity" => 1,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 11,
                    "quantity" => 1,
                    "notes" => "Test"
                ]
            ]
        ],
        [
            "receiver" => "Luca",
            "phone_number" => "3448496195",
            "status" => "Confermato",
            "notes" => "Bussare 3 volte di fila per favore",
            "total_price" => 18.2,
            "address" => "Via Veronese Guarino, 10",
            "dishes" => [
                [
                    "dish_id" => 3,
                    "quantity" => 2,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 4,
                    "quantity" => 1,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 12,
                    "quantity" => 1,
                    "notes" => "Test"
                ]
            ]
        ],
        [
            "receiver" => "Marta",
            "phone_number" => "8987089354",
            "status" => "Confermato",
            "notes" => "Pulitevi le scarpe prima di entrare",
            "total_price" => 15,
            "address" => "Via Tito Livio, 3",
            "dishes" => [
                [
                    "dish_id" => 5,
                    "quantity" => 2,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 6,
                    "quantity" => 1,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 13,
                    "quantity" => 1,
                    "notes" => "Test"
                ]
            ]
        ],
        [
            "receiver" => "Erika",
            "phone_number" => "1881621025",
            "status" => "Confermato",
            "notes" => "Non mandate Filiberto a fare la consegna, è un maleducato",
            "total_price" => 6.9,
            "address" => "Via Cadore, 10",
            "dishes" => [
                [
                    "dish_id" => 7,
                    "quantity" => 2,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 8,
                    "quantity" => 1,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 14,
                    "quantity" => 1,
                    "notes" => "Test"
                ]
            ]
        ],
        [
            "receiver" => "Luana",
            "phone_number" => "7387907535",
            "status" => "Confermato",
            "notes" => "Ho fame, muovetevi",
            "total_price" => 17.5,
            "address" => "Via K.Adenauer, 3",
            "dishes" => [
                [
                    "dish_id" => 9,
                    "quantity" => 2,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 10,
                    "quantity" => 1,
                    "notes" => "Test"
                ],
                [
                    "dish_id" => 15,
                    "quantity" => 1,
                    "notes" => "Test"
                ]
            ]
        ]
    ],
    "dishes" => [
        [
            'name' => 'Carbonara',
            'description' => "Fior di latte d'Agerola, guanciale, pecorino romano DOP, tuorlo d'uovo e pepe nero",
            'price' => 11.00,
            'visible' => true,
            'image' => 'https://ordina.pizzium.com/assets/img/items/16838188643MlRecZbf5.jpg',
            'tipologies' => 'pizze classiche',
            'caterer_id' => 1
        ],
        [
            'name' => 'Napoli',
            'description' => "Pomodori pelati, fior di latte d'Agerola e filetti di alici",
            'price' => 9.00,
            'visible' => true,
            'image' => 'https://ordina.pizzium.com/assets/img/items/1602500013AbEO2QcWz6.jpg',
            'tipologies' => 'pizze classiche',
            'caterer_id' => 1
        ],
        [
            'name' => 'Parmigiana di melanzane',
            'description' => '',
            'price' => 8.00,
            'visible' => true,
            'image' => 'https://ordina.pizzium.com/assets/img/items/1654869162PfJARJKlZl.jpg',
            'tipologies' => 'piatti semplici e buoni;panuozzum',
            'caterer_id' => 1
        ],
        [
            'name' => 'Caesar Salad',
            'description' => 'Misticanza, pollo croccante, datterini rossi freschi, scaglie di Grana Padano DOP e salsa Caesar',
            'price' => 10.00,
            'visible' => true,
            'image' => 'https://ordina.pizzium.com/assets/img/items/1684140020nO3Zfvf6Ev.jpg',
            'tipologies' => 'insalate',
            'caterer_id' => 1
        ],
        [
            'name' => 'Cheesecake alla Nutella',
            'description' => '',
            'price' => 6.00,
            'visible' => true,
            'image' => 'https://ordina.pizzium.com/assets/img/items/1655109663BOXFQDGTwu.jpg',
            'tipologies' => 'dolci',
            'caterer_id' => 1
        ],
        [
            'name' => 'Akiko',
            'description' => 'Carpaccio di Wagyu, olio evo, sale maldon, pepe dello Sichuan, servito su crema di senape e miele',
            'price' => 26.00,
            'visible' => true,
            'image' => 'https://www.sushiyokohama.it/wp-content/uploads/2022/09/Akiko.jpg',
            'tipologies' => 'carpacci',
            'caterer_id' => 2
        ],
        [
            'name' => 'Eden',
            'description' => 'Tartare di tonno, con rucola e stracciatella di burrata, emulsione di pomodorino pachino, avocado, sale maldon e pepe',
            'price' => 22.00,
            'visible' => true,
            'image' => 'https://www.sushiyokohama.it/wp-content/uploads/2022/09/Edentartare.jpg',
            'tipologies' => 'tartare',
            'caterer_id' => 2
        ],
        [
            'name' => 'Tataki pistacchio',
            'description' => 'Tonno scottato con granella di pistacchio, servito su rucola, stracciatella di burrata e pipetta con salsa Senape-Maio-Miele.',
            'price' => 20.00,
            'visible' => true,
            'image' => 'https://www.sushiyokohama.it/wp-content/uploads/2022/09/TatakiPistacchio.jpg',
            'tipologies' => 'tataki',
            'caterer_id' => 2
        ],
        [
            'name' => 'Salmon paradise',
            'description' => 'Salmone, philadelphia, lime, menta, avocado e mandorle',
            'price' => 16.00,
            'visible' => true,
            'image' => 'https://www.sushiyokohama.it/wp-content/uploads/2022/09/SalmonParadisev2-min.jpg',
            'tipologies' => 'uramaki',
            'caterer_id' => 2
        ],
        [
            'name' => 'BBQ Lotus',
            'description' => 'Filetto di manzo ai cinque aromi e salsa teriyaki',
            'price' => 35.00,
            'visible' => true,
            'image' => 'https://www.sushiyokohama.it/wp-content/uploads/2022/09/BbqLotusTartufo-min.jpg',
            'tipologies' => 'fusion food',
            'caterer_id' => 2
        ],
        [
            'name' => 'Ravioli di carne al vapore (4 pz)',
            'description' => 'Steamed pork dumplings',
            'price' => 5.50,
            'visible' => true,
            'image' => 'https://www.giallozafferano.it/images/230-23062/Ravioli-cinesi-al-vapore_650x433_wm.jpg',
            'tipologies' => 'ravioli',
            'caterer_id' => 3
        ],
        [
            'name' => 'Spaghetti di soia con gamberi e verdure',
            'description' => 'Soy noodles with shrimps and vegetables',
            'price' => 6.50,
            'visible' => true,
            'image' => 'https://blog.giallozafferano.it/trasentieriefornelli/wp-content/uploads/2022/02/IMG_0028-960x640.jpg',
            'tipologies' => 'primi',
            'caterer_id' => 3
        ],
        [
            'name' => 'Pollo con le mandorle e bambù',
            'description' => 'Chicken with almonds and bamboo shoots',
            'price' => 7.00,
            'visible' => true,
            'image' => 'https://www.buttalapasta.it/wp-content/uploads/2008/02/petto-di-pollo-alle-mandorle.jpg',
            'tipologies' => 'carne',
            'caterer_id' => 3
        ],
        [
            'name' => 'Gamberetti fritti in pastella',
            'description' => 'Batter fried shrimps',
            'price' => 8.00,
            'visible' => true,
            'image' => 'https://www.ricettasprint.it/wp-content/uploads/2021/02/Code-di-gamberi-fritti-ricettasprint.jpg',
            'tipologies' => 'pesce',
            'caterer_id' => 3
        ],
        [
            'name' => 'Cavolo cinese saltato',
            'description' => 'Pakchoi (available with additional garlic and chilli)',
            'price' => 6.00,
            'visible' => true,
            'image' => 'https://www.buttalapasta.it/wp-content/uploads/2022/12/ricette-con-cavolo-cinese.jpg',
            'tipologies' => 'verdure',
            'caterer_id' => 3
        ],
        [
            'name' => 'Freselle alla mediterranea',
            'description' => '',
            'price' => 8.00,
            'visible' => true,
            'image' => 'https://www.kettycucinooggi.com/wp-content/uploads/2020/07/FRISELLE-INTEGRALI-ALLA-MEDITERRANEA-4-scaled.jpeg',
            'tipologies' => 'antipasti',
            'caterer_id' => 4
        ],
        [
            'name' => 'Tagliatelle alla bolognese',
            'description' => '',
            'price' => 14.00,
            'visible' => true,
            'image' => 'https://www.cucchiaio.it/content/dam/cucchiaio/it/ricette/2009/11/ricetta-tagliatelle-bolognese/tagliatelle-alla-bolognese-ante.jpg',
            'tipologies' => 'primi',
            'caterer_id' => 4
        ],
        [
            'name' => "Linguine all'astice",
            'description' => '',
            'price' => 22.00,
            'visible' => true,
            'image' => 'https://www.animaincucina.it/wp-content/uploads/2022/09/IMG_4416-320x427.jpg',
            'tipologies' => 'primi',
            'caterer_id' => 4
        ],
        [
            'name' => 'Filetto al pepe verde',
            'description' => '',
            'price' => 24.00,
            'visible' => true,
            'image' => 'https://www.giallozafferano.it/images/184-18454/Filetto-al-pepe-verde_650x433_wm.jpg',
            'tipologies' => 'secondi',
            'caterer_id' => 4
        ],
        [
            'name' => 'Spinaci finocchi e arancia',
            'description' => '',
            'price' => 10.00,
            'visible' => true,
            'image' => 'https://blog.giallozafferano.it/incucinaconmara/wp-content/uploads/2018/03/Insalata.jpg',
            'tipologies' => 'insalate',
            'caterer_id' => 4
        ],
        [
            'name' => 'Samosa (2pz)',
            'description' => 'Sfoglia ripiena di patate e piselli accompagnata da masala',
            'price' => 5.00,
            'visible' => true,
            'image' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2021/02/samosa-1280x720.jpg',
            'tipologies' => 'antipasti',
            'caterer_id' => 5
        ],
        [
            'name' => 'Menù carne',
            'description' => 'Tandori mix, Cheese naan, Chikken tikka masala, Riso basmati e dolce a scelta',
            'price' => 25.00,
            'visible' => true,
            'image' => 'https://mangiarebene.s3.amazonaws.com/uploads/blog_item/image/1285/mb_asset.jpg',
            'tipologies' => 'menù fisso',
            'caterer_id' => 5
        ],
        [
            'name' => 'Chicken Himali',
            'description' => 'Bocconcini di pollo cucinati con coriandolo e menta freschi con salsa tipiaca nepalese',
            'price' => 13.00,
            'visible' => true,
            'image' => 'https://live.staticflickr.com/2886/11915592956_48ffeb3255_b.jpg',
            'tipologies' => 'tipico nepalese',
            'caterer_id' => 5
        ],
        [
            'name' => 'Hariyali Tikka',
            'description' => 'Bocconcini di pollo marinati in spinaci e menta cotti nel forno Tandoori',
            'price' => 12.00,
            'visible' => true,
            'image' => 'https://www.archanaskitchen.com/images/archanaskitchen/0-Archanas-Kitchen-Recipes/2017/10-oct/Hariyali_Chicken_Tikka_Recipe-9373.jpg',
            'tipologies' => 'tandoori',
            'caterer_id' => 5
        ],
        [
            'name' => 'Chicken Madras',
            'description' => 'Bocconcini di pollo in pomodoro, semi di mostarda e foglie di curry',
            'price' => 12.00,
            'visible' => true,
            'image' => 'https://www.kitchensanctuary.com/wp-content/uploads/2020/02/Chicken-Madras-square-FS-35.jpg',
            'tipologies' => 'curry pollo',
            'caterer_id' => 5
        ]
    ],
    'caterers' => [
        [
            'user_id' => 1,
            'name' => 'Pizzium',
            'address' => 'Via Augusto Anfossi 1',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/27/1d/6d/84/pizza-salsiccia-e-friarielli.jpg',
            'phone_number' => '+39 0254050232'
        ],
        [
            'user_id' => 1,
            'name' => 'Yokohama Flavour Journey Cuisine',
            'address' => 'Via Pantano 8',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/18/90/d2/2a/sunset.jpg',
            'phone_number' => '+39 02874291'
        ],
        [
            'user_id' => 1,
            'name' => 'Fei Yun Ge',
            'address' => 'Via Melchiorre Gioia 141',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/1d/5b/88/9a/ravioli-di-carne.jpg',
            'phone_number' => '+39 0266985374'
        ],
        [
            'user_id' => 1,
            'name' => 'Viaggi Nel Gusto',
            'address' => 'Via Edmondo De Amicis 24',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/1d/57/c7/70/caption.jpg',
            'phone_number' => '+39 0247755531'
        ],
        [
            'user_id' => 1,
            'name' => 'Ristorante Himalaya',
            'address' => 'Via Marcantonio dal Re 10',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/22/12/10/78/nostri-piatti-tipici.jpg',
            'phone_number' => '+39 0283541759'
        ]
    ],
    'categories' => [
        [
            'name' => 'Indiano',
            'description' => "La cucina indiana è ricca di aromi e spezie, con una varietà di piatti vegetariani e non. Curry, naan, samosa e biryani sono solo alcune delle prelibatezze che deliziano il palato con esplosioni di sapori unici. Una combinazione di ingredienti freschi, erbe aromatiche e una vasta gamma di spezie rende la cucina indiana un'esperienza culinaria vibrante e indimenticabile.",
            'image' => 'https://d2sj0xby2hzqoy.cloudfront.net/kenwood_italy/attachments/data/000/011/430/original/cucina-indiana-da-nord-a-sud-8-piatti-tradizionali-header.jpg',
        ],
        [
            'name' => 'Nepalese',
            'description' => "La cucina nepalese è una fusione di sapori e influenze culturali uniche. Piatti come dal bhat (lenticchie e riso), momo (ravioli al vapore) e thukpa (zuppa di noodle) sono molto popolari. Gli ingredienti locali come lo yak, il riso basmati e le spezie aromatiche aggiungono un sapore distintivo ai piatti. La cucina nepalese è caratterizzata da una combinazione di dolce, piccante e saporito, che si riflette nella sua varietà di condimenti e salse. È una delizia per i sensi e offre un'esperienza culinaria autentica.",
            'image' => 'https://viaggiarecomunque.it/wp-content/uploads/2019/11/cucina-nepalese.jpg',
        ],
        [
            'name' => 'Italiano',
            'description' => "La cucina italiana è rinomata in tutto il mondo per la sua semplicità e qualità degli ingredienti. Pizze fragranti, pasta al dente, formaggi prelibati e olio d'oliva extravergine sono solo alcune delle delizie che offre. Dalla classica pasta alla carbonara alla tradizionale pizza margherita, ogni regione italiana ha le sue specialità culinarie uniche. La cucina italiana celebra la freschezza degli ingredienti stagionali e si basa su ricette tradizionali tramandate di generazione in generazione. È un connubio perfetto di gusto, passione e amore per il cibo, che offre un'esperienza culinaria indimenticabile.",
            'image' => 'https://www.trattoriadatito.it/wp-content/uploads/2020/08/Quanto-ne-sai-di-cucina-italiana.jpg',
        ],
        [
            'name' => 'Pizza',
            'description' => "La pizza è un'icona della cucina italiana, amata in tutto il mondo. La base di pasta sottile e croccante, ricoperta di salsa di pomodoro e formaggio filante, è un piacere per il palato. Le varietà di condimenti, come salumi, formaggi, verdure e aromi, offrono infinite possibilità di gusto. La pizza è un simbolo di convivialità e condivisione, perfetta da gustare con amici e familiari. Che sia una margherita classica o una creazione gourmet, la pizza è un piatto irresistibile che continua a deliziare le papille gustative di chiunque la assaggi.",
            'image' => 'https://www.buttalapasta.it/wp-content/uploads/2017/11/pizza-margherita.jpg',
        ],
        [
            'name' => 'Pesce',
            'description' => "I piatti a base di pesce offrono una varietà di sapori e sono amati per la loro freschezza. Dal sushi giapponese al ceviche latinoamericano, il pesce crudo è una prelibatezza apprezzata in tutto il mondo. Piatti come la zuppa di pesce, la grigliata mista di frutti di mare e il pesce alla brace sono popolari per la loro delicatezza e gusto succulento. Le regioni costiere offrono specialità locali come la paella spagnola e l'insalata di mare italiana. I piatti a base di pesce sono una fonte di proteine ​​salutari e offrono una vasta gamma di sapore, soddisfacendo i palati più esigenti.",
            'image' => 'https://staticcookist.akamaized.net/wp-content/uploads/sites/21/2022/05/secondi-piatti-di-pesce-1200x675.jpg',
        ],
        [
            'name' => 'Sushi',
            'description' => "Il sushi è un'arte culinaria giapponese che combina sapori delicati e presentazione estetica. Preparato con riso di alta qualità e pesce crudo fresco, è un connubio di consistenze e sapori unici. Il sushi tradizionale include nigiri (toppato con fette di pesce), maki (arrotolato con riso e alga nori) e sashimi (fette di pesce crudo senza riso). È spesso accompagnato da salsa di soia, zenzero marinato e wasabi. Il sushi è apprezzato per la sua freschezza, equilibrio di gusti e il rispetto per gli ingredienti. È un'esperienza culinaria raffinata che celebra l'arte e la tradizione giapponese.",
            'image' => 'https://s3-eu-west-1.amazonaws.com/fratelliorsero/wp-content/uploads/2019/11/25120833/shutterstock_648560977-1.jpg',
        ],
        [
            'name' => 'Zuppe',
            'description' => "Le zuppe sono piatti versatili e confortanti che si trovano in diverse culture culinarie. Dal brodo di pollo alle zuppe di verdure, passando per le minestre di legumi e le zuppe di pesce, offrono una varietà di sapori e consistenze. Le zuppe sono spesso arricchite da spezie, erbe aromatiche e condimenti che donano profondità al sapore. Sono un'ottima fonte di nutrimento e possono essere personalizzate secondo le preferenze individuali. Dalla zuppa calda invernale che riscalda l'anima alle zuppe fredde estive che rinfrescano, le zuppe sono un piacere culinario che soddisfa il palato e offre comfort in ogni stagione.",
            'image' => 'https://media-assets.lacucinaitaliana.it/photos/61fafc5e19ad4b37e96bc94e/16:9/w_2560%2Cc_limit/LAND-Vellutata-di-patate-broccoli-e-bacon.jpg',
        ],
        [
            'name' => 'Giapponese',
            'description' => "La cucina giapponese è celebre per la sua delicatezza e armonia. Sushi, sashimi, ramen e tempura sono solo alcuni dei piatti tradizionali che offrono un equilibrio perfetto di gusto, freschezza e presentazione estetica. L'uso di ingredienti di alta qualità e la maestria nella preparazione sono caratteristiche distintive. La cucina giapponese esalta i sapori naturali degli alimenti e si basa sulla freschezza del pesce, sull'equilibrio dei condimenti come la salsa di soia e il wasabi, e sull'attenzione ai dettagli. È una culinaria che incarna l'eleganza e la tradizione, offrendo un'esperienza gustativa unica.",
            'image' => 'https://www.italiaatavola.net/images/contenutiarticoli/Cucina-giapponese-elisir-di-lunga-vita-Una-dieta-bilanciata-a-tutti-gli-effetti.jpg',
        ],
        [
            'name' => 'Cinese',
            'description' => "La cucina cinese è una delle più antiche e influenti al mondo. Caratterizzata da una grande varietà di piatti, offre sapori audaci, aromi intensi e un'ampia gamma di ingredienti come il riso, la soia, il tofu, le verdure e la carne. Piatti come il dim sum, il pollo all'arancia, il maiale agrodolce e i noodles sono solo alcune delle specialità cinesi amate in tutto il mondo. La cucina cinese si distingue per la sua abilità nel bilanciare i cinque sapori fondamentali: dolce, salato, acido, amaro e piccante. È una cucina che celebra la diversità regionale e la maestria culinaria, offrendo un'esperienza gustativa straordinaria.",
            'image' => 'https://www.buttalapasta.it/wp-content/uploads/2011/01/cucina-cinese-piatti-tipici-e-specialita.jpg',
        ]
    ]
];
