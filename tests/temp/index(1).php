<!-- ----------------------------------------------------------------------------------- -->
<script>
var array = [1, 2, 3];

localStorage.setItem("array", JSON.stringify(array));
array = JSON.parse(localStorage.getItem("array"));


console.log(typeof array); //object
console.log(array); //[1, 2, 3]
</script>
<!-- ----------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------- -->
<script>
// Get the existing data
var existing = localStorage.getItem('myFavoriteSandwich');
// If no existing data, create an array
// Otherwise, convert the localStorage string to an array
existing = existing ? existing.split(',') : [];
// Add new data to localStorage Array
existing.push('tuna');
// Save back to localStorage
localStorage.setItem('myFavoriteSandwich', existing.toString());
</script>
<!-- ----------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------- -->
<script>
// Get the existing data
var existing = localStorage.getItem('myLunch');
// If no existing data, create an array
// Otherwise, convert the localStorage string to an array
existing = existing ? JSON.parse(existing) : {};
// Add new data to localStorage Array
existing['drink'] = 'soda';
// Save back to localStorage
localStorage.setItem('myLunch', JSON.stringify(existing));
</script>
<!-- ----------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------- -->
<script>
/**
 * Add an item to a localStorage() array
 * @param {String} name  The localStorage() key
 * @param {String} value The localStorage() value
 */
var addToLocalStorageArray = function (name, value) {
	// Get the existing data
	var existing = localStorage.getItem(name);
	// If no existing data, create an array
	// Otherwise, convert the localStorage string to an array
	existing = existing ? existing.split(',') : [];
	// Add new data to localStorage Array
	existing.push(value);
	// Save back to localStorage
	localStorage.setItem(name, existing.toString());
};
</script>
<!-- ----------------------------------------------------------------------------------- -->

<!-- ----------------------------------------------------------------------------------- -->
<script>
/**
 * Add an item to a localStorage() object
 * @param {String} name  The localStorage() key
 * @param {String} key   The localStorage() value object key
 * @param {String} value The localStorage() value object value
 */
var addToLocalStorageObject = function (name, key, value) {
	// Get the existing data
	var existing = localStorage.getItem(name);
	// If no existing data, create an array
	// Otherwise, convert the localStorage string to an array
	existing = existing ? JSON.parse(existing) : {};
	// Add new data to localStorage Array
	existing[key] = value;
	// Save back to localStorage
	localStorage.setItem(name, JSON.stringify(existing));
};
</script>
<!-- ----------------------------------------------------------------------------------- -->