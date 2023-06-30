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
            'name' => 'Margherita',
            'description' => 'Pomodoro, mozzarella, basilico',
            'price' => 7.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'pizza, pizza rossa',
            'caterer_id' => 1
        ],
        [
            'name' => 'Ravioli al vapore',
            'description' => '',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti',
            'caterer_id' => 2
        ],
        [
            'name' => 'Branzino all\'isolana',
            'description' => 'pesce al forno con pomodorini e olive',
            'price' => 17.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di pesce',
            'caterer_id' => 3
        ],
        [
            'name' => 'Hamburger Classico',
            'description' => 'Hamburger di chianina con pomodoro a fette, lattuga, maionese',
            'price' => 13.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'hamburger',
            'caterer_id' => 4
        ],
        [
            'name' => 'Involtini primavera',
            'description' => 'verza, carote, zucchine',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'antipasti, vegetariano',
            'caterer_id' => 5
        ],
        [
            'name' => 'Tiramisu',
            'description' => '',
            'price' => 6.00,
            'visible' => false,
            'image' => '',
            'tipologies' => 'dolci e dessert',
            'caterer_id' => 1
        ],
        [
            'name' => 'Cheung Fun con Manzo',
            'description' => 'rotolo di vermicelli al vapore cantonese',
            'price' => 8.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di carne',
            'caterer_id' => 2
        ],
        [
            'name' => 'Patatine fritte',
            'description' => '',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'snack, contorni, prodotto surgelato',
            'caterer_id' => 1
        ],
        [
            'name' => 'Capricciosa',
            'description' => 'pomodoro, mozzarella di Bufala, carciofi, funghi, cotto e olive',
            'price' => 13.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'pizza, pizza rossa',
            'caterer_id' => 1
        ],
        [
            'name' => 'Pancit Bihon',
            'description' => 'tipico piatto della cucina filippina con spaghetit di riso, maiale e gamberi',
            'price' => 7.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti',
            'caterer_id' => 5
        ],
        [
            'name' => 'Pork Bicol',
            'description' => 'pancetta di maiale con latte di cocco',
            'price' => 13.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'antipasto, piccante',
            'caterer_id' => 1
        ],
        [
            'name' => 'Birra Heineken',
            'description' => '33cl',
            'price' => 4.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'bevande',
            'caterer_id' => 2
        ],
        [
            'name' => 'Coca cola',
            'description' => 'lattina',
            'price' => 2.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'bevande',
            'caterer_id' => 3
        ],
        [
            'name' => 'Grigliata mista',
            'description' => '',
            'price' => 18.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di carne, grill',
            'caterer_id' => 4
        ],
        [
            'name' => 'Spaghetti alla carbonara',
            'description' => '',
            'price' => 6.90,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti',
            'caterer_id' => 5
        ],
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
