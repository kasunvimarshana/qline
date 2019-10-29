<!-- ----------------------------------------------------------------------------------------- -->
<?php


public function index(Request $request)
    {
        //original collection
        $collection1 = collect([
            'planet' => 'Earth',
            'satellite' => 'Ganymede'
        ]);
        
        //add-on collection
        $collection2 = collect([
            'planet' => 'Mars',
            'star' => 'Sun'
        ]);

        $union = $collection1->union($collection2);
        
        dd($union->toArray());
        
        return view('tasks.index', [
            'tasks' => $collection,
        ]);
    }


?>
<!-- ----------------------------------------------------------------------------------------- -->