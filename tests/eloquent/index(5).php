<!-- ----------------------------------------------------------------------------------------- -->
<?php

$table1 = DB::table('table1');

$table2 = DB::table('table2');

$final = $table1->union($table2)->limit(10);

//The above won't give you a result as expected, it will apply limit only on table1

//Instead

$final = $table1->union($table2);

$querySql = $final->toSql();
 
$all_content_query = DB::table(DB::raw("($querySql) as a"))->mergeBindings($final);
 
//Now you can do anything u like:
 
$all_content_query->take(10)->skip(10)->get(); 
 
// ** Note: This is on Laravel 4.1

//Or... Create a VIEW

/*
CREATE VIEW some_view AS
(select * from `table1`)
union all
(select * from `table2`)

select * from some_view order by created_at limit 3
*/

?>
<!-- ----------------------------------------------------------------------------------------- -->