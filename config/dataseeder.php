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
        ],
        [
            "receiver" => "Luca",
            "phone_number" => "3448496195",
            "status" => "Confermato",
            "notes" => "Bussare 3 volte di fila per favore",
            "total_price" => 18.2,
            "address" => "Via Veronese Guarino, 10",
        ],
        [
            "receiver" => "Marta",
            "phone_number" => "8987089354",
            "status" => "Confermato",
            "notes" => "Pulitevi le scarpe prima di entrare",
            "total_price" => 15,
            "address" => "Via Tito Livio, 3",
        ],
        [
            "receiver" => "Erika",
            "phone_number" => "1881621025",
            "status" => "Confermato",
            "notes" => "Non mandate Filiberto a fare la consegna, è un maleducato",
            "total_price" => 6.9,
            "address" => "Via Cadore, 10",
        ],
        [
            "receiver" => "Luana",
            "phone_number" => "7387907535",
            "status" => "Confermato",
            "notes" => "Ho fame, muovetevi",
            "total_price" => 17.5,
            "address" => "Via K.Adenauer, 3",
        ]
    ],
    "dishes" => [
        [
            'name' => 'Margherita',
            'description' => 'Pomodoro, mozzarella, basilico',
            'price' => 7.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'pizza, pizza rossa'
        ],
        [
            'name' => 'Ravioli al vapore',
            'description' => '',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti'
        ],
        [
            'name' => 'Branzino all\'isolana',
            'description' => 'pesce al forno con pomodorini e olive',
            'price' => 17.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di pesce'
        ],
        [
            'name' => 'Hamburger Classico',
            'description' => 'Hamburger di chianina con pomodoro a fette, lattuga, maionese',
            'price' => 13.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'hamburger'
        ],
        [
            'name' => 'Involtini primavera',
            'description' => 'verza, carote, zucchine',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'antipasti, vegetariano'
        ],
        [
            'name' => 'Tiramisu',
            'description' => '',
            'price' => 6.00,
            'visible' => false,
            'image' => '',
            'tipologies' => 'dolci e dessert'
        ],
        [
            'name' => 'Cheung Fun con Manzo',
            'description' => 'rotolo di vermicelli al vapore cantonese',
            'price' => 8.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di carne'
        ],
        [
            'name' => 'Patatine fritte',
            'description' => '',
            'price' => 5.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'snack, contorni, prodotto surgelato'
        ],
        [
            'name' => 'Capricciosa',
            'description' => 'pomodoro, mozzarella di Bufala, carciofi, funghi, cotto e olive',
            'price' => 13.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'pizza, pizza rossa'
        ],
        [
            'name' => 'Pancit Bihon',
            'description' => 'tipico piatto della cucina filippina con spaghetit di riso, maiale e gamberi',
            'price' => 7.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti'
        ],
        [
            'name' => 'Pork Bicol',
            'description' => 'pancetta di maiale con latte di cocco',
            'price' => 13.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'antipasto, piccante'
        ],
        [
            'name' => 'Birra Heineken',
            'description' => '33cl',
            'price' => 4.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'bevande'
        ],
        [
            'name' => 'Coca cola',
            'description' => 'lattina',
            'price' => 2.50,
            'visible' => true,
            'image' => '',
            'tipologies' => 'bevande'
        ],
        [
            'name' => 'Grigliata mista',
            'description' => '',
            'price' => 18.00,
            'visible' => true,
            'image' => '',
            'tipologies' => 'secondi, secondi di carne, grill'
        ],
        [
            'name' => 'Spaghetti alla carbonara',
            'description' => '',
            'price' => 6.90,
            'visible' => true,
            'image' => '',
            'tipologies' => 'primi piatti'
        ],
    ],

    'caterers' => [
        [
            'name' => 'Pizzeria Roma',
            'address' => 'Via Roma, 1',
            'image' => 'https://i.pinimg.com/564x/ae/5e/24/ae5e2403c0396bb3c16539f3879be22d.jpg',
            'phone_number' => '02 7056 9901'
        ],
        [
            'name' => 'Sushi Lab',
            'address' => 'Via Milano, 2',
            'image' => 'https://i.pinimg.com/564x/cc/8c/82/cc8c82057916ac5cb8ee7122e021e266.jpg',
            'phone_number' => '02 2193 0011'
        ],
        [
            'name' => 'Hong Kong',
            'address' => 'Via Venezia, 3',
            'image' => 'https://i.pinimg.com/564x/6d/be/82/6dbe82e9682e415915a5d9e7fb0e1c7b.jpg',
            'phone_number' => '02 9821 6634'
        ],
        [
            'name' => 'La Brace Food Experience',
            'address' => 'Via Firenze, 4',
            'image' => 'https://i.pinimg.com/564x/63/5e/3d/635e3d0fbec3931fba332535a6671a6a.jpg',
            'phone_number' => '02 0034 5671 '
        ],
        [
            'name' => 'Chiquito',
            'address' => 'Via Napoli, 5',
            'image' => 'https://i.pinimg.com/564x/86/bd/3c/86bd3c1bf93620167ab1485be959d3f2.jpg',
            'phone_number' => '02 4768 1121'
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
