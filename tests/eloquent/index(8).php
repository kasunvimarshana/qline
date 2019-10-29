<!-- ----------------------------------------------------------------------------------------- -->
<?php


$modelA = Model::where('code', '=', $code)
    ->where('col_a', '=' , 1)
    ->orderBy(DB::raw('FIELD(layout, "normal", "split", "flip", "double-faced", "") ASC, layout'))

$modelB = Model::where('code', '=', $code)
    ->where('col_b', '=' , 1)
    ->orderBy(DB::raw('FIELD(layout, "normal", "split", "flip", "double-faced", "") ASC, layout'))

$a = DB::table(DB::raw("({$modelA->toSql()}) as a"))
    ->mergeBindings($modelA->getQuery())
    ->selectRaw("a.*");

$b = DB::table(DB::raw("({$modelB->toSql()}) as b"))
    ->mergeBindings($modelB->getQuery())
    ->selectRaw("b.*");

$a->union($b)->get();


?>
<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->
<?php

class User extends Model
{
    public function scopeWithLastLoginDate($query)
    {
        $query->addSubSelect('last_login_at', Login::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->latest()
        );
    }
}

$users = User::withLastLoginDate()->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->
<!-- ----------------------------------------------------------------------------------------- -->
<?php

$books = App\Book::with('author:id,name')->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->