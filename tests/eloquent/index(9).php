<!-- ------------------------------------------------------------------------------------- -->
<?php

public function employees()
{
    return $this
        ->hasMany('Employee')
        ->select(['*', DB::raw('IF(`sortOrder` IS NOT NULL, `sortOrder`, 1000000) `sortOrder`')])
        ->orderBy('sortOrder', 'asc');
}

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->select('col1','col2')
->select(array('col1','col2'))
->select(DB::raw('businesses.*, COUNT(reviews.id) as no_of_ratings, IFNULL(sum(reviews.score),0) as rating'))  
->addSelect('col3','col4')
->distinct()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->from('table')
->from(DB::raw('table, (select @n :=0) dummy'))
->from(DB::raw("({$subQuery->toSql()}) T ")->mergeBindings($subQuery->getQuery())

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->from('table')
->from(DB::raw('table, (select @n :=0) dummy'))
->from(DB::raw("({$subQuery->toSql()}) T ")->mergeBindings($subQuery->getQuery())

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

       ->where('column','value')
->where('column','LIKE','%'.$value.'%')
->where(function ($query) {
  $query->where('a', '=', 1)
      ->orWhere('b', '=', 1);
})
->orWhere('column','!=', 'value')
->whereRaw('age > ? and votes = 100', array(25))

->whereRaw(DB::raw("id in (select city_id from addresses GROUP BY addresses.city_id)"))

->whereExists(function($query){
  $query->select(DB::raw(1))
      ->from('business_language')
      ->whereRaw('business_language.language_id = languages.id')
      ->groupBy('business_language.language_id')
      ->havingRaw("COUNT(*) > 0");
})
->orWhereExists()
->whereNotExists()
->orWhereNotExists()

->whereIn('column',[1,2,3])
->orWhereIn()
->whereNotIn('id', function($query){
  $query->select('city_id')
  ->from('addresses')
  ->groupBy('addresses.city_id');
})
->whereNotIn()
->orWhereNotIn

->whereNull('column')
->orWhereNull('column')
->whereNotNull('column')
->orWhereNotNull('column')

->whereDay()
->whereMonth('column', '=', 1)
->whereYear('column', '>', 2000)
->whereDate('column', '>', '2000-01-01')

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->join('business_category','business_category.business_id','=','businesses.id')
->leftJoin('reviews','reviews.business_id', '=', 'businesses.id')
->join('business_category',function($join) use($cats) {
  $join->on('business_category.business_id', '=', 'businesses.id')
  ->on('business_category.id', '=', $cats, 'and', true);
})
->join(DB::raw('(SELECT *, ROUND(AVG(rating),2) avg FROM reviews WHERE rating!=0 GROUP BY item_id ) T' ), function($join){
  $join->on('genre_relation.movie_id', '=', 'T.id')
})
       
?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->with('table1','table2')
->with(array('table1','table2','table1.nestedtable3'))
->with(array('posts' => function($query) use($name){
  $query->where('title', 'like', '%'.$name.'%')
    ->orderBy('created_at', 'desc');
}))

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->groupBy('state_id','locality')
->havingRaw('count > 1 ')
->having('items.name','LIKE',"%$keyword%")
->orHavingRaw('brand LIKE ?',array("%$keyword%"))

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->remember($minutes)
->rememberForever()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->take(10)
->limit(10)
->skip(10)
->offset(10)
->forPage($pageNo, $perPage)

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->orderBy('id','DESC')
->orderBy(DB::raw('RAND()'))
->orderByRaw('type = ? , type = ? ', array('published','draft'))
->latest()
->latest('column')
->oldest()
->oldest('column')

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->insert(array('email' => 'john@example.com', 'votes' => 0))
->insert(array(   
  array('email' => 'taylor@example.com', 'votes' => 0),
  array('email' => 'dayle@example.com', 'votes' => 0)
))
->insertGetId(array('email' => 'john@example.com', 'votes' => 0))

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->update(array('email' => 'john@example.com'))
->update(array('column' => DB::raw('NULL')))
->increment('column')
->decrement('column')
->touch()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->delete()
->forceDelete()
->destroy($ids)
->roles()->detach()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->find($id)
->find($id, array('col1','col2'))
->findOrFail($id)
->findMany($ids, $columns)
->first(array('col1','col2'))
->firstOrFail()
->all()
->get()
->get(array('col1','col2')) 
->getFresh()
->getCached()
->chunk(1000, function($rows){
  $rows->each(function($row){

  });
})
->lists('column')
->lists('column','id')
->lists('column')->implode('column', ',')
->pluck('column') 
->value('column') 

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->paginate(10)
->paginate(10, array('col1','col2'))
->simplePaginate(10)
->getPaginationCount() 

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->count()
->count('column')
->count(DB::raw('distinct column'))
->max('rating')
->min('rating')
->sum('rating')
->avg('rating')
->aggregate('sum', array('rating'))

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->toSql()
->exists()
->fresh()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

->toArray()
->toJson()
->relationsToArray()
->implode('column', ',')
->isDirty()
->getDirty()

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

DB::enableQueryLog();
DB::getQueryLog();
Model::where()->toSql();

?>
<!-- ------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------- -->
<?php

\App\Shirt::with('size')
->select('shirts.*', \DB::raw('(SELECT sort FROM sizes WHERE shirts.size_id = sizes.id ) as sort'))
->orderBy('sort')
->get(); 

?>
<!-- ------------------------------------------------------------------------------------- -->