<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

$users = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('sizes')
            ->crossJoin('colours')
            ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')
        ->join('contacts', function ($join) {
            $join->on('users.id', '=', 'contacts.user_id')->orOn(...);
        })
        ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')
        ->join('contacts', function ($join) {
            $join->on('users.id', '=', 'contacts.user_id')
                 ->where('contacts.user_id', '>', 5);
        })
        ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Sub-Query Joins
$latestPosts = DB::table('posts')
                   ->select('user_id', DB::raw('MAX(created_at) as last_post_created_at'))
                   ->where('is_published', true)
                   ->groupBy('user_id');

$users = DB::table('users')
        ->joinSub($latestPosts, 'latest_posts', function ($join) {
            $join->on('users.id', '=', 'latest_posts.user_id');
        })->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Unions
$first = DB::table('users')
            ->whereNull('first_name');

$users = DB::table('users')
            ->whereNull('last_name')
            ->union($first)
            ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                    ->whereIn('id', [1, 2, 3])
                    ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                    ->whereNotIn('id', [1, 2, 3])
                    ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                    ->whereNull('updated_at')
                    ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                    ->whereNotNull('updated_at')
                    ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                ->whereDate('created_at', '2016-12-31')
                ->get();

$users = DB::table('users')
                ->whereMonth('created_at', '12')
                ->get();

$users = DB::table('users')
                ->whereDay('created_at', '31')
                ->get();

$users = DB::table('users')
                ->whereYear('created_at', '2016')
                ->get();

$users = DB::table('users')
                ->whereTime('created_at', '=', '11:20:45')
                ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                ->whereColumn('first_name', 'last_name')
                ->get();

$users = DB::table('users')
                ->whereColumn('updated_at', '>', 'created_at')
                ->get();

$users = DB::table('users')
                ->whereColumn([
                    ['first_name', '=', 'last_name'],
                    ['updated_at', '>', 'created_at']
                ])->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Parameter Grouping
DB::table('users')
            ->where('name', '=', 'John')
            ->where(function ($query) {
                $query->where('votes', '>', 100)
                      ->orWhere('title', '=', 'Admin');
            })
            ->get();

//select * from users where name = 'John' and (votes > 100 or title = 'Admin')

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Where Exists Clauses
DB::table('users')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('orders')
                      ->whereRaw('orders.user_id = users.id');
            })
            ->get();

/*
select * from users
where exists (
    select 1 from orders where orders.user_id = users.id
)
*/

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')
                ->groupBy('account_id')
                ->having('account_id', '>', 100)
                ->get();

$users = DB::table('users')
                ->groupBy('first_name', 'status')
                ->having('account_id', '>', 100)
                ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$users = DB::table('users')->skip(10)->take(5)->get();

$users = DB::table('users')
                ->offset(10)
                ->limit(5)
                ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$role = $request->input('role');

$users = DB::table('users')
                ->when($role, function ($query, $role) {
                    return $query->where('role_id', $role);
                })
                ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

$sortBy = null;

$users = DB::table('users')
                ->when($sortBy, function ($query, $sortBy) {
                    return $query->orderBy($sortBy);
                }, function ($query) {
                    return $query->orderBy('name');
                })
                ->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
);

DB::table('users')->insert([
    ['email' => 'taylor@example.com', 'votes' => 0],
    ['email' => 'dayle@example.com', 'votes' => 0]
]);

$id = DB::table('users')->insertGetId(
    ['email' => 'john@example.com', 'votes' => 0]
);

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')
    ->updateOrInsert(
        ['email' => 'john@example.com', 'name' => 'John'],
        ['votes' => '2']
    );

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')->increment('votes');

DB::table('users')->increment('votes', 5);

DB::table('users')->decrement('votes');

DB::table('users')->decrement('votes', 5);

DB::table('users')->increment('votes', 1, ['name' => 'John']);

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

DB::table('users')->delete();

DB::table('users')->where('votes', '>', 100)->delete();

DB::table('users')->truncate();

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------------- -->
<?php

//Pessimistic Locking
/*
The query builder also includes a few functions to help you do "pessimistic locking" on your select statements. To run the statement with a "shared lock", you may use the sharedLock method on a query. A shared lock prevents the selected rows from being modified until your transaction commits:
*/

DB::table('users')->where('votes', '>', 100)->sharedLock()->get();

/*
Alternatively, you may use the lockForUpdate method. A "for update" lock prevents the rows from being modified or from being selected with another shared lock:
*/

DB::table('users')->where('votes', '>', 100)->lockForUpdate()->get();

?>
<!-- ----------------------------------------------------------------------------------------- -->