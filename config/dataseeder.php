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
            'name' => 'Pizzeria',
            'description' => 'Le migliori pizze genuine come quelle fatte in casa.',
            'image' => 'https://esempio.com/immagini/pizza.jpg',
        ],
        [
            'name' => 'Hamburgeria',
            'description' => 'Gustosi hamburger con ingredienti freschi.',
            'image' => 'https://esempio.com/immagini/hamburger.jpg',
        ],
        [
            'name' => 'kebab',
            'description' => 'Ottimo kebab di qualitá garatita',
            'image' => 'https://esempio.com/immagini/kebab.jpg',
        ],
        [
            'name' => 'Sushi',
            'description' => 'Sushi fresco e autentico.',
            'image' => 'https://esempio.com/immagini/sushi.jpg',
        ],
        [
            'name' => 'Thailandese',
            'description' => '',
            'image' => 'https://esempio.com/immagini/thai.jpg',
        ],
        [
            'name' => 'Cinese',
            'description' => 'Sapori orientali decisi dagli aromi vari e intriganti.',
            'image' => 'https://esempio.com/immagini/cinese.jpg',
        ],
        [
            'name' => 'Italiano',
            'description' => 'Piatti italiani pieni di tradizione e gusto',
            'image' => 'https://esempio.com/immagini/italiano.jpg',
        ],
        [
            'name' => 'Piadineria',
            'description' => 'Piadine di tutti i tipi e condimenti a scelta.',
            'image' => 'https://esempio.com/immagini/piadineria.jpg',
        ],
        [
            'name' => 'Messicano',
            'description' => 'Prelibatezze dai sapori forti e speziati.',
            'image' => 'https://esempio.com/immagini/messican.jpg',
        ],
        [
            'name' => 'Gelateria',
            'description' => 'Gelato artigianale in una varietà di gusti.',
            'image' => 'https://esempio.com/immagini/gelato.jpg',
        ],
    ]
];
