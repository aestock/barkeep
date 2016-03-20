<?php

namespace App\Http\Controllers;

use App\Cocktail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response;

class DealersChoiceController extends Controller
{
    /**
     * Example :
     * {
     *   "choices": [{
     *      "type": "categories",
     *      "name_id": 8,
     *      "wanted": 1
     *   }, {
     *      "type": "flavors",
     *       "name_id": 2,
     *      "wanted": 0
     *   }, {
     *      "type": "flavors",
     *      "name_id": 1,
     *      "wanted": 1
     *   }, {
     *      "type": "spirits",
     *      "name_id": 1,
     *      "wanted": 1
     *   }]
     * }
     *
     * @return mixed
     */
    public function getBartender()
    {
        $choices = Input::get('choices');

        $i = 0;

        do{
            $query = Cocktail::select();

            //always
            $query = $this->parseSpirit($choices, $query);

            //the first and second time
            if($i < 2) $query = $this->parseFlavors($choices, $query);

            //only the first time
            if($i == 0)$query = $this->parseCategory($choices, $query);

            $query->with(['bartenders' => function($q) {
                $q->with('restaurant');
            }]);

            $cocktails = $query->get();

            $i++;

        }while($cocktails->count() <= 0);

        $cocktail = $this->getCocktail($cocktails);



        return response()->json(['cocktail' => $cocktail], 200);
    }

    private function parseSpirit($choices, $query){

        foreach($choices as $choice){
            $type = $choice['type'];
            $id = $choice['name_id'];
            $wanted = $choice['wanted'];

            switch($type) {
                case $type == 'spirits' :
                    if($wanted) $query->where('spirit_id', $id);
                    else $query->where('spirit_id', '<>', $id);
                    break;
            }
        }

        return $query;

    }

    private function parseCategory($choices, $query){

        foreach($choices as $choice){
            $type = $choice['type'];
            $id = $choice['name_id'];
            $wanted = $choice['wanted'];
            $arr = [];

            switch($type) {
                case $type == 'categories' :
                    if($wanted) $query->where('category_id', $id);
                    else $query->where('category_id', '<>', $id);
                    break;
            }
        }

        return $query;

    }

    private function parseFlavors($choices, $query){

        foreach($choices as $choice){
            $type = $choice['type'];
            $id = $choice['name_id'];
            $wanted = $choice['wanted'];
            $arr = [];

            switch($type) {
                case $type == 'flavors' :
                    if($wanted) $query->where('category_id', $id);
                    else $query->where('category_id', '<>', $id);
                    break;
            }
        }

        return $query;

    }

    private function getCocktail($cocktails){

        return $cocktails[Mt_rand(0, count($cocktails)-1)];

    }


}
