<?php

use Illuminate\Database\Seeder;
use App\Cocktail;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cocktail::insert(
            ['name' =>  'Mcallan 12',
             'ingredients' => '',
             'spirit_id' => 9,
             'category_id' => 4,
             'flavor_id' => 3
            ]);

        Cocktail::insert(
            ['name' =>  'Negroni',
             'ingredients' => 'gin, vermouth, campari',
                'spirit_id' => 1,
             'category_id' => 4,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'Gin and tonic',
                'ingredients' => '',
                'spirit_id' => 1,
             'category_id' => 4,
             'flavor_id' => 10
            ]);
        Cocktail::insert(
            ['name' =>  'Black Russian',
                'ingredients' => 'Vodka, Coffee liqueur',
                'spirit_id' => 4,
             'category_id' => 8,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'White Russian',
                'ingredients' => 'Vodka, Coffee liqueur, Heavy Cream',
                'spirit_id' => 4,
             'category_id' => 8,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'Whiskey ginger',
                'ingredients' => 'whiskey, ginger ale, lime wedge',
                'spirit_id' => 2,
             'category_id' => 4,
             'flavor_id' => 7
            ]);
        Cocktail::insert(
            ['name' =>  'Dirty Shirley',
                'ingredients' => 'Vodka, lemon-lime soda, grenadine',
                'spirit_id' => 4,
             'category_id' => 4,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'Moscow mule',
                'ingredients' => 'vodka, ginger beer, lime juice',
                'spirit_id' => 4,
             'category_id' => 1,
             'flavor_id' => 7
            ]);
        Cocktail::insert(
            ['name' =>  'Last Word',
                'ingredients' => 'gin, lime, chartreuse, maraschino',
                'spirit_id' => 1,
             'category_id' => 1,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'Manhattan',
                'ingredients' => 'whiskey, vermouth, bitters',
                'spirit_id' => 2,
             'category_id' => 3,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Whiskey Old fashioned',
                'ingredients' => 'whiskey, bitter',
                'spirit_id' => 2,
             'category_id' => 3,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'mojito',
                'ingredients' => 'rum, mint, lime juice, sugar, club soda',
                'spirit_id' => 10,
             'category_id' => 1,
             'flavor_id' => 2
            ]);
        Cocktail::insert(
            ['name' =>  'singapore sling',
                'ingredients' => 'gin, brandy, triple sec, Benedictine liqueur, pineapple juice, lime juice, grenadine syrup',
                'spirit_id' => 1,
             'category_id' => 2,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Sazerac',
                'ingredients' => 'whiskey, absinthe, bitters, lemon',
                'spirit_id' => 2,
             'category_id' => 4,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'Vodka Martini',
                'ingredients' => 'vodka, dry vermouth',
                'spirit_id' => 4,
             'category_id' => 6,
             'flavor_id' => 11
            ]);
        Cocktail::insert(
            ['name' =>  'Gin Martini',
                'ingredients' => 'gin, dry vermouth',
                'spirit_id' => 1,
             'category_id' => 4,
             'flavor_id' => 11
            ]);
        Cocktail::insert(
            ['name' =>  'French 75',
                'ingredients' => 'gin, champagne, lemo',
                'spirit_id' => 1,
             'category_id' => 1,
             'flavor_id' => 4
            ]);
        Cocktail::insert(
            ['name' =>  'Gimlet',
                'ingredients' => 'gin, lime, simple syrup',
                'spirit_id' => 1,
             'category_id' => 4,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'Aviation',
                'ingredients' => 'gin, lemon, maraschino, violette',
                'spirit_id' => 1,
             'category_id' => 4,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Dark & Stormy',
                'ingredients' => 'dark rum, ginger beer',
                'spirit_id' => 10,
             'category_id' => 7,
             'flavor_id' => 7
            ]);
        Cocktail::insert(
            ['name' =>  'boulevardier',
                'ingredients' => 'bonded bourbon, torino vermouth, campari',
                'spirit_id' => 3,
             'category_id' => 3,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'calvados flip',
                'ingredients' => 'calvados, benedictine, maple, egg',
                'spirit_id' => 11,
             'category_id' => 5,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'Bee\'s Knees',
                'ingredients' => 'gin, honey, lemon, Angostura bitters',
                'spirit_id' => 1,
             'category_id' => 1,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'white negroni',
                'ingredients' => 'gin, suze, lillet',
                'spirit_id' => 1,
             'category_id' => 6,
             'flavor_id' => 5
            ]);
        Cocktail::insert(
            ['name' =>  'A Study in scarlet',
                'ingredients' => 'gin, rhubarb amaro, wild strawberry jam, lemon, soda',
                'spirit_id' => 1,
             'category_id' => 6,
             'flavor_id' => 2
            ]);
        Cocktail::insert(
            ['name' =>  'Pink lady',
                'ingredients' => 'gin, apple brandy, grenadine, lemon, egg white',
                'spirit_id' => 1,
             'category_id' => 5,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'horse’s neck',
                'ingredients' => 'bourbon, lemon, ginger beer',
                'spirit_id' => 3,
             'category_id' => 6,
             'flavor_id' => 7
            ]);
        Cocktail::insert(
            ['name' =>  'Lion’s Tail',
                'ingredients' => 'bourbon, allspice dram, lime, simple syrup, Angostura bitters',
                'spirit_id' => 3,
             'category_id' => 1,
             'flavor_id' => 9
            ]);
        Cocktail::insert(
            ['name' =>  'paper airplane',
                'ingredients' => 'bourbon, amaro Nonino, Aperol, lemon',
                'spirit_id' => 3,
             'category_id' => 6,
             'flavor_id' => 5
            ]);
        Cocktail::insert([
            'name' =>  'Stone Fence',
            'ingredients' => 'bourbon, Arsenal cider, bitters',
            'spirit_id' => 3,
             'category_id' => 6,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'scorched earth',
                'ingredients' => 'mezcal, Cappelletti amaro, sweet vermouth',
                'spirit_id' => 5,
             'category_id' => 6,
             'flavor_id' => 3
            ]);
        Cocktail::insert(
            ['name' =>  'Salty Dog',
                'ingredients' => 'vodka, grapefruit, salt',
                'spirit_id' => 4,
             'category_id' => 1,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Cosmopolian',
                'ingredients' => 'vodka, triple sec, cranberry, lime',
                'spirit_id' => 4,
             'category_id' => 4,
             'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Bloody Mary',
                'ingredients' => 'vodka, tabasco, tomato, worcestershire sauce',
                'spirit_id' => 4,
             'category_id' => 8,
             'flavor_id' => 8
            ]);
        Cocktail::insert(
            ['name' =>  'Rosemary Lavender',
                'ingredients' => 'gin, lavender, rosemary, lemon',
                'spirit_id' => 1,
             'category_id' => 1,
             'flavor_id' => 10
            ]);

        Cocktail::insert(
            ['name' =>  'Tequila Sunrise',
                'ingredients' => 'champagne, orange juice',
                'spirit_id' => 5,
                'category_id' => 2,
                'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Mescal Negroni',
                'ingredients' => 'mescal, sweet vermouth, campari',
                'spirit_id' => 5,
                'category_id' => 6,
                'flavor_id' => 8
            ]);
        Cocktail::insert(
            ['name' =>  'Paloma',
                'ingredients' => 'tequila, grapefruit, lime juice, sugar, club soda',
                'spirit_id' => 5,
                'category_id' => 1,
                'flavor_id' => 5
            ]);

        Cocktail::insert(
            ['name' =>  'Mimosa',
                'ingredients' => 'champagne, orange juice',
                'spirit_id' => 4,
                'category_id' => 8,
                'flavor_id' => 4
            ]);
        Cocktail::insert(
            ['name' =>  'Pimm\'s Cup' ,
                'ingredients' => '',
                'spirit_id' => 1,
                'category_id' => 8,
                'flavor_id' => 1
            ]);
        Cocktail::insert(
            ['name' =>  'Bellini',
                'ingredients' => 'sparkling wine, peach purée',
                'spirit_id' => 4,
                'category_id' => 8,
                'flavor_id' => 4
            ]);

    }
}
